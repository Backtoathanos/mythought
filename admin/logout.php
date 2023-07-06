<?php
session_start();
session_unset($_SESSION['user_l']);
session_destroy();
header('location:../index.php');
?>