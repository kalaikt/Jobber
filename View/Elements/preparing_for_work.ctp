<?php
        echo '<h3 style="color: red;">Lab 119: Preparing for Work</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>NOTE*** This simulates real Job, Not a lab:</strong> Understand how a company structures a development team in a REAL COMPANY<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>You have just been employed as a Sys Admin for a new start-up company, GuardEZ.com</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Determine which RAID level your new organization will need. You must use RAID while installing ESXi on next step');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Install a fresh ESXi hypervisor on your system (Hint: You will have to wipe out all your practice labs)');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> GuarEZ needs an admin server. Configure a VM for this purpose, install any linux flavor and name the server ADMIN');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Install and configure LDAP and ensure that it works correctly'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Set up ADMIN to serve kickstart file via ftp (Hint: Use vsftp)');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> You need a development machine for scripting. Using kickstart, build a new machine called DEV1');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> For your team to test all your scripts, build a new machine called TEST. (The team PM must call his/her own PRODUCTION or PROD)');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> Configure httpd on TEST and install your favorite blogging CMS');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span> The team Writer will have an extra vm called BACKUP. He/she will be responsible for implementing a backup strategy for all team scripts');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span> Each team member will put TEST in the DMZ so that the world can access it. Think of how to protect this system from hackers');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span> Tell your team\'s Sys Admin to install subversion on his/her TEST so that the team can have a central script repository');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span> The developer will install Nagios on his/her TEST so that it will monitor all hosts and all services used by your team and GuardEZ.com');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span> Each team member must install tortoisesvn on their windows machines and use it to checkout and commit scripts to the subversion server');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span> Write your first blog: Describe your role as an important member of your team with screenshot of all tasks achieved, problems encountered and describe how your solved each problem');
         
        echo $this->Html->div('lab_task', '<!-- br /><strong>Part B. Log into your local instance </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>As user jobber, perform step2. Example <code>#scp jobber@shareAmazonIP:/path/to/script /tmp</code>. Ask for password');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Download the script "/usr/local/scripts/breakNetworkClient.sh" from the shared amazon cloud instance (Hint: Use scp)');
        echo $this->Html->div('lab_task', '<span id="price">Step - </span>For the network troubleshooting tasks below, the goal is to figure out what went wrong. Not just to resolve the problem. Please explain, clearly, your troubleshooting steps, what you discovered and how you fixed it');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Ping yahoo.com and google.com to ensure that your computer is networked and able to reach the internet');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Run the script with an argument of "1". Example: enter <code># ./breakNetworkClient.sh 1</code> This will break your network. Fix it');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Ensure your networking has been properly fixed then run the script again but this time with an argument of 2. This will break your network again. Fix it again');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Ensure your networking has been fixed then run the script with an argument of 3 and fix the problem again');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Finally, run the script again with an argument of 4 and fix the problem again');
        echo $this->Html->div('lab_task', '<!-- span id="price">Step 6. </span>1, nameservers 2, ip address 3, router 4, down interface -->');
        
        echo $this->Html->div('lab_task', '<!-- br /><strong>Group Task - When you meet with your group:</strong>');
        echo $this->Html->div('lab_task', '<span id="price">1. </span> Discuss how Bacula works');
        echo $this->Html->div('lab_task', '<span id="price">2. </span> Discuss the different situations at work that might require different backup frequencies');
        echo $this->Html->div('lab_task', '<span id="price">3. </span> Develop a list of 3 - 4 situations that require backup and write the corresponding backup frequency -->'); ?>