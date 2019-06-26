<?php

session_start();
$userId = $_SESSION["UserId"];
include '../database/db.php';

$fileName = $_FILES['photo']['name'];
$prefilename_read = '../seekerimage/';

if(move_uploaded_file($_FILES["photo"]["tmp_name"], $prefilename_read.$_FILES["photo"]["name"]))
{
    
$sqlquery = "UPDATE jobseeker SET filename = '$fileName' WHERE seeker_id = '$userId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../jobseekerProfileUi.php");
    
}



?>
