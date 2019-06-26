<?php
include '../database/db.php';
$jobsId = $_GET['jobsId'];
$candidateId = $_GET['candidateId'];
$jobCategory = $_GET['jobCategory'];
$companyId = $_GET['companyId'];

$sqlquery = "insert into online_applications values('', '$candidateId', '$jobsId', '$companyId')";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../jobsByCategoryUi.php?categoryId=$jobCategory&$companyId");

?>