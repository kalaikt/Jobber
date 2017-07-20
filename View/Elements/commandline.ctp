<?php
        echo '<h3 style="color: red;">Lab 102: Important Command Line Tools</h3><p></p>'; 
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Students develop familiarity with important command line tools - Practice <br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Using SSH, connect to your production server (This is the new cloud machine you set up with Amazon on your own account)');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Go to your document root and find the configuration file for your CMS <code>#find ./* -iname config* </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Schedule a cronjob to copy this config file to your bin directory every night at 9pm (Hint: you may have to create bin)');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Using the "tar" command, tar your entire home directory and its subdirectories into a file called myPrivateHome.tar in the /tmp directory. Schedule this as a recurring task for every saturday at midnight');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>For backup purposes, use the "scp" command to copy your /tmp/myPrivateHome.tar file to the /tmp of the shared amazon cloud machine');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Without actually logging into the shared cloud machine, use "ssh" command to remotely list the content of its /tmp and verify myPrivateHome.tar is there');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Open a file called myMachine.info in your bin directory and use it to store the following information');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Using the "grep" command, find the location of the DocumentRoot of your apache webserver');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Use the ps command to ensure that the mysql database server is currently running');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Use the "mysqldump" command to make a backup of your database and store it in your bin directory');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Use the "top" command to see which process is using the most resource on your machine');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>Figure out how much memory is on your machine, how much is being used and how much is left. Use the "free" command');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>How much space is currently left on the root partition on your machine?');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span>Open a new file in your bin directory called "memHug" but this time, let it run in the background: <code>vi memHug & </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span>The memHug process is suddenly consuming too much memory. Use ps to figure out the PID of the memHug process');
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span>Imagine the memHug process is now hung up and you can\'t retrieve it. Use the kill command to stop the process');
        echo $this->Html->div('lab_task', '<span id="price">Step 17. </span>Use the tail command to read a log file. e.g <code>#tail /var/log/messages</code>. How would you continuously monitor it for changes?');
        echo $this->Html->div('lab_task', '<span id="price">Step 18. </span>Use the more "command" to view the httpd.conf file. Now use the less "command" to view the same file, what are the differeces between the two commands?');
        echo $this->Html->div('lab_task', '<span id="price">Step 19. </span>Use the date command to check your system\'s date. Is it the correct date and time?'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 20. </span>Imagine it is spring and we have to adjust the system clock. Use the date command to set the clock for an hour ahead');
  
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>What is a nameserver?');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>If a nameserver is not available, how else can you achieve the same result?');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>List and explain two different types of nameservers (Hint: Not names of nameservers. Types of nameservers.)');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Using SSH, connect to the cloud machine.');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Test that the site www.washingtonpost.com is up and that it is reachable.');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>If the name we know is www.washingtonpost.com, what is its ip address?');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>How did the translation of name to IP address happen? Where (on what machine) did it happen?');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Is the machine that did the translation authoritative or non-authoritative?</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>List ALL the nameservers that your home windows machine uses for resolving domain names to IP');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>List ALL the nameservers that your private cloud machine uses for resolving domain names to IP');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Select one of the nameservers that were found on your linux machine. Using dig, query the nameserver for www.washingtonpost.com');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>How many sections are in the response of your linux query? Explain each section placing emphasis on the "questions" and "answers" sections'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>Now ping www.linuxjobber.com to make sure the site is up and reachable. If the site is reachable, skip the next step'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span>If the www.linuxjobber.com site is unreachable, carefully trace the connection from your machine to linuxjobber.com to pinpoint the equipment causing the problem.'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span>Exit from your cloud machine and return to your workstation.'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span>Configure your workstation to resolve "cloudmyname" to the IP address of your cloud machine.'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 17. </span>Test to make sure cloudmyname resolves by opening your browser and typing "cloudmyname" in the url bar. You should see your webpage from lab 8 and it should display "Myname Hello World".'); 
 
        echo $this->Html->div('lab_task', '<br /><strong>Group Task - When you meet with your group</strong>');
        //echo $this->Html->div('lab_task', '<span id="price">1. </span> The Nagios admin will log into the Nagios server from a web browser');
        //echo $this->Html->div('lab_task', '<span id="price">2. </span> As a group, click on hosts and ensure that the status of each member\'s host is "UP"');
        //echo $this->Html->div('lab_task', '<span id="price">3. </span> As a group, click on services and ensure that the status of each member\'s http service is "OK"');
        //echo $this->Html->div('lab_task', '<span id="price">4. </span> As a group, click on services and ensure that the status of each member\'s ssh service is "OK"');  
        echo $this->Html->div('lab_task', '<span id="price">1. </span> What did you learn in this lab? What mistakes did you make? How did you fix the mistakes?');  
 
   ?>
