<section class="col-xs-12 enrollmentmain">
			<div class="container">
			<h3>Students</h3>
					<table>
						<tr>
							<th>Username</th>
							<th>Email</th>
							<th>Labs</th>
							<th>Payment</th>	
						</tr>
						<?php foreach($users as $user){ ?>
						<tr>
							<td><?php echo count($user['labprofiles'])?$this->Html->link($user['User']['username'],'/labprofiles/details/'.$user['User']['id']):$user['User']['username'];?></td>
							<td><?php echo $user['User']['email'];?></td>
							<td><?php echo count($user['labprofiles'])?$this->Html->link(count($user['labprofiles']),'/labprofiles/details/'.$user['User']['id']):count($user['labprofiles']);
		 print ' ( '.($user['User']['status']?'active account, ':'inactive account, ').(isset($count[$user['User']['id']]['att_count'])?$count[$user['User']['id']]['att_count']:0).' labs attempted, '.(isset($count[$user['User']['id']]['comp_count'])?$count[$user['User']['id']]['comp_count']:0).' labs completed )';
	?></td>
	<td><?php echo $this->Html->link($user['0']['pay'],'/users/payment/'.$user['User']['id'])?></td>	
						</tr>
						<?php }?>
						
					</table>
					
				</div>
		</section>