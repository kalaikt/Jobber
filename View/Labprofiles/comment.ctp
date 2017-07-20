<style>
.commentpage {
	padding: 0 10px 20px;
}
.commentpage h3 {
	color: #cf2c30;
	font-family: 'HelveticaLTStdCondensed';
	font-size: 24px;
	margin:50px 0 20px;
}
</style>
<div class="container commentpage">
  <h3>Lab Note</h3>
  <?php $note_id = 0; foreach($labs as $k=>$lab_d){
  if(!empty($lab_d['note']['id'])){
  	$lab_d['Labprofile']['work_notes'] = $lab_d['note']['work_note'];
	$lab_d['Labprofile']['comment'] = $lab_d['note']['comment'];
	$lab_d['Labprofile']['work_status'] = $lab_d['note']['status'];
  }
  if($note_id != $lab_d['note']['id'] || empty($lab_d['note']['id'])){
  ?>
  <table border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th> </th>
      <th>Work Notes</th>
    </tr> 
    <tr>
      <td><?php echo '<strong>'.$lab_d['Labprofile']['id'].'</strong>. '.$lab_d['labmaps']['lab_name'];?></td>
      <td><?php if(!empty($lab_d['Labprofile']['work_notes'])){
		$file = IMAGES.'notes/'.$lab_d['Labprofile']['work_notes'];
		echo file_exists($file)? $this->Html->link('Download','/Labprofiles/download/'.$lab_d['Labprofile']['user_id'].'/'.$lab_d['Labprofile']['id'].'/'.$lab_d['note']['id']): 'N/A'; 
	}
	echo '<br/>'.date('m/d/Y H:i:s', strtotime($lab_d['note']['submitted_date']))
	?></td>
    </tr>
  <?php 
  
   foreach($comments[$lab_d['note']['id']] as $comment){
		if(!empty($comment['comment'])){
			echo '<tr><td>Status </td> ';
			echo '<td><strong>'.$comment['status'].'</strong></td></tr>';
			echo '<tr><td><strong>Comment:</strong></td> ';
			
			echo '<td><em>'.date('m/d/Y H:i:s', strtotime($comment['creation_date'])).'</em><br/>'.$comment['comment'].' </td></tr>';	
		}
	}
  
  } 
  
  	/*if($lab_d['Labprofile']['work_status'] >= 1 && !empty($lab_d['cmt']['comment'])){
			echo '<tr><td>Status </td> ';
			echo '<td><strong>'.$lab_d['0']['status'].'</strong></td></tr>';
	 	    echo '<tr><td><strong>Comment:</strong></td> ';
			
		    echo '<td><em>'.date('m/d/Y H:i:s', strtotime($lab_d['cmt']['creation_date'])).'</em><br/>'.$lab_d['cmt']['comment'].' </td></tr>';
	 
	 }*/
	
  
  echo '</table>';
  if(($role == 1 || $role == 2) && $lab_d['Labprofile']['work_status'] !=2){?>
  <?php 
	    
	    
	
	    if($lab_d['Labprofile']['work_status'] <=1 && $note_id == 0){

		   // echo "Add/Edit Comment:";
		    echo $this->Form->create('Comments',array('url'=>array('controller'=>'Labprofiles','action'=>'status'),
				
                                                         'inputDefaults'=>array('label'=>false)));
		?>
  <label for="inputPassword3" class="col-sm-2 control-label">
    Add Comment:</label>
  <?php echo $this->Form->textarea('comment',array('class'=>'form-control','rows'=>3, 'cols'=>10));
						?>
  <table border="0" align="center" width="50px">
    <tr>
      <td><?php echo $this->Form->submit(__('Approve'),array('class'=>'btn btn-primary','name'=>'approve'))?></td>
      <td><?php echo $this->Form->submit(__('Reject'),array('class'=>'btn-red','name'=>'reject'))?></td>
    </tr>
  </table>
  <?php echo $this->Form->hidden('note_id',array('value'=>$lab_d['note']['id']))?> <?php echo $this->Form->hidden('work_note',array('value'=>$lab_d['Labprofile']['work_notes']))?> <?php echo $this->Form->hidden('user_id',array('value'=>$lab_d['Labprofile']['user_id']))?> <?php echo $this->Form->hidden('lab_id',array('value'=>$lab_d['Labprofile']['id']))?> <?php echo $this->Form->end();
  
  
	 } 
	 
	 ?>
  <?php }
  	/*if($lab_d['Labprofile']['work_status'] >= 1 && !empty($lab_d['cmt']['comment'])){
			echo '<br/>Status: ';
			echo '<strong>'.$lab_d['0']['status'].'</strong>';
	 	    echo '<br/><strong>Comment:</strong> ';
			
		    echo '<br/><em>'.date('m/d/Y H:i:s', strtotime($lab_d['cmt']['creation_date'])).'</em><br/>'.$lab_d['cmt']['comment'].' <br/>';
	 
	 }*/?>
  <?php $note_id = $lab_d['note']['id'];}?>
  <div><br />
    <br />
    <?php echo $this->Html->link('Home','../'); ?></div>
  <div><?php echo $this->Html->link('Check my performance','../Labprofiles'); ?></div>
  <div><?php echo $this->Html->link('Back to Labs','../tutorials/basics_of_linux_lectures'); ?></div>
</div>
