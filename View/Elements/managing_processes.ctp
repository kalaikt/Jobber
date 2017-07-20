<?php
        echo '<h3 style="color: red;">Lab 116: AWS User Management</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> The goal of this module is to understand user management in AWS.<br /><br />');
        
        echo $this->Html->div('lab_task', '<strong>Part A. Log into your AWS account (Exercise 1 -Try to choose a region that is closest to you) </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span>To create an IAM user: Click on Services > Administration & Security > IAM');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Next, on the left pane, click Users > Create New Users');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>In the space provided, type 3 different usernames. One user will be an Administrator, one will be for backup and one will be a read-only user.');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Uncheck the \'Generate an access key for each user\' checkbox');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Click Create');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Visit the Users pane and ensure all three users are listed.');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Click on a User and click Manage Password at the bottom of the page.');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Apply a custom password and click apply when done.');

        echo $this->Html->div('lab_task', '<strong><br />Part A. Log into your AWS account (Exercise 2) </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span>To create groups and add your IAM users to the groups: Click on Groups > Create New Group > Give it a name > Click Next');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Use Access Policies to define permissions for groups: For your Admin group, choose Administrator Access Policy. (Use the filter box to refine)');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Click Next > Click Create Group');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Add a your admin user to your admin group: Go to User Management > Add User to Group');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Repeat steps 3 and 4 for the backup and the read-only user');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Go back to the IAM dashboard and copy the \'IAM user sign-in link\' and bookmark it. (Hint: looks like https://[AWS-account-#].signin.aws.amazon.com/console)');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Log out of your root account and use the link from the previous step. From now on, you should log in using the Administrator IAM user.');

        echo $this->Html->div('lab_task', '<strong><br />Part B. Log into your AWS account (Exercise 1: Real Life Case) </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span>You work for Linuxjobber Consultants Company and you are servicing multiple clients using one AWS account. You have 5 clients named Client A to E. Each of these clients has an S3 bucket.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Create an S3 bucket for each client');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Client B has requested that you provide access to their S3 bucket for backup purposes. Now, create an IAM account that has access to only Client B\'s S3 bucket. This IAM user will not be able to view or edit any other resources in the AWS account because this will be a security risk.');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Ensure that the IAM user does not have a password because they will not access the AWS console. This means you will need to generate AWS keys for them.');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Keep a record of the Access Keys because you will need to provide it when requested.');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Client B has gotten clearance to list all other buckets in your AWS account. Ensure this is possible but also ensure Client B can not view the content of the other S3 Buckets.');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Test all Client B\'s permission. (Hint: You can use s3Fox -This is a firefox plugin to test permissions)');

        echo $this->Html->div('lab_task', '<strong><br />Part B. Log into your AWS account (Exercise 2: Real Life Case) </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span>John Doe has just joined Linuxjobber Consultants Co. John is a Security Engineer and needs to view the AWS environment but he should not be able to make changes. Also, he needs full access to the Trusted Advisor resource in AWS.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Create a group called ReadOnly and another group called TrustedAdvisor. These groups should have the appropriate permissions assigned to them.');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Add John Doe to the group');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Provide John Doe with a username and a temporary password. On his first/next login, he should be asked to change his password.');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Create a password policy that allows a minimum of 8 characters and allows users to change their passwords');

        echo $this->Html->div('lab_task', '<!-- <span id="price">Step 6. </span>Client B has gotten clearance to list all other buckets in your AWS account. Ensure this is possible but also ensure Client B can not view the content of the other S3 Buckets.');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Test all Client B\'s permission. (Hint: You can use s3Fox -This is a firefox plugin to test permissions)');

        echo $this->Html->div('lab_task', '<strong>Part A. Log into your local linux instance </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span> What command would you use to troubleshoot a slow running machine?');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Compare and contrast the outputs of the top and htop commands');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>If you determine that a process is causing your linux machine to run slow, what would you do next?');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>What is the difference between ps and pgrep commands? Under what circumstance would you use which?');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>What is the difference between kill and pkill commands? Under what circumstance would you use which?');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Write out a command that describes the usage of ps, pgrep, kill, pkill?');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Select any process of your choice and test out the commands you listed above');
 
        echo $this->Html->div('lab_task', '<!-- br /><strong>Part B. Log into both your admin_server and your web_server </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step 1. </span>Using SSH, connect to the cloud machine.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Open a new file in your new shell directory and call the file "backupPractice.sh" This will be your backup script');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>On the first line of your backup script, specify the shell to use while running the script');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Skip the next line. On the following line, add a comment with the text: "I am backing up my learnscripts file"');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>On the next line, insert a command to copy the myNameLearnScripts file in your home directory to /tmp directory</code>');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Run your backup script and ensure that it runs and that the learnScripts file has been backed up to /tmp');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Protect your backup script: You should be the only one allowed to write and execute your backup script -->');
        
        echo $this->Html->div('lab_task', '<!-- <br /><strong>Group Task - When you meet with your group:</strong>');
        echo $this->Html->div('lab_task', '<span id="price">1. </span> Discuss what an intrusion is and how you would detect an intrusion attempt');
        echo $this->Html->div('lab_task', '<span id="price">2. </span> Discuss some applications that are used for intrusion detection and discuss how they work');
        echo $this->Html->div('lab_task', '<span id="price">3. </span> Discuss how you would protect your linux environment from intrusion (List methods, technologies, approaches and software) --> ');
        


        echo '<h3 style="color: red;"><br /><br />Lab 117: Fundamentals of AWS Environment</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> This module will help students understand how AWS environment is laid out.<br /><br />');
        
        echo $this->Html->div('lab_task', '<strong>Part A. Building A Networking Environment in AWS (Exercise 1 -Try to choose a region that is closest to you) </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span>A VPC is a resource in AWS that lets you create your own private network in the cloud. Just like the network in your house, in a VPC you can control what resources (like EC2 and RDS) you want exposed to the public. Also like the network in your house, all the EC2 instances and RDS instances can talk to each other (unless restricted by Security Groups).');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Create a VPC: From your AWS console, Click on Services > Click VPC');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>On the left pane, Click \'Your VPCs\' > Click Create VPC');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Give your VPC a meaningful name so that it is easy to identify it in the future');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>Give your VPC a CIDR block. For the purpose of this lab, give it a CIDR of 10.10.0.0/16');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Click \'Yes Create\'. ');


        echo $this->Html->div('lab_task', '<strong><br />Part A. Log into your AWS account (Exercise 2) </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span>A subnet is an AWS resource that allows you to group your instances in an Availability Zone. You launch EC2 Instances in subnets. We will create 2 subnets, a Public and Private Subnet. Any EC2 Instance (or instance for short) that is placed in a Public subnet will be able to access the Internet and vice versa. Any Instance placed in a Private Subnet will not be able to access the internet. For the private instances to be able to access the internet (for updates, program installations, browsing etc) you would need to route traffic the private traffic through a NAT instance.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>On the left pane, click Subnets > Create Subnet');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Give the subnet a descriptive name, e.g public. In a real life scenario, when your environment starts growing, it is possible to have several subnets so a descriptive name will be important to keep sanity when managing subnets');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Choose the VPC from Part A');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>.Choose an AZ (for example us-east-1a).');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Choose a CIDR block. For the purposes of this practice, use 10.10.1.0/24');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Repeat steps 1 to 6 to create your private subnet but use an AZ of us-east-1b and a CIDR block of 10.10.2.0/24.');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>By now, you should have two subnets. The difference between a private and public subnet is in the route tables. A private subnet does not route to the internet. A public subnet has a route to the internet through the internet gateway. You can think of the internet gateway as router (like the one in your house) that routes traffic to the internet.');

        echo $this->Html->div('lab_task', '<strong><br />Part B. Log into your AWS account (Exercise 1) </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span>Once you create a subnet, you will have a default route table. You will identify it by using the VPC column which will have the same VPC ID of the VPC created in Part A. On the left pane > Click on Route Tables > Add the name "private-rt" to the Name tag to repurpose the default Route Table');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>View the Routes by selecting "private-rt" > on the tabs below, click Routes. You will notice a traffic route to all the IPs in your VPC will pass through local network');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>To create a public route, On the left pane > Click Route Tables');
        echo $this->Html->div('lab_task', '<span id="price">Step 4. </span>Give it a meaningful name "public-rt" and choose the VPC created in Part A > Click Create');
        echo $this->Html->div('lab_task', '<span id="price">Step 5. </span>We need to add an Internet Gateway to the route to make it public. On the left pane > Click Internet Gateway');
        echo $this->Html->div('lab_task', '<span id="price">Step 6. </span>Click Create Internet Gateway Button > give it a name > Click Create ');
        echo $this->Html->div('lab_task', '<span id="price">Step 7. </span>Select the new Internet Gateway > Click Attach to VPC > Choose the VPC you created in Part A');
        echo $this->Html->div('lab_task', '<span id="price">Step 8. </span>Now we have created the Internet Gateway, we need to attach it to the Public Route Table. Go back to Route Tables on the left pane > Click public-rt > Click on the Routes Tab > Click Edit');
        echo $this->Html->div('lab_task', '<span id="price">Step 9. </span>Click Add another route');
        echo $this->Html->div('lab_task', '<span id="price">Step 10. </span>On the new row provided');
        echo $this->Html->div('lab_task', '<span id="price">Step 11. </span>Under Destination field, insert 0.0.0.0/0; under Target, insert the internet gateway you created > Click Save. You are now done creating a basic networking base for your aws environment');
 
        echo $this->Html->div('lab_task', '<strong><br />Part B. Log into your AWS account (Exercise 2: Real World Case) </strong><br />'); 
        echo $this->Html->div('lab_task', '<span id="price">Step 1.</span>Launch a free-tier EC2 Instance in your private and public subnet. The EC2 Instance in the public subnet should be called "Bastion". Set the  Security Group to access port 22 from only your IP and name the security group "bastion-sg". Also create an Elastic IP and attach it to the Bastion. Caution: If you do not attach the EIP, you will be charged a small cost from AWS. The EC2 Instance in your private network should have a Security Group that allows All traffic from any instance that belongs to bastion-sg.');
        echo $this->Html->div('lab_task', '<span id="price">Step 2. </span>Log into your newly created Instance in the Public Subnet using ssh. Does it work? Now try logging into the Instance in your Private Subnet using ssh. Does it work?');
        echo $this->Html->div('lab_task', '<span id="price">Step 3. </span>Copy the aws key from your local machine to the bastion server. Use tools like scp or (WinScp for windows) to help achieve this. Then try using the ssh from the bastion');
 ?>
