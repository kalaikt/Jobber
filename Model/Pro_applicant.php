<?php 
    class Pro_applicant extends AppModel{

        //public $belongsTo = 'Pro';
        public $hasMany = 'Pro_reference';
        //var $hasOne= array( 'pro_reference' => array( 'classname' => 'Pro_reference', 'foreignKey' => 'pro_id'));
    }
    
?>
