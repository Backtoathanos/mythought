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
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		<!-- Feedback Section -->
		<div class="row feedback">
			<div class="col-sm-12">
				<div class="row">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h3>Feedback & Suggestions</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row inside-feedback">
					<div class="container-fluid">
						<div class="row">
							<div class="container">
								<div class="row">									
									<div class="col-sm-12">
										<h3>Write Down Your Valuable Suggestions</h3>								
									</div>
								</div>
								<form id="f_form">
								<div class="row">
									<div class="col-sm-6">
										<label>Enter Your Roll Number <input type="text" id="feedback_roll"></label>
									</div>
									<div class="col-sm-6">
										<label>Enter Your Email <input type="text" id="feedback_email"></label>
									</div>	
									<div class="col-sm-12">
										<textarea id="feedback_query"></textarea>
										<a href="" class="btn btn-danger" id="feedback_button">Submit</a>
									</div>				
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Thankyou Sections -->
		<!-- <div class="row Footer">
			<div class="col-sm-12">
				<h2>ThankYou</h2>
			</div>
		</div> -->
	</div>

<!-- <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="assets/js/func.js"></script>
</body>
</html>