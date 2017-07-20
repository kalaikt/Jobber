<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<section class="col-xs-12 tutorialsmain">


			<div class="container">
				<h3>Upcoming Classes</h3>
     		     <div class="col-md-6 listedtext col-xs-12">
                         <div><?php echo $this->Html->link('Introduction to Cloud Computing With AWS', '/upcomings/aws101'); ?></div>
                         <div><?php echo $this->Html->link('Linux Job Interview Preparation', '/upcomings/interviewpreparation'); ?></div>
                         <div><?php echo $this->Html->link('Introduction to Bash Scripting', '/upcomings/bash101'); ?></div>
                         <div><?php echo $this->Html->link('PUPPET 101, Introduction', '/upcomings/puppet101'); ?></div>
                         <div><?php echo $this->Html->link('Navigating Linux File System', '/upcomings/fs101'); ?></div>
     		     </div>
     		     <div class="col-md-6 tutorialimgarea col-xs-12">
     		     	<img src="<?php echo $this->Html->url('/', true).IMAGES_URL;?>linux_book.jpg" width="200" />
     		     	
     		     </div>
     		
		</section>
		<script>

$( ".inputarea" ).blur(function() {
    $( "#custom" ).val( $( "#firstname" ).val() +' '+$( "#lastname" ).val() +'|'+$( "#address" ).val()+'|'+$( "#email" ).val()+'|'+$( "#phoneno" ).val());
  });
</script>
		
	
		

		<script>
		$( ".formpopoup" ).hide();
$( ".buybtn" ).click(function(e) {
	
  $(this).hide()
  $( ".formpopoup" ).show();
});

</script>	
