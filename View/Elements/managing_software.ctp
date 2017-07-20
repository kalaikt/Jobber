<?php
        echo '<h3 style="color: red;">Lab 106: Software Management</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> More practice with software management in linux.<br /><br />');
                       
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Connect to your Admin server</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> In any network, IP-Name resolution is very important. You will now set up your DNS server to resolve domain names to IP addresses');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Now, go to Proficiency Lab 118 and follow the instructions to set up your DNS server. Return here when you are done');
        
        
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Connect to your web_svr (Note*** This lab presumes you have completed all the previous labs</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span> Edit your web_svr\'s yum configuration file so that it will pull updates from your amazon webserver repository.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Disable every other repository on your web_svr except for your private amazon repository');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Using your new setup, update all the packages on your local instance');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Using your new setup, install the nmap, samba packages (Sample: <code>#yum install nmap* samba-*</code>)');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Use nmap to scan all the devices connected to your network. How many?');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Use "yum search" to see if the package "inotify" exist in your webserver repository');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> Use yum to find the package that provdes the command "wget"');

        echo $this->Html->div('lab_task', '<br /><span id="price">Step 8. </span>Display and record the hostname and domain name of your machine');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Set the domain name to a desired value. If you are happy with your current domain name, you don\'t have to change it');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Up until now, your computer has been using a predefined hostname. For LDAP to work correctly, your computer needs a name. Name your computer "mynamepc". (Hint: Edit /etc/hosts and /etc/sysconfig/network)');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Reboot your machine and ensure that your newly set values have not changed');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>Add your computer\'s new name to your dns server so that all the computers on your network can now resolve this new name.');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>Log into your backup server and test the name resolution (Hint: <code>#dig @yourdns yourhostname</code>)');

        //echo $this->Html->div('lab_task', '<br /><strong>Group Task - When you meet with your group:</strong>');
        //echo $this->Html->div('lab_task', '<span id="price">1. </span> Select a member of the group to be the Backup administrator');
        //echo $this->Html->div('lab_task', '<span id="price">2. </span> Discuss how frequently your webserver data should be backed up (Your webserver data is usually under /var/www/html/somedir)');
        //echo $this->Html->div('lab_task', '<span id="price">3. </span> Using your backup admin\'s backup server, backup each member\'s webserver data as frequently as the team decides'); 
     
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong>');
        echo $this->Html->div('lab_task', '<span id="price">1. </span> Log your experience on your blog');
 ?>
