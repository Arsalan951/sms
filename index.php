<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>School Management System </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pedagogy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
</head>
<body>
<!-- header -->
<div id="home" class="banner w3l">
	<div class="container">
		<nav class="navbar navbar-default  wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h2>
									<a class="navbar-brand" href="images/3.png">School Management System </a>
								</h2>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav class="cl-effect-1">
									<ul class="nav navbar-nav ">
                                    	<li><a class="scroll hvr-bounce-to-bottom active" href="HOME">HOME</a></li>
										<li><a class="scroll hvr-bounce-to-bottom" href="#about">ABOUT</a></li>
										<li><a class="scroll hvr-bounce-to-bottom" href="#ban-bot">SECURITY</a></li>
										<li><a class="scroll hvr-bounce-to-bottom" href="#team">FEE STRUCTURE</a></li>
										<li><a class="scroll hvr-bounce-to-bottom" href="#contact">CONTACT</a></li>
                                        <li><a class=" hvr-bounce-to-bottom" href="log.php">PORTAL</a></li>
									</ul>
								</nav>
							</div><!-- /navbar-collapse -->
		</nav>
		<div class="caption" data-wow-duration="1s" data-wow-delay="0s">
			<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
			<div  class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
					<div class="banner-text">
							<h3>MAKE YOUR LIFE BEAUTIFUL</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
							accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
							ab illo.</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>MAKE YOUR DREAMS COMES TRUE</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
							accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
							ab illo.</p>
						</div>
					</li>
				</ul>
			</div>	
		</div>
		<div class="more-button text-center">
			<a href="#ban-bot" class="scroll"><img src="images/icon.png" alt=" "/></a>
		</div>
	</div>
</div>
<!-- //header -->

<!-- bottom -->
<div id="ban-bot" class="banner-bot w3ls">
	<div class="col-md-3 bottom-grid wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
		<img class="img-responsive" src="images/b2.jpg" alt=" " />
	</div>
	<div class="col-md-6 bottom-grid2 text-center wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
		<h3>WE WILL OPEN THE WORLD OF KNOWLEDGE FOR YOU</h3>
		<h4>KNOWLEDGE <span>|</span> HARD WORK <span>|</span> INTELLIGENCE</h4>
		<a class="hvr-bounce-to-bottom scroll" href="#about">SEE MORE ABOUT US</a>
	</div>
	<div class="col-md-3 bottom-grid3 wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
		<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider4").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
		</script>
		<div class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<h4>Tom Bodett</h4>
						<p>In school, you're taught a lesson and then given a test. In life, you're given a test that teaches you a lesson..</p>
					</li>
					<li>
						<h4>Francis of Assisi</h4>
						<p>Start by doing what's necessary; then do what's possible; and suddenly you are doing the impossible.</p>
					</li>
					<li>
						<h4>Muhammad Ali</h4>
						<p>Friendship... is not something you learn in school. But if you haven't learned the meaning of friendship, you really haven't learned anything.</p>
					</li>
					<li>
						<h4>Bill Gates</h4>
						<p>Technology is just a tool. In term of getting the kids working together and motivating them, the teacher is the most.</p>
					</li>
				</ul>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //bottom -->
<!-- content -->
<div class="abt-what agileits all_pad wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="0s">
	<div class="container">
		<h3 class="title">Safety & Security on Campus</h3>
		<div class="col-md-13 ab-right">
			<h2>SCHOOL TIMINGS</h2>
			<p>Mangtaa School gives due importance to the Security of each child within the School premises and School hours. Parents are requested to make transport arrangements keeping the below mentioned timings in mind. In any case of emergency in the city, and inability to pick up students, please call the School and inform the relevant Security Personnel.</p>
		<p>Morning Shift 7:30a.m.-12:30p.m. <br>Afternoon Shift 1:00p.m.-5:30p.m. </p>
        <h2>IDENTIFICATION CARD</h2>
			<p>All Students, Teachers and General Staff at Mangtaa School are allocated ID Cards that are compulsory to wear. This measure has been taken to ensure that no unauthorized person enters the School premises, and therefore the rule is followed strictly.</p>
            <h2>TRAINED SECURITY STAFF</h2>
			<p>Security guards at all Mangtaa School Campuses are provided with strict instructions to follow a standard protocol and safety procedures to ensure students', teachers' and staff's safety. Essential training and guidance is offered so that they perform their job well.</p>
		</div>

		<div class="clearfix"> </div>
	</div>
