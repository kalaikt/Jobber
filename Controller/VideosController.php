<?php 
    class VideosController extends AppController {
    	public $LINUX_VIDEO_LOW_LIMIT = 1;
    	public $LINUX_VIDEO_HIGH_LIMIT = 200;
    	public $LINUX_AWS_LOW_LIMIT = 400;
    	public $LINUX_AWS_HIGH_LIMIT = 450;
    	public $LINUX_RHCSA_LOW_LIMIT = 700;
    	public $LINUX_RHCSA_HIGH_LIMIT = 799;
    	   
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
    		$this->Auth->allow('index', 'lecture', 'basics_of_linux_lectures','interviewprep', 'bootcampvideos','products','linuxstart','linuxsales', 'success', 'cancel', 'video_success', 'notify', 'video_notify', 'enroll_success','linuxvideos','videopayment');
    	}
    	
        public $helpers = array('Html', 'Form', 'Video');


        /*
        public function linuxvideos() {
            if(!isset( $this->request->params['pass'][0]) || ( $this->request->params['pass'][0] == 'linux')){
                $video_details = $this->Videos->find('all', 
            	                                       ['conditions' => 
            	                                            ['lectureresources_id >' => $this->LINUX_VIDEO_LOW_LIMIT,
            	                                             'lectureresources_id <' => $this->LINUX_VIDEO_HIGH_LIMIT
            	                                            ]
            	                                       ]); 
            }elseif( $this->request->params['pass'][0] == 'aws'){
            	$video_details = $this->Videos->find('all', 
            	                                       ['conditions' => 
            	                                            ['lectureresources_id >' => $this->LINUX_AWS_LOW_LIMIT,
            	                                             'lectureresources_id <' => $this->LINUX_AWS_HIGH_LIMIT
            	                                            ]
            	                                       ]); 
            }
            
            $i = 0;
            
            foreach( $video_details as $detail){
                $video[$i]['title'] = $detail['Videos']['title']; 
                $video[$i]['length'] = $detail['Videos']['length'];
                $video[$i]['price'] = $detail['Videos']['price']; 
                $video[$i++]['lectureresources_id'] = $detail['Videos']['lectureresources_id']; 
            }
            
            $this->set('video',$video);
        }
        */

        public function linuxvideos() {
            // get videos based on user request
            if(!isset( $this->request->params['pass'][0]) || ( $this->request->params['pass'][0] == 'linux')){
                $video = $this->Video->getVideoDetails( $this->LINUX_VIDEO_LOW_LIMIT, $this->LINUX_VIDEO_HIGH_LIMIT);           
                $topMsg = "Linux Tutorial Videos";
            }elseif(!isset( $this->request->params['pass'][0]) || ( $this->request->params['pass'][0] == 'aws')){
                $video = $this->Video->getVideoDetails( $this->LINUX_AWS_LOW_LIMIT, $this->LINUX_AWS_HIGH_LIMIT);           
                $topMsg = "AWS Solutions Architect Certification";
            }elseif(!isset( $this->request->params['pass'][0]) || ( $this->request->params['pass'][0] == 'rhcsa')){
                $video = $this->Video->getVideoDetails( $this->LINUX_RHCSA_LOW_LIMIT, $this->LINUX_RHCSA_HIGH_LIMIT);           
                $topMsg = "Pass RHCSA ex200 Exam";
            }elseif(!isset( $this->request->params['pass'][0]) || ( $this->request->params['pass'][0] == 'interview')){
                $video = $this->Video->getVideoDetails( $this->LINUX_AWS_LOW_LIMIT, $this->LINUX_AWS_HIGH_LIMIT);           
                $topMsg = "Videos to Prepare for Interviews";
            }

            //if user is logged in, find videos that user is allowed to view
            if ($this->Auth->user('id')) {
                $userID = $this->Auth->user('id');
                $this->loadmodel('labprofiles');
                $lab_arr = array();
                $allowed_labs = $this->Labprofile->find('all',array('conditions'=>array('user_id ='=>$userID)) );
                for( $i=0; $i<count($allowed_labs); $i++){
                    array_push( $lab_arr, $allowed_labs[$i]['Labprofile']['id']);
                }
                //if( in_array('112', $lab_arr))
                //    debug( $allowed_labs);
                //else{
                //    echo '112 not in array: <pre>'; print_r( $lab_arr); echo '</pre>';
                //}
            }
 
            $this->set('video',$video);
            if( isset( $lab_arr)){
                $this->set('lab_arr', $lab_arr);
            }
            $this->set('topMsg',$topMsg);
        }
        
        public function videopayment(){
        	$labresources_id = $this->params->pass[0];
        	$video_details = $this->Videos->find('all',array('conditions'=>array('lectureresources_id'=>$labresources_id))); 
            
            $i = 0;
            
            foreach( $video_details as $detail){
                $video[$i]['id'] = $detail['Videos']['id']; 
                $video[$i]['title'] = $detail['Videos']['title'];
                $video[$i]['goal'] = $detail['Videos']['goal']; 
                $video[$i]['length'] = $detail['Videos']['length'];
                $video[$i]['price'] = $detail['Videos']['price']; 
                $video[$i++]['lectureresources_id'] = $detail['Videos']['lectureresources_id']; 
            }
            
            $this->set('video',$video);
        }
        
        public function success() {
			if ($this->request->is('post') && isset($this->request->data['txn_id'])) {
                
				$temp = explode('|', $this->request->data['custom']);
				$this->loadModel('User');
				$user = $this->User->query('SELECT COUNT(id) AS count FROM users WHERE email ="'.$temp[2].'"');
				
				if(!$user[0][0]['count']){$this->createUser();}
				
				$this->Session->setFlash(__('Payment success please check your email will get more details or contact with website admin.'));
				$this->redirect(array('action' => 'success'));
				//debug($this->User->validationErrors);
			}
		}
		
		public function notify() {
			if ($this->request->is('post') && isset($this->request->data['txn_id'])) {
                $this->createUser();
			}
		}
		
		private function createUser($data = array()) {
			if ($this->request->is('post') && isset($this->request->data['txn_id'])) {
                $this->loadModel('User');
				
				$this->User->create();
				
				$temp = count($data)? $data : explode('|', $this->request->data['custom']);
				$username = explode(' ', $temp[0]);
				$password = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
				
				$u_name = strtolower($this->isUsernameExist($username[0].substr($username[1], 0, 1)));
				
				$this->request->data['User'] = array('username'=>$u_name, 'password'=>$password, 'password_confirm'=>$password,'email'=>$temp[2], 'role'=>'5');
				
				//file_put_contents('paypal'.time().'.txt',serialize($_POST));
							
				App::uses('AppController', 'Controller');
				App::uses('CakeEmail', 'Network/Email');
				if(!count($data)){
					$Email = new CakeEmail();
						
					$Email->config('default');
					$Email->to('forum@linuxjobber.com');
					$Email->subject('Account has been created');
					$Email->send('Helo ,

Payment information

Name: '.$temp[0].'

Email: '.$temp[2].'

Address: '.$temp[1].'

Phone: '.$temp[3].'

Thanks & Regards
Admin');
				}
				if ($this->User->save($this->request->data)) {
					//$this->Session->setFlash(__('The user has been created'));
					
					$Email = new CakeEmail();
					
					$Email->config('default');
					$Email->to($temp[2]);
					$Email->subject('Account has been created');
					$Email->send('Helo '.$username[0].',
					
You account has been created. Here is the access details.

Username: '.$u_name.'
Password: '.$password.'

Thanks & Regards
Admin');
					
				} else {
					$Email = new CakeEmail();
					if(count($data)){
						$temp[3] = '';
					}
					$Email->config('default');
					$Email->to('forum@linuxjobber.com');
					$Email->subject('Account has not created, please ckeck with the user');
					$Email->send('Helo ,

Payment information

Name: '.$temp[0].'

Email: '.$temp[2].'

Address: '.$temp[1].'

Phone: '.$temp[3].'

Thanks & Regards
Admin');
					//$this->Session->setFlash(__('The user could not be created. Email address already there in the system please check with admin.'));
					//$this->redirect(array('action' => 'index'));
				}  
				//debug($this->User->validationErrors);
			}
		}
    }
?>
