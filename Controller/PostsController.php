<?php 
    class PostsController extends AppController {

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
    	
    	public function add($topicId=null) {
    		if ($this->request->is('post')) {

    			$date = date('Y-m-d H:i:s', time());
    			$this->request->data['Post']['created'] = $date;
    			$this->request->data['Post']['modified'] = $date;
    			
    			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
    			if(!empty($this->request->data['Post']['attach_file']['name'])){
					$filename = IMAGES.'/ljimages/'.time().str_replace(' ', '',$this->request->data['Post']['attach_file']['name']); 
					if(move_uploaded_file($this->request->data['Post']['attach_file']['tmp_name'],$filename)){
						$this->request->data['Post']['attach_file'] = basename($filename);
					}
					else{
						throw new NotFoundException(__('File upload fail. Please check the folder permission.'));
					}
					
				}
				else{
					$this->request->data['Post']['attach_file'] = '';
				}
				
    			if ($this->Post->save($this->request->data)) {
    				$this->Session->setFlash(__('Post has been created'));
					
					$owner = $this->Post->find('first', array('conditions' => array('Post.topic_id' => $this->request->data['Post']['topic_id'], 
																					'Topic.id = Post.topic_id',
																					'User.id = Topic.user_id'
																			  		//array('NOT' =>array('Topic.user_id'=>array($this->Auth->user('id'))))
																					),
															'fields' => array('DISTINCT User.username', 'User.email', 'Topic.name')
															));
					
					if(!empty($owner['User']['email'])){
						App::uses('AppController', 'Controller');
						App::uses('CakeEmail', 'Network/Email');
						$Email = new CakeEmail();
						$Email->config('default');
						$Email->to($owner['User']['email']);
						$Email->subject('New Reply - '.$owner['Topic']['name']);
						$Email->send('Hi '.$owner['User']['username'].', 

New reply posted please check.
	 
Thanks & Regards
Linuxjobber'
	);
}
					

					$this->redirect(array('controller'=>'topics','action'=>'view',$this->request->data['Post']['topic_id']));
    			}
    			 
    		} else {
				
    			if (!$this->Post->Topic->exists($topicId)) {
					$this->redirect(array('controller'=>'topics','action'=>'view',$this->Session->read('topic_id')));
    				throw new NotFoundException(__('Invalid topic'));
    			}
    			 
    			$this->Post->Topic->recursive = -1;
    			$topic = $this->Post->Topic->read(null,$topicId);
    			 
    			$this->Post->Forum->recursive = -1;
    			$forum = $this->Post->Forum->read(null,$topic['Topic']['forum_id']);
    			 
    			$this->set('topic',$topic);
    			$this->set('forum',$forum);
    		}
    	}
    }
?>
