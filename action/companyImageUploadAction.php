<?php

session_start();
$companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];
include '../database/db.php';

$fileName = $_FILES['photo']['name'];
$prefilename_read = '../companylogo/';

if(move_uploaded_file($_FILES["photo"]["tmp_name"], $prefilename_read.$_FILES["photo"]["name"]))
{
    
$sqlquery = "UPDATE company SET company_logo = '$fileName' WHERE company_id = '$companyId'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error());

header("location:../companyProfileUi.php");
    
}

?>