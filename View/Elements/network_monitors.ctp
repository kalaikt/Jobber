<?php
        echo '<h3 style="color: red;">Lab 114: Network Monitors</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Expose students to both server and client side network monitors<br /><br />');
        
  
        echo $this->Html->div('lab_task', '<strong>Part A. Log into your Admin server  </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Nagios is a tool to monitor servers. Install it to monitor your private server. First, create nagios user: <code>#useradd nagios</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Next, we change the nagios user\'s password to protect the account: <code>#passwd nagios</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Install "wget". A command that is used to download information for the internet: <code>#yum install wget</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Download Nagios Remote Plugin Executor (nrpe) - source code: <code>#wget http://sourceforge.net/projects/nagios/files/nrpe-2.x/nrpe-2.15/nrpe-2.15.tar.gz/download</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Now switch to root. Unpack the nrpe package to access its content: <code>#tar -xzvf nrpe-2*</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Install the compiler and its tools: <code>#yum install make gd gd-devel gcc glibc glibc-common openssl-devel xinetd</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Enter the new directory created by unpacking the nrpe package: <code>#cd /tmp/nrpe-2*</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Use the configure script to match your computer\'s libraries to the ones required by nrpe code: <code>#./configure</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Compile: <code>#make all; make install-plugin; make install-daemon; make install-daemon-config; make install-xinetd</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Examine the output of compilation to ensure there are no errors before you continue. If there are errors, ask for help');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Download source code of nagios plugin: <code>#wget http://nagios-plugins.org/download/nagios-plugins-2.0.3.tar.gz</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 12. </span>Unpack the plugin package to access the content: <code>#tar -xzvf nagios-plugins*</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 13. </span>Enter the new directory created by unpacking the plugin package: <code>#cd /tmp/nagios-plugins*</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 14. </span>Again, use configure to match the libraries but specify path this time: <code>#./configure -prefix=/usr/local/nagios</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 15. </span>Compile: <code>#make; make install</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 16. </span>Add the linuxjobber group server ip to your nrpe configuration file: <code>#vi /usr/local/nagios/etc/nrpe.cfg</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Change allowed_hosts to: <code>allowed_hosts=127.0.0.1,ec2-54-186-243-134.us-west-2.compute.amazonaws.com</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 17. </span>Add the linuxjobber group server ip to your xinetd configuration file: <code>#vi /etc/xinetd.d/nrpe</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Change only_from to: <code>only_from=ec2-54-186-243-134.us-west-2.compute.amazonaws.com</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 18. </span>To ensure that applications can translate port numbers to service names, add it to services file: <code>#vi /etc/services</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Append to the file: <code>nrpe 5666/tcp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 19. </span>Open your iptables so that we can open the nagios port: <code>#vi /etc/sysconfig/iptables</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>After the line containing 22 add this line: <code>-A RH-Firewall-1-INPUT -m state --state NEW -m tcp -p tcp --dport 5666 -j ACCEPT</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 20. </span>Restart iptables and save the new configuration: <code>#service iptables restart; iptables-save</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 21. </span>Edit permissions so that the nagios user can perform its functions: <code>#chown nagios.nagios /usr/local/nagios</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><code>#chown -R nagios.nagios /usr/local/nagios/libexec</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 22. </span>xinetd listens for incoming requests over a network and launches the appropriate service');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Restart it: <code>#service xinetd restart</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 23. </span>Test if xinetd is actually listening for this type of request: <code>#netstat -at | grep nrpe</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Ensure you see the following: <code>tcp 0 0 *:nrpe *:* LISTEN</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 24. </span>Test all configuration. Go to the group server and type: <code>#/usr/local/nagios/libexec/check_nrpe -H your.ip.address.here</code>');
        echo $this->Html->div('lab_task', '<span id="price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Ensure you see: <code>#NRPE v2.15</code>');
  
        echo $this->Html->div('lab_task', '<strong><br />Part B. Using your ESXi server Exercise 1 (This part is not linux. You will need to find your instuctions online)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Go to Microsoft\'s website');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Download the latest version of windows server 20xx iso');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Create a new machine, called DC, on your ESXi server and install the downloaded iso on it.');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Your new Windows server is called a primary domain controller, or DC, so start and name the computer "domainController" ');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Install and configure Active Directory, called AD, and Domain Name Service, called DNS on your domain controller');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Configure your linux machines to use your domain controller as their nameserver');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Ensure the forward and reverse name resolution works on all linux machines. (Hint: Use nslookup and/ dig)');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>What is the difference between using dig and using nslookup?');
  
        echo $this->Html->div('lab_task', '<strong><br />Part B. Using your ESXi server Exercise 2 (Optional: Authentication of Linux Users via Windows Active Directory)</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Install dependecies: <code>#yum -y install authconfig krb5-workstation pam_krb5 samba-common oddjob-mkhomedir ntp</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Run authconfig to setup the initial authentication configuration: <code>#service messagebus restart</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>This will create the initial configuration files to setup samba and kerberos: 
        <code>
        <br /> #authconfig 
        <br /> --disablecache 
        <br /> --enablewinbind 
        <br /> --enablewinbindauth 
        <br /> --smbsecurity=ads 
        <br /> --smbworkgroup={AD DOMAIN NAME(short version all caps)} 
        <br /> --smbrealm={AD DOMAIN NAME(long version all caps)} 
        <br /> --enablewinbindusedefaultdomain 
        <br /> --winbindtemplatehomedir=/home/{AD DOMAIN NAME(long version all lower case)}/%U 
        <br /> --winbindtemplateshell=/bin/bash 
        <br /> --enablekrb5 
        <br /> --krb5realm={AD DOMAIN NAME(long version all caps)} 
        <br /> --enablekrb5kdcdns 
        <br /> --enablekrb5realmdns 
        <br /> --enablelocauthorize 
        <br /> --enablemkhomedir 
        <br /> --enablepamaccess 
        <br /> --updateall
        </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Configure kerberos. Edit your /etc/krb5.conf to look like this: 
<code>
<br /> [logging]
<br /> default = FILE:/var/log/krb5libs.log
<br /> kdc = FILE:/var/log/krb5kdc.log
<br /> admin_server = FILE:/var/log/kadmind.log

<br /> [libdefaults]
<br /> default_realm = AD DOMAIN NAME.XXX}
<br /> dns_lookup_realm = true
<br /> dns_lookup_kdc = true
<br /> ticket_lifetime = 24h
<br /> renew_lifetime = 7d
<br /> forwardable = true

