<!-- File: /app/View/Homes/index.ctp -->
<div class="row main">


<?php $this->Html->script('jquery', array('inline' => false)); ?>
<?php $this->Html->script('Dropit-master/dropit', array('inline' => false)); ?>
<?php $this->Html->script('slider/lean-slider', array('inline' => false)); ?>

<script type="text/javascript">
      $(document).ready(function() {
        $('.menu').dropit({action: 'mouseover'});
      });
      
      $(document).ready(function() {
        $('#slider').leanSlider();
      });
      
</script>

<div class="row banner"> 
			 
			<div class="container">
			 <div class="text-area">
		
<h3>LinuxJobber:<span> Preparation for linux job</span></h3>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Videos</th>
        <th>Practice</th>
        <th>Test</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <table>
            <tr>
                <td>Concept<td>
                <td>Basic</td>
                <td>Intermediate</td>
                <td>Advanced</td>
            </tr>
            </table>
        </td>
        <td></td>
        <td></td>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($homes as $home): ?>
    <tr>
        <td><?php echo $home['Home']['id']; ?></td>
        <td>
            <?php echo $home['Home']['title']; ?>
        </td>
        <td>
            <table>
            <tr>
                <td><?php echo $this->Html->link($home['Home']['id'], "http://www.youtube.com/watch?v=".$home['Home']['videos']."&feature=youtu.be",
array('target' => '_blank', 'title' => $home['Home']['videos_title'])); ?></td>
                <td width="25%"><?php if( isset( $home['Home']['basic']) ){
                              echo $this->Html->link($home['Home']['id'], "http://www.youtube.com/watch?v=".$home['Home']['basic']."&feature=youtu.be",
array('target' => '_blank', 'title' => $home['Home']['basic_title']));
                          } ?>
                </td>
                <td width="25%"><?php if( isset( $home['Home']['intermediate']) ){
                              echo $this->Html->link($home['Home']['id'], "http://www.youtube.com/watch?v=".$home['Home']['intermediate']."&feature=youtu.be",
array('target' => '_blank', 'title' => $home['Home']['intermediate_title']));
                          } ?>
                </td>
                <td width="25%"><?php if( isset( $home['Home']['advanced']) ){
                              echo $this->Html->link($home['Home']['id'], "http://www.youtube.com/watch?v=".$home['Home']['advanced']."&feature=youtu.be",
array('target' => '_blank'));
                          } ?>
                </td>
            </tr>
            </table>
        </td>
        <td>
            <?php if( isset( $home['Question'][0]['home_id'])) echo $this->Html->link($home['Question'][0]['home_id'],
array('controller' => 'questions', 'action' => 'practice', $home['Home']['id'])); ?>
        </td>
        <td>
            <?php if( isset( $home['Question'][0]['home_id'])) echo $this->Html->link($home['Question'][0]['home_id'],
array('controller' => 'questions', 'action' => 'test', $home['Home']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($home); ?>
</table>
			</div>
</div>





</div>