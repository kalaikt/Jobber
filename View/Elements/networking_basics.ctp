<?php
        echo '<h3 style="color: red;">Lab 7: Establishing Network and Network Services</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Expose students understand the concept of networking and are able to identify network components<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span> Obtain the domain name of our cloud machine from putty. Using SSH, connect to the cloud machine.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Open a new file in your home directory called "mynameNetwork" and use it to answer the following questions');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>What is the fully qualified name of your system? (Hint: use the "hostname" command with the appropriate switch)');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>How many network interface cards are on your machine? List their names (Hint: use the "ifconfig" command)');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>What is the ip address of your machine?');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>What is the broadcast address of your system?');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>What is the subnet of your network?');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>How many machines can be allowed on this network?');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Given an ip address of 172.55.24.211, under what address class does this fall?');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>If the boss tells you that the subnet for the ip address above is 28. How many machines can you put in that network?');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Are nameservers listed anywhere on your linux machine? Where? How many dns servers are listed there? List them.');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>What would happen if the dns servers were not listed?');
 
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your workstation </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Create a file in your home directory called networkFiles and use it to answer the following questions');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>As user ragan2, read the file /etc/hosts. List each entry in the  file. What is the purpose of each entry? (Hint: use google)');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Read the file /etc/resolv.conf List each entry in the  file. What is the purpose of each entry? ');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Read the file /etc/sysconfig/network List each entry in the  file. What is the purpose of each entry?');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Read the file /etc/sysconfig/network-scripts/ifcfg-eth0 List each entry in the  file. What is the purpose of each entry?');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Run the command <code>#route</code> Record the output. Explain each entry in the output.');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Check to see if your computer can access the internet: Run the command <code>#ping google.com</code> Record a single line.');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Check to see if your computer can reach computers at google.com: Run the command <code>#traceroute google.com</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Run the same command again from your cloud account. See the difference between a good and a bad traceroute output?');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Compare the usefulness of ping to that of traceroute. Which of them is better?');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>List 2 services that are currently running on your machine. (Hint: use netstat with the appropriate option');
        echo $this->Html->div('lab_task', '<br /><strong>Interactive session:</strong> What did you learn in this lab? What mistakes did you make? How did you fix the mistakes?');
   ?>