<br /> [realms]
<br /> {AD DOMAIN NAME.XXX} = {
<br /> admin_server = {pdc host name}.{ad domain name.xxx}
<br /> kdc_server = {pdc host name}.{ad domain name.xxx}
<br /> }

<br /> {ad domain name.xxx} = {
<br /> }

<br /> [domain_realm]
<br /> .{ad domain name.xxx} = {AD DOMAIN NAME.XXX}
<br /> {ad domain name.xxx} = {AD DOMAIN NAME.XXX}

<br /> xxx = your domain extenion.
<br /> pdc = your global catalog servers hostname
</code>	 ');
	 
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Test domain authentication via kerberos: <code>#kinit {ad username} </code> <br />You should be returned to a prompt with no output if authentication works correctly. If you receive an error at this point, stop and resolve the error. If you do get an error, it will be something related to the krb5.conf file and the active directory setup. Compare all of your configuration directives and try it again until you can authenticate against AD with this command.');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Sync the linux servers time with the ad server: <code># ntpdate {fqdn of ad server} </code> <br /> This will ensure the servers times are in sync as the time is used in hashing passwords during the process of joining the domain.');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Join the linux box to the AD Domain: <code>#net ads join {AD DOMAIN NAME(long version all lower case)} -U {ad user authorized to join computers to domain}</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Setup a home folder to store active directory user accounts: <code># mkdir /home/{ad domain name.xxx}; # chmod 777 /home/{ad domain name.xxx} </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Update your /etc/pam.d/system-auth

This will update the authentication system so that AD users that are members of the linuxusers group will be able to access the system. Other AD users will not.
<code>
<br /> #%PAM-1.0
<br /> # This file is auto-generated.
<br /> # User changes will be destroyed the next time authconfig is run.
<br /> auth required pam_env.so
<br /> auth sufficient pam_unix.so nullok try_first_pass
<br /> auth requisite pam_succeed_if.so uid >= 500 quiet
<br /> auth sufficient pam_krb5.so use_first_pass
<br /> auth required pam_deny.so

<br /> account required pam_access.so
<br /> account required pam_unix.so broken_shadow
<br /> account [default=ignore success=1] pam_succeed_if.so uid < 16777216 quiet
<br /> account [default=bad success=ignore] pam_succeed_if.so user ingroup linuxusers quiet
<br /> account sufficient pam_localuser.so
<br /> account sufficient pam_succeed_if.so uid < 500 quiet
<br /> account [default=bad success=ok user_unknown=ignore] pam_krb5.so
<br /> account required pam_permit.so

<br /> password requisite pam_cracklib.so try_first_pass retry=3 type=
<br /> password sufficient pam_unix.so sha512 shadow nullok try_first_pass use_authtok
<br /> password sufficient pam_krb5.so use_authtok
<br /> password required pam_deny.so

<br /> session optional pam_keyinit.so revoke
<br /> session required pam_limits.so
<br /> session optional pam_oddjob_mkhomedir.so umask=0077
<br /> session [success=1 default=ignore] pam_succeed_if.so service in crond quiet use_uid
<br /> session required pam_unix.so
<br /> session optional pam_krb5.so
</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>Make sure required services are set to start on boot: <code># chkconfig oddjobd on; # chkconfig winbind on; # chkconfig messagebus on </code> <br /> Restart your machine and test');

        echo $this->Html->div('lab_task', '<br /><strong>Blog Entry:</strong> Log your experience on your blog');

   ?>
