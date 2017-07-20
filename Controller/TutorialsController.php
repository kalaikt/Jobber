<?php 
    class TutorialsController extends AppController {
    	public $uses = array('Tutorials','Labprofiles','Users','Labmaps','Home');
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
    		$this->Auth->allow('index', 'lecture', 'basics_of_linux_lectures','interviewprep', 'bootcampvideos','products','linuxstart','linuxsales', 'success', 'cancel', 'video_success', 'notify', 'video_notify', 'enroll_success');
    	}
    	
        public $helpers = array('Html', 'Form', 'Video');

        public function contactadmin(){
        	 
        }

        public function index() {
            //$this->set('homes', $this->Home->find('all', array( 'order' => array('Home.id ASC'))));
            //$this->set('videos', $this->Videos->videoData('all'));
        	$this->set( 'say',$this->params['pass']);
        }
        
        public function linuxrevolution(){
        	//nothing yet
        }

        public function bootcampvideos(){
        	//nothing yet
        }

        public function aws(){
        }
        
        public function amazon_aws(){
        }

        public function puppet(){
        }

        public function rhcsa(){
        }

        public function basics_of_linux_lectures(){
        }

        public function interviewprep(){
        }

        public function proficiency_in_linux_lectures(){
        }
		
		public function add($labid, $id = 0, $link = 0){
			$this->loadModel('Lectureresource');
			
			if($this->Auth->user('role') != 1) {
				$this->Session->setFlash(__('You do not have admin permission check with site admin'));
    			if($link)
					$this->redirect(array('action'=>'lecture',1,$this->request->data['Link']['labprofile_id']));
				else
					$this->redirect(array('action'=>'lecturere',$this->request->data['Link']['labprofile_id']));
			}
			
			if ($this->request->is('post')) {
			
				if(isset($this->request->data['Link']['video'])){ 
					$filename = 'videos/'.time().str_replace(' ','',$this->request->data['Link']['video']['name']); 
					if(move_uploaded_file($this->request->data['Link']['video']['tmp_name'],IMAGES.$filename)){
						$this->request->data['Link']['link'] = IMAGES_URL.$filename;
						$this->request->data['Link']['type'] = 'video';
						$ext = explode('.', basename($filename));
						if($this->request->data['Link']['format'] != 'answer'){
							switch (strtolower($ext[1])){
								case 'flv':
									$this->request->data['Link']['format']= 'flv';
									break;
								case 'swf':
									$this->request->data['Link']['format']= 'swf';
									break;
								default:
									$this->request->data['Link']['format']= 'flv';
							}
						}
					}
					else if(isset($this->request->data['Link']['video'])){
						$filename = '';
						throw new NotFoundException(__('File upload fail. Please check the folder permission.'));
					}
				}
				if(!$this->request->data['Link']['id']){
					$this->Lectureresource->query('INSERT INTO `lectureresources` (`labprofile_id`, `link`, `type`, `format`) 
												VALUES ("'.$this->request->data['Link']['labprofile_id'].'", 
														"'.$this->request->data['Link']['link'].'", 
														"'.$this->request->data['Link']['type'].'", 
														"'.$this->request->data['Link']['format'].'")'
											);
				}
				else{
					$this->Lectureresource->query('UPDATE `lectureresources`  SET  `link` = "'.$this->request->data['Link']['link'].'", 
					`type` 		="'.$this->request->data['Link']['type'].'",
					`format` 	="'.$this->request->data['Link']['format'].'" WHERE id = '.$this->request->data['Link']['id']
											);
				}
											  			
				$this->Session->setFlash(__('Link/video has been created'));
				
				if($link)
					$this->redirect(array('action'=>'lecture',1,$this->request->data['Link']['labprofile_id']));
				else
					$this->redirect(array('action'=>'lecturere',$this->request->data['Link']['labprofile_id']));
					
    			//$this->redirect(array('action'=>'lecturere',$this->request->data['Link']['labprofile_id']));
    			
			}
			
			$labid != 'video' && $id and $link = $this->Lectureresource->find('first', array('conditions'=>array('Lectureresource.id'=>$id)));
			
			$this->set( 'mode', $labid);
			
			if($labid == 'video'){$labid = $id; $id =0;}
			
			$this->set( 'labid', $labid);
			$this->set( 'id', $id);
			$this->set( 'link', (isset($link['Lectureresource'])?$link['Lectureresource']:array()));
			//$log = $this->Lectureresource->getDataSource()->getLog(false, false);
			//debug($log);
        }

        public function examsimulation(){
            $this->set('homes', $this->Home->find('all', array( 'order' => array('Home.id ASC'))));
        	 
        }
		
		public function delete($labid, $id = 0){
			$this->loadModel('Lectureresource');
			
			if($this->Auth->user('role') != 1) {
				$this->Session->setFlash(__('You do not have admin permission check with site admin'));
    			$this->redirect(array('action'=>'lecturere',$id));
			}
			
			if ($id) {
				
				$this->Lectureresource->query('DELETE FROM `lectureresources` WHERE id ='.$id);
				
											  			
				$this->Session->setFlash(__('Link/video has been deleted'));
    			$this->redirect(array('action'=>'lecturere',$labid));
    			
			}
			
        }
		
		public function lecture($link, $labid){
			$this->loadModel('Lectureresource');
			
			$videos = $this->Lectureresource->find('all', array('conditions'=>array('Lectureresource.labprofile_id'=>$labid, 'Lectureresource.format'=>'youtube'), 'fields'=>array('DISTINCT Lectureresource.id, Lectureresource.link, Lectureresource.type, Lectureresource.format')));
			
			$this->set('videos',$videos);
			$this->set('labid',$labid);
			$this->set('role',$this->Auth->user('role'));
        }
		public function lecturere($labid){
			$this->loadModel('Lectureresource');
			
			if ($this->request->is('post')) {
				foreach($this->request->data['Note']['complete'] as $note){
					$count = $this->Lectureresource->query('SELECT COUNT(*) AS COUNT FROM lecturenotes WHERE user_id = '.$this->Auth->user('id').' AND resource_id ='.$note);
					if($count[0][0]['COUNT']){
						$this->Lectureresource->query('UPDATE lecturenotes SET status = 1 WHERE user_id = '.$this->Auth->user('id').' AND resource_id ='.$note);
					}else{
						$this->Lectureresource->query('INSERT INTO `lecturenotes` ( `user_id`, `resource_id`, `status`) VALUES ('.$this->Auth->user('id').', "'.$note.'", 1)');
					}
				}
					
				$this->Session->setFlash(__('Note completed'));
    			$this->redirect(array('action'=>'lecturere',$labid));
			}
			
			$complete = $this->Lectureresource->query('SELECT resource_id FROM lecturenotes WHERE status = 1 AND user_id ='.$this->Auth->user('id'));
			
			$links = $this->Lectureresource->find('all', array('conditions'=>array('Lectureresource.labprofile_id'=>$labid, 'Lectureresource.type IN("link")'), 'fields'=>array('DISTINCT Lectureresource.id, Lectureresource.link, Lectureresource.type, Lectureresource.format, Lecturenotes.status')));
			$videos = $this->Lectureresource->find('all', array('conditions'=>array('Lectureresource.labprofile_id'=>$labid, 'Lectureresource.type IN("video")'), 'fields'=>array('DISTINCT Lectureresource.id, Lectureresource.link, Lectureresource.type, Lectureresource.format, Lecturenotes.status')));
			
			$access = $this->Lectureresource->query('SELECT answer_access FROM labprofiles WHERE id='.$labid.' AND user_id='.$this->Auth->user('id'));
			
			$tmp_comp = array();
			foreach($complete as $comp)
				$tmp_comp[] = $comp['lecturenotes']['resource_id'];
			
			$this->set('answer_access',(isset($access[0])?$access[0]['labprofiles']['answer_access']:0));
			$this->set('complete',$tmp_comp);
			$this->set('username',$this->Auth->user('username'));
			$this->set('links',$links);			
			$this->set('videos',$videos);
			$this->set('labid',$labid);
			$this->set('role',$this->Auth->user('role'));
        }
		public function video($id) {
			$this->loadModel('Lectureresource');
			$videos = $this->Lectureresource->find('all', array('conditions'=>array('Lectureresource.id'=>$id)));
			if($videos[0]['Lectureresource']['format'] == 'youtube'){
				$link = parse_url($videos[0]['Lectureresource']['link']);
				$params = explode('=',explode('&',$link['query'])[0]);
				$this->set('vid', $params[1]);
			}
			$this->set('videos', $videos);
			
		}
        public function labs(){
        	$this->isStudent();
            $logged_in_user = $this->Auth->user('id');
            $requested_lab = $this->params['pass'][0];
            $requested_lab_id = $this->Labmaps->find('first', array( 'conditions' => array( 'Labmaps.lab_name' => $requested_lab)));
        	
            $this->set('logged_in_user',$logged_in_user);
        	$this->set('requested_lab_id',$requested_lab_id);
            
        	//print_r( $logged_in_user['Users']['id']);
            //print_r( $requested_lab_id['Labmaps']['lab_id']);
            //echo "user's role is ".$this->Auth->user('role');
            //$lab_profile = new Labprofile();
            //echo "<pre>";
            //print_r( $this->Labprofiles->find('all',array( 'conditions' => array('AND' => array('Labprofiles.user_id' => $this->Auth->user('id')), array('Labprofiles.id' => $requested_lab_id['Labmaps']['lab_id'])))));
            //print_r( $this->Labmaps->find()); 
            //print_r( $this->Users->find('first', array( 'fields' => array('Users.id')))); 
            //print_r( $test['Users']['id']);
            //$log = $this->Labprofiles->getDataSource()->getLog(false, false);
            //debug($log);
            
            $labprofileArr = $this->Labprofiles->find('all',array( 'conditions' => array('AND' => array('Labprofiles.user_id' => $this->Auth->user('id')), array('Labprofiles.id' => $requested_lab_id['Labmaps']['lab_id']))));
        	//print_r( $labprofileArr['0']['Labprofiles']['user_access']);
        	//echo "</pre>";
        	
        	if( $labprofileArr['0']['Labprofiles']['user_access'] == 1){
        		$this->set( 'allow_access', "true");
            }else{ 
        		$this->set( 'allow_access', "false");
        		$this->redirect(array('action'=>'contactadmin'));
            }
            
        	$this->set( 'lab_topic',$this->params['pass'][0]);
        }

        public function isStudent(){
        	if ($this->Auth->user('role') <= '5'){
        	}else{
        		$this->redirect(array('action'=>'contactadmin'));
        	}
        }
		public function products() {
			if ($this->request->is('post')) {
				$this->set( 'post', $this->request->data);
				$this->set( 'ispost', 1);
			}
		}
		public function linuxsales() {
			if ($this->request->is('post')) {
				$this->set( 'post', $this->request->data);
				$this->set( 'ispost', 1);
			}
		}
		public function linuxstart() {
			if ($this->request->is('post')) {
				$this->set( 'post', $this->request->data);
				$this->set( 'ispost', 1);
			}
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
		
		public function cancel() {
			$this->Session->setFlash(__('Payment transation canceled'));
			$this->redirect(array('controller'=>'homes','action' => 'index'));
		}
		public function enroll_success() {
		}
		private function isUsernameExist($uname){
			$this->loadModel('User');
			$user = $this->User->query('SELECT COUNT(id) AS count FROM users WHERE username ="'.$uname.'"');
				
			if($user[0][0]['count']){
				$uname = $uname.substr(str_shuffle("0123456789"), 0, 2);
				return $this->isUsernameExist($uname);
			}
			else
				return $uname;
		}
		public function buyvideos($type){
			
			$this->set( 'userid', $this->Auth->user('id'));
			$this->set( 'type', $type);
		}
		public function video_success() {
			/*echo '<pre>';
			print_r($this->request->data);
			echo '</pre>';*/
			if ($this->request->is('post') && isset($this->request->data['txn_id'])) {
                
				$this->loadModel('User');
				$transaction = $this->User->query("SELECT COUNT(txn_id) as count FROM orders WHERE txn_id ='".$this->request->data['txn_id']."'");
				
				!$transaction[0][0]['count'] and $this->saveOrderDetails();
								
				$this->Session->setFlash(__('Payment success'));
				$u_id = explode('|',$this->request->data['custom']);
				if($u_id[0])
					$this->redirect(array('action' => 'video_success'));
				else
					$this->redirect(array('action' => 'enroll_success'));
				//debug($this->User->validationErrors);
			}
		}
		
		public function video_notify() {
			if ($this->request->is('post') && isset($this->request->data['txn_id'])) {
                //file_put_contents('paypal'.time().'.txt',serialize($_POST));
				$this->saveOrderDetails();
				//debug($this->User->validationErrors);
			}
		}
		private function saveOrderDetails(){
			$temp = explode('||', $this->request->data['custom']);
				//print_r($temp);
			if(empty($temp[0])) 
				$u_id = explode('|',$temp[1]);
			else 
				$u_id = explode('|',$temp[0]);
				
			$this->loadModel('User');
			$name = explode('|', $this->request->data['custom']);
			$details = '';
			if(isset($name[3])){
				$details = 'First Name: '.$name[3]
				.PHP_EOL.'Last Name: '.$name[4]
				.PHP_EOL.'Email: '.$name[5];
				
				$user_exist = $this->User->query('SELECT id FROM users WHERE email = "'.$name[5].'"');
				if(!$user_exist[0]['users']['id']){
					$this->createUser(array($name[3].' '.$name[4], '', $name[5]));
					$user_id = $this->User->getInsertID();
				}
				else
					$user_id = $user_exist[0]['users']['id'];
				
				$this->User->query("INSERT INTO `orders` ( `user_id`, `amount`, `txn_id`, `perams`) 
				VALUES ( '".$user_id."', '".$this->request->data['payment_gross']."', '".$this->request->data['txn_id']."', '".$details."')");
			}else{
				$this->User->query("INSERT INTO `orders` ( `user_id`, `amount`, `txn_id`) VALUES ( '".$u_id[0]."', '".$this->request->data['payment_gross']."', '".$this->request->data['txn_id']."')");
			}
			$insert = $this->User->query('SELECT LAST_INSERT_ID() as insertid');
			
			$user = $this->User->query('SELECT username, email FROM users WHERE id ="'.($u_id[0]?$u_id[0]:$user_id).'"');
			
			App::uses('AppController', 'Controller');
			App::uses('CakeEmail', 'Network/Email');

			
			$Email = new CakeEmail();
			if(isset($name[3])){	
				
				$Email->config('default');
				$Email->to($name[5]);
				$Email->subject('Order Details');
				$Email->send('Helo '.$name[3].',

You have paid '.$name[1].'.

Thanks & Regards
Admin');
			}
			else{
				$Email->config('default');
				$Email->to($user[0]['users']['email']);
				$Email->subject('Order Details');
				$Email->send('Helo '.$user[0]['users']['username'].',

You have purchased '.$name[1].' videos now you can access videos in the portal.

Thanks & Regards
Admin');
			}


$Email = new CakeEmail();
				
			$Email->config('default');
			$Email->to('forum@linuxjobber.com');
			$Email->subject('Order Details');
			$Email->send('Helo ,

'.$user[0]['users']['username'].' have purchased '.$name[1].'videos.
'.$details.'

Thanks & Regards
Admin');
			
			foreach($temp as $product){
				$prod = explode('|', $product);
				$this->User->query("INSERT INTO `order_details` ( `order_id`, `product_name`, `price`) VALUES ( '".$insert[0][0]['insertid']."', '".$prod[1]."', '".$prod[2]."')");
			}
		}
    }
?>
