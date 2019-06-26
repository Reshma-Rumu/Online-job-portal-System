<?php

session_start();
$userId = $_SESSION["UserId"];
include '../database/db.php';
$name = $_POST['name'];
$fathersName = $_POST['fathersname'];
$mothersName = $_POST['mothersname'];
$dateOfBirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$maritalStatus = $_POST['maritalstatus'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$presentAddress = $_POST['presentaddress'];
$permanentAddress = $_POST['permanentaddress'];
$currentLocation = $_POST['currentlocation'];
$email = $_POST['email'];
$mobileNumber = $_POST['mobilenumber'];


$sqlquery = "UPDATE jobseeker SET name = '$name', fathersname = '$fathersName', mothersname = '$mothersName', dateofbirth = '$dateOfBirth', gender = '$gender', maritalstatus = '$maritalStatus', nationality = '$nationality', religion = '$religion', presentaddress = '$presentAddress', permanentaddress = '$permanentAddress', currentlocation = '$currentLocation', email = '$email', mobilenumber = '$mobileNumber' WHERE seeker_id = '$userId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../jobseekerProfileUi.php");
?>
