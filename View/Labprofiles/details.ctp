<section class="col-xs-12 enrollmentmain">
			<div class="container">
				<h3>Lab Detail</h3>
					<table>
					<?php $flg = 1;$flg1 =1; foreach($labs as $k=>$lab){ ?>
					<?php if ($lab['Labprofile']['id'] <= "100" && $flg){$flg = 0; 
					   echo "<tr>
							<th>S No.</th>
							<th style=\"width: auto\">Linux Fundamentals</th>
							<th></th>
							<th></th>
						</tr>";} elseif ( $lab['Labprofile']['id'] >= "101" && $flg1){$flg1 = 0;
						 echo "<tr>
							<th>S No.</th>
							<th style=\"width: auto\">Linux Proficiency</th>
							<th></th>
							<th></th>
						</tr>";} ?>
						<tr>
							<td><?php echo $lab['Labprofile']['id']; ?>.</td>
							<td><?php echo $lab['labmaps']['lab_name']; ?></td>
							<td><?php echo $lab['Labprofile']['work_status']=='1'?$this->Html->link('Yes','/labprofiles/comment/'.$lab['Labprofile']['user_id'].'/'.$lab['Labprofile']['id']):($lab['Labprofile']['work_status']=='2'?'-':'No');?></td>
							<td><?php echo $lab['Labprofile']['work_status']=='2'?$this->Html->link('Yes','/labprofiles/comment/'.$lab['Labprofile']['user_id'].'/'.$lab['Labprofile']['id']):'No' ; ?></td>
						</tr>
						 <?php
						}?>
					</table>
					 
				</div>
		</section>
