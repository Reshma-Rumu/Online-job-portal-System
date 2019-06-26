<?php
include 'database/db.php';

if (isset($_SESSION['UserId']) && !empty($_SESSION['UserId'])) {
    $seekerId = $_SESSION["UserId"];
    $query = "select * from jobseeker where seeker_id='$seekerId'";
    $queryExecute = mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($queryExecute)) {
        
        $name = $row['name'];   
        $email = $row['email'];
        $myImage = $row['filename'];
    }
}
if (isset($_SESSION["c-o+m*p4a.n5y-I*d"]) && !empty($_SESSION["c-o+m*p4a.n5y-I*d"])) {
     $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];

    $query = "select * from company where company_id='$companyId'";
    $queryExecute = mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($queryExecute)) {
        $name = $row['name'];
        $email = $row['company_email'];
        $myImage = $row['company_logo'];
    }

}
if (isset($_SESSION["c-o+m*p4a.n5y-I*d"]) && !empty($_SESSION["c-o+m*p4a.n5y-I*d"])) {
     $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];

    $query = "select * from admin where admin_id='$companyId'";
    $queryExecute = mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($queryExecute)) {
        $name = $row['name'];
        $email = $row['email'];
       
    }

}
?>

<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
    </div>
    <!--logo start-->
    <a href="#" class="logo" >Online<span>Job Portal</span></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            
        </ul>
    </div>
    <div class="top-nav ">
        <ul class="nav pull-right top-menu">

            <!-- user login dropdown start-->
           <!-- <li class="heder-mycon">
                fdf
            </li>
            <li class="dropdown">-->
               
                <?
                if (isset($_SESSION['UserId']) && !empty($_SESSION['UserId'])) {
                    ?>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" height="40" width="40" src="seekerimage/<? echo $myImage ?>">
                        <span class="username"><? echo $name ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="jobseekerProfileUi.php"><i class=" icon-suitcase"></i>Profile</a></li>
                        
                        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                    <?
                }
                
                elseif (isset($_SESSION['c-o+m*p4a.n5y-I*d']) && !empty($_SESSION['c-o+m*p4a.n5y-I*d'])) {
                    ?>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" height="40" width="40" src="companylogo/<? echo $myImage ?>">
                        <span class="username"><? echo $name ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="companyProfileUi.php"><i class=" icon-suitcase"></i>Profile</a></li>
                        
                        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                    <?
                }
                 elseif (isset($_SESSION['c-o+m*p4a.n5y-I*d']) && !empty($_SESSION['c-o+m*p4a.n5y-I*d'])) {
                    ?>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                       
                        <span class="username"><? echo $name ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="adminProfileUi.php"><i class=" icon-suitcase"></i>Profile</a></li>
                        
                        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                    <?
                }
                
                
                else {
                    ?>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="ChoceUserTypeUi.php">

                        <span class="username">Login / Sign Up</span>
                        <b class="caret"></b>
                    </a>
                
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="login.php"><i class=" icon-suitcase"></i>Job Seeker</a></li>
                        <li><a href="company.php"><i class="icon-cog"></i>Company</a></li>
                        <li><a href="admin.php"><i class="icon-cog"></i>Admin</a></li>
                        

                        <li><a href="company.php"><i class="icon-key"></i> Post A Job</a></li>
                    </ul>

                    <?
                }
                ?>


            </li>
            <!-- user login dropdown end -->
        </ul>
    </div>
</header>
