<?php
session_start();
if(empty($_SESSION['User_check'])){
	header('location:index.php');
}

if(empty($_SESSION['User_check'])){
	$out= '
	<li><button type="button" class="btn" data-toggle="modal" data-target="#basicExampleModal">Login</button></li>
	';
}else{
	$out= '
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
		<!-- Archives Sections -->
		<div class="container">
			<div class="row archives">
				<div class="col-sm-12">
					<div class="archives-section">
						<h3 align="center">Project Archives</h3>
						<div class="archives_table">
							<form id="view_project">
								<table class="table table-hover">
									<tr>
										<td>All Branch</td>
										<td>
											<select id="choose_branch" class="btn btn-primary">
												<option value="Default" id="br_def">Choose</option>
												<option value="Computer Science & Engg">Computer Science & Engg</option>
				                                <option value="Electrical & Electronics Engg">Electrical & Electronics Engg</option>
				                                <option value="Electronics & Communication">Electronics & Communication</option>
				                                <option value="Mechanical Engg">Mechanical Engg</option>
				                                <option value="Civil Engg">Civil Engg</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>All Batch</td>
										<td>
											<select id="choose_batch" class="btn btn-primary">
												<option value="Default" id="ba_def">Choose</option>
												<option value="2016 to 2020">2016 to 2020</option>
												<option value="2017 to 2021">2017 to 2021</option>
												<option value="2018 to 2022">2018 to 2022</option>
												<option value="2019 to 2023">2019 to 2023</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>All Group</td>
										<td>
											<select id="choose_group" class="btn btn-primary">
												<option value="Default" id="gr_def">Choose</option>
												<option value="Group-A">Group A</option>
												<option value="Group-B">Group B</option>
												<option value="Group-C">Group C</option>
												<option value="Group-D">Group D</option>
												<option value="Group-E">Group E</option>
											</select>
										</td>
									</tr>
									<tr>
										<td colspan="2"><button id="archives-find" class="btn btn-info">View</button></td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Project Sections -->
		<div class="your-project">
			<div class="row">
				<div class="col-sm-12 your-project-header">
					<div class="row oes">
						<div class="col-sm-12">
							<h2 id="title" class="animated bounceInDown delay-1s"><b></b></h2>
						</div>	
					 </div>
					 <div class="container">				 	
					 	<div class="row">
					 		<div class="col-sm-12">
						 		<div class="project-details">
						 			<h3><b>Project Overview</b></h3>
						 			<p id="p_overview"></p>
						 		</div>
						 		<div class="project-synopsis">
						 			<h3><b>Download Project Synopsis</b></h3>
						 			<div class="pro-logo">
						 				<img src="assets/img/word.png">
						 				<p id="down_syn"></p>
						 			</div>
						 			<a href="" id="click_to_download" class="btn btn-secondary">Click Here to Download</a>
						 			<input type="hidden" id="projects_id"> 
						 		</div>
					 		</div>
					 	</div>
					 </div>
				</div>			
			</div>
			<!-- comments -->
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<div class="insert_comments_section">
							<form id="insert_comment">
								<input type="text" id="commentor_name" disabled value="<?php echo $_SESSION['User_check'];?>">
								<textarea id="commentor_comment"></textarea>						
								<a class="btn btn-info" id="comment_submit">Submit</a>
							</form>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="show_comments_section">
							<div class="comments_line">							
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="assets/js/func.js"></script>
</body>
</html>