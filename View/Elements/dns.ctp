<?php
        echo '<h3 style="color: red;">Lab 118: Domain Name System</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Understand the concept of Domain Name System.<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Log into your admin server </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span>BIND is the DNS server. To install and configure it, start by entering: <code>#yum install bind bind-utils -y</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Next, <code>#vi /etc/named.conf</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Configure your options section as follows (Where ip address of your admin server is 2.2.2.2): 
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;options {
	                                                                    <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#listen-on port 53 { 127.0.0.1; };
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;listen-on-v6 port 53 { ::1; };
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directory	"/var/named";
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dump-file	"/var/named/data/cache_dump.db";
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;statistics-file "/var/named/data/named_stats.txt";
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memstatistics-file "/var/named/data/named_mem_stats.txt";
		                                                                <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allow-query { any; };
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allow-transfer     { localhost; 2.2.2.2; };
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recursion no;

                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dnssec-enable yes;
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dnssec-validation yes;
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dnssec-lookaside auto;

                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Path to ISC DLV key */
                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bindkeys-file "/etc/named.iscdlv.key";

                                                                        <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;managed-keys-directory "/var/named/dynamic";
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;}; ');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Now create your first domain: <code>#vi /etc/named.conf</code> Enter the following:
                                                                        <br />zone "linuxjobber.com" IN {
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type master;
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file "linuxjobber.com.zone";
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allow-update { none; };
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;};
                                                                         ');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Now, create a zone file for your domain <code>#vi /var/named/linuxjobber.com.zone</code> Enter the following:
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$TTL 86400
@   IN                                                                  <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOA     ns1.linuxjobber.com. root.linuxjobber.com. (
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013042201  ;Serial
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3600        ;Refresh
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1800        ;Retry
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;604800      ;Expire
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;86400       ;Minimum TTL
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;; Specify our two nameservers
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		IN	NS		ns1.linuxjobber.com.
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		IN	NS		ns2.linuxjobber.com.
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;; Resolve nameserver hostnames to IP, replace with your two droplet IP addresses.
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ns2		IN	A		2.2.2.2

                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;; Define hostname -> IP pairs which you wish to resolve
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@		IN	A		3.3.3.3
                                                                        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www		IN	A		3.3.3.3
                                                                         ');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span> Restart your nameserver so that the new configuration will be loaded: <code>#service named restart </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span> Ensure nameserver starts at boot time: <code>#chkconfig named on</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span> Test your newly configured nameserver for proper functionality: <code>#dig @2.2.2.2 linuxjobber.com</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span> Use any method of your choice to obtain the IP address of linuxjobber.com');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span> Using the above linuxjobber example, configure your nameserver to resolve rhjobber.com to the IP address of linuxjobber.com');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span> To test your configuration, type rhjobber.com into your web browser and ensure that linuxjobber.com\'s website is displayed');
  
  
        echo $this->Html->div('lab_task', '<br /><strong>Group Task - When you meet with your group</strong>');
        echo $this->Html->div('lab_task', '<span id="price">1. </span> You are now ready to prepare for your first job. You will be forming a company with your group members');
        echo $this->Html->div('lab_task', '<span id="price">2. </span> Select a member of your group to be the Project Manager. (No position has any advantage over any other)');
        echo $this->Html->div('lab_task', '<span id="price">3. </span> Another member to be the Developer, another to be the Writer and  another to be the Sys Admin');  
 
   ?>