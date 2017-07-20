<?php
        echo '<h3 style="color: red;">Lab 110: Flexible Storages</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Demonstrate the advantages of flexible storages over physical storages. Reinforce class materials<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your ESXi Server. (Note*** This lab presumes you have completed all previous labs)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Using kickstart, build a new machine called "fileserver" if you don\'t already have a file server');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Start and log into your fileserver');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Determine if your filserver has free space on which you can create a new partition. If not, add a new device');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Using the fdisk command, choose the device that contains the free space so that you can create a new partition');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> On the device, create a new partition of size 2G.  (Warning: Do not exit fdisk until you are told to do so)');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Once the partition has been created, note the partition name. Change the partition type to \'8e\'. Here is how:');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: t for changing partition type');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter the number of the new partition you just created');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: L to see all the available partition codes. Note 8e and see what it stands for');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: 8e to chose Linux LVM');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: p to print the partition table for this device. Are you happy with the new partition?');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Good! So what is the new partition name? How is the name similar or different from the other partition?');
        echo $this->Html->div('lab_task', '<span id="price">Step --- </span> Enter: w to write the new partition table to the device');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> ***Quickly look at the next few steps. Do some of them look familiar? Which ones look familiar?');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> Use partprobe to inform your computer that you have just created a new partition table: <code>#partprobe</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span> Designate your new partition as a physical volume for LVM <code>#pvcreate /partitionname </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span> Create a volume group called "myname_vol_grp" -use the newly created physical volume <code>#vgcreate myname_vol_grp /partitionname</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span> See the details of your volume group <code>#vgdisplay myname_vol_grp</code> (Hint: note the available <i>free extents</i>)');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span> Create a logical volume on your new partition -use all "free extents" on your volume group <code>#lvcreate -n data -l <i>free extents</i> myname_vol_grp</code>');
        
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span> Format the new partition and create a new file system of type ext3 on it. (Hint: <code>#mkfs.ext3 /dev/myname_vol_grp/logical_volume_name</code>)');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span> Now try <code>#fdisk -l</code> and try to compare the result with the initial fdisk output. What is the difference?');
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span> Now, a new file system has been created on your new partition and is ready for mounting. Create a new mount point /linuxjobber_lvm');
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span> Mount the new file system on the /linuxjobber_lvm mount point');
        echo $this->Html->div('lab_task', '<span id="price">Step 17. </span> Test: Do a df on your machine and be sure that your new file system is properly mounted and the partition size is correct');
        echo $this->Html->div('lab_task', '<span id="price">Step 18. </span> Ensure that the new file system is available when your system reboots by adding it to your fstab file');
        echo $this->Html->div('lab_task', '<span id="price">Step 19. </span> Reboot the machine and test that the new file system properly mounts');
         
        echo $this->Html->div('lab_task', '<!-- br /><strong>Part B. Log into your local instance. (Note*** This lab presumes you have completed all previous labs) </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>As user jobber, perform step2. Example <code>#scp jobber@shareAmazonIP:/path/to/script /tmp</code>. Ask for password');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Download the script "/usr/local/scripts/breakNetworkClient.sh" from the shared amazon cloud instance (Hint: Use scp)');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Ping yahoo.com and google.com to ensure that your computer is networked and able to reach the internet');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Run the script with an argument of "1". Example: enter <code># ./breakNetworkClient.sh 1</code> This will break your network. Fix it');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Ensure your networking has been properly fixed then run the script again but this time with an argument of 2. This will break your network again. Fix it again');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Ensure your networking has been fixed then run the script with an argument of 3 and fix the problem again');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Finally, run the script again with an argument of 4 and fix the problem again');
        echo $this->Html->div('lab_task', '<!-- span id="price">Step 6. </span>1, nameservers 2, ip address 3, router 4, down interface -->');
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');
 ?>

