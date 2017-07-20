<?php
//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
//$paypal_id = 'kalai.k.t@gmail.com'; // Business email ID
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id = 'laughalots@hotmail.com'; // Business email ID

$fundamentals_price = 69;

$proficiency_price = 329;


//$fundamentals_price = 1;

//$proficiency_price = 1;
?>
<br/>

<br/>
<form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">

<?php echo $type == 'fundamentals'? 'Fundamentals $99, currently on sale for $69':'Proficiency $399, Currently on sale for $329';?>

<br/><br/>

<input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
	
    <input type="hidden" name="item_name" id="item_name_1" value="<?php echo $type == 'fundamentals'? 'Fundamentals $99, currently on sale for $69':'Proficiency $399, Currently on sale for $329';?>">
    <input type="hidden" name="item_number" id="item_number_1" value="1">
    <input type="hidden" name="amount" value="<?php echo $type == 'fundamentals'? $fundamentals_price:$proficiency_price;?>" id="amount_1">
	<input type="hidden" name="cpp_header_image" value="http://linuxjobber.com/img/lj.png">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
	<input type="hidden" name="custom" value="<?php echo $userid, '|', ($type == 'fundamentals'? 'Fundamentals $99, currently on sale for $69':'Proficiency $399, Currently on sale for $329'), '|',($type == 'fundamentals'? $fundamentals_price:$proficiency_price);?>" id="custom">
    <input type="hidden" name="cancel_return" value="<?php echo $this->Html->url('/', true).'tutorials/cancel';?>">
	<input type="hidden" name="notify_url" value="<?php echo $this->Html->url('/', true).'tutorials/video_notify';?>">
    <input type="hidden" name="return" value="<?php echo $this->Html->url('/', true).'tutorials/video_success';?>">
    <div id="paypal-btn" >
	<input type="image" style="width:auto;" onclick="return isValid();" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</div>
	
    </form> 
