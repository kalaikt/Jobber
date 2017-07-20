<?php 
    class CompanysController extends AppController {
        public $helpers = array('Html', 'Form');

        public function index() {
            //$this->set('homes', $this->Home->find('all', array( 'order' => array('Home.id ASC'))));
            //$this->set('videos', $this->Videos->videoData('all'));
        	$this->set( 'say',$this->params['pass']);
        }
        
        public function aboutus(){
        	//nothing yet
        }
        
        public function policy() {
        
        }

        public function location(){
        	//nothing yet
        }

        public function jobs(){
        	//nothing yet
        }
    }
?>
