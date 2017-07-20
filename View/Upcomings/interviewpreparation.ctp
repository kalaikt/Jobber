<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<section class="col-xs-12 tutorialsmain">
      <?php
		//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
		//$paypal_id = 'kalai.k.t@gmail.com'; // Business email ID
		$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
		$paypal_id = 'laughalots@hotmail.com'; // Business email ID
		$price = 19.95;
		//$price = 1;
?>
			<div class="container">
				<h3>Linux Job Interview Preparation</h3>
       		            <div><span style="font-size: 16px; "><br /><strong>Date:</strong> Tuesday, April 19th, <strong><br />Start:</strong> 7pm, <strong><br />Duration: </strong> 1 hour, <strong><br />Location: </strong>Live, Virtual </span></div>       
                    <div class="col-md-6 listedtext col-xs-12">
     		     	<ul>
     		     		<!-- li>Overview of Cloud Computing</li>
     		     		<li>Amazon Web Services Components</li -->
     		     		<li>Finding the right opportunity for you</li>
     		     		<li>Average Salary in the industry</li>
     		     		<li>Determining your asking salary</li>
     		     		<li>Technical preparation for the interview</li>
     		     		
     		     	</ul>
     		     </div>
                     <div>&nbsp;</div>
                     <div>&nbsp;</div>
     		     <div class="col-md-6 tutorialimgarea col-xs-12">
     		     	<!-- img src="<?php echo $this->Html->url('/', true).IMAGES_URL;?>linux_book.jpg" width="200" / -->
                         <div>&nbsp;</div>
                         <div>&nbsp;</div>
                         <div>&nbsp;</div>
                         <div>&nbsp;</div>
                         <div>&nbsp;</div>
                         <div>&nbsp;</div>
                         <div>&nbsp;</div>
                         <div>&nbsp;</div>
     		     	
     		     </div>
     		     <!-- div class="col-xs-12 tutorialtext">
     		     	<span>Audience</span>
     		     	<p>This class is designed for anyone who is seeking to become a Linux Administrator and needs to unerstand how the industry works and how to prepare for Linux interviews.</p>
     		     </div -->
				 <h3>Price: Free </h3>
     		    <div class="col-xs-12 nextbtn buybtn" > 
     		    	<!-- a href="javascript:void(0);">Register</a -->
                        <?= $this->Html->link('Register','/jobs/generaldiscussion'); ?>                       
     		    </div>
     		    
     		
     		    <div class="col-md-8 formpopoup col-xs-12">
				<div class="modal-content popupform">
     							 <div class="modal-header">
        							<h6>Please fill the form</h6>
      							 </div>
      							<div class="modal-body">
        						<form role="form" action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
        							<div class="form-group">
									<?php	echo $this->Form->input(
														'firstname',
														array('label' => 'First Name', 'required'=>'required', 'class' => 'form-control inputarea')
																);  ?>
        							</div>
        							<div class="form-group">
										<?php	echo $this->Form->input(
														'lastname',
														array('label' => 'Last Name', 'required'=>'required', 'class' => 'form-control inputarea')
																);  ?>
        							</div>
        							<div class="form-group">
										<?php	echo $this->Form->input(
														'email',
														array('label' => 'Email', 'required'=>'required', 'type' => 'email', 'class' => 'form-control inputarea')
																);  ?>
        							</div>
        							<div class="form-group">
										<?php	echo $this->Form->input(
														'phoneno',
														array('label' => 'Phone', 'required'=>'required', 'class' => 'form-control inputarea')
																);  ?>
        							</div>
        							<div class="form-group">
										<?php	echo $this->Form->input(
														'address',
														array('label' => 'Home Address', 'required'=>'required', 'class' => 'form-control inputarea')
																);  ?>
        							</div>
				<input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="item_name" value="AWS101">
				<input type="hidden" name="item_number" value="1003">
				<input type="hidden" name="amount" value="<?php echo $price;?>">
				<input type="hidden" name="cpp_header_image" value="http://linuxjobber.com/images/logo.png">
				<input type="hidden" name="no_shipping" value="2">
				<input type="hidden" name="shipping" value="0.00">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="handling" value="0">
				<input type="hidden" name="custom" value="" id="custom">
				<input type="hidden" name="cancel_return" value="<?php echo $this->Html->url('/', true).'tutorials/cancel';?>">
				<input type="hidden" name="notify_url" value="<?php echo $this->Html->url('/', true).'tutorials/notify';?>">
				<input type="hidden" name="return" value="<?php echo $this->Html->url('/', true).'tutorials/success';?>">
								
								
        						<button type="submit" class="btn btn-default popupbtn">Register</button>
        						<div class="col-xs-12 paycards"><img src="../images/paycards.gif" /></div>
      						</form>
      					</div>
   					 </div>
				</div>
				<div class="col-md-4 blank col-xs-12"></div>
     		    
     		    
     		     
     		     
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
