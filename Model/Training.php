<?php 
    class Training extends AppModel{
    	public $validate = array(
    			                 'fullname' => array(
    			                 		              'rule' => 'notEmpty',
    			                 		              'required' => 'true'
    			                 		            ),
    			                 'email' => 'email',
    			                 'phone' => array(
    			                 		           'rule' => 'numeric',
    			                 		           'required' => 'true',
    			                 		           'message' => 'Please enter numbers only, no spaces'
    			                 		         ),
    			                  'classcode' => array(
    			                  		            'rule' => 'numeric',
    			                  		            'required' => 'true'
    			                  		             ) 
    			                );
        var $name = 'training';
    }
?>