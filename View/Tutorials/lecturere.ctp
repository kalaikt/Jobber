<div class="container" id="tutorialvideo">
<?php echo $this->Form->create('Note',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false),'type'=>'file'));?>

<?php // echo $username;?>
<br/>
<br/>
Section 1: Note 
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th scope="col" width="30%">Resource ID</th>
	<th scope="col" width="70%">Resource</th>
	<?php if($role == 1){?>
    <th scope="col"><?php echo $this->Html->link('Add Link','/tutorials/add/'.$labid);?></th>
	<?php }else{
	echo '<th></th>';
	}?>
  </tr>
  <?php foreach($links as $video){
  	$param = parse_url($video['Lectureresource']['link']);
	
	
		isset($param['query']) and $params = explode('=',explode('&',$param['query'])[0]);
	
		$text = $video['Lectureresource']['format'] == 'youtube'? $this->Html->image('http://img.youtube.com/vi/'.$params[1].'/2.jpg'):$video['Lectureresource']['link'];
  ?>
  <tr>
    <td scope="col"><?php echo $video['Lectureresource']['id']?></td>
	<td><?php echo $this->Html->link($text,$video['Lectureresource']['link'], array('target'=>'_blank', 'escape' => false));?>
			
	</td><?php if($role != 1 && !in_array($video['Lectureresource']['id'], $complete )){?>
	<td>
	<div class="input checkbox"><input type="checkbox" name="data[Note][complete][]" id="note_list<?php echo $video['Lectureresource']['id'];?>" value="<?php echo $video['Lectureresource']['id'];?>"><label for="note_list<?php echo $video['Lectureresource']['id'];?>" style="width: auto;">I have read and understood the material</label></div>
	<?php if($role != 1){ echo $this->Form->submit(__('Complete'),array('class'=>'btn btn-primary', 'onclick'=>'return Validate(\'note_list'.$video['Lectureresource']['id'].'\')')); }?>
	<?php
			/*	
				echo $this->Form->checkbox('complete',array('hiddenField' => false, 'value'=>$video['Lectureresource']['id']));
				echo $this->Form->label('note.complete', 'I have watched and understood the video', array('style'=>'width: auto;'));*/
				
				 ?>
				 </td>
				 
				 <?php }else if(in_array($video['Lectureresource']['id'], $complete )){echo '<td>Completed</td>';}?>
		<?php if($role == 1){?>
    <td><?php echo $this->Html->link('Edit','/tutorials/add/'.$labid.'/'.$video['Lectureresource']['id']);?> <?php echo $this->Html->link('Delete','/tutorials/delete/'.$labid.'/'.$video['Lectureresource']['id']);?></td>
	  <?php }?>
	  
  </tr>
  <?php }?>

</table>
<br/>
<br/>
Section 2: Video
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
     <th scope="col">Resource ID</th>
	<th scope="col">Type</th>
    <th scope="col">Resource</th>

	<?php if($role == 1){?>
    <th scope="col"><?php echo $this->Html->link('Add Video','/tutorials/add/video/'.$labid);?></th>
	 <?php }else{
	echo '<th></th>';
	}?>
  </tr>
  <?php foreach($videos as $video){
  		$param = parse_url($video['Lectureresource']['link']);
	
		if(!$answer_access && $video['Lectureresource']['format'] == 'answer' && $role !=1 )
			continue;
			
		isset($param['query']) and $params = explode('=',explode('&',$param['query'])[0]);
	
		$text = $video['Lectureresource']['format'] == 'youtube'? $this->Html->image('http://img.youtube.com/vi/'.$params[1].'/2.jpg'):basename($video['Lectureresource']['link']);
  ?>
  <tr>
	<td scope="col"><?php echo $video['Lectureresource']['id']?></td>
	<td scope="col"><?php echo $video['Lectureresource']['format']?></td>
    <td><?php echo $this->Html->link($text, '/tutorials/video/'.$video['Lectureresource']['id'], array( 'escape' => false));?></td>
	<?php if($role != 1 && !in_array($video['Lectureresource']['id'], $complete )){?>
	<td>
	<div class="input checkbox"><input type="checkbox" name="data[Note][complete][]" id="note_list<?php echo $video['Lectureresource']['id'];?>" value="<?php echo $video['Lectureresource']['id'];?>"><label for="note_list<?php echo $video['Lectureresource']['id'];?>" style="width: auto;">I have read and understood the material</label></div>
	<?php if($role != 1){ echo $this->Form->submit(__('Complete'),array('class'=>'btn btn-primary', 'onclick'=>'return Validate(\'note_list'.$video['Lectureresource']['id'].'\')')); }?>
	<?php
			/*	
				echo $this->Form->checkbox('complete',array('hiddenField' => false, 'value'=>$video['Lectureresource']['id']));
				echo $this->Form->label('note.complete', 'I have watched and understood the video', array('style'=>'width: auto;'));*/
				
				 ?>
				 </td>
				 
				 <?php }else if(in_array($video['Lectureresource']['id'], $complete )){echo '<td>Completed</td>';}?>
	<?php if($role == 1){?>
    <td><?php echo $this->Html->link('Edit','/tutorials/add/'.$labid.'/'.$video['Lectureresource']['id']);?> <?php echo $this->Html->link('Delete','/tutorials/delete/'.$labid.'/'.$video['Lectureresource']['id']);?></td>
	  <?php }?>
  </tr>
  <?php }?>
</table>

  </from>
  </div>
 <script>
 function Validate(id){
 	conf = confirm('Are you sure you clearly understand the material? If not, do not click yes. Ask your instructor for clarification. Otherwise, click yes');
	
 	if(!conf){
		document.getElementById(id).checked = false;		
	}
	return conf;
 }
 </script>