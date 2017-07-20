<?php 
    class LabprofilesController extends AppController {

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
    	
    	public function isAuthorized($user) {
    			
    		return true;
    	}
    	
    	
    	public function beforeFilter() {
    		//$this->Auth->allow();
    		//    }
    	}
    	
    	public $paginate = array(
    			'limit' => 25,
    			'conditions' => array('status' => '1'),
    			'order' => array('User.username' => 'asc' )
    	);
    	 
    	
    	
    	public function decodeStatus( $statusCode){
    		if( $statusCode == "0")
    			return "INACTIVE";
    		elseif( $statusCode == "1")
    		    return "ACTIVE";
    	}

        public function index(){
        	//echo "<br /><br /><pre>";
        	//print_r( $this->user);
        	//echo "</pre>";
        	
        	//echo "<br /><br /><pre>";
        	//print_r( $this->Labprofile->find());
        	//echo "</pre>";
        	
        	$allArr = $this->Labprofile->find('all',array('conditions'=>array('Labprofile.user_id'=>$this->Auth->user('id'))));
 
        	$total_basics_lab = $this->Labprofile->find('count',array( 'conditions' => array('AND' => array('Labprofile.user_id' => $this->Auth->user('id')), array('Labprofile.id <' => 100))));
        	$total_proficiency_and_basics_lab = $this->Labprofile->find('count',array( 'conditions' => array('AND' => array('Labprofile.user_id' => $this->Auth->user('id')), array('Labprofile.id <' => 1000))));
        	$total_proficiency_lab = $total_proficiency_and_basics_lab - $total_basics_lab;
        	
            //echo "<br /><br />"; print_r( $this->Labprofile->find('count',array( 'conditions' => array('AND' => array('Labprofile.user_id' => $this->Auth->user('id')), array('Labprofile.id <' => 1000), array('Labprofile.work_status' => 1))))); echo "<br />";
        	$attempted_basics_lab = $this->Labprofile->find('count',array( 'conditions' => array('AND' => array('Labprofile.user_id' => $this->Auth->user('id')), array('Labprofile.id <' => 100), array('Labprofile.work_status' => 1))));
        	$attempted_proficiency_and_basics_lab = $this->Labprofile->find('count',array( 'conditions' => array('AND' => array('Labprofile.user_id' => $this->Auth->user('id')), array('Labprofile.id <' => 1000), array('Labprofile.work_status' => 1))));
        	$attempted_proficiency_lab = $attempted_proficiency_and_basics_lab - $attempted_basics_lab;
            //echo $attempted_proficiency_and_basics_lab . " - " . $attempted_basics_lab;
        	
        	$completed_basics_lab = $this->Labprofile->find('count',array( 'conditions' => array('AND' => array('Labprofile.user_id' => $this->Auth->user('id')), array('Labprofile.id <' => 100), array('Labprofile.work_status' => 2))));
        	$completed_proficiency_and_basics_lab = $this->Labprofile->find('count',array( 'conditions' => array('AND' => array('Labprofile.user_id' => $this->Auth->user('id')), array('Labprofile.id <' => 1000), array('Labprofile.work_status' => 2))));
        	$completed_proficiency_lab = $completed_proficiency_and_basics_lab - $completed_basics_lab;
        	
        	//echo $completed_basics_lab;
        	//echo $attempted_proficiency_and_basics_lab;
        	
        	//debugging: print out all the sql from above
        	//$log = $this->Labprofile->getDataSource()->getLog(false, false);
        	//debug($log);
			
			$lab_notes = $this->Labprofile->query('SELECT * FROM (
														 			(SELECT COUNT(*) finished, 
																			(SELECT COUNT(*) FROM lectureresources WHERE labprofile_id > 100 ) total 
																				FROM lectureresources ls, lecturenotes ln 
																				WHERE  ls.id = ln.resource_id 
																					AND ls.labprofile_id > 100 
																					AND ln.status = 1 
																					AND ln.user_id = '.$this->Auth->user('id').'
																	) proficiency,
																	(SELECT COUNT(*) finished, 
																			(SELECT COUNT(*) FROM lectureresources WHERE labprofile_id < 100 ) total  
																				FROM lectureresources ls, lecturenotes ln 
																				WHERE  ls.id = ln.resource_id 
																					AND ls.labprofile_id < 100 
																					AND ln.status = 1 
																					AND ln.user_id = '.$this->Auth->user('id').'
																	) basics
													) ');
        	
        	
			$this->set('lab_notes', $lab_notes[0]);
			
        	$this->set('userStatus', $this->decodeStatus( $this->Auth->user('status')));
        	$this->set('total_basics_lab', $total_basics_lab);
        	$this->set('completed_basics_lab', $completed_basics_lab);

        	$this->set('attempted_basics_lab', $attempted_basics_lab);
        	$this->set('attempted_proficiency_lab', $attempted_proficiency_lab);
        	 
        	$this->set('total_proficiency_lab', $total_proficiency_lab);
        	$this->set('completed_proficiency_lab', $completed_proficiency_lab);
        	$this->set('total_interview_lab', $this->Labprofile->find('count',array( 'conditions' => array('AND' => array('Labprofile.user_id' => $this->Auth->user('id')), array('Labprofile.id <' => 100)))));
        	//$this->set('completed_interview_lab', $this->Labprofile->find('count',array( 'conditions' => array('AND' => array('Labprofile.user_id' => $this->Auth->user('id')), array('Labprofile.id' => $allArr['labmaps']['lab_id'])))));
        	$this->set('username', $this->Auth->user('username'));
        }
        
        public function completed(){

        	if ($this->request->is('post')) {

        		$date = date('Y-m-d');
        		$this->request->data['Labprofile']['date_attempted'] = $date;
        		
        		//echo '<pre>'; print_r( $this->request->data); echo '</pre>'; exit;
        		$postArr = $this->request->data;
        		if ($this->Labprofile->updateAll( array('Labprofile.work_status' => 1),array('AND' => array('Labprofile.user_id' => $postArr['Labprofile']['user_id'],'Labprofile.id' => $postArr['Labprofile']['id'] )))) {
        			
					
					//	print_r($postArr);				
        			//set the date
        			$this->Labprofile->updateAll( array('Labprofile.date_attempted' => "'" .$date. "'" ),array('AND' => array('Labprofile.user_id' => $postArr['Labprofile']['user_id'],'Labprofile.id' => $postArr['Labprofile']['id'] )));
        			//$this->redirect(array('action' => 'completed'));
					
        		}
                                //echo "<pre>"; print_r( $postArr['Labprofile']['work_notes']); echo "</pre>"; //exit;
				if($postArr['Labprofile']['work_status'] == 1){
					$filename = IMAGES.'/notes/'.time().str_replace(' ','',$this->request->data['Labprofile']['work_notes']['name']); 
					if(move_uploaded_file($this->request->data['Labprofile']['work_notes']['tmp_name'],$filename)){
						//$this->Labprofile->updateAll( array( 'Labprofile.work_notes'=>"'" .basename($filename)."'" ),array('AND' => array('Labprofile.user_id' => $this->request->data['Labprofile']['user_id'],'Labprofile.id' => $this->request->data['Labprofile']['id'] )));
						$this->Labprofile->query("INSERT INTO `labnotes` (`labprofile_id`,`user_id`, `work_note`, `submitted_date`) 
													VALUES ( '".$this->request->data['Labprofile']['id']."', ".$this->request->data['Labprofile']['user_id'].",  '" .basename($filename)."',  NOW())");
						
					}
					else{
						throw new NotFoundException(__('File upload fail. Please check the folder permission.'));
					}
					
					//$this->Labprofile->updateAll( array('Labprofile.work_status' => 2,'Labprofile.date_completed' => "'" .$date. "'", 'Labprofile.work_notes'=>"'" .basename($filename)."'" ),array('AND' => array('Labprofile.user_id' => $postArr['Labprofile']['user_id'],'Labprofile.id' => $postArr['Labprofile']['id'] )));
//					$this->Labprofile->updateAll( array( 'Labprofile.work_notes'=>"'" .basename($filename)."'" ),array('AND' => array('Labprofile.user_id' => $postArr['Labprofile']['user_id'],'Labprofile.id' => $postArr['Labprofile']['id'] )));
				}

        		//debugging: print out all the sql from above
        		//$log = $this->Labprofile->getDataSource()->getLog(false, false);
        		//debug($log);
        	}
        }
    	
    	public function add($topicId=null) {
    		if ($this->request->is('post')) {

    			//$date = $date = date('Y-m-d h:i:s a', time());
    			//$this->request->data['Post']['created'] = $date;
    			
    			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
    			 
    			if ($this->Post->save($this->request->data)) {
    				$this->Session->setFlash(__('Post has been created'));
    				$this->redirect(array('controller'=>'topics','action'=>'view',$this->request->data['Post']['topic_id']));
    			}
    			 
    		} else {
    			if (!$this->Post->Topic->exists($topicId)) {
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
		public function details($userid = 0){
			
			$id = $userid? $userid:$this->Auth->user('id');
			//$labs = $this->Lab->find('all',array('conditions'=>array('Labprofile.user_id'=>$id), 'fields'=>array('Lab.name','Labprofile.id', 'user.id','Labprofile.date_attempted', 'Labprofile.date_completed', 'Labprofile.work_notes', 'Labprofile.work_status', 'Labprofile.comment', '(SELECT name FROM labs WHERE id = Lab.parent_id) AS p_name')));
			$labs = $this->Labprofile->find('all',array('conditions'=>array('Labprofile.user_id'=>$id))); 
			//foreach($labs as $lab){
				//$temp[$lab[0]['p_name']][] = $lab; 
			//}
			
			$this->set('role',$this->Auth->user('role'));
			
			$this->set('labs',$labs);
			//debugging: print out all the sql from above
			//$log = $this->Labprofile->getDataSource()->getLog(false, false);
			//debug($log);
		}
		public function labNotedetails(){
			
			$lab_notes = $this->Labprofile->query('SELECT * FROM lectureresources ls 
												LEFT JOIN lecturenotes ln ON (ls.id = ln.resource_id AND ln.user_id = '.$this->Auth->user('id').') 
												LEFT JOIN labmaps lm ON (lm.lab_id = ls.labprofile_id)
												ORDER BY ls.labprofile_id'
											); 
			
			
			$this->set('role',$this->Auth->user('role'));
			$this->set('lab_notes',$lab_notes);
			
		}
		public function labNote($id){
			$labnotes = $this->Labprofile->find('all',array('conditions'=>array('Labprofile.user_id'=>$this->Auth->user('id'), 'Labprofile.work_status'=>2), 'fields'=>array('labmaps.lab_name', 'Labprofile.work_notes','Labprofile.user_id','Labprofile.id','Labprofile.date_attempted', 'Labprofile.date_completed')));
			
			$this->set('labnotes',$labnotes);
		}
		
		public function incompleteLab(){
			$labs = $this->Labprofile->find('all',array('conditions'=>array('Labprofile.work_status'=>0, 'DATEDIFF( CURDATE( ) , lab_start_date ) > 3'), 'fields'=>array('labmaps.lab_name','Labprofile.id', 'Labprofile.date_attempted', 'Labprofile.date_completed', 'user.username', 'user.email', 'DATEDIFF( CURDATE( ) , lab_start_date ) AS days')));

			foreach($labs as $lab){
				if(!empty($lab['user']['email'])){
					App::uses('AppController', 'Controller');
					App::uses('CakeEmail', 'Network/Email');
					$Email = new CakeEmail();
					$Email->config('default');
					$Email->to($lab['user']['email']);
					$Email->subject('Urgent! Incomplete Lab Found');
					$Email->send('Hello '.$lab['user']['username'].', 

Our record shows that the lab '.$lab['labmaps']['lab_name'].' is '.$lab[0]['days'].' amount of days past due.
	 
Thanks & Regards
Linuxjobber'
	);
}
	
			}
			
		}
		public function status(){
			if ($this->request->is('post')) {
				$this->loadModel('User');

				$status = isset($this->request->data['approve'])?2:1;
				
				$this->Labprofile->updateAll( array('Labprofile.work_status' => "'" .$status. "'", 'Labprofile.comment' => "'" .$this->request->data['Comments']['comment']. "'" ),array('AND' => array('Labprofile.user_id' => $this->request->data['Comments']['user_id'],'Labprofile.id' => $this->request->data['Comments']['lab_id'])));
				
				if(empty($this->request->data['Comments']['note_id'])){
					$this->Labprofile->query("INSERT INTO `labnotes` (`labprofile_id`,`user_id`, `work_note`, `comment`, `status`) 
													VALUES ( '".$this->request->data['Comments']['lab_id']."', ".$this->request->data['Comments']['user_id'].",  '" .$this->request->data['Comments']['work_note']."', '" .$this->request->data['Comments']['comment']. "',".$status.")");
					
					$insert = $this->User->query('SELECT LAST_INSERT_ID() as insertid');
					
					$this->Labprofile->query("INSERT INTO `comments` (`labnote_id`, `comment`, `created_by`, `status`, `creation_date`) 
													VALUES ( '".$insert[0][0]['insertid']."', '".$this->request->data['Comments']['comment']."',  '" .$this->Auth->user('id')."', '" .$status. "', NOW())");													
				}
				else{
					$this->Labprofile->query("UPDATE labnotes SET status = ".$status." WHERE id = ".$this->request->data['Comments']['note_id']);
					$this->Labprofile->query("INSERT INTO `comments` (`labnote_id`, `comment`, `created_by`, `status`, `creation_date`) 
													VALUES ( '".$this->request->data['Comments']['note_id']."', '".$this->request->data['Comments']['comment']."',  '" .$this->Auth->user('id')."', '" .$status. "', NOW())");
				}
				
				$labs = $this->Labprofile->find('all',array('conditions'=>array('Labprofile.user_id' => $this->request->data['Comments']['user_id'],'Labprofile.id' => $this->request->data['Comments']['lab_id']), 'fields'=>array('labmaps.lab_name','Labprofile.id', 'Labprofile.date_attempted', 'Labprofile.date_completed','usr.username', 'usr.email'), 'joins'=>array(
            array(
                    'table' => $this->User,
                    'alias' => 'usr',
                    'type' => 'INNER',
                    'conditions' => array('usr.id = Labprofile.user_id')
                ))));
				
				$lab = $labs[0];
								
				if(!empty($lab['usr']['email'])){
					App::uses('AppController', 'Controller');
					App::uses('CakeEmail', 'Network/Email');
					$Email = new CakeEmail();
					$Email->config('default');
					$Email->to($lab['usr']['email']);
					$Email->subject('Your Lab Note Has Been Reviewed');
					$Email->send('Hello '.$lab['usr']['username'].',
Your lab note for lab '.$lab['labmaps']['lab_name'].' has been reviewed, please click on the link below to read the instructor\'s comments. 

'.FULL_BASE_URL.'/labprofiles/comment/'.$this->request->data['Comments']['user_id'].'/'.$this->request->data['Comments']['lab_id'].'

Thank you, 
Admin'
	);
}
			
				$this->redirect(array('action'=>'details',$this->request->data['Comments']['user_id']));
			}
		}
		
		public function download($userid, $labid, $noteid = 0){
			
			if($noteid){
				$query = 'SELECT work_note FROM labnotes WHERE user_id = '.$userid.' AND id ='.$noteid;
				$work = $this->Labprofile->query($query);
				$filename = $work[0]['labnotes']['work_note'];
			}
			else{
				$query = 'SELECT work_notes FROM labprofiles WHERE user_id = '.$userid.' AND id ='.$labid;
				$work = $this->Labprofile->query($query);
				$filename = $work[0]['labprofiles']['work_notes'];
			}
			
			$file = IMAGES.'notes/'.$filename;
			
			if (file_exists($file)) {
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename='.basename($file));
				header('Expires: 0');
				header('Cache-Control: must-revalidate');
				header('Pragma: public');
				header('Content-Length: ' . filesize($file));
				readfile($file);
				exit;
			}else{
				throw new NotFoundException(__('File not found.'));
			}
		}
		
		public function comment($userid, $labid){ 
			//echo "userid is :".$userid." and labid is:".$labid;
			//$labs = $this->Lab->find('all',array('conditions'=>array('Labprofile.user_id'=>$userid, 'Labprofile.id'=>$labid), 'fields'=>array('Lab.name','Labprofile.id', 'user.id','Labprofile.date_attempted', 'Labprofile.date_completed', 'Labprofile.work_notes', 'Labprofile.work_status', 'Labprofile.comment', '(SELECT name FROM labs WHERE id = Lab.parent_id) AS p_name')));
			$labs = $this->Labprofile->find('all',array('conditions'=>array('Labprofile.user_id'=>$userid, 'Labprofile.id'=>$labid), 
												'fields'=>array('Labprofile.*', 'note.*', 'cmt.*', 'labmaps.lab_name', 'IF(cmt.status = 2,"Approved","Rejected") AS status'),
												'order'=>array('note.id DESC, cmt.id DESC'),
												'group'=>array('Labprofile.id, note.id, cmt.id'),
											'joins'=>array(
											array(
													'table' => 'labnotes',
													'alias' => 'note',
													'type' => 'LEFT',
													'conditions' => array('note.labprofile_id = Labprofile.id AND note.user_id = '.$userid)
												),
												array(
													'table' => 'comments',
													'alias' => 'cmt',
													'type' => 'LEFT',
													'conditions' => array('cmt.labnote_id = note.id')
												)
												)));
			$temp = array();
			
			//print_r($labs);
			
			foreach($labs as $lab){
				$lab['cmt']['status']= $lab[0]['status'];
				$temp[$lab['note']['id']][] = $lab['cmt'];
			}
			//print_r($temp);
			
			$this->set('role',$this->Auth->user('role'));
			$this->set('comments',$temp);
			$this->set('labs',$labs);

			//debugging: print out all the sql from above
			//$log = $this->Labprofile->getDataSource()->getLog(false, false);
			//debug($log);
		}
		public function labs($labid = 0){ 
			$this->loadModel('Labmaps');
			if($this->Auth->user('role') != 1 ){
				$this->Session->setFlash(__('You don\'t have admin access'));
				$this->redirect(array('action'=>'index'));
			}
			
			$labs = $this->Labmaps->find('all',array('order'=>array('Labmaps.lab_name')));
			
			foreach($labs as $lab){
				$options[$lab['Labmaps']['lab_id']] = $lab['Labmaps']['lab_name'];
				//$values[] = $lab['Labmaps']['lab_id'];
			}
			
			if ($this->request->is('post') || $labid) {
				$this->loadModel('User');
				$labid = isset($this->request->data['Labs']['lab'])?$this->request->data['Labs']['lab']:$labid;
				
				$students = $this->User->find('all',array('conditions' => array('User.status' => '1', 'User.role IN(3,4,5)'),
														  'fields'=>array('User.username', 'User.id','Labprofile.id', 'Labprofile.user_access', 'Labprofile.answer_access'),
														  'joins'=>array(
																	array(
																			'table' => $this->Labprofile,
																			'alias' => 'Labprofile',
																			'type' => 'LEFT',
																			'conditions' => array('User.id = Labprofile.user_id AND Labprofile.id = '.$labid)
																		))
														)
												);
				$this->set('students',$students);
				$this->set('lab_id',$labid);
			}
			
			asort($options);
			$this->set('role',$this->Auth->user('role'));
			$this->set('options',$options);
			

			
		}
		public function permission($lab_id, $userid, $access, $answer = 0){
			if($this->Auth->user('role') != 1 ){
				$this->Session->setFlash(__('You don\'t have admin access'));
				$this->redirect(array('action'=>'index'));
			}
			
			$lab = $this->Labprofile->query('SELECT COUNT(user_id) as count FROM labprofiles WHERE user_id = '.$userid.' AND id = '.$lab_id);
			
			$user = $this->Labprofile->query('SELECT username, email FROM  users WHERE id = '.$userid);
			$labmap = $this->Labprofile->query('SELECT lab_name FROM  labmaps WHERE lab_id = '.$lab_id);
			
			$message = 'Hello '.$user[0]['users']['username'].',

Lab '.$labmap[0]['labmaps']['lab_name'].' is now open. Please complete and submit this lab as quickly as possible. All questions must be asked and resolved before lab presentation. 

If you need help, please use all the available resources before presentation time.

Thank you,
Admin

';

			
			if($lab[0][0]['count']){
				$field = $answer?'answer':'user';
				$this->Labprofile->updateAll( array('Labprofile.'.$field.'_access' => "'" .$access. "'" ),array('AND' => array('Labprofile.user_id' => $userid,
																															'Labprofile.id' => $lab_id)));
				($access && !empty($user[0]['users']['email'])) and $this->email($user[0]['users']['email'], ($answer?'Answer':'Lab').' Access', $message);
				$this->Session->setFlash(__('Permission '.($access?'granded':'denied')));
			}
			else{
				if($answer)
					$this->Labprofile->query('INSERT INTO labprofiles (id, user_id, answer_access, lab_start_date) VALUES ('.$lab_id.','.$userid.',1, CURDATE())');
				else
					$this->Labprofile->query('INSERT INTO labprofiles (id, user_id, user_access, lab_start_date) VALUES ('.$lab_id.','.$userid.',1, CURDATE())');
				
				($access && !empty($user[0]['users']['email'])) and $this->email($user[0]['users']['email'], ($answer?'Answer':'Lab').' Access', $message);
				
				$this->Session->setFlash(__('Permission granded!'));
			}
			
			$this->redirect(array('action'=>'labs',$lab_id));
		}
		
		private function email($to, $subject, $message){
			App::uses('AppController', 'Controller');
			App::uses('CakeEmail', 'Network/Email');
			$Email = new CakeEmail();
			$Email->config('default');
			$Email->to($to);
			$Email->subject($subject);
			$Email->send($message);
		}
    }
?>
