 <?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Linuxjobber - new skill, new potential');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $this->Html->charset(); ?>
<!-- Facebook Conversion Code for linuxstart -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6038795726657', {'value':'0.01','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6038795726657&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" />
</noscript>
<!-- end facebook tracking -->




<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>HTML</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	 	 <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<?php
	 	
		echo $this->Html->meta('icon');
        echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('cake.generic');
		
		echo $this->Html->css('dropit');
		echo $this->Html->css('lean-slider');
		echo $this->Html->css('basic');
		
		
		echo $this->Html->css('flexslider');
		
        echo $this->Html->css('style');
		echo $this->Html->css('responsive');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		//echo $this->Html->script('jquery.flexslider-min');
	?>
				 <script>

$(document).ready(function(){
// toggle
			$("#show").click(function () {
$("#showdiv").slideToggle("fast");
});

$('#adminbarsearch').mouseenter(function(){
//	delay( 800 );
	$('.adminbar-button').removeAttr('disabled');
});

$('#adminbarsearch').mouseout(function(){
//	delay( 800 );
	$('.adminbar-button').attr('disabled', 'disabled');
});

});

$(window).load(function() {
			$('.flexslider').flexslider();
		});
 </script>
	</head>

	<body>
	<?php echo $this->element('googleanalytics'); ?>
		<header>
			<div class="row top-header">
				<div class="container">
					<div class="logo"></div>
					<h3>CALL NOW: 1.443.538 0988</h3>
				</div>
			</div>
			<div class="row bottom-header">
				<div class="container">
					<nav>
						<a href="javascript:void(0);" id="show" class="toggleMenu"></a>
                        <ul id="showdiv">
           <li><a href="<?php echo $this->webroot; ?>">HOME</a>
           		<ul> <!----01-11-2014---->
           		<li><?php echo $this->Html->link('Login','/users/login'); ?></li>
                <li><?php echo $this->Html->link('My Profile','/labprofiles'); ?></li>
				<li><?php echo $this->Html->link('Instructor','/users/students'); ?></li>
				<li><?php echo $this->Html->link('Open/Close Labs','/labprofiles/labs'); ?></li>
                <li><?php echo $this->Html->link('Help Forum','/forum'); ?></li>
           	</ul><!----01-11-2014---->
           </li>
           <!-- li><a href="#">SERVICES</a>
           	<ul><!----01-11-2014---- >
		<!-- li><?php //echo $this->Html->link('Job First, Pay Later','/services/jobpay'); ?></li -- >
           	<li><?php echo $this->Html->link('For Students','/services/trainee'); ?></li>
                <li><?php echo $this->Html->link('For Instructors','/services/trainer'); ?></li>
                <li><?php echo $this->Html->link('For Companies','/services/companies'); ?></li>
                <li><?php echo $this->Html->link('Online Training','/services/onlinetraining'); ?></li>
		<li><?php echo $this->Html->link('Enrollment','/services/enrollment'); ?></li>
           	</ul><!----01-11-2014---- >
           </li -->
           <li><a href="#">VIDEOS</a>
           	<ul><!----05-01-2014---->
           	<!-- li><?php echo $this->Html->link('Interview Prep','/videos/linuxvideos/interview'); ?></li -->
           	<li><?php echo $this->Html->link('RHCSA Exam','/videos/linuxvideos/rhcsa'); ?></li>
           	<li><?php echo $this->Html->link('AWS Certification','/videos/linuxvideos/aws'); ?></li>
           	<li><?php echo $this->Html->link('Linux Videos','/videos/linuxvideos/linux'); ?></li>
           	<!-- li><?php //echo $this->Html->link('Bash Videos','/trainings/linuxbasics'); ?></li>
            <li><?php //echo $this->Html->link('Python Videos','/trainings/linuxproficiency'); ?></li -->
           	</ul><!----01-11-2014---->
           </li>
           <!-- li><a href="#">TRAINING</a>
           	<ul><!----01-11-2014---- >
           	<li><?php echo $this->Html->link('One-on-one Coaching','/trainings/one_on_one'); ?></li>
           	<li><?php echo $this->Html->link('Upcoming Classes','/trainings/upcoming'); ?></li>
           	<li><?php echo $this->Html->link('Linux Fundamentals','/trainings/linuxbasics'); ?></li>
            <li><?php echo $this->Html->link('Linux Proficiency','/trainings/linuxproficiency'); ?></li>
                <!-- li><?php //echo $this->Html->link('Boot Camp','/trainings/bootcamp'); ?></li -- >
                <li><?php echo $this->Html->link('Registration','/trainings/register'); ?></li>
                <li><?php echo $this->Html->link('Certification','/trainings/certification'); ?></li>
           	</ul><!----01-11-2014---- >
           </li -->
           <li><a href="#">LABS</a>
           	<ul><!----01-11-2014---->
           		<li><?php echo $this->Html->link('The Linux Book','/tutorials/products'); ?></li>
                <!-- li><?php echo $this->Html->link('Videos','/tutorials'); ?></li -->
                <li><?php echo $this->Html->link('Fundamentals Lecture','/tutorials/basics_of_linux_lectures'); ?></li>
                <li><?php echo $this->Html->link('Proficiency Lecture','/tutorials/proficiency_in_linux_lectures'); ?></li>
                <li><?php echo $this->Html->link('Amazon AWS','/tutorials/aws'); ?></li>
                <li><?php echo $this->Html->link('PUPPET Training','/tutorials/puppet'); ?></li>
                <li><?php echo $this->Html->link('RHCSA','/tutorials/rhcsa'); ?></li -->
                <li><?php echo $this->Html->link('Exam Simulation','/questions/exam'); ?></li>
                <li><?php echo $this->Html->link('Interview Preparation','/tutorials/interviewprep'); ?></li>
           	</ul><!----01-11-2014---->
           </li>
           <li><a href="#">COMPANY</a>
           	<ul><!----01-11-2014---->
           		<li><?php echo $this->Html->link('About Us','/companys/aboutus'); ?></li>
                <li><?php echo $this->Html->link('Location','/companys/location'); ?></li>
                <li><?php echo $this->Html->link('Jobs','/companys/jobs'); ?></li>
                <li><?php echo $this->Html->link('Policies','/companys/policy'); ?></li>
           	</ul><!----01-11-2014---->
           </li>
         </ul>
                        
                        
                        
                        
				 
						<div class="ab-item ab-empty-item admin-bar-search" id="wpadminbar" tabindex="-1">
                        	<form action="" method="get" id="adminbarsearch">
                             <button type="submit" disabled class="adminbar-button" value="Search"><i class="fa fa-search"></i></button>
                            <div class="space1 search-space"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150"></div>
                            	
                               
                           </form>
                        </div>
					</nav>
				</div>
			</div>
		</header>
				<div class="main">
				<?php echo $this->fetch('content'); ?>
			
		
		</div>
				<footer>
			<div class="container">
			<?php echo $this->Html->link('Home','/'); ?>&nbsp;&nbsp; | &nbsp;&nbsp;<?php echo $this->Html->link('Help Forum','/forum'); ?>&nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $this->Html->link('Fundamentals Lab','/trainings/linuxbasics'); ?>&nbsp;&nbsp; | &nbsp;&nbsp;<?php echo $this->Html->link('Proficiency Lab','/tutorials/proficiency_in_linux_lectures'); ?>&nbsp;&nbsp; | &nbsp;&nbsp;<?php echo $this->Html->link('Tutorials','/tutorials'); ?>
			</div>
		</footer>
			<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49662052-1', 'auto');
  ga('send', 'pageview');

</script>
	</body>  
</html>

			
		
