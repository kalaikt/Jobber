<section class="col-xs-12 enrollmentmain">
			<div class="container">
			<h3><?php echo $user[0]['users']['username']?> - Add Payment </h3>
					<?php echo $this->Form->create('Payment');?>
    <fieldset>
     <?php echo $this->Html->css('jquery-ui.min'); 
		echo $this->Html->script('jquery-2.1.1.min'); 
		echo $this->Html->script('jquery-ui.min'); 
		$color ='';
		if(isset($payment[0])){
			if($payment[0]['payments']['date_expected']<date('Y-m-d'))
				$color = 'style="background-color: gray;" readonly';
			else
				$color ='';
		}

		
        echo $this->Form->input("date", array('id' => 'datepicker', $color, 'readonly', 'required', 'label'=>'Date Expected', 'value'=>(isset($payment[0]['payments']['date_expected'])?date('Y-m-d',strtotime($payment[0]['payments']['date_expected'])):''))); 
	
        echo $this->Form->input('amount_expected', array('type'=>'number', $color, 'required', 'value'=>(isset($payment[0]['payments']['amount_expected'])?$payment[0]['payments']['amount_expected']:'')));
		echo '<label for="payment_received">Status</label>';
        echo $this->Form->input('payment_received', array('type'=>'radio', 'required','legend' => false, 'default' => (isset($payment[0]['payments']['payment_received'])?$payment[0]['payments']['payment_received']:''), 'options'=>array('1'=>'Paid', '0'=>'Unpaid')));
		
        echo $this->Form->hidden('user_id', array('value'=>$user_id));
		
		if($id)
			echo $this->Form->hidden('id', array('value'=>$id));
         
        echo $this->Form->submit(($id?'Save':'Add Payment'), array('class' => 'form-submit',  'title' => 'Click here to add the Payment', 'onsubmit'=>'return validate();') );
?>
    </fieldset>
<?php echo $this->Form->end(); ?>

					
				</div>
		</section>


<?php if(empty($color)){?>
		
<script>
$(document).ready(function(){
               
			   $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd', minDate:0});
        });
function validate(){
	
}
</script>
<?php }?>