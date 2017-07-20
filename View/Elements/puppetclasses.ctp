<?php

        echo '<h3 style="color: red;">Lab 304: Puppet Classes</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Ensure students understand code blocks and templates. Also ensure students understand how to apply them<br /><br />');
        
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>A puppet class is just a block of code that is not used until it is declared');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Puppet classes can be declared in node definitions or at the top scope in the site manifest');

        echo $this->Html->div('lab_task', '<br /><strong>Part A. Simple class with no parameters (Exercise 1)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"></span><br />Declare a class in main manifest');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Open the site.pp file in your main manifest folder. Before your node definitions, type the following code.');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>class modulename::classname {</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>file { \'/tmp/mytoplevelclass.sh\' :</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>mode => \'644\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>ensure => \'present\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>content => \'made from top level class\'</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>}</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>}</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>You may put your node definitions after the above code');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>In your node definitions, you must call your class (e.g classname, written above) otherwise, it will not be included in your catalog run.');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Go to the client, run the code and ensure that the file, mytoplevelclass.sh, exist and the content is correct.');

     
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Single Class With Parameters (Exercise 2)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"></span><br />Using parameters');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Edit the site.pp file from Exercise 1 to include the following:');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>class modulename::classname ($newcontent = \'Still from top level but with parameters\')inherits modulename::params{</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>file { \'/tmp/mytoplevelclass.sh\' :</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>mode => \'644\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>ensure => \'present\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>content => $newcontent</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>}</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>}</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Now, test the code and see the difference. What is the difference?</code>');

        echo $this->Html->div('lab_task', '<br /><strong>Part A. Class With Parameters Written for Modules (Exercise 3)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price"></span><br />Writing a class inside init.pp');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>class modulename ($variable_name = \'Any string\')inherits modulename::params{</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>file { \'/tmp/mytoplevelclass.sh\' :</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>mode => \'644\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>ensure => \'present\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>content => $newcontent</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>}</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>}</code>');


        echo $this->Html->div('lab_task', '<br /><strong>Part B. Templates</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Puppet templates are written in ERB templating Language');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Puppet templates are located in: modulename/templates/templatename.erb');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>Puppet templates follow ruby style format: <code><%# comment %></code> is for comment while <code><%= Ruby Expression %></code> will hold variables ');
        echo $this->Html->div('lab_task', '<span id="price">Prereq - </span>You will need a linuxjobber_home mount point in your fstab file. If you do not have one, create it before proceeding');
        echo $this->Html->div('lab_task', '<span id="price">------  </span>Example, init.pp</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>file { \'filename\' :</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>mode => \'644\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>ensure => \'present\',</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>content => template(\'modulename/mytemplate.erb\'),</code>');
        echo $this->Html->div('lab_task', '<span id="price">------  </span><code>}</code>');

        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Create the template: #<code>mkdir  modulename/templates</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span><code>vi modulename/templates/fstab.erb</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span><code>cp /etc/fstab modulename/templates/fstab.erb</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span><code>vi fstab.erb</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span> Change the entire line that contains /dev/mapper/newvolume /linuxjobber_home .... to <%= @homefs %>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span><code>vi modulename/manifests/init.pp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>include this: <code>$homefs = $modulename::params::homefs</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span><code>vi modulename/manifests/params.pp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>include the entire line from fstab: <code>$homefs = \'/dev/mapper/newvolume /linuxjobber_home ....</code>');

        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');


 ?>
