<!-- File: /app/View/Questions/index.ctp -->

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
            <?php echo $question['Question']['question']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($question); ?>
</table>
