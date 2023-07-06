<!DOCTYPE html>
<html>
<head>
	<title>Student Kaizen</title>
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
							<li><button type="button" class="btn"data-toggle="modal" data-target="#basicExampleModal">Login</button></li>
							<?php include "modal.php";?>
							<li><a class="btn" href="feedback.php">Feedback & Suggestions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Login Section -->
		<div class="row login">
			<div class="col-sm-12">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="login-section">
								<form id="login_admin">
									<h4><b>Administrator Login</b></h4>	
									Username <input type="text" id="admin_name"><br>							
									Password <input type="Password" id="admin_password"><br>
									<button class="btn btn-success" id="admin_submit">Login</button>
								</form>
							</div>
						</div>
						<!-- <div class="col-sm-6">
							<div class="login-section-2">
								<textarea>Introduction
								lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod empor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</textarea>
							</div>
						</div> -->
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
	
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script> -->
<!-- <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> -->
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/func.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.find button').on('click', function(e){
			e.preventDefault();
			$(".your-project").toggle(5);
		})
	})
</script>
</body>
</html>