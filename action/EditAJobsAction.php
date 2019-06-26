<?php


    include '../database/db.php';
    
//    echo "<pre>"; var_dump($_POST); echo "</pre>";
//    exit();
    $jobId = $_POST['jobId'];
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
    $applyInstruction = $_POST['apply_instruction'];
      
    date_default_timezone_set('Asia/Dhaka');
    $publishedDate = date('m/d/Y h:i:s a', time());
    $status = 1;
    session_start();
    $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];

$sqlquery = "UPDATE jobs SET jobs_title = '$jobTitle', job_category = '$jobCategory', applicationdeadline = '$applicationDeadline', no_of_vacancies = '$vacancy', jobdescription = '$jobDescription', jobnature = '$jobNature', educationalrequirements = '$educationalRequirements', additionaljobrequirements = '$additionalJobrequiRements', joblocation ='$jobLocation', salary= '$jobSalary', company_name = '$companyName', company_location = '$companyLocation',  company_email = '$companyEmail', published_date = '$publishedDate', apply_instruction = '$applyInstruction', status = '$status', company_id ='$companyId' WHERE id = '$jobId'";

$executeQuery = mysqli_query($con,$sqlquery) or die(mysqli_error($con));
header("location:../publishedJobsUi.php");

?>

