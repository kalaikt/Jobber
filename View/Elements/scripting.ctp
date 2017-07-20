<?php
        echo '<h3 style="color: red;">Lab 6: Introduction to Shell Scripting</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Expose students to basic shell scripting and understand the structure of a shell script.<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span> Obtain the domain name of our cloud machine from putty. Using SSH, connect to the cloud machine.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Open a new file in your home directory called "mynameLearnScripts" and use it to answer the following questions');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Customize your prompt to display your sports team. How would you make this change permanent?');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>What is the hostname of your current system?');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Examine the environment variable called PATH. What its value?');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>How can you tell which shell you are currently running?');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Create a new directory "shell" inside your home directory. This directory will be used to store shell scripts');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Try to add the new shell directory to your PATH in /etc/profile. Is it possible? Why not?');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Try to add the new shell directory to your PATH in /etc/bashrc');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>In your /home/yourname/.bashrc, create an alias for the command "ls -l" (This will make it easier to use the command)');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Test your changes');
 
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your workstation (Exercise 1)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Using SSH, connect to the cloud machine.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Open a new file in your new shell directory and call the file "backupPractice.sh" This will be your backup script');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>On the first line of your backup script, specify the shell to use while running the script');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Skip the next line. On the following line, add a comment with the text: "I am backing up my learnscripts file"');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>On the next line, insert a command to copy the myNameLearnScripts file in your home directory to /tmp directory</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Run your backup script and ensure that it runs and that the learnScripts file has been backed up to /tmp');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Protect your backup script: You should be the only one allowed to write and execute your backup script');
       
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your workstation (Exercise 2)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Using SSH, connect to the cloud machine.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Open a new file in your new shell directory and call the file "myCity.sh"');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>After starting your script correctly, store the name of your city in a variable. Ex: <code>CITY="somename"</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>On the next line, write a line that prints "My Name IS: $1"');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>On the next line, write a line that prints "I Love To Live IN $CITY"');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>On the next line, write a line that prints "Thanks for reading, $1"');
        echo $this->Html->div('lab_task', '<br /><strong>Interactive session:</strong> What did you learn in this lab? What mistakes did you make? How did you fix the mistakes?');
   ?>
