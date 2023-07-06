<?php
session_start();
if(empty(@$_SESSION['user_l'])){
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Kaizen Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <!-- header start -->
        <div class="header">
            <div class="row">
                <h2 align="center">Student Kaizen Admin Panel</h2>
            </div>
        </div>
        <!--headers end-->
        <!--navbar start-->
        <div class="navbar">
            <div class="row">
                <nav class="navbar" id="this">
                    <ul class="nav navbar-nav group-btn">
                        <li><a href="../index.php" class="btn btn-success">Home</a></li>
                        <li><a href="feedback.php" class="btn btn-primary">Check Feedback From Students??</a></li>
                        <li><a href="../logout.php" class="btn btn-danger logout">Log Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- navbar end -->
        <!--add products start-->
        <div class="row">
            <div class="col-sm-12"><h2>View & Download Project Soucrce Code Here</h2></div>    
            <div class="col-sm-12">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>Branch</th>
                            <th>Batch</th>
                            <th>Group</th>
                            <th>Project Name</th>
                            <th>Source Code</th>
                        </tr>
                    </thead>
                    <tbody id="viewprojectsource"></tbody>
                </table>
            </div>
        </div>
        
    </div>
<!-- <script src="assets/js/bootstrap.min.js"></script> -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>