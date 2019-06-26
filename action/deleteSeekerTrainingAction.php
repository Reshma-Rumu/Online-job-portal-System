<?php
include '../database/db.php';

session_start();
$seekerId = $_SESSION["UserId"];
$trainingId = $_GET['training_id'];

$sqlquery = "delete from seeker_training where training_id='$trainingId' and seeker_id='$seekerId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../seekerTrainingSummaryUi.php");
?>