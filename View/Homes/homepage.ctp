<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<?php $this->Html->script('jquery', array('inline' => false)); ?>
<?php $this->Html->script('Dropit-master/dropit', array('inline' => false)); ?>
<?php $this->Html->script('slider/lean-slider', array('inline' => false)); ?>
<?php echo $this->Html->script('jquery.flexslider-min');?>
<script type="text/javascript">
      $(document).ready(function() {
        $('.menu').dropit({action: 'mouseover'});
      });
      
      $(document).ready(function() {
        $('#slider').leanSlider();
      });
      
</script>

<div class="row main" >

<div class="flexslider" id="slider1">
  <ul class="slides">
    <li style="background:#e9f3f9">
      
        
        <div class="row banner"><img src="images/banner1.jpg"  />
    <div class="container">
      <div class="banner-text"> 
      <h1>CERTIFICATIONS</h1>
      <p style="padding: 15px;">
          Red Hat Linux, RHCSA ex200<br />
          Amazon Web Services
      </p>
     <div class="register-now"><?php echo $this->Html->link('Register Now','/trainings/register'); ?></div>
      <!-- <a href="#" class="view-tutorials">VIEW TUTORIALS<i class="fa fa-video-camera"></i></a>-->
     </div>
     </div>
         </div>
    </li>
     <li style="background:#eef5fd">
      
        
        <div class="row banner"><img src="images/banner2.jpg"   />
    <div class="container">
      
      <div class="banner-text">
      <h1>Interview Preparation</h1>
      <p style="padding: 15px;">
          Resume Building<br />
          Interview Questions<br />
          Mock Interview
      </p>
     <div class="register-now"><?php echo $this->Html->link('Register Now','/trainings/register'); ?></div>
      <!-- <a href="#" class="view-tutorials">VIEW TUTORIALS<i class="fa fa-video-camera"></i></a>-->
     </div>
     </div>
         </div>
    </li>   <li style="background:#e9f3f9">
      
        
        <div class="row banner"><img src="images/banner3.jpg"    />
    <div class="container">
     
       <div class="banner-text">
      <h1>Linux Coaching</h1>
      <p style="padding: 15px;">
          Live Instructor-led Training<br />
          Classes with Practice Labs
      </p>
      <div class="register-now"><?php echo $this->Html->link('Register Now','/pros/register1'); ?></div>
      </div>
       <!-- <a href="#" class="view-tutorials">VIEW TUTORIALS<i class="fa fa-video-camera"></i></a>-->
     </div>
     </div>
        
    </li>
  </ul>
 
</div>
    
     <div class="row">
    <div class="container">
       <!--<div class="row circles">
        <div class="circle1"><img src="images/students.png" />
           <div class="strip">
            <h4>STUDENTS</h4>
          </div>
         </div>
        <div class="circle2"><img src="images/instructor.png" />
           <div class="strip">
            <h4>INSTRUCTOR</h4>
          </div>
         </div>
        <div class="circle3"><img src="images/recruiter.png" />
           <div class="strip">
            <h4>COMPANIES</h4>
          </div>
         </div>
      </div>
      
       <div class="row blue-strip">
        <div class="pangwin-img"><img src="images/pangwin.png" /></div>
        <div class="classbegaintext">
           <div class="next-class">
            <h5>NEXT CLASS BEGAINS: </h5>
            <h2>OCTOBER 25, 2014</h2>
          </div>
           <div class="register-now"><a href="#">REGISTER NOW</a></div>
         </div>
      </div>-->
       <div class="text-area">
         
        <div class="about-us">
           <!-- h2> Job First, Pay Later Program</h2>
           <p>The Job First, Pay Later program is an option for those who wish to pursue the path of deferred payment. This flexible option allows the student to concentrate on the training and complete the program before worrying about money. Often times, students perform better and gain employment quickly when they are not saddled with overwhelming financial responsibilities. As a result, we offer this program to boost the chances of career success of our students.</p>
    
           <div height="18">&nbsp;</div -->
       
           <h2> Our Company Story ....</h2>
           <p>The story of Linuxjobber began in 2009 when the US economy hit a low level following a huge housing market bubble burst. At that time, consumers reduced spending and many companies froze their hiring process. Consequently, the number of job seekers grew astronomically forcing salaries to drop considerably for open positions</p>
           <p>At the same time, we noticed that demand for Information Technology professionals were still very strong and salaries were still very high. This was clearly evident by the number of posted open positions in the Maryland, Virginia and Washington DC area where we operate. To help, we decided to bridge the gap between the job seekers and the available Information Technology jobs in the Linux area. Hence, our company was born. Since then, we have been seeking collaboration with established employers of Information Technology professionals and helping students acquire the skills needed to fill available positions especially in the area of Linux administration and engineering.</p>
         </div>
        <div class="testimonial">
           <h4>Testimonials....</h4>
           
           <div id="slider2"  class="flexslider">
  <ul class="slides">
    <li>
      <p>Most companies run their Oracle databases on linux. As an Oracle Database professional, I needed some linux skills to help increase my competence in my field. I found the training I needed at Linuxjobber.com. </p>
           <span>- Kenna -Oracle DBA, Boston</span>
    </li>
    <li>
      <p>I have never worked in the Information Technology field before but I knew that I wanted to change my career. I chose the linux training and finished the class. I now work as a Linux Systems Administrator. </p>
           <span>- Mario -Fairfax, VA</span>
    </li>
    <li>
     <p>My friends told me that the RHCSA exam is a hands-on, practical exam that is difficult to pass. I did not want to have to do it twice so I enrolled in the training. I have now passed the exam and I am very happy. <br> Thanks Linuxjobber!</p>
           <span>- Kimberly -Prince Georges, MD</span>
    </li>
  </ul>
  
</div>
         
         </div>
      </div>
     </div>
  </div>
 </div>
