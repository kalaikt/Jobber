<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<section class="col-xs-12 enrollmentmain">
<?php
			//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
			//$paypal_id = 'kalai.k.t@gmail.com'; // Business email ID
			$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
			//$paypal_id = 'showpopulous@gmail.com'; // Business email ID
			$paypal_id = 'laughalots@hotmail.com'; // Business email ID
			$program='';
			$price='';
			if(isset($_GET['program']) && isset($_GET['price'])){
				$program = $_GET['program'];
				$price = $_GET['price'];
			}
			$deposit = $price;

?>
<form role="form" action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
			<div class="container">
				<?php if(isset($_GET['program']) && isset($_GET['price'])){?>
					<table>
						<tr>
							<th>S.No</th>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
						</tr>
						<tr>
							<td>1.</td>
							<td><?php if($_GET['program'] == 'self study'){ echo 'OL401';}
							         elseif($_GET['program'] == 'Instructor-led'){ echo 'OL402';}
							         elseif($_GET['program'] == 'EX200'){ echo 'RH2252';}
							         elseif($_GET['program'] == 'Remedial'){ echo 'R101';}
							         elseif($_GET['program'] == 'Classes'){ echo 'L101';}
							         elseif($_GET['program'] == 'Linux_Training'){ echo 'LVT201';}
							         elseif($_GET['program'] == 'Amazon_Web_Services'){ echo 'AWS197';}
							         elseif($_GET['program'] == 'RHCSA_Videos'){ echo 'EX2214';}
							     ?>
							 </td>
							<td><?php echo $program; ?> Linux Training Program</td>
							<td> $<?php echo $price; ?></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					<div class="col-xs-12 enrollbtn-area">
					<div class="col-md-4 enrollbtn col-xs-12"><a href="javascript:void(0);" class="btnarea" onclick="$('#item_name_1').val('<?php echo $program;?> Online Training Program');$('#amount_1').val('<?php echo $deposit;?>'); $('#custom').val('<?php echo $userid, '|', '<?php echo $program;?> Online Training Program', '|', $deposit; ?>');">TOTAL ($<?php echo $deposit;?>)</a></div>
					</div>
					<?php }else{ ?>
					<table>
						<tr>
							<th>S.No</th>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
						</tr>
						<tr>
							<td colspan="4">There is no online training selected by user !!.</td>
						</tr>
					</table>
					<div class="nextbtn pull-right"> 
						<?php echo $this->Html->link('Click to choose','/services/onlinetraining'); ?>
					</div>
					<?php } ?>
					<div class="col-md-8 formpopoup col-xs-12"> 
				<div class="modal-content popupform">
     							 <div class="modal-header">
        							<h6>Please fill the form</h6>
      							 </div>
      							<div class="modal-body">
        						
        							<div class="form-group">
										<?php 
											echo $this->Form->input(
													'firstname',
													array('label' => 'First Name', 'required'=>'required', 'class' => 'form-control inputarea')
												); ?>
        							</div>
        							<div class="form-group">
										<?php 
											echo $this->Form->input(
													'lastname',
													array('label' => 'Last Name', 'required'=>'required', 'class' => 'form-control inputarea')
												); ?>
        							</div>
        							<div class="form-group">
										<?php 
											echo $this->Form->input(
													'email',
													array('label' => 'Email', 'required'=>'required', 'type' => 'email', 'class' => 'form-control inputarea')
												); ?>
        							</div>
        							
			<input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
			<input type="hidden" name="cmd" value="_xclick">
			
			<input type="hidden" name="item_name" id="item_name_1" value="">
			<input type="hidden" name="item_number" id="item_number_1" value="1">
			<input type="hidden" name="amount" value="" id="amount_1">
			<input type="hidden" name="cpp_header_image" value="http://linuxjobber.com/img/lj.png">
			<input type="hidden" name="no_shipping" value="1">
			<input type="hidden" name="currency_code" value="USD">
			<input type="hidden" name="handling" value="0">
			<input type="hidden" name="custom" value="" id="custom">
			<input type="hidden" name="cancel_return" value="<?php echo $this->Html->url('/', true).'tutorials/cancel';?>">
			<input type="hidden" name="notify_url" value="<?php echo $this->Html->url('/', true).'tutorials/video_notify';?>">
			<input type="hidden" name="return" value="<?php echo $this->Html->url('/', true).'tutorials/video_success';?>">
									
        						<button type="submit" class="btn btn-default popupbtn" name="submit" onclick="return isValid();">Buy Now</button>
        						<div class="col-xs-12 paycards"><img src="../../images/paycards.gif" /></div>
      						</form>
      					</div>
   					 </div>
				</div>
				<div class="col-md-4 blank col-xs-12"></div>
					
					
				</div>
		</section>
		<script>
function isValid(){
	if($('#firstname').val() != '' && $('#lastname').val() != '' && $('#email').val() != ''){
		$('#custom').val($('#custom').val()+'|'+$('#firstname').val()+'|'+$('#lastname').val()+'|'+$('#email').val());
		return true;
	}
	
}
</script>

		
<script>
$( ".formpopoup" ).hide();
$( ".btnarea" ).click(function(e) {
  $(".enrollbtn-area").hide()
  $( ".formpopoup" ).show();
});

</script>

