<?php
        echo '<h3 style="color: red;">Lab 303: Configuration Management</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> To Familiarize students with the Syntax of PUPPET<br />');
        
        echo $this->Html->div('lab_task', '<span id="price"><br />Prereq - </span>In your home directory, open a new file called puppet_notes.txt <code>#vi ~/puppet_notes.txt</code>');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>From your command line, research the purpose of the following commands: (If necessary, use #commandname help)');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>a. puppet master');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>b. puppet apply');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>c. puppet cert');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>d. puppet module');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>e. puppet resource');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>f. puppet config');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>g. puppet parser');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>h. puppet man');
        echo $this->Html->div('lab_task', '<span id="price"></span>Open your puppet_notes file and record your findings.');

        echo $this->Html->div('lab_task', '<br /><strong>Part A. Use your admin server and your backup server </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"><br />Prereq - </span>Variables. Variables store values so that they can be accessed later');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Puppet receives system information as pre-set variables called facts which you can use in your manifests');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>All facts appear in puppet as top-scope variables');
        echo $this->Html->div('lab_task', '<span id="price"><br /></span>Variables assignment');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Storing a value inside a variable e.g $mygoal="Study hard and be successful". This assignment will be placed in a manifest so that the value stored in variable mygoal can be accessed in that manifest.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Go to your main manifest folder, open the site.pp file and type $mygoal="Study hard and be successful". 	In your existing configuration, change the parameter content. Make it content=$mygoal');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Run the manifest. <code>#puppet apply site.pp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Check your client to ensure that the file exists and now contains the string "Study hard and be successful"');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>On the command line, type <code>#facter -p</code> This is just to see a set of facts presented by your system');
        echo $this->Html->div('lab_task', '<span id="price"></span><br />CONDITIONALS');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Open your main manifest and add the following lines</code>');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>$osfamily == \'redhat\' {</code>');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>$myflavor = "My flavor is Red Hat Ent Linux"</code>');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>}</code>');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>else {</code>');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code> $myflavor="My favorite flavor is Centos"</code>');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>}</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Now set the content attribute to $myflavor and apply the manifest. What difference do you notice on the client file?');

        echo $this->Html->div('lab_task', '<br /><strong>Part B. Use your admin server and your backup server (Exercise 1)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"><br />Prereq - </span>Pay attention to this four frequently used commands: i, exec command ii, load file iii, ensure service iv, maintain package ');
        echo $this->Html->div('lab_task', '<span id="price"></span><br />Executing a command');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Create an nfs share on your server');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Create a mount point on your client');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Edit your fstab to ensure that your new mountpoint is mounted on your client at boot time');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Reboot the system and ensure that the nfs share is mounted. Now manually unmount the nfs share.');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Add the following codes to site.pp');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>exec{ \'mount\': </code>');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>command => \'mount -a\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>path => \'bin\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>}</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Run on code and ensure that the nfs share has been automatically mounted on your client.');


        echo $this->Html->div('lab_task', '<br /><strong>Part B. Use your admin server and your backup server (Exercise 2)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"></span>This exercise presumes you have finished building the httpd module. If not, build the module and come back to this exercise.');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Go into your main manifest folder and open site.pp file (Ensure it is empty)');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#vi /etc/puppet/manifest/site.pp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>As a comment, state why you would like to add a new client (called nodes) to your puppet server');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>On the next line, insert statement to include new node in your puppet configuration:');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>\'mynamenode.mydomain\'{</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>On the next line, include the module that you have previously built. (httpd in this case)');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code> require httpd</code> This line will ensure that your httpd module is applied to yournamenode client');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Close the block');
        echo $this->Html->div('lab_task', '<span id="price">------ </span><code>}</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Run the code and ensure that the httpd package has been installed on your client');
     
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');


 ?>
