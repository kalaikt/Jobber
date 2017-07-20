<?php
        echo '<h3 style="color: red;">Lab 111: File System Sharing in Linux</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Demonstrate and test the ability of linux to share its file systems with other linux machines <br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your fileserver machine (Note*** This lab presumes you have completed all previous labs)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> These two packages are required for nfs to work: nfs-utils and rpcbind. Check first, if they are not installed, install them');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> As root, not sudo, start the nfs and rpcbind services if they are not already started. e.g <code> #service nfs start </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Check the status to make sure both services are currently running'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> As root, ensure the two services will start at boot<br /></br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> <strong> We will now create an NFS Share </strong>. You will share your logical volume: /linuxjobber_lvm. Ensure it is available'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> In the new share directory, create a file called myname_share to share with clients'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> Open the file myname_share and enter the name of your favorite artist in it. Save and exit the file'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> NFS configuration file is in /etc/exports. Open it and add the /linuxjobber_lvm directory to it so that it can be shared. (Hint: example of /etc/exportfs entry is <code>/linuxjobber_lvm *(rw,sync)</code>)');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span> Use the showmount command to ensure your /linuxjobber_lvm folder is actually being shared. e.g <code>#showmount -e</code><br /></br />');  
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span> <strong> Log into your webserver, web_svr, </strong>so that we can configure it and use it to mount the nfs share');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span> Check to make sure the nfs-utils and rpcbind packages are installed on this webserver. If not, install them.');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span> Start both services, ensure they are running and ensure they will start at boot');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span> Ping the fileserver from this webserver to verify network connectivity');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span> Use showmount again to see network shares (Hint: you may need to temporarily stop firewall on both sides to test nfs)');
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span> If network shares are seen, mount the share on /webdir e.g <code>#mount -t nfs fileserver:/share /webdir</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span> Show all file systems on your local machine and ensure that the server share successfully mounts and is usable');
        echo $this->Html->div('lab_task', '<span id="price">Step 17. </span> If you temporarily disabled your firewall earlier, turn it back on and use <code>#system-config-firewall</code> to enable nfs');
        echo $this->Html->div('lab_task', '<span id="price">Step 18. </span> Test the mount again to be sure that the firewall is on and not blocking the nfs share');
        echo $this->Html->div('lab_task', '<span id="price">Step 18. </span> Now repeat steps 5-17 but this time, mount /linuxjobber from the fileserver to /home/users on the webserver.');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your fileserver machine (Note*** This lab presumes you have completed all the previous labs)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Using vi, open your samba configuration file /etc/samba/smb.conf');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> To share your entire home directory, let\'s call the share mynameshare. Add the following lines');
        echo $this->Html->div('lab_task', '<span id="price">- </span> (Hint: This is a stanza. Place it after the [homes] stanza)');
        echo $this->Html->div('lab_task', '<span id="price"> </span> <code>[mynameshare]</code>'); 
        echo $this->Html->div('lab_task', '<span id="price"> </span> <code>comment=sharing my entire home directory</code>');
        echo $this->Html->div('lab_task', '<span id="price"> </span> <code>writable=yes</code>');
        echo $this->Html->div('lab_task', '<span id="price"> </span> <code>path=/home/myname</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Search for "interfaces" and add your entire network. e.g interfaces = 192.168.0.2/24');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Save the file, close it and restart samba. <code>#service smb restart</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Grant access to an existing linux user: <code>#smbpasswd -a username</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Temporarily turn off your firewall to test your configuration');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> From your windows machine, go to "run", enter "\\\youripaddress"');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> Once everything is working, restart your firewall and open samba ports and test again');
        
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');
 ?>
