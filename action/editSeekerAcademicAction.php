<?php

session_start();
$userId = $_SESSION["UserId"];
include '../database/db.php';

$seekerResultId = $_POST['seeker_result_id'];
$examTitle = $_POST['exam_title'];
$major = $_POST['major'];
$institute = $_POST['institute'];
$result = $_POST['result'];
$pasyear = $_POST['pas_year'];
$duration = $_POST['duration'];
$order = $_POST['order'];




$sqlquery = "UPDATE seeker_result SET exam_title = '$examTitle', major = '$major', institute = '$institute', result = '$result', pas_year = '$pasyear', duration = '$duration', result_order = '$order' WHERE seeker_id = '$userId' and seeker_result_id = '$seekerResultId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../jobseekerProfileUi.php");
?>