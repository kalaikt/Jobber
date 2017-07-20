<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<style>
.physicalstorage {
	padding: 0 10px 20px;
}

	 .physicalstorage h3{ 
	color: #cf2c30;
	font-family: 'HelveticaLTStdCondensed';
	font-size: 24px; 
	margin:50px 0 20px;
	
}
</style>
 <div class="container physicalstorage">
    <?php 
    if( $lab_topic == "physicalstorages"){
        if( $allow_access == "true")
            echo $this->element('physicalstorages');
        
    }elseif( $lab_topic == "virtualization"){
        if( $allow_access == "true")
            echo $this->element('virtualization');
        
    }elseif( $lab_topic == "filemanagement"){
        if( $allow_access == "true")
            echo $this->element('filemanagement');
        
    }elseif( $lab_topic == "users_and_groups"){
        if( $allow_access == "true")
            echo $this->element('users_and_groups');
        
    }elseif( $lab_topic == "scripting"){
        if( $allow_access == "true")
            echo $this->element('scripting');
        
    }elseif( $lab_topic == "networking_basics"){
        if( $allow_access == "true")
            echo $this->element('networking_basics');
        
    }elseif( $lab_topic == "local_component_installation"){
        if( $allow_access == "true")
            echo $this->element('local_component_installation');
        
    }elseif( $lab_topic == "web_server_setup"){
        if( $allow_access == "true")
            echo $this->element('web_server_setup'); 
        
    ///////////////   Proficiency   ///////////////
    
    }elseif( $lab_topic == "server_client_communication"){
        if( $allow_access == "true")
            echo $this->element('server_client_communication'); 
    
    }elseif( $lab_topic == "task_automation"){
        if( $allow_access == "true")
            echo $this->element('task_automation'); 
    
    }elseif( $lab_topic == "commandline"){
        if( $allow_access == "true")
            echo $this->element('commandline'); 
 
    }elseif( $lab_topic == "network_troubleshooting"){
        if( $allow_access == "true")
            echo $this->element('network_troubleshooting'); 
        
    }elseif( $lab_topic == "software_repository_concept"){
        if( $allow_access == "true")
            echo $this->element('software_repository_concept'); 
        
    }elseif( $lab_topic == "managing_software"){
        if( $allow_access == "true")
            echo $this->element('managing_software'); 
        
    }elseif( $lab_topic == "linux_windows_filesharing"){
        if( $allow_access == "true")
            echo $this->element('linux_windows_filesharing'); 
            
    }elseif( $lab_topic == "file_access_control"){
        if( $allow_access == "true")
            echo $this->element('file_access_control'); 
        
    }elseif( $lab_topic == "managing_partitions"){
        if( $allow_access == "true")
            echo $this->element('managing_partitions'); 
        
    }elseif( $lab_topic == "flexible_storages"){
        if( $allow_access == "true")
            echo $this->element('flexible_storages'); 
        
    }elseif( $lab_topic == "file_system_sharing"){
        if( $allow_access == "true")
            echo $this->element('file_system_sharing'); 
        
    }elseif( $lab_topic == "shared_home_directories"){
        if( $allow_access == "true")
            echo $this->element('shared_home_directories');
        
    }elseif( $lab_topic == "storage_systems"){
        if( $allow_access == "true")
            echo $this->element('storage_systems'); 
        
    }elseif( $lab_topic == "network_monitors"){
        if( $allow_access == "true")
            echo $this->element('network_monitors'); 
        
    }elseif( $lab_topic == "logs"){
        if( $allow_access == "true")
            echo $this->element('logs'); 
        
    }elseif( $lab_topic == "managing_processes"){
        if( $allow_access == "true")
            echo $this->element('managing_processes');  
        
    }elseif( $lab_topic == "preparing_for_work"){
        if( $allow_access == "true")
            echo $this->element('preparing_for_work'); 
            
    }elseif( $lab_topic == "dns"){
        if( $allow_access == "true")
            echo $this->element('dns'); 
    
////////////////// bash scripting ///////////////////////

////////////////// PUPPET        ////////////////////////

    }elseif( $lab_topic == "puppetintroduction"){
        if( $allow_access == "true")
            echo $this->element('puppetintroduction'); 

    }elseif( $lab_topic == "puppetsimpleuse"){
        if( $allow_access == "true")
            echo $this->element('puppetsimpleuse'); 

    }elseif( $lab_topic == "puppetlanguage"){
        if( $allow_access == "true")
            echo $this->element('puppetlanguage'); 

    }elseif( $lab_topic == "puppetmodules"){
        if( $allow_access == "true")
            echo $this->element('puppetmodules'); 

    }elseif( $lab_topic == "puppetclasses"){
        if( $allow_access == "true")
            echo $this->element('puppetclasses'); 

//////////////////  AWS          ////////////////////////

    }
?>
<?php echo $this->Form->create('Labprofile',array('action' => 'completed','type' => 'file')); ?>
<br /><strong>When you have finished all the steps, click the check box and submit:</strong> <br />
    Check <strong>ONLY</strong> if you are done<?php echo " ".$this->Form->checkbox('work_status',array('value' => '1' ))." "; ?>
	 <?php echo $this->Form->input('user_id',array('type' => 'hidden', 'value' => $logged_in_user)); ?>
    <?php echo $this->Form->input('id',array('type' => 'hidden', 'value' => $requested_lab_id['Labmaps']['lab_id'])); ?>
	<div id="note" style="display:none;"> <?php echo $this->Form->input('work_notes', array('type' => 'file' ));?></div>
    <?php echo $this->Form->end(__('Submit')); ?>
	
    </div>
 <div>
  </div> 
<script>
	$(document).ready(function () {
		
		$("input[type='checkbox']").change(function () {
		
			if(this.checked){
				$("input[type='file']").attr('required', true);
				$("#note").show("slow");
			}
			else{
				$("input[type='file']").removeAttr('required', '');
				$("#note").hide("slow");
			}
		 });
		 
	});

</script>
