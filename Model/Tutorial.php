<?php 
    class Tutorial extends AppModel{
        var $hasMany= array( 'labprofiles' => array( 'classname' => 'Labprofile' 		
        		
        		                                   ));
    }
    
?>