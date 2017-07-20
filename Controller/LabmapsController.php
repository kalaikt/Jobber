<?php 
    class LabmapsController extends AppController {
/*
    	public $components = array(
    			'Paginator',
    			'DebugKit.Toolbar',
    			'Session',
    			'Auth' => array(
    					'loginRedirect' => array('controller' => 'forums', 'action' => 'index'),
    					'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
    					'authError' => 'You must be logged in to view this page.',
    					'loginError' => 'Invalid Username or Password entered, please try again.'
   
    			));
 */
    	
    			  	
    	public function add($topicId=null) {
    		if ($this->request->is('post')) {

    			//$date = $date = date('Y-m-d h:i:s a', time());
    			//$this->request->data['Post']['created'] = $date;
    			
    			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
    			 
    			if ($this->Post->save($this->request->data)) {
    				$this->Session->setFlash(__('Post has been created'));
    				$this->redirect(array('controller'=>'topics','action'=>'view',$this->request->data['Post']['topic_id']));
    			}
    			 
    		} else {
    			if (!$this->Post->Topic->exists($topicId)) {
    				throw new NotFoundException(__('Invalid topic'));
    			}
    			 
    			$this->Post->Topic->recursive = -1;
    			$topic = $this->Post->Topic->read(null,$topicId);
    			 
    			$this->Post->Forum->recursive = -1;
    			$forum = $this->Post->Forum->read(null,$topic['Topic']['forum_id']);
    			 
    			$this->set('topic',$topic);
    			$this->set('forum',$forum);
    		}
    	}
    }
?>
