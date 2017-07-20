<section class="col-xs-12 fundamentalmain">
			<div class="container">
				<h3>STUDENT PROFILE</h3>
				<div class="col-xs-12 grey-strip">
					<div class="col-md-4 sname col-xs-12"><span>Name: </span>&nbsp;&nbsp;&nbsp;<?php echo $username; ?></div>
					<div class="col-md-4 blank col-xs-12"></div>
					<div class="col-md-4 nextbtn col-xs-12"> 
     		    		<?php echo $this->Html->link("Back to Labs","../tutorials/basics_of_linux_lectures"); ?>
     		    	</div>
				</div>
				
     		    <div>&nbsp;</div>
     		    <div>Summary of Labs</div>
     		    <div>&nbsp;</div>
				
				<div class="col-xs-12 student-details">
					<table>
						<tr>
							<th>S No.</th>
							<th style="width: auto">Lab Name</th>
							<th>Total Labs</th>
							<th>Incomplete Labs</th>
							<th>Completed Labs</th>
						</tr>
						<tr>
							<td>1.</td>
							<td>Fundamentals of Linux:</td>
							<td><?php echo $total_basics_lab; ?></td>
							<td><?php echo $this->Html->link($attempted_basics_lab,'/labprofiles/details'); ?></td>
							<td><?php echo $this->Html->link($completed_basics_lab,'/labprofiles/labnote/1'); ?></td>
						</tr>
						<tr>
							<td>2.</td>
							<td>Proficiency in Linux:</td>
							<td><?php echo $total_proficiency_lab; ?></td>
							<td><?php echo $this->Html->link($attempted_proficiency_lab,'/labprofiles/details'); ?></td>
							<td><?php echo $this->Html->link($completed_proficiency_lab,'/labprofiles/labnote/1001'); ?></td>
						</tr>
						</table>
				</div>
				
				<div class="col-xs-12 nextbtn"> 
						<?php echo $this->Html->link('More Details','/labprofiles/details'); ?>
     		    </div>
     		     <div style="line-height:50px">&nbsp;</div>
     		     <div>Summary of Knowledge Resource</div>
     		     <div>&nbsp;</div>
				 <div class="col-xs-12 student-details">
					<table>
						<tr>
							<th>S No.</th>
							<th style="width: auto">Lab Name</th>
							<th>Total Notes</th>
							<th>Open</th>
							<th>Completed</th>
						</tr>
						<tr>
							<td>1.</td>
							<td>Fundamentals of Linux:</td>
							<td><?php echo $lab_notes['basics']['total']; ?></td>
							<td><?php echo ($lab_notes['basics']['total']-$lab_notes['basics']['finished']); ?></td>
							<td><?php echo $lab_notes['basics']['finished']; ?></td>
						</tr>
						<tr>
							<td>2.</td>
							<td>Proficiency in Linux:</td>
							<td><?php echo $lab_notes['proficiency']['total']; ?></td>
							<td><?php echo ($lab_notes['proficiency']['total']-$lab_notes['proficiency']['finished']); ?></td>
							<td><?php echo $lab_notes['proficiency']['finished']; ?></td>
						</tr>
						</table>
				</div>
				
				<div class="col-xs-12 nextbtn"> 
						<?php echo $this->Html->link('More Details','/labprofiles/labnotedetails'); ?>
     		    </div>
				 
			</div>
		</section>