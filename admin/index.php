<?php
session_start();
if(empty(@$_SESSION['user_l'])){
    header('location:../admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/assets/css/style.css">
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
                        <li><a href="index.php" class="btn btn-success">Home</a></li>
                        <li><a href="view/feedback.php" class="btn btn-primary">Check Feedback From Students??</a></li>
                        <li><a href="logout.php" class="btn btn-danger logout">Log Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- navbar end -->
        <div class="row">
            <!--sidebar start-->
            <div class="col-md-3">
                <div class="sidebar">
                    <ul>
                        <li>Projects
                            <ul>
                                <li><a href="view/addProject.php" class="">Add Projects</a></li>
                                <li><a href="view/viewProject.php" class="">View Projects</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--sidebar end-->
            <!--fields start-->
            <div class="col-md-9">
                <div class="row">
                    <h2 align="center" id="welcome">Welcome <strong><?php echo $_SESSION['user_l']; ?></strong>. I know today is your day.<img id="emoji" src="view/assets/download.jpg"></h2>
                </div>
                <div class="fields">
                    <!--Line 1-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section">
                                <a href="#"><h3>Total Projects :- <strong id="tusers"></strong></h3></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="section">
                                <a href="#"><h3>Total Comments :- <strong id="viewers">Soon</strong></h3></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="section">
                                <a href="#"><h3>Total Feedbacks :-  <strong id="feedback">NA</strong></h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--fields end-->
        </div>
    </div>
<!-- <script src="view/assets/js/bootstrap.min.js"></script> -->
<script src="view/assets/js/jquery.min.js"></script>
<script src="view/assets/js/main.js"></script>
</body>
</html>