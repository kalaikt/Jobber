<?php
        echo '<h3 style="color: red;">Lab 8: Deploying Webserver Components and Configuration</h3><p></p>'; 
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Introduce students to server-client configuration using Apache Web Server as example <br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Using SSH, connect to YOUR PRODUCTION server (This is the new cloud machine you set up with Amazon on your own account)');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Enter the command <code>#sudo passwd </code> This will let you set the root password');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Create a new group called "linuxjobber"');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Create a new system user "sysadmin" whose primary group is the linuxjobber group');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Give the user sysadmin all sudo privileges. Switch to user sysadmin and test the sudo privileges');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Enter the command <code>#sudo yum install -y httpd </code> This will download and install the Apache Web Server Application');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Enter the command <code>#sudo service httpd start</code> This will start the Apache Web Server Application');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Enter the command <code>#sudo yum install -y system-config-firewall</code> This will download and install firewall TUI control');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Enter the command <code>#sudo system-config-firewall </code> This will load the TUI application for opening ports');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>On the TUI, Select: Customize > WWW (HTTP) > Close > OK > Yes : This will open the http port "80" for web access');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Return to your web browser. Go to your Amazon ec2 console where you can see your running instance');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>Towards the bottom of the screen, examine the "Description" tab. Find and note the line "Security Groups"');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>Return to the left Pane, in the scroll down area, select "Security Groups". On the right hand side, select the correct group');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span>On the right hand side at the bottom of the screen, select the "Inbound" tab. Click "Edit"');
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span>In the new window, click "add rule". For type, select "HTTP". For source, select "Anywhere". Save your changes.');
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span>Return to your private cloud machine, create a file called "index.html" in the /var/www/html folder');
        echo $this->Html->div('lab_task', '<span id="price">Step 17. </span>Ensure the new file is owned by the user "apache" and group "apache". Assign a 777 permission to this file.');
        echo $this->Html->div('lab_task', '<span id="price">Step 18. </span>Inside the new file, insert "<html><head></head><body>myname Hello world</body></html>"'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 19. </span>On your windows machine, from your web browser, you should now be able to view your web page using the "ec2...amazon.com" address');
  
        echo $this->Html->div('lab_task', '<!-- br /><strong>Part B. Log into your local linux instance </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Using SSH, connect to the cloud machine.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Open a new file in your new bin directory and call the file "backupPractice.sh" This will be your backup script');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>On the first line of your backup script, specify the shell to use while running the script');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Skip the next line. On the following line, add a comment with the text: "I am backing up my learnscripts file"');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>On the next line, insert a command to copy the myNameLearnScripts file in your home directory to /tmp directory</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Run your backup script and ensure that it runs and that the learnScripts file has been backed up to /tmp');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Protect your backup script: You should be the only one allowed to write and execute your backup script -->');
        echo $this->Html->div('lab_task', '<br /><strong>Interactive session:</strong> What did you learn in this lab? What mistakes did you make? How did you fix the mistakes?');
   ?>
