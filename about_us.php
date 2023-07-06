<?php
session_start();
if(empty($_SESSION['User_check'])){
	$out= '
	<li><button type="button" class="btn" data-toggle="modal" data-target="#basicExampleModal">Login</button></li>
	';
}else{
	$out= '
	<li><a class="btn" href="project.php">See Projects Here</a></li>
	<li><a href="logout.php" class="btn">Logout</a></li>
	';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Kaizen</title>
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
      
</head>
<body>
<canvas id=c></canvas>
	<div class="container-fluid">
		<!-- Header Section -->
		<div class="row header">
			<div class="col-sm-4 logo">
				<div class="logo-section">
					<h1 class="animated bounceInDown delay-1s">Student Kaizen</h1>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="khali-section">
					<div id="nav" class="col-sm-12">
						<ul>
							<li><a class="btn" href="index.php">Home</a></li>
							<li><a class="btn" href="about_us.php">About Us</a></li>
							<?php echo $out;?>
							<!-- <li><button type="button" class="btn" data-toggle="modal" data-target="#basicExampleModal">Login</button></li> -->
							<?php include "modal.php";?>
							<li><a class="btn" href="feedback.php">Feedback & Suggestions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container about_us_c">
			<div class="row about_us">
				<div class="col-sm-12">
					<h2>About Us.</h2><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<!-- <div class="container"> -->
			    <div class="row">
					<div class="col-md-offset-2 col-md-8">
					    <div id="testimonial-slider" class="owl-carousel">
					    	<!-- israr shahid -->
					        <div class="testimonial">
					            <div class="pic">
					                <img src="assets/img/israr.png" alt="">
					            </div>
					            <p class="description">
					                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
					            </p>
					            <h3 class="title">Md Israr Shahid
					                <span class="post"> - Web Designer</span>
					            </h3>
					        </div>
							<!-- adeel ahmad -->
					       	<div class="testimonial">
					            <div class="pic">
					                <img src="assets/img/team.png" alt="">
					            </div>
					            <p class="description">
					                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
					            </p>
					            <h3 class="title">Syed Adeel Ahmad
					                <span class="post"> - Web Designer</span>
					            </h3>
					        </div>
					        <!-- vidya mukhi -->
					        <div class="testimonial">
					            <div class="pic">
					                <img src="assets/img/team.png" alt="">
					            </div>
					            <p class="description">
					                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
					            </p>
					            <h3 class="title">Vidya Mukhi
					                <span class="post"> - Graphics Designer</span>
					            </h3>
					        </div>
					        <!-- ravi ranjan -->
					        <div class="testimonial">
					            <div class="pic">
					                <img src="assets/img/team.png" alt="">
					            </div>
					            <p class="description">
					                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
					            </p>
					            <h3 class="title">Ravi Ranjan
					                <span class="post"> - UI/UX Designer</span>
					            </h3>
					        </div>
					        <!-- maish -->
					        <div class="testimonial">
					            <div class="pic">
					                <img src="assets/img/team.png" alt="">
					            </div>
					            <p class="description">
					                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
					            </p>
					            <h3 class="title">Manish
					                <span class="post"> - Tester</span>
					            </h3>
					        </div>
					    </div>
					</div>
			    </div>
			<!-- </div> -->
			
		</div>
		<!-- Footer Thankyou Sections -->
		<div class="row Footer">
			<div class="col-sm-12">
				<!-- <h2>ThankYou</h2> -->
			</div>
		</div>
	</div>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="assets/js/func.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> 


<script type="text/javascript">
	$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
</script>
</body>
</html>