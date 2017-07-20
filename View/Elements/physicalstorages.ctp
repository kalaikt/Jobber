  <?php 
        echo '<h3 style="color: red;">Lab 1: Physical Storages</h3><p></p>';
        echo $this->Html->div('lab_task', '<strong>Lab Objective:</strong> Ensure students can identify all storage devices on their machines. Understand operating system identifiable partitions. Access partitions, check their sizes and free space.<br /><br />');
        
        echo $this->Html->div('lab_task', '<br /><strong>Part A. Start Putty and connect to cloud</strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 1. Connect to your cloud instance using putty');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 2. At the prompt enter the following command to open a new file: <code> #vi linuxbasics </code>');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 3. Enter insert mode by pressing "i" button, then enter your name on first line');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 4. Close the file by entering the following sequence <code>:wq!</code> and press enter ');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 5. Now, find partitions on your system and know their sizes: <code>#df</code> ');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 6. Make df more readable: <code>#df -h</code> Use the output here to answer the follwing 3 questions.');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 7. Open the file linuxbasics and, on new line, enter how many devices, list the device names');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 8. Open the file linuxbasics and, on new line, enter how many partitions, list partition size and names');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 9. Open the file linuxbasics and, answer: is there any free space left on any partition? which one? How much space?');
        echo $this->Html->div('lab_task', '<br /><strong>Part B. Log into your local linux instance (Workstation) </strong><br />');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 1. As root, run the command: <code>#fdisk -l</code> Use the output here to answer the follwing 3 questions.');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 2. Open the file linuxbasics, on a new line, enter how many devices on the system? list their sizes');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 3. As root, run the command: <code>#fdisk <your device name></code> For example: fdisk /dev/sda');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 4. At the command prompt, enter the "p" and press enter');
        echo $this->Html->div('lab_task', '<span id="price">Step</span> 5. Open the file linuxbasics, on a new line, enter how many partitions are listed');
        echo $this->Html->div('lab_task', '<br /><strong>Interactive session:</strong> What did you learn in this lab? What mistakes did you make? How did you fix the mistakes?');
    ?>
