<section class="col-xs-12 aboutusmain">
			<div class="container">
				<div class="col-md-2 blank col-xs-12"></div>
				<div class="col-md-8 formpopoup col-xs-12">
			<?php	echo '<div style="text-align: center;font-size: 25px;position: relative;top: 20px;">'; if( isset( $lj_msg) ) echo $lj_msg; echo '</div>'; ?>
				<div class="modal-content popupform">
     							 <div class="modal-header">
        							<h6>Application</h6><div>code: <?= $classcode; ?></div>
      							 </div>
      							<div class="modal-body">
        					<?php echo $this->Form->create(); ?>
        						    <div class="form-group">
        						        <?= $this->Form->label('fname', 'First Name'); ?>
									    <?php echo $this->Form->input('fname', array('class'=>'form-control inputarea', 'label' => false)); ?>
        							</div>
        						    <div class="form-group">
        						        <?= $this->Form->label('lname', 'Last Name'); ?>
									    <?php echo $this->Form->input('lname', array('class'=>'form-control inputarea',  'label' => false)); ?>
        							</div>
        							<div class="form-group">
										<?php echo $this->Form->input('email', array('class'=>'form-control inputarea')); ?>
        							</div>
        							<div class="form-group">
          								<?php echo $this->Form->input('phone', array('class'=>'form-control inputarea')); ?>
        							</div>
        							<div class="form-group">
        						        <?= $this->Form->label('resume', 'Copy and paste your resume here'); ?>
        							    <?= $this->Form->textarea('resume'); ?>
        							</div>
        							<div class="form-group">
									    <?= $this->Form->hidden('classcode', ['value' => $classcode ]); ?>
        							</div>
        
        						<?php echo $this->Form->end('Apply'); ?>
         				<!--<button type="reset" class="btn btn-default popupbtn">CANCEL</button>-->
							
      					</div>
   					 </div>
				</div>
				<div class="col-md-2 blank col-xs-12"></div>
				</div>
			</section>
	
