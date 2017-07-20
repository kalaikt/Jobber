<?php 
    class ServicesController extends AppController {
        public $helpers = array('Html', 'Form');
		/*public $uses = array('Users');
		public $components = array(
    			'DebugKit.Toolbar',
    			'Session',
    			'Auth' => array(
    					'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
    					'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
    					'authError' => 'You must be logged in to view this page.',
    					'loginError' => 'Invalid Username or Password entered, please try again.'
    	
    			));*/

        public function index() {
            //$this->set('homes', $this->Home->find('all', array( 'order' => array('Home.id ASC'))));
            //$this->set('videos', $this->Videos->videoData('all'));
        	$this->set( 'say',$this->params['pass']);
        }
		/*public function beforeFilter() {
    		$this->Auth->allow('index', 'trainer', 'trainee','recruiter');
    	}*/
        
        public function homepage(){
        	//nothing yet
        }
        
        public function trainee(){
        	
        }
        
        public function trainer(){
        	
        }
        
        public function companies(){
        	
        }
        
        public function jobpay(){
        	
        }
        
        public function onlinetraining() {
        
        }
		
		public function training_enrollment() {
			$this->set( 'userid', 0);
		}
        
        public function jobplacement(){
        	
        }

        public function resumewriting(){
        	 
        }
		public function enrollment(){
			$this->set( 'userid', 0);
		}
        
    }
?>
