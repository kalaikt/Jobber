<?php
        echo '<h3 style="color: red;">Lab 101: Server - Client Communication</h3><p></p>'; 
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Develop concrete understanding of server - client relationship and communication<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Using SSH, connect to YOUR PRIVATE cloud machine (This is the new cloud machine you set up with Amazon on your own account)');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>At this point, your webserver is running and can interpret html but not web programming languages like PHP and JAVA');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Enter this command to patch packages on your machine: <code>#sudo yum -y update </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Enter this command to prepare for downloads: <code>#sudo yum -y install yum-downloadonly </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Prepare for PHP and MySQL database package downloads: <code>#sudo yum install php php-mysql mysql-server -y --downloadonly</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Update the system database so that you can find files. Enter the command <code>#sudo updatedb</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Find out where the PHP and MySQL packages (called rpms) were downloaded. Enter <code>#locate mysql-server</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Now that you know the location of the downloaded rpms, using the rpm command, do the part B to install MySQL and PHP');
  
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your production server </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"></span>Continuation of part A');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Now that the mysql and php rpms are downloaded, can we install them using rpm comand? How?');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>What would happen if we tried to install these two packages using rpm?');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Install the two packages using yum: <code>#sudo yum install mysql-server php</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>During the installation, do these packages depend on other packages to install? How many?');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Does rpm and yum do the same job? List the differences');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Under what circumstance would you use rpm and under what circumstance would you use yum?');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>How would you update all the packages on your machine?');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Now find, download and install wordpress (Hint: This is a blogging software that you will start using to log your lab experience)');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Once your wordpress is running smoothly, customize your apache webserver as follows:');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Change the default port to 88');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Change the document root to /var/www/html/cms/');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>Enable virtual name hosting so that your machine can resolve domain names and serve the appropriate pages');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>Test your work: Make sure your website is accessible from your workstation\'s browser using the name');
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entries:</strong> What did you learn in this lab? What mistakes did you make? How did you fix the mistakes?');
   ?>
