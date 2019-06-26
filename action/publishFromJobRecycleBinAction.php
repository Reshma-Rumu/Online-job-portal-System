<?php
include '../database/db.php';

session_start();

$jobsId = $_GET['jobsId'];
$sqlquery = "UPDATE jobs SET status = '1' where id='$jobsId'";

$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../publishedJobsUi.php");
?>