<?php
        echo '<h3 style="color: red;">Lab 103: Introduction to Task Automation</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Helping students develop a better understanding of task automation. <br />');
        echo $this->Html->div('lab_task', '***Note: This lab also help students understand some purposes of dedicated servers. At this point, each student should have a dedicated hardware running VMWare ESXi.<br /><br />');
        
        echo $this->Html->div('lab_task', '<strong>Part A. Log into your ESXi host </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Build a new virtual machine and install the appropriate version of CentOS on it. This will be your backup server.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Once your backup server has been installed, name the it "backup_svr"');
        echo $this->Html->div('lab_task', '<span id="price">Step - </span>We will install Bacula, an open source enterprise backup application.');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>First install EPEL, the linux Extra-Packages repository. Epel repo contains the Bacula rpms not found in the base repo: <code>#rpm -Uvh http://download.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-8.noarch.rpm</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Second, install Webmin in 3 different steps:');
        echo $this->Html->div('lab_task', '<span id="price">Step ----a:</span> Install the Webmin repository by creating a file called "webmin.repo" in /etc/yum.repos.d and enter the following in it:</span>');
        echo $this->Html->div('lab_task', '<span id="price">Step -----:</span> <code>[Webmin]</code></span>');
        echo $this->Html->div('lab_task', '<span id="price">Step -----:</span> <code>name=Webmin Distribution Neutral</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step -----:</span> <code>mirrorlist=http://download.webmin.com/download/yum/mirrorlist</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step -----:</span> <code>enabled=1</code>'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Add the GPG Key and Install Webmin: <code>#rpm --import http://www.webmin.com/jcameron-key.asc </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Now install webmin: <code>#yum install webmin</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Now install Bacula:');
        echo $this->Html->div('lab_task', '<span id="price">Step ----- </span><code>#yum install bacula-director-mysql bacula-console</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step ----- </span><code>#yum install bacula-client bacula-traymonitor</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step ----- </span><code>#yum install bacula-storage-mysql bacula-docs</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>If mysql server is not running, start your mysql server and ensure it will restart at boot time');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>If your mysql root does not have a password, create one: <code>#mysqladmin -u root password \'new-password\'</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Run the following scripts to create necessary bacula user and database:');
        echo $this->Html->div('lab_task', '<span id="price">Step ----- </span><code>#/usr/libexec/bacula/grant_mysql_privileges -u root -p</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step ----- </span><code>#/usr/libexec/bacula/create_mysql_database -u root -p</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step ----- </span><code>#/usr/libexec/bacula/make_mysql_tables -u root -p</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step ----- </span><code>#/usr/libexec/bacula/grant_bacula_privileges -u root -p</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>(i)Change Bacula director password. (ii)Change address and password on Bacula client. (iii)Change Bacula storage Address and Password. (iv)change Bacula console password: <code>#vi /etc/bacula/bacula-dir.conf</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>Change bacula-dir password, change bacula-mon password: <code>#vi /etc/bacula/bacula-fd.conf </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>Change bacula-dir password, change bacula-mon password, change Device (Archive Device to /backup): <code>#vi /etc/bacula/bacula-sd.conf</code> ');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span>Change Address and Password: <code>#vi /etc/bacula/bconsole.conf</code> ');
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span>Change Address, Password and additionally change Director name to localhost: <code>#vi /etc/bacula/tray-monitor.conf</code> ');
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span>Create the backup folder: <code>#mkdir /backup; #chown bacula /backup</code> ');
        echo $this->Html->div('lab_task', '<span id="price">Step 17. </span>Start the 3 Bacula services: <code>#service bacula-dir start; #service bacula-fd start; #service bacula-sd start</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 18. </span>Webmin runs on port 10000 and Bacula runs on port 9101, 9102 and 9103. Open these ports.');
        echo $this->Html->div('lab_task', '<span id="price">Step 19. </span>From port 10000 on your web browser, login using root and ensure that your installation was successful and test a backup job');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your production server </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Enable SSH login for local users so that anyone with account can now ssh into the machine with username and password.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>SSH into your workstation.');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Configure "mynamecms" to point to your cloud machine.');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Test your new configuration. If successful, return to your private cloud machine.');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Configure namevirtualhost directive such that when apache receives any request destined for mynamecms, it will automatically serve your cms page');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Configure your namevirtualhost so that error messages from your cms website is logged into /var/log/mynamecms/error_log');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Restart your web service and test your changes');
        
        
        echo $this->Html->div('lab_task', '<br /><strong>Exercise </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price"></span>Access the group\'s nagios page and prepare a status report for your private cloud instance. Log your experience on your blog');
        
   ?>
