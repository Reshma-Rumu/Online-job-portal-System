<?php

session_start();
$companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];
include '../database/db.php';

$companyName = $_POST['company_name'];
$companyPassword = $_POST['confirm_password'];
$companyEmail = $_POST['company_email'];
$companyMobileNumber = $_POST['company_mobilenumber'];
$companyAddress = $_POST['company_address'];


$sqlquery = "UPDATE company SET name = '$companyName', confirm_password = '$companyPassword', company_email = '$companyEmail', company_mobilenumber = '$companyMobileNumber', company_address = '$companyAddress' WHERE company_id = '$companyId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../companyProfileUi.php");
?>