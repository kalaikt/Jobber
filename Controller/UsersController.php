<?php

class UsersController extends AppController {

	public $components = array(
			'DebugKit.Toolbar',
			'Session',
			'Auth' => array(
					'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
					'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
					'authError' => 'You must be logged in to view this page.',
					'authorize' => array('Controller'),
					'loginError' => 'Invalid Username or Password entered, please try again.'
	
			));
	
	// only allow the login controllers only
/*	public function beforeFilter() {
		$this->Auth->allow('login', 'add');
	}
*/
	
	//function beforeFilter() {
		///$this->Auth->authorize = 'UsersController';
		//$this->Auth->allow('login', 'add');
	//}
		
	public function isAuthorized($user) {
//		// Here is where we should verify the role and give access based on role
//        if ($this->Auth->user('role') != '1') {
//            $this->Auth->deny('index', 'add', 'edit', 'delete');
//        }
			
		return true;
	}

	
	public function beforeFilter() {
    //    if ($this->Auth->user('role') == '1') {
    //        $this->Auth->deny('index', 'add', 'edit', 'delete');
    //    }else{
		    parent::beforeFilter();
		    $this->Auth->allow('login','add','contactadmin', 'cancel', 'pay_notify', 'pay_success');
    //    }
	}
	
    public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
        'order' => array('User.username' => 'asc' )
    );
    
    public function contactadmin(){
    	
    }
     
 
    public function login() {
         
        //if already logged-in, redirect
        if($this->Session->check('Auth.User')){
            $this->redirect(array('action' => 'index'));     
        }
         
        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
				if(in_array($this->Auth->user('role'), array(3,4,5))){
					$payment=$this->User->query('select count(*) as cnt from payments where payment_received=0 AND date_expected < NOW() and user_id='.$this->Auth->user('id'));
				  if($payment[0][0]['cnt'])	
				  {
				        $this->redirect('/users/pay');
				  
				  }
				}
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Invalid username or password. Contact showpopulous@gmail.com'));
            }
        }
    }
 
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
 
    public function index() {
    	$this->isAdmin();
    	
        //$this->paginate = array(
        //    'limit' => 6,
        //    'order' => array('User.username' => 'asc' )
        //);
        $this->paginate = array(
            'limit' => 6,
            'order' => array('User.status' => 'desc' )
        );
        $users = $this->paginate('User');
        $this->set(compact('users'));
    }
 
 
    public function add() {
    	//comment this to allow everyone to add users to site. Use for troubleshooting
//    	$this->isAdmin();
        if ($this->request->is('post')) {
                 
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been created'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be created. Please, try again.'));
            }  
        }
    }
 
    public function edit($id = null) {
    	$this->isAdmin();
 
            if (!$id) {
                $this->Session->setFlash('Please provide a user id');
                $this->redirect(array('action'=>'index'));
            }
 
            $user = $this->User->findById($id);
            if (!$user) {
                $this->Session->setFlash('Invalid User ID Provided');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->User->id = $id;
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('The user has been updated'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('Unable to update your user.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $user;
            }
    }
 
    public function delete($id = null) {
    	$this->isAdmin();
         
        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 0)) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
     
    public function activate($id = null) {
    	$this->isAdmin();
         
        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 1)) {
            $this->Session->setFlash(__('User re-activated'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not re-activated'));
        $this->redirect(array('action' => 'index'));
    }
    
    public function isAdmin(){
    	if ($this->Auth->user('role') == '1'){
    	}else{
    		$this->redirect(array('action'=>'contactadmin'));
        }
    }
	public function students(){
		$this->isAdminAndInst();
		if($this->Auth->user('role') == '1'){
			$this->paginate = array(
				'limit' => 40,
				'conditions' => array('status' => '1', 'role IN(3,4,5)'),
				'fields' => array('User.*', '(IF((SELECT COUNT(*) FROM payments WHERE user_id = User.id AND payment_received = 0), "Yes", "No") ) AS pay'),
				'order' => array('User.username' => 'asc' )/*,
				'joins' => array(
								array(
										'table' => 'payment',
										'alias' => 'pay',
										'type' => 'LEFT',
										'conditions' => array('User.id = pay.user_id')
									)
								)	*/
			);
		}
		else{
			$this->paginate = array(
				'limit' => 40,
				'conditions' => array('role IN(3,4,5)'),
				'order' => array('User.username' => 'asc' )
			);
		}
        $users = $this->paginate('User');
		//print_r($users);
		$attempt = $this->User->query('SELECT user_id, COUNT(work_status) as count FROM labprofiles WHERE work_status = 1 GROUP BY user_id');
		$complete = $this->User->query('SELECT user_id, COUNT(work_status) as count FROM labprofiles WHERE work_status = 2 GROUP BY user_id');
		
		$temp = array();
		foreach($attempt as $att){
			$temp[$att['labprofiles']['user_id']]['att_count'] = $att[0]['count'];
		}
		foreach($complete as $comp){
			$temp[$comp['labprofiles']['user_id']]['comp_count'] = $comp[0]['count'];
		}


		
		$this->set('count', $temp);
        $this->set(compact('users'));
			
	}
	public function payment($user_id){
		$payment= $this->User->query('SELECT * FROM payments WHERE user_id = '.$user_id);
		$user= $this->User->query('SELECT * FROM users WHERE id = '.$user_id);
		 
		$this->set('payment',$payment);
		$this->set('user_id',$user_id);
		$this->set('user',$user);
		$this->set('role',$this->Auth->user('role'));
	}
	public function addPayment($user_id, $id = 0){
		$user= $this->User->query('SELECT * FROM users WHERE id = '.$user_id);
		$payment= $this->User->query('SELECT * FROM payments WHERE id = '.$id);
		 if ($this->request->is('post')) {
            $this->loadModel('Payment');
            $this->Payment->create();
			$this->request->data['Payment']['date_expected'] = $this->request->data['Payment']['date'];
            if ($this->Payment->save($this->request->data)) {
                $this->Session->setFlash(__('The payment has been created'));
                $this->redirect(array('action' => 'payment',$user_id));
            } else {
                $this->Session->setFlash(__('The payment could not be created. Please, try again.'));
            }  
        }
		$this->set('payment',$payment);
		$this->set('user',$user);
		$this->set('user_id',$user_id);
		$this->set('id',$id);
	}
	
	public function isAdminAndInst(){
    	if ($this->Auth->user('role') == '1' || $this->Auth->user('role') == '2'){
    	}else{
    		$this->redirect(array('action'=>'contactadmin'));
        }
    }
	public function pay(){
		$payment = $this->User->query('select sum(amount_expected)as amount from payments where payment_received=0 and user_id='.$this->Auth->user('id'));
		$this->set('name', $this->Auth->user('username'));
		$this->set('userid', $this->Auth->user('id'));
		$this->set('payment', $payment);
	}
	public function cancel(){}
	
	public function pay_notify(){
		if ($this->request->is('post') && isset($this->request->data['txn_id'])) {
			
			$this->savePaymentStatus();
			//debug($this->User->validationErrors);
		}
	}
	public function pay_success(){
		if ($this->request->is('post') && isset($this->request->data['txn_id'])) {
                
			$transaction = $this->User->query("SELECT COUNT(txn_id) as count FROM orders WHERE txn_id ='".$this->request->data['txn_id']."'");
			
			!$transaction[0][0]['count'] and $this->savePaymentStatus();
							
			$this->Session->setFlash(__('Payment success'));
			
			$this->redirect(array('action' => 'pay_success'));

			//debug($this->User->validationErrors);
		}
	}
	
	private function savePaymentStatus(){
				
		$this->User->query('UPDATE payments SET payment_received=1 WHERE user_id ='.$this->request->data['custom']);
		
		$this->User->query("INSERT INTO `orders` ( `user_id`, `amount`, `txn_id`) 
				VALUES ( '".$this->request->data['custom']."', '".$this->request->data['payment_gross']."', '".$this->request->data['txn_id']."')");
		$insert = $this->User->query('SELECT LAST_INSERT_ID() as insertid');
		
		$this->User->query("INSERT INTO `order_details` ( `order_id`, `product_name`, `price`) VALUES ( '".$insert[0][0]['insertid']."', 'Student Fee', '".$this->request->data['payment_gross']."')");
		
		App::uses('AppController', 'Controller');
		App::uses('CakeEmail', 'Network/Email');
		
		$Email = new CakeEmail();
				
		$Email->config('default');
		$Email->to('forum@linuxjobber.com');
		$Email->subject('Order Details');
		$Email->send('Helo ,

'.$user[0]['users']['username'].' have purchased '.$name[1].'videos.
'.$details.'

Thanks & Regards
Admin');
		
	}
	
 
}

?>
