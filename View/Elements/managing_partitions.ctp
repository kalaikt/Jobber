<?php
        echo '<h3 style="color: red;">Lab 109: Managing Simple Partitions and File Systems</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Ensure students understand the relationship between devices, partitions and file systems. Ensure students understand how partitions and file systems are created and how they are used<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Open your ESXi Server. (Note*** Power down your Web Server instance)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Using kickstart, build a new machine called "fileserver" if you don\'t already have a file server');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Add a new hard drive to your fileserver (Hint: In your virtualBox environment, select your linux box, click settings. In the new window, click storage, then click "controller: SATA" and then click the "Add Hard Disk" Icon. After that, click "create new disk", check VDI, dynamically allocated, choose a name for your disk, select 8GB, and then click create and select "OK" )');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Power on your Web Server and use the fdisk command to identify your newly added disk');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> How many storage devices are now on your system? What is the name of your newly added device? (Hint: use fdisk)');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> How do you know that you have correctly identified a new device?');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Pass the new device to fdisk for partitioning (Hint: <code>#fdisk /dev/devicename </code>)');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: n for new partition');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: p for primary partition');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: 1 for first partition');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: 1 to start this partition on the first cylinder of the device');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: +2G to specify 2Gigabites as this partition size. Remember that the new device has 8G in total size');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: p to print the partition table for this device. Are you happy with the new partition?');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Good! So what is the new partition name? How is the name similar or different from the device name?');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: w to write the new partition table to the device');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> Use partprobe to inform your computer that you have just created a new partition table: <code>#partprobe</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> Format the new partition and create a new file system of type ext3 on it. (Hint: <code>#mkfs.ext3 /dev/partitionname</code>)');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span> Now try <code>#fdisk -l</code> and try to compare the result with the initial fdisk output. What is the difference?');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span> Now, a new file system has been created on your new partition and is ready for mounting. Create a new mount point /linuxjobber (Hint: <code>#mkdir /linuxjobber</code>)');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span> Mount the new file system on the /linuxjobber mount point: <code>#mount -t ext3 /dev/partitionname /linuxjobber</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span> Test: Do a df on your machine and be sure that your new file system is properly mounted and the partition size is correct');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span> Ensure that the new file system is available when your system reboots by adding it to your fstab file');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span> Reboot the machine and test that the new file system properly mounts');
         
        //echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your Web Server </strong><br />');
        //echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Start your tomcat server. Then start your apache server. Make sure you can access both of them.');
        //echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Install Bacula client on your Web Server and ensure documents for both servers are being backed up');
        //echo $this->Html->div('lab_task', '<br /><strong>Interactive session:</strong> Provide 2 questions for the rest of the class'); 
 
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');
?>
