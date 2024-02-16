<?php 
session_start();
include('DB.php');
include('function.php');
$user_data=check_login($conaction);
?>