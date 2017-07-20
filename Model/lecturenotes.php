<?php 
    class Lecturenotes extends AppModel{
        
        var $belongsTo= array( 'Lectureresource' => array( 'classname' => 'Lectureresource', 
        										 'foreignKey' => 'resource_id'     		
        		        		            	)
        		);
		
    }
    
?>