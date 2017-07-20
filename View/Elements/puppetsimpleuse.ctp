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

        echo '<h3 style="color: red;">Lab 302: Configuration Management</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Help students understand the conventions used in PUPPET, the configuration files, installation and use<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Use your admin and backup server(Using PUPPET -Exercise 1)<br /></strong>');

        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Now that your environment is set up, go into the server\'s main manifest folder to create a new site. Call the file site.pp');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#touch /etc/puppet/manifest/site.pp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>(optional) SERVER: Gather information about your server');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#facter</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>(optional) SERVER: List all resource types available for your server that you can automate with puppet');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#puppet resource --types</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>To see an html list  of resource types and their corresponding attributes and examples see: https://docs.puppetlabs.com/references/latest/type.html');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>SERVER: Open the new site.pp file and define --- resource_type { \'resourceName\': attribute=>value, }');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>package { \'vsftpd\': ensure=>installed, }</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>file { \'/tmp/myscript.sh\':  ensure=>present, mode=>644, content=>\'this is a test\', }</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>CLIENT: Test your configuration');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#sudo puppet agent --test</code>This will force immediately implementation of your new configuration. Otherwise it will push every 30 minutes');
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Use your admin and backup server(Using PUPPET -Exercise 2)<br /></strong>');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>SERVER: for the above 2 configuration examples, specify a node (agent) to apply them to (example: in this example, I am using web.linuxjobber.com and indent edit as necessary)');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#vi site.pp</code>');
        //echo $this->Html->div('lab_task', '<span id="price">------  </span><code>node \'web.linuxjobber.com\' { resource_type { \'resourceName\' : ensure => installed, } }</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>node \'web.linuxjobber.com\' { package { \'vsftpd\' : ensure => installed, } }</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>SERVER: After testing step 1 and ensuring everything works, add more resources to your manifest/site.pp file');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>node \'web.linuxjobber.com\' { file { \'/etc/myscript.sh\' : mode => \'644\', ensure=>present, content=>\'Enrolling in linuxjobber PUPPET class\', path=>\'/tmp/hello\',} }</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>CLIENT: apply the configuration to your agent (client) and test');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#sudo puppet agent --test</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#yum list installed ImageMagick </code>(yum must show package has been installed on client)');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#ls /tmp</code>(ensure that file hello1 has been created on client and content matches above)');
        //echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Configure an LDAP server (Hint: We practiced this in class already. Look in your notes)');
                   
     
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');


 ?>
