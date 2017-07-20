<?php
        //echo '<h3 style="color: red;">Lab 107: Linux-Windows Filesharing</h3><p></p>';
        //echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> To demonstrate the possibility of accessing linux filesystems from a windows machine<br /><br />');
        
        //echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your ESXi Server </strong><br />');
        //echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Using your kickstart, install a new machine called "admin" if you don\'t have one already.');
        //echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Log into the admin server');
        //echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Configure an LDAP server (Hint: We practiced this in class already. Look in your notes)');
                   
        //echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your ESXi Server</strong><br />');
        //echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Using your kickstart, install a new machine called "workstation" if you don\'t have one already.');
        //echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Ask your lab instructor for part B of the LDAP instructions');
        //echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Using the LDAP client notes, join your new machine called workstation to your LDAP server called admin.');
        //echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Test to make sure that LDAP users (not local accounts) can log into workstation');
     
        //echo $this->Html->div('lab_task', '<br /><strong>Interactive session:</strong> Provide 2 questions for the rest of the class');

        echo '<h3 style="color: red;">Lab 301: Configuration Management</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> To ensure students understand why companies use configuration management tools, understand how PUPPET works and how to set up puppet<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Use your admin server and your backup server (Introduction to PUPPET)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Ensure all hosts have fqdns either with dns or /etc/hosts and its resolvable. Otherwise, you will DEFINITELY run into unexplainable problems.');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Make sure that your server and client can ping each other by name');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Switch to root, not sudo, <code>#su -</code> to install and configure puppet');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>SERVER: Download a yum configuration file that will help you connect to the puppet repository where all the puppet rpms are located.');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#rpm -ivh http://yum.puppetlabs.com/puppetlabs-release-el-6.noarch.rpm</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>SERVER: Install the puppet server');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#yum install puppet-server</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>SERVER: Under the main section of the puppet configuration file, add the server name');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#vi /etc/puppet/puppet.conf</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>dns_alt_names = yourservername.yourdomainname.com</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>SERVER: Open port 8140 on the server and make sure it is open');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#vi /etc/systconfig/iptables</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>SERVER: Start the puppet server');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#service puppetmaster start</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>CLIENT: Download a yum configuration file that will help you connect to the puppet repository where all the puppet rpms are located');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>#rpm -ivh http://yum.puppetlabs.com/puppetlabs-release-el-6.noarch.rpm</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>CLIENT: Install the puppet agent on this client');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#yum install puppet</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>CLIENT: Under the main section of the puppet configuration of the client, add the server name');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#vi /etc/puppet/puppet.conf</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>server = yourservername.yourdomainname.com</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>(Warning: this yourdomainname must match the yourdomainname on the server)</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>CLIENT: Start the puppet agent');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>Start the puppet agent</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>SERVER: Step 10: Since the agent service has started and knows where the server is located, it will automatically generate a certificate and present it to the server in order to join. So we check the server to see if the agent certificate has been presented');
        echo $this->Html->div('lab_task', '<span id="price">------   </span><code>#puppet cert list</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>SERVER: Sign the agent\'s certificate so that agent is now allowed to pull configuration');
        echo $this->Html->div('lab_task', '<span id="price">-------  </span><code>#puppet cert sign yourclientname.yourdomain.com</code>');

     
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');


 ?>
