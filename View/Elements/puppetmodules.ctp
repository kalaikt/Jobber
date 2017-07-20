<?php

        echo '<h3 style="color: red;">Lab 305: Configuration Management</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Ensure students understand code bundles and are able to apply them in an enterprise environment<br /><br />');
        
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>A module is a self contained bundle of code and data');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>A module is really just an ordinary directory with a manifest in it');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Each bundle must hold one or manifests');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>For each module you build, you must write, in your puppet_notes.txt file, a single short sentence describing the goal of the module');

        echo $this->Html->div('lab_task', '<br /><strong>Part A. Use your admin server and your backup server (Exercise 1)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"></span><br />Create a module');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>In your puppet_notes.txt file, write down the purpose of this module');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Give your module a name e.g linuxjobberServices');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Enter your puppet\'s modules directoy and create a directory with your modulename in it. ');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>e.g#cd /etc/puppet/modules</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#mkdir linuxjobberServices</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Enter your new directory and create a manifests directory inside it');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>e.g#cd linuxjobberServices</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#mkdir manifests</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Now, enter the manifests directory and create a default manifests file called init.pp');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#cd manifests</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>#vi init.pp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Using previous examples of how to write a puppet class, write a new class code in the init.pp file. Do not forget that the name of your module must be the name of your class');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Open your main manifest and include your modulename using the "require" keyword');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Run the code. Check your client and ensure that the class code has been applied. ');

     
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Use your admin server and your backup server (Exercise 2)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"></span><br />Using parameters');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Enter your modulename directory and then enter the manifest directory');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Create a new file called params.pp <code>#vi params.pp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>In the params.pp file, create a parameters class that will store all the variables that your module will need. ');
        echo $this->Html->div('lab_task', '<span id="price">------  </span>e.g <code>class linuxjobberServices::params{</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span>variable assignment e.g<code>$clientname = \'groupshare\'</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span>variable assignment e.g<code>$servername = \'groupadmin\'</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>}</code>');

        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Open the init.pp file in your manifests directory and ensure that your modulename class, e.g linuxjobberServices, inherits the params class so that your parameters are accessible ');

        echo $this->Html->div('lab_task', '<span id="price">------  </span>e.g <code>class linuxjobberServices{</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>$cname = linuxjobberServices::params::clientname</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>$sname = linuxjobberServices::params::servername</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>} inherits linuxjobberServices::params {</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code> your usual class code is here</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>}</code>');

        echo $this->Html->div('lab_task', '<br /><strong>Part B. Use your admin server and your backup server (Exercise 1)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"></span><br />File Sharing');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>To share files in puppet, each file must be served by the puppet file server. Almost like a webserver.');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Each file must be put in the files directory inside your modulename directory');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>A shared file is accessible by a client by pointing the source attribute of the configuration to the puppet file server.');
        echo $this->Html->div('lab_task', '<span id="price"><br />Step 1. </span>Enter your modulename directory');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Do "ls" and ensure that you see the manifests directory');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Create a new directory called files');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Copy a file that you will like to share with clients into the new files directory');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>In your existing class in this module, add a resource that will force clients to download and use this new file.');
        echo $this->Html->div('lab_task', '<span id="price">------  </span>e.g <code>source => puppet:///modules/linuxjobberServices/mypuppet_notes.txt</code>');

        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Open the site.pp in your main manifest file and declare your modulename');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Run the code. Ensure that the new file is now present on your client');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Create a new directory called files');
        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');


 ?>
