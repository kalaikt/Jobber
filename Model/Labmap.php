<?php 
    class Labmap extends AppModel{
        var $hasMany= array( 'labprofiles' => array( 'classname' => 'Labprofile' 		
        		
        		                                   ));
    }
    
?>