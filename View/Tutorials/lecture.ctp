<div class="container">
<h1>Videos</h1>
<br>
<br>

<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th scope="col">Resource ID</th>
	<th scope="col">Resource</th>
	<?php if($role == 1){?>
    <th scope="col"><?php echo $this->Html->link('Add Link/Video','/tutorials/add/'.$labid.'/0/1');?></th>
	<?php }?>
  </tr>
  <?php foreach($videos as $video){
  		$param = parse_url($video['Lectureresource']['link']);
	
		isset($param['query']) and $params = explode('=',explode('&',$param['query'])[0]);
	
		$text = $video['Lectureresource']['format'] == 'youtube'? $this->Html->image('http://img.youtube.com/vi/'.$params[1].'/2.jpg'):$video['Lectureresource']['link'];
  ?>
  <tr>
    <td scope="col"><?php echo $video['Lectureresource']['id']?></td>
	<td><?php echo $this->Html->link($text, '/tutorials/video/'.$video['Lectureresource']['id'], array( 'escape' => false));?>
	</td>
	<?php if($role == 1){?>
    <td><?php echo $this->Html->link('Edit','/tutorials/add/'.$labid.'/'.$video['Lectureresource']['id'].'/1');?> <?php echo $this->Html->link('Delete','/tutorials/delete/'.$labid.'/'.$video['Lectureresource']['id'].'/1');?></td>
	  <?php }?>
  </tr>
  <?php }?>

</table>

</div>