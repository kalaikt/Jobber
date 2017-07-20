<div class="row main">


<?php $this->Html->script('jquery', array('inline' => false)); ?>
<?php $this->Html->script('Dropit-master/dropit', array('inline' => false)); ?>
<?php $this->Html->script('slider/lean-slider', array('inline' => false)); ?>

<script type="text/javascript">
      $(document).ready(function() {
        $('.menu').dropit({action: 'mouseover'});
      });
      
      $(document).ready(function() {
        $('#slider').leanSlider();
      });
      
</script>

<div class="row banner"> 
			 
			<div class="container">
			 <div class="text-area">
		
<h3 style="color: red;">Basics of Linux</h3>
<p>
</p>
<div> 
  <p id=small_headline><span>&raquo;</span> Course Objectives</p>
  <p>The Basics of Linux class is designed for students who are new to linux. At the end of the course, students
     should be comfortable accessing linux from both command line and graphical user interface. Students should
     be able to build a new linux machine, join it to the network, and manage the machine.
  </p>
  <p id=small_headline><span>&raquo;</span> Course Content Summary</p>
  <ul id="course">
      <li>Graphical Installation of Linux</li>
      <li>Introduction to Command Line</li>
      <li>Physical Storages</li>
      <li>Introduction to Linux Users and Groups</li>
      <li>Establishing Network and Network Services</li>
      <li>File Access, Management and Security</li>
      <li>Deploying Webserver Components and Configuration</li>
      <li>Installation of Local Components and Services</li>
      <li>Introduction to scripting</li>
  </ul>
  <p>  
    <?php echo $this->Html->link('Next Step','/trainings/linuxproficiency'); ?>
  </p>
</div>
			</div>
</div>





</div>