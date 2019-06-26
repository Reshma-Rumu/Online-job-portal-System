<?php
include '../database/db.php';
$name = $_POST['name'];
$userName = $_POST['username'];
$password = $_POST['confirm_password'];
$email = $_POST['email'];
$mobileNumber = $_POST['mobilenumber'];
$userType = 1;


echo $sqlquery = "insert into jobseeker values('', '$name', '$userName', '$password' , '$email', '$mobileNumber', '$userType', '','','','','','','','','','','','','')";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../login.php");
?>

