<!-- File: /app/View/Questions/index.ctp -->
<div class="container physicalstorage">
<h3>LinuxJobber:<span> Preparation for linux job</span></h3>

<table>
    <tr>
        <th>Question Id</th>
        <th>Question </th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($questions as $question): ?>
    <tr>
        <td><?php echo $question['Question']['id']; ?></td>
        <td>
            <table>
                <tr>
                    <td>
                        <?php echo $question['Question']['question']; ?>
                    </td>
                    <td height='5px'></td>
                </tr>
                <tr>
                    <td>Prerequisite task: <?php echo $this->Html->link($question['Question']['prerequisite_id'],
array('controller' => 'questions', 'action' => 'prerequisite', $question['Question']['prerequisite_id'])); ?>
                    </td> 
                </tr>
            </table>
        </td>
    </tr>
    
    <?php endforeach; ?>
    <?php unset($question); ?>
</table>
</div>