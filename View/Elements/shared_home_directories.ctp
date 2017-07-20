<?php
        echo '<h3 style="color: red;">Lab 112: Shared Home Directories</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Making sure students understand the concept, advantages and practical uses of shared home directories<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your webserver (Note*** This lab presumes you have completed all previous labs) </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Ensure that your previously created 2G logical volume is mounted on /linuxjobber. It will hold user\'s home');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> We will now change the default home directory for all new users. Ensure /linuxjobber/users exists');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Open the new user configuration file so that we can change the defaults. Example: <code>#vi /etc/default/useradd</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Edit the configuration file to use the new directory: Change HOME=/home/users to HOME=/linuxjobber/users');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Save and close the configuration file. ');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Now create a new user "Nick Carter" with username nickc and check that your new configuration works as expected');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part B. By logging into each of your VMs. (Note*** This lab presumes you have completed all previous labs) </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Join all your VMs to your LDAP Server as clients');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Ensure your LDAP users, NOT LOCAL USERS, can now access all machines via LDAP authentication.');
         
        //echo $this->Html->div('lab_task', '<br /><strong>Group Task - When you meet with your team:</strong>');
        //echo $this->Html->div('lab_task', '<span id="price">1. </span> Let each team member explain his/her understanding of Central Home Directory');
        //echo $this->Html->div('lab_task', '<span id="price">2. </span> Configure your environment in such a way that any member of your group can login into any of your machines and have the same home');
        //echo $this->Html->div('lab_task', '<span id="price">3. </span> Test your Central Home Directory configuration with your team members');
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');
?>
