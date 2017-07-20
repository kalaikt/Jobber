<!-- File: /app/View/Questions/index.ctp -->

<h3>LinuxJobber:<span> Preparation for linux job</span></h3>

<table>
    <tr>
        <th>Question Id</th>
        <th>Question </th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <tr>
        <td><?php echo $prerequisite['Question']['id']; ?></td>
        <td>
            <table>
                <tr>
                    <td>
                        <?php echo $prerequisite['Question']['question']; ?>
                    </td>
                    <td height='5px'></td>
                </tr>
                <tr>
                    <td>Prerequisite task: <?php echo $this->Html->link($prerequisite['Question']['prerequisite_id'],
array('controller' => 'questions', 'action' => 'prerequisite', $prerequisite['Question']['prerequisite_id'])); ?>
                    </td> 
                </tr>
                <tr>
                    <?php if($advance){                              
                              echo "<td>Advance: ". $this->Html->link($advance['Question']['id'], array('controller' => 'questions', 'action' => 'prerequisite', $advance['Question']['id'])) ."</td>";

                          }else{
                              echo "<td>Advance: None, ". $this->Html->link('Homepage', array('controller'=>'homes','action'=>'index'))."</td>";
                          }
                     ?>
                </tr>
            </table>
        </td>
    </tr>
    
</table>
