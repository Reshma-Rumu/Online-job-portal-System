<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start();
    include 'content/head.php'; ?>

    <body>

        <section id="container" class="">
            <!--header start-->
            <?php include 'content/header.php'; ?>
            <!--header end-->
            <!--sidebar start-->
             <?php include 'content/jobCategory.php'; ?>
            <!--sidebar end-->
            <!--main content start-->
            <?
            include 'database/db.php';
            
            $seekerId = $_SESSION["UserId"];
            $query = "select * from jobseeker where seeker_id='$seekerId'";
            $queryExecute = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($queryExecute)) {

                $name = $row['name'];
                $userType = $row['user_type'];
                if (!isset($row['dateofbirth'])) {

                    $dateOfBirth = 'Null';
                } else {
                    $dateOfBirth = $row['dateofbirth'];
                }
                if (!isset($row['gender'])) {

                    $gender = 'Null';
                } else {
                    $gender = $row['gender'];
                }

                if (!isset($row['maritalstatus'])) {

                    $maritalStatus = 'Null';
                } else {
                    $maritalStatus = $row['maritalstatus'];
                }



                if (!isset($row['fathersname'])) {

                    $fathersName = 'Null';
                } else {
                    $fathersName = $row['fathersname'];
                }
                if (!isset($row['mothersname'])) {

                    $mothersName = 'Null';
                } else {
                    $mothersName = $row['mothersname'];
                }
                if (!isset($row['nationality'])) {

                    $nationality = 'Null';
                } else {
                    $nationality = $row['nationality'];
                }
                if (!isset($row['religion'])) {

                    $religion = 'Null';
                } else {
                    $religion = $row['religion'];
                }
                if (!isset($row['presentaddress'])) {

                    $presentAddress = 'Null';
                } else {
                    $presentAddress = $row['presentaddress'];
                }
                if (!isset($row['permanentaddress'])) {

                    $permanentAddress = 'Null';
                } else {
                    $permanentAddress = $row['permanentaddress'];
                }
                if (!isset($row['permanentaddress'])) {

                    $currentLocation = 'Null';
                } else {
                    $currentLocation = $row['currentlocation'];
                }

                $email = $row['email'];
                $mobileNumber = $row['mobilenumber'];
                if (!isset($row['filename'])) {

                    $image = 'img/profileimage.jpg';
                } else {
                    $image = $row['filename'];
                }
                if (!isset($row['objective'])) {

                    $objective = 'Null';
                } else {
                    $objective = $row['objective'];
                }
                if (!isset($row['careersummary'])) {

                    $careerSummary = 'Null';
                } else {
                    $careerSummary = $row['careersummary'];
                }
            }
            
            ?>

            <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row">
                        <aside class="profile-nav col-lg-3">
                            <section class="panel">
                                <?php include 'content/ProfileSide.php'; ?>

                            </section>
                        </aside>
                        <aside class="profile-info col-lg-9">

                            <section class="panel">  
                                <div class="col-xs-12">

                                    <section class="panel">
                                        <div class="panel-body">
                                            <table class="table table-bordered" id="example" class="display">
                            <thead>
                                <tr class="success"><td>Jobs Title</td><td>Company Name</td><td>Action</td></tr>
                            </thead>

                           
                            <tbody>
                                
                                <?
                        
                        $query = "select * from online_applications join jobs on jobs.id = online_applications.jobs_id where online_applications.seeker_id='$seekerId'";
                        $queryExecute = mysqli_query($con,$query);
                        while ($row = mysqli_fetch_array($queryExecute)) {
                            ?>

                           <tr> 
                               
                          <td><?php echo $row['jobs_title'] ?></td>
                          <td><?php echo $row['company_name'] ?></td>                          
                          <td><a class="btn btn-shadow btn-info" href="jobsViewUi.php?jobsId=<?php echo $row['id'] ?>">Job Details</a>/ <a class="btn btn-shadow btn-danger" href="action/DeleteJobsAction.php?jobsId=<?php echo $row['id'] ?>">Delete</a></td> 
                          </tr>


                            <?
                        }
                       
                        ?> 

                               
                            </tbody>
                        </table> 
                                        </div>
                                    </section>

                                </div>

                            </section>
                          
                        </aside>
                    </div>

                    <!-- page end-->
                </section>
            </section>
            <!--main content end-->
            <!--footer start-->
            <?php include 'content/footer.php'; ?>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="js/respond.min.js" ></script>

        <!--common script for all pages-->
        <script src="js/common-scripts.js"></script>

        <script>

            //knob
            $(".knob").knob();

        </script>


    </body>
</html>
