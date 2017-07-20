<section class="col-xs-12 aboutusmain">
			<div class="container">
				<h3>LABS</h3>
				<?php echo $this->Form->create('Labs',array('url'=>array('controller'=>'labprofiles','action'=>'labs'),
				
                                                         'inputDefaults'=>array('label'=>false))); ?>
				<div class="col-md-2 blank col-xs-12"></div>
				<div class="col-md-8 formpopoup col-xs-12">
				<div class="modal-content popupform" id="labpopform">
     							 <div class="modal-header choose-area">
      							 </div>
      							<div class="modal-body ">
        						<form role="form">
        							<div class="form-group">
          			            		<label for="sel1">Select Lab</label>
											<?php echo $this->Form->input('lab', array(
												'options' => $options,
												'default' => (isset($lab_id)?$lab_id:''),
												'empty' => '(choose one)',
												'div' => false,
												'class' => 'form-control'
											));?>
        							</div>
								<?php echo $this->Form->submit(__('Load...'),array('class'=>'btn btn-default popupbtn','name'=>'load'))?>
      						</form>
      					</div>
   					 </div>
				</div>
				<div class="col-md-2 blank col-xs-12"></div>
				</div>
			</section>
			<?php if(isset($lab_id)){?>
			<section class="col-xs-12 enrollmentmain">
			<div class="container">
					<table>
						<tr>
							<th>Name</th>
							<th>Lab Access</th>
							<th>Edit Action</th>
							<th>Answer Access</th>
							<th>Edit Answer Action</th>
						</tr>
						<?php  foreach($students as $k=>$student){?>
						<tr>
							<td><?php echo $student['User']['username'];?></td>
							<td><?php echo $student['Labprofile']['user_access']?'Yes':'No';?></td>
							<td><?php echo $this->Html->link(($student['Labprofile']['user_access']?'Block':'Allow'),'/labprofiles/permission/'.$lab_id.'/'.$student['User']['id'].'/'.($student['Labprofile']['user_access']?'0':'1'));?></td>
							<td><?php echo $student['Labprofile']['answer_access']?'Yes':'No';?></td>
							<td><?php echo $this->Html->link(($student['Labprofile']['answer_access']?'Block':'Allow'),'/labprofiles/permission/'.$lab_id.'/'.$student['User']['id'].'/'.($student['Labprofile']['answer_access']?'0':'1').'/1');?></td>
						</tr>
						<?php } ?>
						
					</table>
					<?php } echo $this->Form->end();?>
					
					
				</div>
		</section>