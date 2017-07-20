<?php 
    class Lab extends AppModel{
        
        var $hasOne= array( 'labprofile' => array( 'classname' => 'Labprofile', 
        										 'foreignKey' => 'id'     		
        		        		            	),
							'user' => array( 'classname' => 'User', 
        										 'foreignKey' => false,
												 'conditions'=> array('user.id = labprofile.user_id')     		
        									)
        		);
		
    }
    
?>