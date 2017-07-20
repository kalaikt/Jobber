<?php 
    class TrainingsController extends AppController {
        public $helpers = array('Html', 'Form');

        public function index() {
            //$this->set('homes', $this->Home->find('all', array( 'order' => array('Home.id ASC'))));
            //$this->set('videos', $this->Videos->videoData('all'));
        	$this->set( 'say',$this->params['pass']);
        }

        public function linuxintro(){
        	//nothing yet
        }

        public function one_on_one(){
        	//nothing yet
        }
        
        public function linuxbasics(){
        	//nothing yet
        }
        
        public function linuxproficiency(){
        	
        }
        
        public function bootcamp(){
        	
        }
        
        public function certification(){
        	
        }
        
		public function bootcamp_enrollment(){
			$this->set( 'userid', 0);
		}
        
        public function register(){

            if( isset( $this->params['pass']['0']))
        	    if( $this->params['pass']['0'] == 'success')
        	        $this->set('lj_msg', "Thanks for registering, We will be in touch with you soon!");

        	if( $this->request->is('post')){
        		
                $lj_data = $this->request->data;
                $lj_classcode = $lj_data['Training']['classcode'];
        		
        		$this->Training->set($this->request->data);
        		
        		if ($this->Training->validates()) {
                    $this->request->data['created'] = date('Y-m-d');        	    
        		    if( $this->Training->save( $this->request->data)){
						if(!empty($this->request->data['Training']['email'])){
							App::uses('AppController', 'Controller');
							App::uses('CakeEmail', 'Network/Email');
							$Email = new CakeEmail();
							$Email->config('default');
							$Email->emailFormat('html');
							$Email->to($this->request->data['Training']['email']);
							$Email->subject('Registration for Linux Training Complete');
							$Email->send('Hello '.$this->request->data['Training']['fullname'].', This is a confirmation that you have successfully registered for the next Linux training session. If you wish to receive your training materials early, <a href=http://www.linuxjobber.com/services/enrollment>click here</a> to complete your enrollment. You will receive details about location and schedule in a new email. Wishing you success in your endeavour, Linuxjobber Team.');
						}
						
        			    $this->Session->setFlash('Thanks, you are now registered.');
                                    if( $lj_classcode == 0)
        			        $this->redirect('/services/training_enrollment/?program=EX200&price=399'); 
                                    elseif( $lj_classcode == 1)
        			        $this->redirect('/services/training_enrollment/?program=Classes&price=1199'); 
                                    elseif( $lj_classcode == 5)
        			        $this->redirect('/services/enrollment'); 
                                    elseif( $lj_classcode == 6)
        			        $this->redirect('/services/enrollment'); 
                                    else
        			        $this->redirect('/trainings/register/success'); 
                                     
        		    } else {
        			    $this->Session->setFlash('Unable to update your post.');
        		    }
        		}else{
        			/* echo "validation failed"; */
        		}
        	}
        }

        public function upcoming(){
        }
        
    }
?>
