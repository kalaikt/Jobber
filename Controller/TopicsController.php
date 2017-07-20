<?php 
    class TopicsController extends AppController {
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

    	public function beforeFilter() {
    		$this->Auth->allow('index','view');
			$this->Paginator->settings=array(
              'limit'=>20
       		);
    	}
    	 
    	public function index($forumId=null) {
    		if (!$this->Topic->Forum->exists($forumId)) {
    			throw new NotFoundException(__('Invalid forum'));
    		}
    		$this->set('forumID',$forumId);
    		$forum = $this->Topic->Forum->read(null,$forumId);
    		$this->set('forum',$forum);
    		$this->Paginator->settings['contain'] = array('User','Post'=>array('User'));
    		$this->Paginator->settings['order'] = array('Topic.id'=>'DESC');
    		
    		$this->set('topics', $this->Paginator->paginate('Topic',array('forum_id'=> $forumId)));
    	}
    	 
    	public function add() {
    		//$this->pa($this->data); exit;

    		$date = date('Y-m-d H:i:s', time());
    		//$this->request->data['Topic']['created'] = $date;
    		$this->request->data['Topic']['created'] = $date;
    		$this->request->data['Topic']['modified'] = $date;
    		
    		if( isset( $this->data['File'])){
    		    $fileOK = $this->uploadFiles('img/ljimages', $this->data['File']);
    		
    		    //echo $fileOK; exit;
    		
    		    // if file upload was successful, save the url in the database
    		    if(array_key_exists('urls', $fileOK)) {
    			    // save the url in the form data
    			    $this->request->data['Topic']['image_url'] = $fileOK['urls'][0];
    		    }
    		}

    		//echo '<pre>';
    		//print_r( $this->request->data['Topic']['image_url']);
    		//echo '</pre>'; exit;
    		
    		$forums = $this->Topic->Forum->find('list');
    		 
    		if ($this->request->is('post')) {
    			$this->request->data['Topic']['user_id'] = $this->Auth->user('id');
    			if ($this->Topic->save($this->request->data)) {
    				$this->Session->setFlash(__('Topic has been created'));

					
					App::uses('AppController', 'Controller');
					App::uses('CakeEmail', 'Network/Email');
					$this->loadModel('User');
					$users = $this->User->find('all',  array('conditions' => array('status' => 1)));

					foreach($users as $user){									
						$Email = new CakeEmail();
						$Email->config('default');
						$Email->to($user['User']['email']);
						$Email->subject('New Post');
						$Email->send('Hi '.$user['User']['username'].', 
	
New topic have been posted under the section '.$forums[$this->request->data['Topic']['forum_id']].'.
 
Thanks & Regards
Linuxjobber'
	);
					}

    				$this->redirect('/');
    			}
    		}
    		
    		$this->set('forums',$forums);
    	}
    	
    	function pa($arr) {
    		echo '<pre>';
    		print_r($arr);
    		echo '</pre>';
    	}
    	
    	public function view($id) {
    		if (!$this->Topic->exists($id)) {
    			throw new NotFoundException(__('Invalid topic'));
    		}
    		$this->Session->write('topic_id', $id);
			 
    		$topic = $this->Topic->read(null,$id);
    		$forum = $this->Topic->Forum->read(null,$topic['Topic']['forum_id']);
    		$this->Paginator->settings['Post']['conditions'] = array('Post.topic_id'=>$topic['Topic']['id']);
    		$this->Paginator->settings['Post']['contain'] = array('User');
    		$this->Paginator->settings['Post']['order'] = array('Post.id'=>'DESC');
    		$this->set('topics', $this->Paginator->paginate('Post'));
    		$this->set('role', $this->Auth->user('role')); 
    		$this->set('topic', $topic);
    		$this->set('forum', $forum);
    		$this->set('posts', $this->Paginator->paginate('Post'));
    	}
    	// To delete the post
		public function delete($topic_id, $post_id){
			$this->loadModel('Post');
			$this->Post->delete($post_id);
			$this->redirect(array('controller'=>'topics','action'=>'view',$topic_id));
		}
    	/**
    	 * uploads files to the server
    	 * @params:
    	 *		$folder 	= the folder to upload the files e.g. 'img/files'
    	 *		$formdata 	= the array containing the form files
    	 *		$itemId 	= id of the item (optional) will create a new sub folder
    	 * @return:
    	 *		will return an array with the success of each file upload
    	 */
    	function uploadFiles($folder, $formdata, $itemId = null) {
    		// setup dir names absolute and relative
    		$folder_url = WWW_ROOT.$folder;
    		$rel_url = $folder;
    	
    		// create the folder if it does not exist
    		if(!is_dir($folder_url)) {
    			//echo $folder_url . "does not exist. I will create it for you.";
    			mkdir($folder_url,0777,true);
    		}
    	
    		// if itemId is set create an item folder
    		if($itemId) {
    			// set new absolute folder
    			$folder_url = WWW_ROOT.$folder.'/'.$itemId;
    			// set new relative folder
    			$rel_url = $folder.'/'.$itemId;
    			// create directory
    			if(!is_dir($folder_url)) {
    				mkdir($folder_url);
    			}
    		}
    	
    		// list of permitted file types, this is only images but documents can be added
    		$permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');
    	
    		// loop through and deal with the files
    		foreach($formdata as $file) {
    			// replace spaces with underscores
    			$filename = str_replace(' ', '_', $file['name']);
    			// assume filetype is false
    			$typeOK = false;
    			// check filetype is ok
    			foreach($permitted as $type) {
    				if($type == $file['type']) {
    					$typeOK = true;
    					break;
    				}
    			}
    	
    			// if file type ok upload the file
    			if($typeOK) {
    				// switch based on error code
    				switch($file['error']) {
    					case 0:
    						// check filename already exists
    						if(!file_exists($folder_url.'/'.$filename)) {
    							// create full filename
    							$full_url = $folder_url.'/'.$filename;
    							$url = $rel_url.'/'.$filename;
    							// upload the file
    							$success = move_uploaded_file($file['tmp_name'], $url);
    						} else {
    							// create unique filename and upload file
    							ini_set('date.timezone', 'Europe/London');
    							$now = date('Y-m-d-His');
    							$full_url = $folder_url.'/'.$now.$filename;
    							$url = $rel_url.'/'.$now.$filename;
    							$success = move_uploaded_file($file['tmp_name'], $url);
    						}
    						// if upload was successful
    						if($success) {
    							// save the url of the file
    							$result['urls'][] = $url;
    						} else {
    							$result['errors'][] = "Error uploaded $filename. Please try again.";
    						}
    						break;
    					case 3:
    						// an error occured
    						$result['errors'][] = "Error uploading $filename. Please try again.";
    						break;
    					default:
    						// an error occured
    						$result['errors'][] = "System error uploading $filename. Contact webmaster.";
    						break;
    				}
    			} elseif($file['error'] == 4) {
    				// no file was selected for upload
    				$result['nofiles'][] = "No file Selected";
    			} else {
    				// unacceptable file type
    				$result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
    			}
    		}
    		return $result;
    	}
    	
    }
?>
