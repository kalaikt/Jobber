<section class="col-xs-12 enrollmentmain">
			<div class="container">
			<h3><?php echo $user[0]['users']['username']?> - Payment details</h3>
			<?php if($role ==1){?>
			<div align="right"><?php echo $this->Html->link('Add New Row','/users/addpayment/'.$user_id)?> </div>
			<?php }?>
					<table>
						<tr>
							<th>Date</th>
							<th>Amount</th>
							<th>Status</th>
							<?php if($role ==1){?>
							<th>Action</th>
							<?php }?>
						</tr>
						<?php if(count($payment)){
						foreach($payment as $pay){
						?>
						<tr>
							<td><?php echo date('m/d/Y',strtotime($pay['payments']['date_expected']))?></td>
							<td><?php echo $pay['payments']['amount_expected'] ?></td>
							<td><?php echo $pay['payments']['payment_received']?'Paid':'Unpaid'; ?></td>
							<?php if($role ==1){?>
							<td><?php echo $this->Html->link('Edit', '/users/addpayment/'.$user_id.'/'.$pay['payments']['id']) ?></td>
							<?php }?>
						</tr>
						<?php 
						}
						}
						else
						{
						?>
						<tr>
							<td colspan=3>No Payment Details</td>
						</tr>
						<?php }
						?>
					</table>
					
				</div>
		</section>