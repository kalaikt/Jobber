<?php
        echo '<h3 style="color: red;">Lab 113: RAID and Storage Systems</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Commonly used RAID levels, uses, advantages and disadvantages (Merely for interview preparation)<br /><br />');
        
        echo $this->Html->div('lab_task', '<strong>Part A. This can be done on any word processor like notepad, msword etc</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Of the common RAID levels, which one provides no fault tolerance? Explain');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Which RAID level is called mirroring and why is it called mirroring?');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Which RAID level distributes parity? How?)');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Which RAID level provides the best combination of writing and reading speed?');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Which RAID level provides the best read/write speed in combination with fault-tolerance? How is this achieved? ');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> What is the minimum number of disks required to form the each of the RAID levels 0, 1, 5, and 10?');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> Which of the RAID levels is considered economical considering best fault-tolerance and best read/write spead? Explain</code>');
        
         
        echo $this->Html->div('lab_task', '<br /><strong>Part B. (Exercise 1)This can be done on any word processor like notepad, msword etc</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> What is Incremental Backup?');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> What is Differential Backup?');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> What is Full Backup?');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> What is the main difference between Incremental and Differential Backup?');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Which of the 3 backup strategies is appropriate for backing up a user\'s home directory? At what frequency?');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Which of the 3 backup strategies is appropriate for backing up a database? At what frequency?');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> Which of the 3 backup strategies would you use to backup an entire server? At what frequency?');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> List 3 commonly used enterprise backup applications');
        
         
        echo $this->Html->div('lab_task', '<br /><strong>Part B. (Exercise 2)Log into your web server</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Imagine your company is using tomcat server and the site is consuming all the memory. Now add some Swap file to help the system');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Create a file in your home directory, called lj_file.swap, that will be used as swap file to improve memory on your web server');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Prepare this file for swap: <code>#sudo dd if=/dev/zero of=/your_home/lj_file.swap bs=1024 count=2048</code> For 2G swap');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Format the file for swap: <code>#sudo chmod 600 /your_home/lj_file.swap</code> To make sure only root can access it');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Format the file for swap: <code>#sudo mkswap /your_home/lj_file.swap</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Add the file to the system as a swap file: <code>#sudo swapon /your_home/lj_file.swap</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Add this line to the end of /etc/fstab to make the change permanent: <code>#/your_home/lj_file.swap  none  swap  sw 0  0</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> You can increase swap priority by adding the following parameter to /etc/sysctl.conf: <code>#vm.swappiness=10</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> Run this command and ensure that the swap file was created correctly: <code>#sudo swapon -s</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> Reboot your system and ensure that the swap file was created correctly');
        
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');
 ?>
