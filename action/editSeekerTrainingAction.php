<?php

session_start();
$userId = $_SESSION["UserId"];
include '../database/db.php';

 $seekerId = $_POST["UserId"];
 $trainingId = $_POST['training_id'];
 $trainingTitle = $_POST['training_title'];
 $topic = $_POST['topic'];
 $institute = $_POST['institute'];
 $country = $_POST['country'];
 $location = $_POST['location'];
 $year = $_POST['year'];
 $duration = $_POST['duration'];
 $trainingOrder = $_POST['training_order'];




$sqlquery = "UPDATE seeker_training SET training_title = '$trainingTitle', topic = '$topic', institute = '$institute', country = '$country', location = '$location', year = '$year', duration = '$duration', training_order = '$trainingOrder' WHERE seeker_id = '$userId' and training_id = '$trainingId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../seekerTrainingSummaryUi.php");
?>