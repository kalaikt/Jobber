<!-- File: /app/View/Questions/index.ctp -->
<div class="container physicalstorage">
<h3>RHCSA Exam Practice Questions</span></h3>

<table>
    <tr>
        <th>Question Id</th>
        <th>Question </th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <tr>
        <td><?php echo $question[0]['Question']['id']; ?></td>
        <td>
            <table>
                <tr>
                    <td colspan="2">
                        <?php echo $question[0]['Question']['question']; ?>
                    </td>
                </tr>
                <tr>
                    <td  style="border-right: none">
                        <?php if( $question[0]['Question']['id'] > 1){
                                  echo $this->Html->link('Prerequisite task', 'exam/'.($question[0]['Question']['id'] - 1)); 
                              }
                         ?>
                    </td> 
                    <td align="right" style="border-left: none">
                        <?php if( isset( $next_question[0]['Question']['id'])){
                            echo $this->Html->link('Next Question','exam/'.$next_question[0]['Question']['id']);
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
    <?php unset($question); ?>
</table>
</div>