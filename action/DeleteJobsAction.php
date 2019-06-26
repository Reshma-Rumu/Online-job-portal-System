<?php
include '../database/db.php';

session_start();

$jobsId = $_GET['jobsId'];
$sqlquery = "DeLETE from jobs where id='$jobsId'";

$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../publishedJobsUi.php");
?>