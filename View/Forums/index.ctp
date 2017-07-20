<section class="col-xs-12 enrollmentmain">
			<div class="container">
            <h3>Help Forum</h3>
					<table>
						<tr>
							<th style="width: 30%">Forum</th>
							<th style="width: 10%">Topics</th>
							<th style="width: 10%">Posts</th>
							<th style="width: 50%">Activity</th>
						</tr>
						<?php foreach ($forums as $forum): ?>
						<tr>
							<td><?php
                                echo // $this->Html->link('label'.$forum['Forum']['name'].'label', 
                                      $this->Html->link($forum['Forum']['name'],
									                    array('controller'=>'topics','action'=>'index',$forum['Forum']['id']),
                                                        array('escape'=>false));
                                ?></td>
							<td><?php echo count($forum['Topic']);?></td>
							<td><?php echo count($forum['Post']);?></td>
							<td><?php
                               if(count($forum['Post'])>0) {
                                $last_post = (count($forum['Post']) - 1);
                                $post = $forum['Post'][$last_post];
                                //echo (count($forum['Post']) - 1);
                                echo $this->Html->link($post['Topic']['name'],array('controller'=>'topics',
                                                                                            'action'=>'view',
                                                                                            $post['Topic']['id']));
                                echo '&nbsp;';
                                echo $this->Time->timeAgoInWords($post['created']);
                                echo '&nbsp;<small>by</small>&nbsp;';
                                echo '&nbsp;';
                                echo $this->Html->link($post['User']['username'],array('controller'=>'users',
                                                                                                'action'=>'profile',
                                                                                                $post['User']['id']));
                               }
                               ?></td>
						</tr>
						<?php endforeach;?>
						
					</table>
					<div class="prev-next">
					<ul class="pager">
  						<?php
                          echo $this->element('paginator');
						?>
					</ul>
					</div>
				</div>
		</section>