<?php echo $this->Form->create('Link',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false),'type'=>'file'));?>

<table border="0" cellpadding="0" cellspacing="0">
  <?php if($mode == 'video'){?>
  <tr>
    <td>Select Video</td>
    <td><?php echo $this->Form->input('video', array('type' => 'file'));?></td>
  </tr>
  <?php }else{?>
  <tr>
    <td>Link</td>
    <td><?php echo $this->Form->input('link',array('class'=>'form-control', 'value'=>(isset($link['link'])?$link['link']:'')));?></td>
  </tr>
  <?php }?>
  <tr>
    <td>Type</td>
    <td><?php echo $this->Form->input('type',array('options'=>array(''=>'-- Select --','video'=>'Video','link'=>'Link'), 'class'=>'form-control'));?></td>
  </tr>
  <tr>
    <td>Format</td>
    <td><?php echo $this->Form->input('format',array('options'=>array(''=>'-- Select --','youtube'=>'Youtube','Link'=>'Link', 'swf'=>'SWF', 'flv'=>'FLV','answer'=>'Answer'), 'class'=>'form-control'));?></td>
  </tr>
  <tr>
    <td>
	<?php 
	echo $this->Form->hidden('labprofile_id', array('value'=>$labid));
	echo $this->Form->hidden('id', array('value'=>$id));	
	echo $this->Form->submit(__('Create'),array('class'=>'btn btn-primary'))?></td>
    <td></td>
  </tr>
</table>
</form>