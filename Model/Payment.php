<?php 
    class Payment extends AppModel{
        
        var $hasOne= array( 'user' => array( 'classname' => 'User', 
        										 'foreignKey' => false,
												 'conditions'=> array('user.id = Payment.user_id')     		
        									)
        		);
		
    }
    
?>