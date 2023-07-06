<?php
session_start();
session_unset($_SESSION['User_check']);
session_destroy();
header('location:index.php');
?>