<?php 
    class ProsController extends AppController {
 
        public $uses = array('Pro','Pro_applicant','Pro_reference');
        
        public $helpers = array('Html', 'Form');

        public function index() {
        	$this->set( 'say',$this->params['pass']);
        }

        public function certification(){
        	
        }
        
        public function register1(){
            $cecho = $this->Pro_applicant->find('all');	
            $this->request->data['id']=2;

            ////print all quesries to screen for debugging
            //$log = $this->Pro->getDataSource()->getLog(false, false);
            //debug($log);

            $this->set('pro_info',$cecho);

            if( $this->request->is('post')){

                $this->Pro_applicant->set($this->request->data);

                //if ($this->Pro_applicant->validates()) {


       	            if( $this->Pro_applicant->save( $this->request->data)){
        		$this->redirect('/pros/register2/pro_applicant_id/'.$this->Pro_applicant->getInsertID()); 
                        //echo "The last ID is: " . $this->Pro_applicant->getInsertID();
                    }
                    ////print all quesries to screen for debugging
                    //$log = $this->Pro_applicant->getDataSource('Pro_applicant')->getLog(false, false);
                    //debug($log);
                //}
            }
            //echo "The last ID is: " . $this->Pro_applicant->getInsertID();
        }

        public function feedback(){

        }
        
        public function register2(){
            //echo " <pre>".  $this->request->params['pass'][1]." </pre>";	
            if( $this->request->is('post')){

                $this->Pro_reference->set($this->request->data);
                $myArr = $this->request->data;
                $myArr['Pro_reference']['pro_applicant_id'] = $this->request->params['pass'][1];	

                //if ($this->Pro_applicant->validates()) {

                     //echo "saved: "."<pre>".print_r( $myArr)."</pre>";
       	            if( $this->Pro_reference->save( $myArr)){
        		$this->redirect('/pros/feedback'); 
                        //echo "Saved, thanks";
                    } //else { echo "not saved: "."<pre>".print_r( $this->Pro_reference->data)."</pre>"; }
                    //else { echo debug($this->validationErrors); die();}
                    ////print all quesries to screen for debugging
                    //$log = $this->Pro_reference->getDataSource()->getLog(false, false);
                    //debug($log);
                //}
            }
        }
        
        public function register(){
                        $lj_data = $this->request->data;
                        $lj_classcode = $lj_data['Training']['classcode'];

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
        			        $this->redirect('/services/enrollment'); 
                                    elseif( $lj_classcode == 1)
        			        $this->redirect('/services/training_enrollment/?program=Introduction&price=199'); 
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
        
    }
?>