</div>
<!-- //content -->
<!-- about -->
<div id="about" class="about all_pad agile">
	<div class="container">
		<h3 class="title">ABOUT</h3>
		<p>Our Mission describes our school's purpose. Our Vision depicts our desired future. The principles needed to achieve our mission and vision are articulated in our values. Finally, the actions we need to demonstrate to make our mission, vision and values a reality are described in our collective commitments. We have developed these statements in collaboration with our staff, students and families. They are part of our School Success Plan.

The School is located on three sites. The original school in Saddar, the heart of the city of Karachi, is listed as a heritage building and now houses Classes VII, VIII and IX. At Clifton, not far from the sea front, in a building opened in 1991, we teach children from Nursery to Class VI. Our newest premises, opened in 1999, houses our O and A-level students.

The School is entirely independent, receiving no grant from the government or any other source, and is controlled by a Board of Governors registered as a Society under the Societies Registration Act of 1860. </p>
		<div class="abt-grids wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="clearfix"> </div>
		</div>
        <h3 class="title">MISSION</h3>
			<p>The Mangtaa School is dedicated to fostering academic and personal excellence, pride and spirit in a dynamic and supportive environment.</p>
            <div class="abt-grids wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <div class="clearfix"> </div>
		</div>
			<h3 class="title">VISION</h3>
			<p>We, the Staff and Students of Mangtaa School commit to working together to create a safe and welcoming environment filled with positive energy and a spirit of goodwill that enables us to take risks and achieve our full potential.</p>
            <div class="abt-grids wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- about-bottom -->
<div class="abt-what agileits all_pad wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="0s">
	<div class="container">
		<h3 class="title">WHAT WE ARE</h3>
		<div class="col-md-5 ab-left">
			<div class="port-7 effect-2">
                	<div class="image-box">
                    	<img src="images/a1.jpg" alt="Image-2">
                    </div>
                    <div class="text-desc">
                    	<h4>Pedagogy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
            </div>
		</div>
		<div class="col-md-7 ab-right">
			<h2>Voluptatem Accusantium </h2>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
		doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
		doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo ipsa quae ab illo.</p>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
		doloremque laudantium, totam rem aperiam, eaque. </p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //about-bottom -->
<!-- num-scroller -->
<div class="capabilities all_pad w3">
	<div class="container">
		<div class="col-md-4 capabil-grid wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">		
			<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='25' data-delay='.5' data-increment="1">25</div>
			<div class="strip"></div>
			<h5>Campus</h5>	
		</div>
		<div class="col-md-4 capabil-grid wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
			<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='11500' data-delay='.5' data-increment="1">11500</div>				
			<div class="strip"></div>
			<h5>Students</h5>
		</div>
		<div class="col-md-4 capabil-grid wow fadeInRight animated animated text-center" data-wow-delay="0.4s">	
			<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='750' data-delay='.5' data-increment="1">750</div>
			<div class="strip"></div>
			<h5>Employees</h5>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- num-scroller -->
