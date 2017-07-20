<div align="center">
<br/>
<br/>
<?php echo $videos[0]['Lectureresource']['link'];
$temp = array();
$temp = explode('.',$videos[0]['Lectureresource']['link']);
?>
<br/>
<br/>
<?php if($videos[0]['Lectureresource']['format'] == 'youtube'){?>
<iframe width="560" height="315" src="//www.youtube.com/embed/<?php echo $vid;?>" frameborder="0" allowfullscreen></iframe>
<?php }else if($videos[0]['Lectureresource']['format'] == 'flv' || $temp[count($temp)-1] == 'flv'){
	echo $this->Video->loader(true); 
	echo $this->Video->player($videos[0]['Lectureresource']['link'], "video", false, 720, 576); 
	
	
 }
 ?>

 </div
