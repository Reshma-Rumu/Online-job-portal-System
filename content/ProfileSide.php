<?
if ($userType == 1) {
    ?>
    <div class="user-heading round">
    <a href="#">
        <img src="seekerimage/<? echo $image ?>" alt="">
    </a>
    <h1><? echo $name ?></h1>
    <p><? echo $email ?></p>
</div>

<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="jobseekerProfileUi.php"> <i class="icon-user"></i> Profile</a></li>
    <li><a href="editJobSeekerPersonalInfoUi.php"> <i class="icon-edit"></i> Edit Personal Information</a></li>
    <li><a href="seekerImageUploadUi.php"> <i class="icon-edit"></i> My Image</a></li>
    <li><a href="editSeekerCareerUi.php"> <i class="icon-edit"></i> Edit Career Information</a></li>
    <li><a href="addAcademicQualificationUi.php"> <i class="icon-edit"></i> Academic Qualification</a></li>
     <li><a href="appliedJobsUi.php"> <i class="icon-edit"></i> Applied Jobs</a></li>
    

</ul>
 <?   
}
elseif ($userType == 2) {

    ?>
    <div class="user-heading round">
    <a href="#">
        <img src="companylogo/<? echo $companyLogo ?>" alt="yt">
    </a>
    <h1><? echo $companyName ?></h1>
    <p><? echo $companyEmail ?></p>
</div>

<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="companyProfileUi.php"> <i class="icon-user"></i>Company Profile</a></li>
    <li><a href="editCompanyProfileUi.php"> <i class="icon-edit"></i> Edit Company Profile</a></li>
    <li><a href="companyImageUploadUi.php"> <i class="icon-edit"></i> Company Logo</a></li>
    <li><a href="postAJobUi.php"> <i class="icon-plus-sign"></i> Post A Job</a></li>
    <li><a href="publishedJobsUi.php"> <i class="icon-plus-sign"></i> Published Jobs</a></li>
    <li><a href="viewCompanyAccountUi.php"> <i class="icon-plus-sign"></i> Company Account</a></li>
    
</ul>
 <?   
    
}
?>

