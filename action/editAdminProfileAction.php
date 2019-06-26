<?php

session_start();

include '../database/db.php';

echo $adminId = $_SESSION["c-o+m*p4a.n5y-I*d"];

echo $adminName = $_POST['name'];
echo $adminPassword = $_POST['confirm_password'];
echo $adminEmail = $_POST['company_email'];
echo $adminMobileNumber = $_POST['company_mobilenumber'];

$sqlquery = "UPDATE admin SET username = '$adminName', password = 'adminPassword', email = '$adminEmail', mobile_no = '$adminMobileNumber' WHERE admin_id = '$adminId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../adminProfileUi.php");
?>