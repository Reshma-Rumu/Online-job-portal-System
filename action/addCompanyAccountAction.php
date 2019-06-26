<?php
include '../database/db.php';

session_start();

$Total = $_POST['total'];
                              
    $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"]; 
    $sql=mysqli_query($con,"SELECT * FROM company_account where company_id='$companyId'");
   
       $row = mysqli_fetch_array($sql);
       $total=$row['total'];
       $total1=$total+$Total;
          
         
         
    $query = "REPLACE INTO company_account VALUES('com_acc_id','$companyId','$total1')";

            mysqli_query($con, $query);    
                                                

header("location:../viewCompanyAccountUi.php");
?>