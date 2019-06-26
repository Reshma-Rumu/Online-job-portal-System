<?php
include '../database/db.php';

session_start();
$seekerId = $_SESSION["UserId"];
$trainingTitle = $_POST['training_title'];
$topic = $_POST['topic'];
$institute = $_POST['institute'];
$country = $_POST['country'];
$location = $_POST['location'];
$year = $_POST['year'];
$duration = $_POST['duration'];
$trainingOrder = $_POST['training_order'];

$sqlquery = "insert into seeker_training values('', '$seekerId', '$trainingTitle', '$topic' , '$institute', '$country', '$location', '$year', '$duration', '$trainingOrder')";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../seekerTrainingSummaryUi.php");
?>