<h1>Lab Note</h1>

<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th>Name</th>
    <th>Work Note</th>
  </tr>
  <?php  foreach($labnotes as $k=>$lab){?>
  
  <tr>
    <td><?php echo $lab['labmaps']['lab_name'];?></td>
    
    <td><?php 
	
	$file = IMAGES.'notes/'.$lab['Labprofile']['work_notes'];
	echo file_exists($file)? $this->Html->link('Download','/labprofiles/download/'.$lab['Labprofile']['user_id'].'/'.$lab['Labprofile']['id']): 'N/A'; 
		
	//echo $this->Html->link($lab['Labprofile']['work_notes'],'/img/notes/'.$lab['Labprofile']['work_notes']); ?></td>

  </tr>
  <?php }?>
  
  
</table>


<div><br /><br /><?php echo $this->Html->link('Home','../'); ?></div>
<div><?php echo $this->Html->link('Check my performance','../labprofiles'); ?></div>
<div><?php echo $this->Html->link('Back to Labs','../tutorials/basics_of_linux_lectures'); ?></div>
