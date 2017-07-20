<?php 
    class QuestionsController extends AppController {

    	public $components = array(
    			'DebugKit.Toolbar',
    			'Session',
    			'Auth' => array(
    					'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
    					'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
    					'authError' => 'You must be logged in to view this page.',
    					'authorize' => array('Controller'),
    					'loginError' => 'Invalid Username or Password entered, please try again.'
    	
    			));
    	
    	public function isAuthorized($user) {
    		return true;
    	}
    	
    	
    	public function beforeFilter() {
    		parent::beforeFilter();
    		$this->Auth->allow('index');
    		//    }
    	}
    	
        public $helpers = array('Html', 'Form');

        public function contactadmin(){
        	 
        }

        public function index() {
        	$this->set('questions', $this->Question->find('all', array( 'order' => array('Question.id ASC'))));
            
            //$this->set('videos', $this->Videos->videoData('all'));
        }

        public function exam() {
        	$this->isStudent();
        	$this->canViewExamLab();
        	
        	if( isset( $this->request['pass'][0])){
        		$id = $this->request['pass'][0];
            }else {
                $id = 1;
            }
            
            $question = $this->Question->find('all', array( 
            		                                                    'order' => array('Question.id ASC'),
            		                                                    'conditions' => array('Question.id' => $id)
            		                                                   )
            		                                     );
            $next_id = $id + 1;
            $previous_id = $id - 1;
            
            $next_question = $this->Question->find('all', array( 
            		                                                    'order' => array('Question.id ASC'),
            		                                                    'conditions' => array('Question.id' => $next_id)
            		                                                   )
            		                                     );
            
            $this->set('id', $id);
            $this->set('question', $question);
            $this->set('next_question', $next_question);
            
        }

        public function practice($id = null) {
        	$this->isStudent();
        	
            if (!$id) {
                throw new NotFoundException(__('Invalid post'));
            }

            $this->set('questions', $this->Question->find('all', array( 
            		                                                    'order' => array('Question.id ASC'),
            		                                                    'conditions' => array('Question.home_id' => $id)
            		                                                   )
            		                                     )
            		  );
            
        }
        
        public function prerequisite( $id = null){
        	$this->isStudent();
        	
        	if (!$id) {
        		throw new NotFoundException(__('Invalid post'));
        	}
        	
        	$this->set('prerequisite', $this->Question->find('first', array( 'conditions' => array ('Question.id' => $id))));
        	$this->set('advance', $this->Question->find('first', array( 'conditions' => array ('Question.prerequisite_id' => $id))));
        	 
        }
        
        public function isStudent(){
        	if ($this->Auth->user('role') <= '5'){
        	}else{
        		$this->redirect(array('action'=>'contactadmin'));
        	}
        }
                
        public function canViewExamLab(){
        	if ($this->Auth->user('role') <= '3'){
        	}else{
        		$this->redirect(array('action'=>'contactadmin'));
        	}
        }
    }
?>
