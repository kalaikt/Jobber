<?php 
    class JobsController extends AppController {
        public $helpers = array('Html', 'Form');

        public function index() {
            //$this->set('homes', $this->Home->find('all', array( 'order' => array('Home.id ASC'))));
            //$this->set('videos', $this->Videos->videoData('all'));
        	$this->set( 'say',$this->params['pass']);
        }

        
        public function applysuccess(){
        }
        
        public function apply(){

            if( isset( $this->params['pass']['0']))
          	   $this->set('classcode', $this->params['pass']['0']);
//        	        //$this->set('lj_msg', "Thanks for registering, see you soon!");

        	if( $this->request->is('post')){
                $lj_data = $this->request->data;
                $lj_classcode = $lj_data['Job']['classcode'];
        		
        		$this->Job->set($this->request->data);
        		
        		if ($this->Job->validates()) {
                    $this->request->data['created'] = date('Y-m-d');        	    
        		    if( $this->Job->save( $this->request->data)){
						if(!empty($this->request->data['Job']['email'])){
							App::uses('AppController', 'Controller');
							App::uses('CakeEmail', 'Network/Email');
							$Email = new CakeEmail();
							$Email->config('default');
							$Email->emailFormat('html');
							$Email->to($this->request->data['Job']['email']);
							$Email->subject('Confirmation');
							$Email->send('Hello '.$this->request->data['Job']['fname'].', This is a confirmation that your application has been received. Thank you.');
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
        			        $this->redirect('/jobs/applysuccess'); 
                                     
        		    } else {
        			    $this->Session->setFlash('Unable to update your post.');
        		    }
        		}else{
        			/* echo "validation failed"; */
        		}
        	}
        }
        
    


        public function generaldiscussion(){

            if( isset( $this->params['pass']['0']))
          	   $this->set('classcode', $this->params['pass']['0']);
//        	        //$this->set('lj_msg', "Thanks for registering, see you soon!");

        	if( $this->request->is('post')){
                $lj_data = $this->request->data;
                $lj_classcode = $lj_data['Job']['classcode'];
        		
        		$this->Job->set($this->request->data);
        		
        		if ($this->Job->validates()) {
                    $this->request->data['created'] = date('Y-m-d');        	    
        		    if( $this->Job->save( $this->request->data)){
						if(!empty($this->request->data['Job']['email'])){
							App::uses('AppController', 'Controller');
							App::uses('CakeEmail', 'Network/Email');
							$Email = new CakeEmail();
							$Email->config('default');
							$Email->emailFormat('html');
							$Email->to($this->request->data['Job']['email']);
							$Email->subject('Confirmation');
							$Email->send('Hello '.$this->request->data['Job']['fname'].', This is a confirmation that your registration is complete. Thank you.');
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
        			        $this->redirect('/jobs/applysuccess'); 
                                     
        		    } else {
        			    $this->Session->setFlash('Unable to update your post.');
        		    }
        		}else{
        			/* echo "validation failed"; */
        		}
        	}
        }
        
    }



?>
