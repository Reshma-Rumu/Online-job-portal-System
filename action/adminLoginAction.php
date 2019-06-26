<?php
session_start();
include '../database/db.php';
$userName = $_POST['username'];
$password = $_POST['password'];


$sqlquery = "select * from admin where username='$userName' and password='$password'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysql_error());
$row = mysqli_fetch_array($executeQuery);
if($row!=NULL){

    $companyId = $row['admin_id'];
    //session_start();
   
     $_SESSION["c-o+m*p4a.n5y-I*d"] = $companyId;
     
    header("location:../adminProfileUi.php");
}
else{
    //session_start();
    $_SESSION["UserId"] = "wrong user name or password";
    header("location:../admin.php");
}

?>
