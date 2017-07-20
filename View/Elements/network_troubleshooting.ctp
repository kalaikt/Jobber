<?php
        echo '<h3 style="color: red;">Lab 104: Network Configuration and Troubleshooting</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Develop a good understanding of how computers communicate and how to troubleshoot network problems<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Connect to your workstation (Note*** This lab presumes you are at home and you have a router)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span> Open the file "networkTroubleshooting" in your home directory');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span> Using any of the commands we have learned, obtain your computer IP address and record it');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span> Is it "big ip" or "small ip"? (Hint: check the network classification)');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span> Visit the site: http://www.whatismyip.com/ Compare the resulting IP address with the one you obtained previously. '); 
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Is it "big ip" or "small ip"? Why are they different?');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> All packets sent from your computer must go to a router. What is the IP address of your router?');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> Try and explain or find the connection between the router\'s IP address and each of the previous two IP addresses');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> If your computer has a small IP, then your router is protecting your computer from the outside world; called <i>Militarized zone</i>. Therefore, for your computer to serve as a server that is reachable from the internet, called <i>public facing</i>, it must be demilitarized. <i>Called DMZ</i>. Technically speaking, you are putting your server in the DMZ zone</i>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span> WAIT! It is dangerous to allow root SSH to public facing computers. You must disable it before going to the next step');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span> Enter the configuration page of your router from your web browser and put your server ip address in the DMZ Zone');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span> Test and ensure that your server is now "public facing". (Hint: Try to ssh the big IP from your cloud machine)');
         
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>As user jobber, perform step2. Example <code>#scp jobber@shareAmazonIP:/path/to/script /tmp</code>. Ask for password');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Download the script "/usr/local/scripts/breakNetworkClient.sh" from the shared amazon cloud instance (Hint: Use scp)');
        echo $this->Html->div('lab_task', '<span id="price">Step - </span>For the network troubleshooting tasks below, the goal is to figure out what went wrong. Not just to resolve the problem. Please explain, clearly, your troubleshooting steps, what you discovered and how you fixed it');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Ping yahoo.com and google.com to ensure that your computer is networked and able to reach the internet');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Run the script with an argument of "1". Example: enter <code># ./breakNetworkClient.sh 1</code> This will break your network. Fix it');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Ensure your networking has been properly fixed then run the script again but this time with an argument of 2. This will break your network again. Fix it again');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Ensure your networking has been fixed then run the script with an argument of 3 and fix the problem again');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Finally, run the script again with an argument of 4 and fix the problem again');
        echo $this->Html->div('lab_task', '<!-- span id="price">Step 6. </span>1, nameservers 2, ip address 3, router 4, down interface -->');
        
        //echo $this->Html->div('lab_task', '<br /><strong>Group Task - When you meet with your group:</strong>');
        //echo $this->Html->div('lab_task', '<span id="price">1. </span> Discuss how Bacula works');
        //echo $this->Html->div('lab_task', '<span id="price">2. </span> Discuss the different situations at work that might require different backup frequencies');
        //echo $this->Html->div('lab_task', '<span id="price">3. </span> Develop a list of 3 - 4 situations that require backup and write the corresponding backup frequency'); 
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong>');
        echo $this->Html->div('lab_task', '<span id="price">1. </span> Log your experience on your blog'); ?>
