<?php 
    class CloudController extends AppController {
    	   
    	public $uses = array('Tutorials','Labprofiles','Users','Labmaps','Videos','Video','Labprofile');
    	public $components = array(
    			'DebugKit.Toolbar',
    			'Session',
    			'Auth' => array(
    					'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
    					'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
    					'authError' => 'You must be logged in to view this page.',
    					'loginError' => 'Invalid Username or Password entered, please try again.'
    	
    			)); 

    	
    	public function isAuthorized($user) {
    		return true;
    	}
    	
    	public function beforeFilter() {
    		$this->Auth->allow('index', 'video', 'lecture', 'basics_of_linux_lectures','interviewprep', 'bootcampvideos','products','linuxstart','linuxsales', 'success', 'cancel', 'video_success', 'notify', 'video_notify', 'enroll_success','linuxvideos','videopayment');
    	}
    	
        public $helpers = array('Html', 'Form', 'Video');


        public function index() {
			
		}
		public function video() {
			
		}
		
    }
?>
