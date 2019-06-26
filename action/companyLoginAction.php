<?php

include '../database/db.php';
$userName = $_POST['username'];
$password = $_POST['password'];


$sqlquery = "select * from company where company_username='$userName' and confirm_password='$password'";
$executeQuery = mysqli_query($con,$sqlquery) or die(mysql_error());
$row = mysqli_fetch_array($executeQuery);
if($row!=NULL){

    $companyId = $row['company_id'];
    session_start();
//    $_SESSION["UserId"] = $userId;
    $_SESSION["c-o+m*p4a.n5y-I*d"] = $companyId;
        
    header("location:../companyProfileUi.php");
}
else{
    session_start();
    $_SESSION["UserId"] = "wrong user name or password";
    header("location:../login.php");
}

?>

