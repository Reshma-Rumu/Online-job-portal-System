<?php
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
    <li><a href="appliedJobsUi.php"> <i class="icon-edit"></i> Applied Jobs</a></li>
    <li><a href="editJobSeekerPersonalInfoUi.php"> <i class="icon-edit"></i> Edit Personal Information</a></li>
    <li><a href="seekerImageUploadUi.php"> <i class="icon-edit"></i> My Image</a></li>
    <li><a href="editSeekerCareerUi.php"> <i class="icon-edit"></i> Edit Career Information</a></li>
    <li><a href="addAcademicQualificationUi.php"> <i class="icon-edit"></i> Academic Qualification</a></li>
    

</ul>
 <?   
}
elseif ($userType == 2) {

    ?>
<div class="user-heading round">
    <a href="#">
        <img src="seekerimage/<? echo $image ?>" alt="">
    </a>
    <h1><? echo $name ?></h1>
    <p><? echo $email ?></p>
</div>
    

<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="adminProfileUi.php"> <i class="icon-user"></i>Admin Profile</a></li>
    <li><a href="editAdminProfileUi.php"> <i class="icon-edit"></i> Edit Admin Profile</a></li>
    <li><a href="viewJobSeeker.php"> <i class="icon-plus-sign"></i> View Jobseeker List</a></li>
    <li><a href="viewCompany.php"> <i class="icon-plus-sign"></i> View Company List</a></li>
   
   
    
</ul>
 <?   
    
}

elseif ($userType == 3) {

    ?>
<div class="user-heading round">
    <a href="#">
        <img src="seekerimage/<? echo $image ?>" alt="">
    </a>
    <h1><? echo $name ?></h1>
    <h1><? echo $email ?></h1>
   
</div>
    

<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="adminProfileUi.php"> <i class="icon-user"></i>Admin Profile</a></li>
    <li><a href="editAdminProfileUi.php"> <i class="icon-edit"></i> Edit Admin Profile</a></li>
    <li><a href="viewJobSeeker.php"> <i class="icon-plus-sign"></i> View JobSeeker List</a></li>
    <li><a href="viewCompany.php"> <i class="icon-plus-sign"></i> View Company List</a></li>
    
</ul>
 <?   
    
}


?>

