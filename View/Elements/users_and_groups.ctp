<?php
        echo '<h3 style="color: red;">Lab 5: Linux Users and Groups</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Ensure students understand how linux users and groups work. Ensure students can create and manage users and groups.<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span> As a regular user open a file "mynameinfo" in your home directory and use it to answer ALL the following questions:');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>On separate lines, what is your a. user id, b. group id, c. shell, d. last login time. (Hint: use commands id and finger)');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Inspect the /etc/group file. How many other members are part of your group?');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Now switch to user root. Using the command groupadd, create a new group called linuxbasics');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Add your regular user (NOT ROOT) to the new group linuxbasics. (Hint: Ensure your primary group has not been removed)');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Two new users, clinton2 and ragan2 has just joined your company. User clinton2\'s full name is Bill Clinton and ragan2 is Ronald Ragan.');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Add the two users to the system. user clinton2\'s primary group is linuxbasics, ragan2 does not belong to the linuxbasics group. (Hint: use the command useradd with options)');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Set passwords for both clinton2 and ragan2. (Hint: use the command passwd)');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Log out of root by typing exit. Switch to user clinton2 by using <code>#su - clinton2</code> and repeat steps 1, 2 and 3');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Now switch to user ragan2 and repeat steps 1, 2 and 3');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Inspect the /etc/passwd file. Are your two new users there? What is different between their entries? Why?');
 
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span> User ragan2 has just been assigned the role of System Administrator\'s Assistant. He must now be given special privileges. (Hint: The command "sudo" can be used to assume root\'s privileges without actually switching to root)');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Enable the ability to use "sudo" command for user ragan2: As root, type <code>#visudo</code> This will open the special privileges file.');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Carefully scroll down until you see "root ALL=(ALL) ALL" -This says that the user root is allowed to run ALL commands from ALL machines on ALL machines');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Create a new line immediately under the above and type in "ragan2 ALL=(ALL) ALL" -This allows ragan2 to do everything root can do');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Verify again to make sure that there are no errors. Close the file using <code>:wq!</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Switch to user ragan2 to test his new powers. Type <code>#sudo vi /home/clinton2/ragan2Access</code> and insert "I AM IN" into that file');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Find out who is currently logged into this system by typing the command <code>#who</code> record your results in /home/clinton2/ragan2Access');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Repeat your finding by typing <code>#w</code> Record your finding. What is the difference in the output of these two commands? ');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>There has been a controversy on the last time user ragan2 logged into this system. Type <code>#last ragan2</code> to audit the user. When was the first time this user logged on? When was the last time this user logged on?');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>As user ragan2, create a group for your sports team. E.g mysoccerteam. Add two new users: Selena and Kim to your new sports team. (Hint: You can use the command <code>#whereis commandname</code> to find the absolute path of a command.)');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>If you don\'t know what a command does, type <code>#man <command name></code> to find out. E.g type <code>#man chage</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>What would you say the command "chage" is used for?');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>For the two new users selena and kim, Assign any default password. Set the maximum number of days between password changes to 90 days. Both of them must change their passwords at next login.');
        
        echo $this->Html->div('lab_task', '<br /><strong>Group Task:</strong>');
        //echo $this->Html->div('lab_task', '<span id="price">1. </span> Form a group or join an existing group (Talk to other class members about coming together to form a group)');
        //echo $this->Html->div('lab_task', '<span id="price">2. </span> Decide when the group will meet and how often the group will meet(At least once per week)'); 
        //echo $this->Html->div('lab_task', '<span id="price">3. </span> The first time you meet, you will choose a group name. Then send the name and a list of the members to your instructor');
        echo $this->Html->div('lab_task', '<span id="price">1. </span> What did you learn in this lab? What mistakes did you make? How did you fix the mistakes?');
   ?>
