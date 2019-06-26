<?php
include '../database/db.php';

session_start();
$seekerId = $_SESSION["UserId"];
$examTitle = $_POST['examTitle'];
$major = $_POST['major'];
$institute = $_POST['institute'];
$result = $_POST['result'];
$pasYear = $_POST['pasYear'];
$duration = $_POST['duration'];
$order = $_POST['order'];

$sqlquery = "insert into seeker_result values('', '$seekerId', '$examTitle', '$major' , '$institute', '$result', '$pasYear', '$duration', '$order')";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../jobseekerProfileUi.php");
?>