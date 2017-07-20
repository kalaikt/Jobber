<?php 
    class Labprofile extends AppModel{
        
        var $hasOne= array( 'labmaps' => array( 'classname' => 'Labmap', 
        										 'foreignKey' => 'lab_id'     		
        		
        		                                   ),
        		      //      'users' => array( 'classname' => 'Users',
        				//                         'foreignKey' => 'id'
        		
        		          //                         )
        		
        		                                     );
    }
    
?>