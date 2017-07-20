<?php $next_date = "Saturday, July 30th, 2016"; ?>

<section class="col-xs-12 aboutusmain">
			<div class="container">
				<div class="col-md-2 blank col-xs-12"></div>
				<div class="col-md-8 formpopoup col-xs-12">
			<?php	echo '<div style="text-align: center;font-size: 25px;position: relative;top: 20px;">'; if( isset( $lj_msg) ) echo $lj_msg; echo '</div>'; ?>
				<div class="modal-content popupform">
     							 <div class="modal-header">
        							<h6>Registration for Upcoming Training (<?php echo $next_date; ?>)</h6>
      							 </div>
      							<div class="modal-body">
        					<?php echo $this->Form->create(); ?>
        						    <div class="form-group">
									    <?php echo $this->Form->input('fullname', array('class'=>'form-control inputarea')); ?>
        							</div>
        							<div class="form-group">
										<?php echo $this->Form->input('email', array('class'=>'form-control inputarea')); ?>
        							</div>
        							<div class="form-group">
          								<?php echo $this->Form->input('phone', array('class'=>'form-control inputarea')); ?>
        							</div>
        							<div class="form-group">
									<?php	echo $this->Form->input('classcode', array('options' => array('RHCSA EX200','Linux Classes', 'Amazon AWS', 'PUPPET Training','Free Classes'), 
                                             'empty' => '--choose one--',
                                             'class' => 'form-control inputarea'
                                             )
                                          );  ?>
        							</div>
        
        						<?php echo $this->Form->end('Register'); ?>
         				<!--<button type="reset" class="btn btn-default popupbtn">CANCEL</button>-->
							
      					</div>
   					 </div>
				</div>
				<div class="col-md-2 blank col-xs-12"></div>
				</div>
			</section>
	
