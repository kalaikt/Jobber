<?php
        echo '<h3 style="color: red;">Lab 115: Log Files</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Understand linux log files, their uses and management<br /><br />');
        
  
        echo $this->Html->div('lab_task', '<strong>Part A. Log into your web server  </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>What are log files and why are log files important to system administrators?');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Look at the following log files. Write down what each log file is used for</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><code>/var/log/messages</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><code>/var/log/auth.log</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><code>/var/log/kern.log</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><code>/var/log/cron.log</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><code>/var/log/maillog</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><code>/var/log/httpd/</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>*** This one is important for interviews: <code>/var/log/boot.log</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><code>/var/log/yum.log</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Continuously writing to log files can make them grow big. What happens when a log file becomes too big?');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Suppose the messages log gets full too quickly. Edit its configuration so that it rotates every monthly. ');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>In addition, edit its configuration so that it stores 7 previous logs so that we now have a total of 8 stored logs');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>rsyslogd is a daemon that controls some log files. Open its configuration file and see if the log files above are listed in it');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>What would happen if the rsyslogd daemon was stopped?');
        
        
        echo $this->Html->div('lab_task', '<strong><br />Part B. (Exercise 1)Log into web server  </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Append a configuration rule to audit.rules to watch /etc/shadow files for execute, write, and read operations');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Test your new audit rule with ausearch command');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Write a script to remove audit.log file that is over 50M in size and store it in a safe place');
        
        
        echo $this->Html->div('lab_task', '<br /><strong>Part B. (Exercise 2) Log into your web serveer </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Write a script that will monitor all files under /var/log and report any file larger than 50M');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> If a file larger than 50M is found, ensure that you are notified the next time you log on');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Make sure this script run Monday through Friday, every week');
        
        
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');
   ?>
