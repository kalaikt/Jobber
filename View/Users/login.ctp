<section class="col-xs-12 aboutusmain">
			<div class="container">
				<div class="col-md-3 blank col-xs-12"></div>
				<?php  echo $this->Session->flash('auth'); ?>
				<div class="col-md-6 modal-content popupform col-xs-12">
				<?php echo $this->Form->create('User'); ?>
     							 <div class="modal-header">
        							<h6><?php echo __('Login'); ?></h6>
      							 </div>
      							 <p>Please enter your username and password or <?php echo $this->Html->link('click here to obtain an account','/tutorials/products'); ?></p>
      							<div class="modal-body">
        							<div class="form-group">
										<?php echo $this->Form->input('username', array('class'=>'form-control inputarea')); ?>
        							</div>
        							<div class="form-group">
									  <?php echo $this->Form->input('password', array('class'=>'form-control inputarea')); ?>
        							</div>
        						<?php echo $this->Form->end(__('Login')); ?>
      					</div>
   					 </div>
   					 <div class="col-md-3 blank col-xs-12"></div>
				</div>
			</section>
