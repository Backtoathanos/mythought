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
            <form id="add-products" class="form-group">
                <h2 align="center">Add Projects</h2>
                <table class="table table-responsive table-hover table-striped table-condensed">
                    <tr>
                        <td>Project's Name</td>
                        <td><input type="text" name="pname" class="form-control" placeholder="Enter Project's name"></td>
                    </tr>
                    <tr>
                        <td>Project's Overview</td>
                        <td><textarea name="poverview" class="form-control" placeholder="Enter Project's Overview"></textarea></td>
                    </tr>
                    <tr>
                        <td>Project's Synopsis(*In Doc)</td>
                        <td><input type="file" name="pdoc" class="form-control" placeholder="Enter Project's Synopsis"></td>
                    </tr>
                     <tr>
                        <td>Project's Source Code(*In Rar)</td>
                        <td><input type="file" name="prar" class="form-control" placeholder="Enter Project's Source Code"></td>
                    </tr>
                    
                    <tr>
                        <td>Branch</td>
                        <td>
                            <select name="pbranch" class="form-control">
                                <option value="Computer Science & Engg">Computer Science & Engg</option>
                                <option value="Electrical & Electronics Engg">Electrical & Electronics Engg</option>
                                <option value="Electronics & Communication">Electronics & Communication</option>
                                <option value="Mechanical Engg">Mechanical Engg</option>
                                <option value="Civil Engg">Civil Engg</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Batch</td>
                        <td>
                            <select name="pbatch" class="form-control">
                                <option value="2016 to 2020">2016 to 2020</option>
                                <option value="2017 to 2021">2017 to 2021</option>
                                <option value="2018 to 2022">2018 to 2022</option>
                                <option value="2019 to 2023">2019 to 2023</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Group</td>
                        <td>
                            <select name="pgroup" class="form-control">
                                <option value="Group-A">Group A</option>
                                <option value="Group-B">Group B</option>
                                <option value="Group-C">Group C</option>
                                <option value="Group-D">Group D</option>
                                <option value="Group-E">Group E</option>
                            </select>
                            <input type="hidden" name="add_project">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-default btn-lg" value="Add Student Project"></td>
                    </tr>
                </table>
            </form>
        </div>
        
    </div>
<!-- <script src="assets/js/bootstrap.min.js"></script> -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>