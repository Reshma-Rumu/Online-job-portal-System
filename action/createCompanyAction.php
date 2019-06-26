<?php
include '../database/db.php';
$name = $_POST['company_name'];
$userName = $_POST['company_username'];
$password = $_POST['confirm_password'];
$email = $_POST['company_email'];
$mobileNumber = $_POST['company_mobilenumber'];
$address = $_POST['company_address'];
$logo = 'company logo';
$userType = 2;


$sqlquery = "insert into company values('', '$name', '$userName', '$password' , '$email', '$mobileNumber', '$address', '$userType', '$logo')";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysql_error());

header("location:../company.php");
?>

