<?php
        echo '<h3 style="color: red;">Lab 9: Local Component Installation</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Understand manual package installation using RPMs and by compiling from source .<br /><br />');
        
        echo $this->Html->div('lab_task', '<strong>Part A. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Check your machine to see if the "sendmail" package is installed. (Hint: Use rpm with the proper options)');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Check to see if the package "vsftp" is installed. If not installed, use google to search for "vsftp rpm" for your system');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Download and install the very secure ftp package');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Open the vsftp configuration file in /etc/vsftp/vsftpd.conf and ensure listen=YES, local_enable=YES');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Start the vsftpd service and ensure that it is accessible from a web browser');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Copy the scripts in your home directory to the default ftp sharing folder (Hint: /var/ftp/pub in RH and Centos)');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Restart the ftp service. On your browser, navigate to the scripts file and ensure it is browseable');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Using ftp, connect to another linux machine and download one of the scripts. Ensure successful download');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>What linux kernel is running on your machine? How much information can you obtain about it? (Hint: use "uname")');
 
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your production server (NOTE *** This lab is not hard, it\'s just long) </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Nagios is a tool to monitor servers. Install it to monitor your private server. First, create nagios user: <code>#useradd nagios</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Next, we change the nagios user\'s password to protect the account: <code>#passwd nagios</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Install "wget". A command that is used to download information for the internet: <code>#yum install wget</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Download Nagios Remote Plugin Executor (nrpe) - source code: <code>#wget http://sourceforge.net/projects/nagios/files/nrpe-2.x/nrpe-2.15/nrpe-2.15.tar.gz</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Now switch to root. Unpack the nrpe package to access its content: <code>#tar -xzvf nrpe-2*</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Install the compiler and its tools: <code>#yum install make gd gd-devel gcc glibc glibc-common openssl-devel xinetd</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Enter the new directory created by unpacking the nrpe package: <code>#cd /tmp/nrpe-2*</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Use the configure script to match your computer\'s libraries to the ones required by nrpe code: <code>#./configure</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Compile: <code>#make all; make install-plugin; make install-daemon; make install-daemon-config; make install-xinetd</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Examine the output of compilation to ensure there are no errors before you continue. If there are errors, ask for help');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Download source code of nagios plugin: <code>#wget http://nagios-plugins.org/download/nagios-plugins-2.0.3.tar.gz</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>Unpack the plugin package to access the content: <code>#tar -xzvf nagios-plugins*</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>Enter the new directory created by unpacking the plugin package: <code>#cd /tmp/nagios-plugins*</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span>Again, use configure to match the libraries but specify path this time: <code>#./configure -prefix=/usr/local/nagios</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span>Compile: <code>#make; make install</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span>Add the linuxjobber group server ip to your nrpe configuration file: <code>#vi /usr/local/nagios/etc/nrpe.cfg</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Change allowed_hosts to: <code>allowed_hosts=127.0.0.1,ec2-54-186-243-134.us-west-2.compute.amazonaws.com</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 17. </span>Add the linuxjobber group server ip to your xinetd configuration file: <code>#vi /etc/xinetd.d/nrpe</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Change only_from to: <code>only_from=ec2-54-186-243-134.us-west-2.compute.amazonaws.com</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 18. </span>To ensure that applications can translate port numbers to service names, add it to services file: <code>#vi /etc/services</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Append to the file: <code>nrpe 5666/tcp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 19. </span>Open your iptables so that we can open the nagios port: <code>#vi /etc/sysconfig/iptables</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>After the line containing 22 add this line: <code>-A RH-Firewall-1-INPUT -m state --state NEW -m tcp -p tcp --dport 5666 -j ACCEPT</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 20. </span>Restart iptables and save the new configuration: <code>#service iptables restart; iptables-save</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 21. </span>Edit permissions so that the nagios user can perform its functions: <code>#chown nagios.nagios /usr/local/nagios</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><code>#chown -R nagios.nagios /usr/local/nagios/libexec</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 22. </span>xinetd listens for incoming requests over a network and launches the appropriate service');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Restart it: <code>#service xinetd restart</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 23. </span>Test if xinetd is actually listening for this type of request: <code>#netstat -at | grep nrpe</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Ensure you see the following: <code>tcp 0 0 *:nrpe *:* LISTEN</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 24. </span>Test all configuration. Go to the group server and type: <code>#/usr/local/nagios/libexec/check_nrpe -H your.ip.address.here</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Ensure you see: <code>#NRPE v2.15</code>');
        
        echo $this->Html->div('lab_task', '<br /><strong>Group Task - When you meet with your group</strong>');
        //echo $this->Html->div('lab_task', '<span id="price">1. </span> Appoint one of your group members to be your group\'s nagios administrator');
        //echo $this->Html->div('lab_task', '<span id="price">2. </span> Discuss how Nagios works and make sure your nagios admin knows how to add your nagios clients to the nagios server');
        //echo $this->Html->div('lab_task', '<span id="price">3. </span> Ask the Nagios admin if he or she is ready to add Nagios clients to Linuxjobber\'s Nagios server');
        //echo $this->Html->div('lab_task', '<span id="price">4. </span> Ensure that your Nagios clients are added to the Nagios Server (Only the Nagios Admin can make changes to the server)');   
        echo $this->Html->div('lab_task', '<span id="price">1. </span> What did you learn in this lab? What mistakes did you make? How did you fix the mistakes?');   ?>
