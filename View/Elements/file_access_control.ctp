<?php
        echo '<h3 style="color: red;">Lab 108: File Access Control</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Students will practice scripting and also install application server<br /><br />');
     
     
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Backing up your producton webserver (Exercise 1) </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Log into your production server. Using your previous knowledge of Bacula, install the Bacula client on your production server');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> On your production server, plan how to backup your Blog such that you can recover if lose this server.');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Log into your backup server and configure it to backup your entire Blog every week.');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Inspect your backup and ensure that your files and database are available to recover from a failure');

        echo $this->Html->div('lab_task', '<br /><strong>Part A. Locking down your webserver (Exercise 2)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Read about Security Technical Implementation Guidelines (STIGS)');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Visit the stigviewer site at http://www.stigviewer.com/stigs and download the guidelines that fits your machine');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Select any six tasks of your choice from the list');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Implement three of the tasks, in three separate files, using bash scripting language (Do not use awk and perl) ');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Submit the three files this week by uploading them to the open source project at GuardEZ.com ');
        //echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Implement the last three tasks, in separate files, using bash scripting for submission next week ');
     
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Connect to your Web Server (Note*** This lab presumes you have completed all the previous labs)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> We will install a "NEW" web server called Tomcat. Download Tomcat source "tar.gz" from: http://tomcat.apache.org');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Move the downloaded file to /opt/tomcatserver and unpack it there');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Set environment JAVA_HOME to the installation path of java. (Hint: Add JAVA_HOME=/bin/java to your .bashrc file)');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Activate your new entry <code>#source ~/.bashrc</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Start the tomcat server: <code>#/opt/tomcatserver/apache-tomcat.x.x/bin/startup.sh</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Test your tomcat installation by pointing your browser to it: http://127.0.0.1:8080');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> Open port 8080 on your firewall and test external access: http://smallip:8080');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> Download any open source war file of your choice and deploy it to your tomcat server to test your set up');
          
        //echo $this->Html->div('lab_task', '<br /><strong>Group Task - When you meet with your group:</strong>');
        //echo $this->Html->div('lab_task', '<span id="price">1. </span> Discuss how LDAP works');
        //echo $this->Html->div('lab_task', '<span id="price">2. </span> Individually, add each member of your group to your LDAP database.');
        //echo $this->Html->div('lab_task', '<span id="price">3. </span> Ensure each person can login/logout and make sure they are not local users.'); 
        
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong>');
        echo $this->Html->div('lab_task', '<span id="price">1. </span> Log your experience on your blog');
?>
