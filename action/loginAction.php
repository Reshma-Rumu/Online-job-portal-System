<?php
session_start();
include '../database/db.php';
$userName = $_POST['username'];
$password = $_POST['password'];


$sqlquery = "select * from jobseeker where user_name='$userName' and confirm_password='$password'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysql_error());
$row = mysqli_fetch_array($executeQuery);
if($row!=NULL){

    $userId = $row['seeker_id'];
    $_SESSION["UserId"] = $userId;
    header("location:../jobseekerProfileUi.php");
}
else{
    $_SESSION["errorMsg"] = "wrong user name or password";
    header("location:../login.php");
}

?>
