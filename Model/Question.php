<?php 
    class Home extends AppModel{
        var $name = 'Home';
        
        var $hasMany= array( 'Question' => array( 'classname' => 'Question',
                                                    'foreignKey' => 'home_id'     		
        		
        		                                   ));
    }
    
    class Question extends AppModel{
    	var $name = 'Question';
    	
    	var $belongsTo = array( 'Home' => array( 'classname' => 'Home'
    			                             ));
    }
?>