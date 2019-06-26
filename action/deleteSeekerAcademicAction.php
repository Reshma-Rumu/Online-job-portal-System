<?php
include '../database/db.php';

session_start();
$seekerId = $_SESSION["UserId"];
$seekerResultId = $_GET['seeker_result_id'];

$sqlquery = "delete from seeker_result where seeker_result_id='$seekerResultId' and seeker_id='$seekerId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../addAcademicQualificationUi.php");
?>