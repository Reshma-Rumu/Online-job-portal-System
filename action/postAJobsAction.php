<?php


    include '../database/db.php';
    $jobTitle = $_POST['jobtitle'];
    $jobCategory = $_POST['jobcategory'];
    $applicationDeadline = $_POST['applicationdeadline'];
    $vacancy = $_POST['no_of_vacancies'];
    $jobDescription = $_POST['jobdescription'];
    /*$jobResponsibility = $_POST['responsibility'];*/
    $jobNature = $_POST['jobnature'];
    $educationalRequirements = $_POST['educationalrequirements'];
    $additionalJobrequiRements = $_POST['additionaljobrequirements'];
    $jobLocation = $_POST['joblocation'];
    $jobSalary = $_POST['salary'];
    $companyName = $_POST['company_name'];
    $companyLocation = $_POST['company_location'];
    $companyEmail = $_POST['company_email'];
//    $publishedDate = $_POST['published_date'];
    $applyInstruction = $_POST['apply_instruction'];
    
    
    if (isset($_POST['apply_online'])){
        $applyOnline = $_POST['apply_online'];     
}
 else {
    $applyOnline = 0;
}
    
    date_default_timezone_set('Asia/Dhaka');
    $publishedDate = date('m/d/Y h:i:s a', time());
    $status = 1;
    session_start();
    $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];
   
    
    $sql=mysqli_query($con,"SELECT * FROM company_account where company_id='$companyId'") or die(mysqli_error($con));
  
       while($row = mysqli_fetch_array($sql)){
           $aa=$row['total'];
           $a=500<$aa;
         
       }
     if(500<$aa){  
$sqlquery = "insert into jobs values('', '$jobTitle', '$jobCategory', '$applicationDeadline', '$vacancy', '$jobDescription', '$jobNature', '$educationalRequirements', '$additionalJobrequiRements', '$jobLocation', '$jobSalary', '$companyName', '$companyLocation', '$companyEmail', '$publishedDate', '$applyInstruction', '$applyOnline', '$status', '$companyId')";

if(mysqli_multi_query($con, $sqlquery)){
$sql1=mysqli_query($con,"SELECT * FROM company_account where company_id='$companyId'");
       while($row = mysqli_fetch_array($sql1)){
           $aa=$row['total'];
           
          $amount=$aa-500;
       
            $query = "REPLACE INTO company_account VALUES('com_acc_id','$companyId','$amount')";

            mysqli_query($con, $query);
       }
       
            $sqls=mysqli_query($con,"SELECT * FROM company_account where company_id='$companyId'")or die(mysqli_error($con));
       while($row1 = mysqli_fetch_array($sqls)){
      
       $amount1=$row1['amount'];
       $sum=$amount1+500;
        $query1 ="REPLACE INTO admin_account VALUES('ad_id','$companyId','$sum')";
      
 mysqli_query($con, $query1);
       
     $_SESSION["message"] = "Job Posted Successfully";  
header("location:../postAJobUi.php");
       }
     }
     }
     else{
         echo"Your Balance is not sufficient";
     }
?>

