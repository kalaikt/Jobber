<?php
        echo '<h3 style="color: red;">Lab 3: File Access Management and Security</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Ensure students understand the concept of directories, file access, file security and management in linux.<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Start Putty and connect to cloud (Use the amazon account)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span> Practice opening and closing the file "linuxbasics". Use it to answer the following questions:');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Type: <code>#ls /</code> How many directories do you see? (Hint: This lists all subdirectories in the / directory)');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Type: <code>#ls /home</code> also type <code>#ls /etc</code> Can you guess the function of these directories?');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Type: <code>#pwd </code> What is the output? Now, type <code>#ls</code> What do you see? (Hint: This is the present working directory)');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Type: <code>#mkdir mynamedir</code> (Replace myname with your real name). Now, type <code>#ls </code> What do you see?');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Type: <code>#ls -l</code> The permissions on that folder are now listed. Write out the permissions');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Type: <code>#chmod 700 mynamedir </code> This protects the directory so that only you can access it. ');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Now type <code>#ls -l</code> and write the new permissions');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Type: <code>#cd anothernamedir </code> (Try to enter someone else\'s new directory.) What happened? Why?');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Type: <code>#cd mynamedir </code> (Try to enter your own new directory.) What happened? Why?');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>first type: <code>#ls</code> What do you see? Now type <code>#touch newfile</code>. ls again, what do you see now?');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>Open the file "newfile" and write the name of your favorite artist');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>Now, type: <code>#cat newfile </code> **Note the output');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span>Type: <code>#echo "My favorite car is xxxxxxx" >> newfile </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span>Now, type: <code>#cat newfile </code> **Note the output. What is the difference with the former output?');
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span>Now, type: <code>#echo "I change my mind" > newfile </code> **again, Note the output');
        echo $this->Html->div('lab_task', '<span id="price">Step 17. </span>Now, type: <code>#cat newfile </code> What happened? Why?');
        echo $this->Html->div('lab_task', '<span id="price">Step 18. </span>We have learned how to create files and directories. Create a file called "mynamestory" and type any few lines in it.');
        echo $this->Html->div('lab_task', '<span id="price">Step 19. </span>Try and open someone else\'s "mynamestory" file and read the content. How come you are able to read someone else\'s file?');
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your cloud account </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>You are having a party and will like to invite us, your classmates. Use this information to answer the questions below:');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Create a file in /tmp called "mynameparty" and put the address of your party in that file. Also put time and date.');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Make sure all of us, your classmates (as members of the same group), can access your "mynameparty" file');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Make sure no one else but you can edit your "mynameparty" file');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Your "mynameparty" file should not be executable by anyone, this is a security risk');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Create another file in /tmp called "mynameRSVP". Assign permission 764 to this file so that groups members can RSVP');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Make a new directory in /tmp called "mynamepartyfavors"');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Make sure every user on this machine can enter the directory but only our group members can create files inside this directory');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Using the command <code>su - clinton1</code> Switch user to another member of our group, clinton. Test all permissions and correct any errors. **Contact admin for password for user clinton1');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Using the command <code>su - ragan1</code> Switch user to a system user ragan1, not in our group. Test all permissions and correct any errors. **Contact admin for password for user ragan1');
        echo $this->Html->div('lab_task', '<br /><strong>Interactive session:</strong> What did you learn in this lab? What mistakes did you make? How did you fix the mistakes?');
 ?>
