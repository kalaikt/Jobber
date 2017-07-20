<section class="col-xs-12 enrollmentmain">
			<div class="container">
				<h3>Preparation for linux job</h3>
					<table>
						<tr>
							<th>S No.</th>
							<th style="width: auto">Title</th>
							<th>Videos</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
							<th>Practice</th>
							<th>Test</th>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Concept</td>
							<td>Basic</td>
							<td>Intermediate</td>
							<td>Advanced</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					    <!-- Here is where we loop through our $posts array, printing out post info -->

                        <?php foreach ($homes as $home): ?>
						<tr>
							<td><?php echo $home['Home']['id']; ?></td>
							<td><?php echo $home['Home']['title']; ?></td>
							<td><?php echo $this->Html->link($home['Home']['id'], "http://www.youtube.com/watch?v=".$home['Home']['videos']."&feature=youtu.be",
array('target' => '_blank', 'title' => $home['Home']['videos_title'])); ?></td>
							<td><?php if( isset( $home['Home']['basic']) ){
                              echo $this->Html->link($home['Home']['id'], "http://www.youtube.com/watch?v=".$home['Home']['basic']."&feature=youtu.be",
array('target' => '_blank', 'title' => $home['Home']['basic_title']));
                          } ?></td>
							<td><?php if( isset( $home['Home']['intermediate']) ){
                              echo $this->Html->link($home['Home']['id'], "http://www.youtube.com/watch?v=".$home['Home']['intermediate']."&feature=youtu.be",
array('target' => '_blank', 'title' => $home['Home']['intermediate_title']));
                          } ?></td>
							<td><?php if( isset( $home['Home']['advanced']) ){
                              echo $this->Html->link($home['Home']['id'], "http://www.youtube.com/watch?v=".$home['Home']['advanced']."&feature=youtu.be",
array('target' => '_blank'));
                          } ?></td>
							<td><?php if( isset( $home['Question'][0]['home_id'])) echo $this->Html->link($home['Question'][0]['home_id'],
array('controller' => 'questions', 'action' => 'practice', $home['Home']['id'])); ?></td>
							<td><?php if( isset( $home['Question'][0]['home_id'])) echo $this->Html->link($home['Question'][0]['home_id'],
array('controller' => 'questions', 'action' => 'test', $home['Home']['id'])); ?></td>
						</tr>
						<?php endforeach; ?>
                        <?php unset($home); ?>
					</table>
					
				</div>
		</section>