<?php 
    class ForumsController extends AppController {
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

    	public function isAuthorized($user) {
    		return true;
    	}
    	
        public $helpers = array('Html', 'Form');

        //public $components = array('Paginator');
         
        public function beforeFilter() {
        	$this->Auth->allow();
        }
         
        public function index() {
        	$this->Paginator->settings['contain'] = array('Topic', 'Post'=>array('User','Topic'));
    		//$this->Paginator->settings['order'] = array('Topic.id'=>'DESC');
    		
        	$this->set('forums', $this->Paginator->paginate());
        }
    }
?>
