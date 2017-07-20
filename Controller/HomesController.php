<?php 
    class HomesController extends AppController {
        public $helpers = array('Html', 'Form');

        public function index() {
            $this->set('homes', $this->Home->find('all', array( 'order' => array('Home.id ASC'))));
            //$this->set('videos', $this->Videos->videoData('all'));
        }
        
        public function homepage(){
        	//nothing yet
        }
        
    }
?>
