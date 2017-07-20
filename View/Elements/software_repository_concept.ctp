<?php
        echo '<h3 style="color: red;">Lab 105: Concept of Software Repository</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Ensure students understand how linux software repository works and how it is structured<br /><br />');
     
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Connect to your production server</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> In your amazon account, click "Launch Instance"');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Click "AWS Marketplace", In the search box, type "rhel5" (or the version of your local installation)');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> From the list, select either 64 or 32 bit version (free tier eligible) product');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Click "Review and Launch", then "Launch"');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> On the next screen, you can use an existing key if you want, check the checkbox and "Launch"');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Next click "View Instances". When the instance is running, log into it via putty, (Hint: Use root)');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> Use downloadonly to download updates for all available packages. (Hint: Install downloadonly)');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> Use ownloadonly to download the downloadonly and the createrepo package (Hint: try reinstall)');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span> Also download nmap* , openldap* , samba-*');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span> Create an rpms directory in /opts. E.g /opt/rpms');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span> COPY all newly downloaded packages to the /opt/rpms directory');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span> Change ownership of everything under /opt/rpms to user apache and group apache');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span> Using rpm, install the createrepo package');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span> Use the createrepo command to create a repository in this new directory /opt/rpms');
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span> Create a soft link from your webroot to this new directory. E.g <code>#ln -s /opt/rpms /var/www/html/rpms </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span> Start your webserver and ensure you can see all the rpms from the browser on your local machine (Hint: type the server dns/ip address into your web browser on your local machine)');
                
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your Backup Server (Note*** This lab presumes you have completed previous labs)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>By default, Redhat creates a sample kickstart file in /root/ called anaconda-ks.cfg. Verify that this file exist and examine its content.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Copy the default kickstart file to a location under your httpd\'s document root and rename it myNameKickstart.cfg');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Open myNameKickstart.cfg. Add your gateway IP to the Network configuration and set the hostname of your next machine to web_svr');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Start web service on backup_svr and ensure that myNameKickstart.cfg is browseable');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Build a new computer on your ESXi server and call it web_svr');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Download a relevant version (iso) of CentOS to your workstation. For example, if you have been using RHEL 6.5, download CentOS 6.5');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Start your new web_server and connect your newly downloaded iso as the installation media. (Hint: Press TAB to control the installation)');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>On the boot up parameter specification line, specify kickstart and add location: <code># ks=http://path/to/myNameKickstart.cfg</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Allow installation to complete. Start and test web_svr to ensure proper installation');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Repeat steps 5 - 9 but this time call the new machine "Admin"'); 
     
           
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');
 ?>
