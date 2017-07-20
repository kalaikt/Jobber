<?php 
	class Lectureresource extends AppModel{
		
        var $belongsTo= array( 'labprofile' => array( 'classname' => 'Labprofile', 
        										 'foreignKey' => false,
												 'conditions'=> array('Lectureresource.labprofile_id = labprofile.id')         		
        		        		            	),
							'user' => array( 'classname' => 'User', 
        										 'foreignKey' => false,
												 'conditions'=> array('user.id = labprofile.user_id')     		
        									),
							'Lecturenotes' => array( 'classname' => 'Lecturenotes', 
        										 'foreignKey' => false,
												 'conditions'=> array('Lecturenotes.resource_id = Lectureresource.id')     		
        									)
        		);
		
    }
    
?>