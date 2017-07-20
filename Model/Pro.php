<?php 
    class Pro extends AppModel{
        var $hasOne= 'Pro_applicant';
        var $hasMany= array( 'pro_reference' => array( 'classname' => 'Pro_reference', 'foreignKey' => 'pro_id'));
    }
    
?>
