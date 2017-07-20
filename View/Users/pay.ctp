<section class="col-xs-12 enrollmentmain">
  <div class="container">
    <h3>Welcome <?php echo $name?></h3>
    <strong>A total of $<?php echo $payment[0][0]['amount'];?> is past due on your account
    </strong> 
	<?php
//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
//$paypal_id = 'kalai.k.t@gmail.com'; // Business email ID
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id = 'laughalots@hotmail.com'; // Business email ID


?>
<br/>

<br/>
<form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">

<input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
	
    <input type="hidden" name="item_name" id="item_name_1" value="Student/Book Fee">
    <input type="hidden" name="item_number" id="item_number_1" value="1">
    <input type="hidden" name="amount" value="<?php echo $payment[0][0]['amount'];?>" id="amount_1">
	<input type="hidden" name="cpp_header_image" value="http://linuxjobber.com/images/logo.png">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
	<input type="hidden" name="custom" value="<?php echo $userid;?>" id="custom">
    <input type="hidden" name="cancel_return" value="<?php echo $this->Html->url('/', true).'users/cancel';?>">
	<input type="hidden" name="notify_url" value="<?php echo $this->Html->url('/', true).'users/pay_notify';?>">
    <input type="hidden" name="return" value="<?php echo $this->Html->url('/', true).'users/pay_success';?>">
    <div id="paypal-btn" >
	<input type="image" style="width:auto;" src="<?php echo $this->Html->url('/', true)?>img/pay-now.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> 
	<!--<input type="button" value="I will pay later" style="width:auto;">-->
	<?php echo $this->Html->link('I will pay later', $this->Html->url('/', true)); ?>
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</div>
	
    </form> 

</div>
</section>


