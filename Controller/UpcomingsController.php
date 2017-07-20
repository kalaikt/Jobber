<?php 
    class UpcomingsController extends AppController {
        public $helpers = array('Html', 'Form');

        public function index() {
            //$this->set('homes', $this->Home->find('all', array( 'order' => array('Home.id ASC'))));
            //$this->set('videos', $this->Videos->videoData('all'));
        	$this->set( 'say',$this->params['pass']);
        }

        
		public function bootcamp_enrollment(){
			$this->set( 'userid', 0);
		}
        
        public function register(){
                        $lj_data = $this->request->data;
                        $lj_classcode = $lj_data['Training']['classcode'];

//            if( isset( $this->params['pass']['0']))
//        	    if( $this->params['pass']['0'] == 'success')
//        	        //$this->set('lj_msg', "Thanks for registering, see you soon!");

        	if( $this->request->is('post')){
        		
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
        			        $this->redirect('/services/training_enrollment/?program=Coaching&price=799'); 
                                    elseif( $lj_classcode == 1)
        			        $this->redirect('/services/enrollment'); 
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


        public function bash101(){
        }

        public function aws101(){
        }
        
        public function puppet101(){
        }

        public function interviewpreparation(){
        }

        public function fs101(){
        }
    }
?>
