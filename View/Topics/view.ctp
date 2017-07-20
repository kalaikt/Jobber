<div class="container viewtopic">
	<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb viewbreadcrumb">
            <li>
                <?php echo $this->Html->link(__('Forum'),'/forum')?>
            </li>
            <li>
                <?php echo $this->Html->link($forum['Forum']['name'],array('controller'=>'topics','action'=>'index',$forum['Forum']['id']))?>
            </li>
            <li class="active">
                <?php echo $topic['Topic']['name'];?>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <p class="lead">
        <?php echo $topic['Topic']['content'];?>
        </p>
    </div>
    
    <?php
        // if the post has an image display it
        if(!empty($topic['Topic']['image_url'])) {
	        $url = $topic['Topic']['image_url'];
	        echo '<div class="uploaded_image">';
	        echo '<img src=/'.$url.' alt="Post Image" width="800px"; />';
	        echo '</div>';
        }
    ?>
 
    <div class="col-lg-4">
        <p class="text-right">
            <?php echo $this->Html->link(__('Create Topic'),array('action'=>'add'),
                                                            array('class'=>'btn btn-primary'))?>
 
            <?php echo $this->Html->link(__('Post Reply'),array('controller'=>'posts','action'=>'add',$topic['Topic']['id']),
                                                            array('class'=>'btn btn-primary'))?>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <p style="font-weight: bold;">
        <?php
                echo $this->Paginator->counter(
                        'Showing {:start} - {:end} of {:count}'
                );
                ?>
        </p>
    </div>
</div>
 
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered  ">
 
 
            <tbody>
                <?php
                foreach ($posts as $post) :
                ?>
                    <tr>
                        <td><small>
                            <?php
                                echo $this->Time->timeAgoInWords($post['Post']['created']);
                            ?></small>
                        </td>
                        <td style="text-align: right;"><?php if($role == 1){?>
					<a style="color: red !important;" href="<?php echo $this->Html->url('/', false);?>topics/delete/<?php echo $topic['Topic']['id'].'/'.$post['Post']['id']?>">Delete</a>
					<?php }?></td>
                    </tr>
                    </tr>
                    <td width="150px">
                        <p>
                            <?php
                                echo $this->Html->link($post['User']['username'],
                                                        array('controller'=>'users','action'=>'profile',$post['User']['id']));
                            ?>
                        </p>
                        <?php $hash = md5($post['User']['email']);?>
                        <img src="http://www.gravatar.com/avatar/<?php echo $hash;?>?s=100" >
                    </td>
                    <td>
                        <p>
                            <?php preg_match_all('/\b(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)[-A-Z0-9+&@#\/%=~_|$?!:,.]*[A-Z0-9+&@#\/%=~_|$]/i', $post['Post']['content'], $result, PREG_PATTERN_ORDER);
							$content = $post['Post']['content'];
							foreach(array_unique($result[0]) as $url){
								$content = str_replace($url,'<a href="'.$url.'" target ="_blank">'.$url.'</a>', $content);
							
							}

?>
							<?php echo nl2br($content);?>
							
                        </p>
						<?php if($post['Post']['attach_file']){?>
						<img src="<?php echo $this->Html->url('/', true).IMAGES_URL.'ljimages/'.$post['Post']['attach_file'];?>" width="600px"/>
						<?php }?>
                    </td>
					
                    </tr>
                <?php endforeach;?>
            </tbody>
 
        </table>
        <div class="pull-right">
            <?php
                echo $this->element('paginator');
            ?>
        </div>
        <div class="clearfix"></div>
        <div class="well">
            <h4><?php echo __('Quick Reply');?></h4>
            <?php echo $this->Form->create('Post',array('url'=>array('controller'=>'posts','action'=>'add'),
														'type' => 'file',
                                                         'inputDefaults'=>array('label'=>false)));?>
                <div class="form-group">
                    <?php echo $this->Form->textarea('content',array('class'=>'form-control','rows'=>5));
					 echo $this->Form->input('attach_file', array('type' => 'file'));
					 ?>
                </div>
				
                <?php echo $this->Form->hidden('topic_id',array('value'=>$topic['Topic']['id']));?>
                <?php echo $this->Form->hidden('forum_id',array('value'=>$forum['Forum']['id']));?>
                <?php echo $this->Form->submit(__('Post Reply'),array('class'=>'btn btn-primary'))?>
            <?php echo $this->Form->end();?>
        </div>
    </div>
</div>
</div>