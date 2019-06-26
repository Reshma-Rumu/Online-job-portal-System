<?php

session_start();
$userId = $_SESSION["UserId"];
include '../database/db.php';

$objective = $_POST['objective'];
$careerSummary = $_POST['careersummary'];


$sqlquery = "UPDATE jobseeker SET objective = '$objective', careersummary = '$careerSummary' WHERE seeker_id = '$userId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../jobseekerProfileUi.php");
?>