<!-- team -->
<div id="team" class="team-content all_pad w3agile">
	<div class="container">
		<h3 class="title">Fee structure</h3>
		<div class="col-md-12 ab-right">
			<h2>Announcing Admissions</h2>
			<p>Admissions to the T.M.S are held at the Playgroup level. Children between the ages of 2.4 years to 3.3 years as of 1st September of the admitting year are eligible for admission to Playgroup. Admission is based on interview of parents. Children are not tested. The objective of this interview is to ascertain if parents share the philosophy of the school and understand elements of happy schooling. Admission to all other classes is subject to availability of seats. Please visit admissions office, Main Campus, for any further assistance. </p>
            <br>
            <h2>INTERVIEW</h2>
			<p>Interviews will start from 01 April. Interviews will take place at the KG Section. The child, accompanied by both parents, are required to be present at the interview. Please bring the following documents at the time of the interview:</p>
            <ul>
             	<li>Original and a photocopy of the child's municipal birth certificat.</li>
				<li>Passport-size photograph (taken within the last 3 months) on a white background.</li>
				<li>Photocopy of the previous school report (if applicable).</li>
				<li>Original, and photocopies of both parents (or legal guardian's) CNICs.</li>
            </ul>
            <br>
            <h2>FEE STRUCTURE</h2>
  <table class="table">
    <tbody>
      <tr class="info">
        <td>Admission fee </td>
        <td>Rs 120,000 (non refundable)</td>
      </tr>
      <tr class="info">
        <td>Tuition fees @ Rs 15,000 per month (for class Playgroup to Three)</td>
        <td> Rs 30,000 (for August and September) </td>
      </tr>
      <tr class="info">
        <td>ATuition fees @ Rs 20,000 per month (for class Four to Matric)</td>
        <td>Rs 40,000 (for August and September) </td>
      </tr>
      <tr class="info">
        <td>Learning resources & co-curricular programmes @ Rs 1,500 per month</td>
        <td> Rs 18,000 (Per year) </td>
      </tr>
      <tr class="info">
        <td>Total Amount (Play Group to Three )</td>
        <td> Rs 1,68,000</td>
      </tr>
      <tr class="info">
        <td>Total Amount (Four to Matric )</td>
        <td>Rs 1,78,000</td>
      </tr>
    </tbody>
  </table>
  <p>The amount of Rs 198,000 will be due at the time of admission, to be paid by pay order in the name of 'The Mangtaa School'.</p>
  <p>New Admission Classes will be from 1st May 2017.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- team -->
<div class="newsletter all_pad wow fadeInUp animated" data-wow-delay=".5s">
	<div class="container">
		<h3 class="title">NEWSLETTER</h3>
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
			<div class="sub">
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Name" required>
					<input type="email" name="Email" placeholder="Email" required>
					<input type="submit" value="SUBSCRIBE NOW" >
				</form>
			</div>
	</div>
</div>
<!-- map -->
<div id="contact" class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
	<div class="map-pos wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
		<h3>ADDRESS</h3>
		<p>Progressive Square
1st Floor,</p>
		<p>Karachi City.</p>
		<p>Call : 123 456 7890</p>
		<p><a href="mailto:info@example.com">info@theschoolmangtaa </a></p>
	</div>
</div>
<div class="contact-form">
	<div class="container">
		<form action="#" method="post">
			<div class="col-md-6 contact-left">
				<input type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
				<input type="email address" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
				<input type="text" value="Mobile Number" name="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required>
			</div>
			<div class="col-md-6 contact-right">
				<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
				<input type="submit" value="Submit" >
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>
<div class="footer text-center">
	<div class="container">
		<ul class="foo-nav">
			<li><a class="scroll" href="#home">HOME</a></li>
			<li><a class="scroll" href="#about">ABOUT</a></li>
			<li><a class="scroll" href="#ban-bot">SECURITY</a></li>
			<li><a class="scroll" href="#team">FEE STRUCTURE</a></li>
			<li><a class="scroll" href="#contact">CONTACT</a></li>
		</ul>
		<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</p>
		<ul class="social-one">
			<li><a class="fb1" href="#"></a></li>
			<li><a class="fb2" href="#"></a></li>
			<li><a class="fb3" href="#"></a></li>
			<li><a class="fb4" href="#"></a></li>
		</ul>
	</div>
</div>
<div class="copy-right">
	<div class="container">
		<p>&copy; 2017 The School Mangtaa. All rights reserved</p>
	</div>
</div>
<!-- //map -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>