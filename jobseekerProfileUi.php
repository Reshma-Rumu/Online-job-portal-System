<!DOCTYPE html>
<html lang="en">

    <?php
    session_start();
    include 'content/head.php';
    ?>

    <body>

        <section id="container" class="">
            <!--header start-->
            <?php include 'content/header.php'; ?>
            <!--header end-->
            <!--sidebar start-->
            <?php include 'content/jobCategory.php'; ?>
            <!--sidebar end-->
            <!--main content start-->

            <?php
            include 'database/db.php';

            echo $seekerId = $_SESSION["UserId"];
            $query = "select * from jobseeker where seeker_id='$seekerId'";
            $queryExecute = mysqli_query($con, $query);
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
                                            <h3><b>Career Information</b></h3>

                                            <b>Objective : </b> <br/><? echo $objective ?>
                                            <br><br>

                                        </div>
                                    </section>

                                </div>

                            </section>



                            <section class="panel">                               
                                <div class="panel-body bio-graph-info">
                                    <h1>Personal Information</h1>
                                    <div class="row">
                                        <div class="bio-row">
                                            <p><span>Name </span>: <? echo $name ?></p>
                                        </div>

                                        <div class="bio-row">
                                            <p><span>Father's Name </span>: <? echo $fathersName ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Mother's Name</span>: <? echo $mothersName ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Date of Birth </span>: <? echo $dateOfBirth ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Gender </span>: <? echo $gender ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Marital Status </span>: <? echo $maritalStatus ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Nationality </span>: <? echo $nationality ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Religion </span>: <? echo $religion ?></p>
                                        </div>

                                        <div class="bio-row">
                                            <p><span>Email </span>: <? echo $email ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Mobile </span>: <? echo $mobileNumber ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Present Address </span>: <? echo $presentAddress ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Permanent Address </span>: <? echo $permanentAddress ?></p>
                                        </div>
                                    </div>



                                </div>
                            </section>


                            <div class="row">
                                <div class="col-lg-12">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Academic Qualification
                                        </header>
                                        <div class="panel-body">
                                            <section id="unseen">
                                                <table class="table table-bordered table-striped table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th>Exam Title</th>
                                                            <th>Concentration / Major</th>
                                                            <th>Institute</th>
                                                            <th>Result</th>
                                                            <th>Passing Year</th>
                                                            <th>Duration</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?
                                                        $query = "select * from seeker_result where seeker_id='$seekerId' order by result_order desc";
                                                        $sql = mysqli_query($con, $query);

                                                        while ($row = mysqli_fetch_array($sql)) {

                                                            $seekerResultId = $row['seeker_result_id'];
                                                            $examTitle = $row['exam_title'];
                                                            $major = $row['major'];
                                                            $institute = $row['institute'];
                                                            $result = $row['result'];
                                                            $pasYear = $row['pas_year'];
                                                            $duration = $row['duration'];
                                                            ?>
                                                            <tr>
                                                                <td><? echo $examTitle ?></td>
                                                                <td><? echo $major ?></td>
                                                                <td><? echo $institute ?></td>
                                                                <td><? echo $result ?></td>
                                                                <td><? echo $pasYear ?></td>
                                                                <td><? echo $duration ?></td>


                                                            </tr>

                                                            <?
                                                        }
                                                        ?>


                                                    </tbody>
                                                </table>
                                            </section>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <!-- <div class="row">
                                 <div class="col-lg-12">
                                     <section class="panel">
                                         <header class="panel-heading">
                                             Training Summery
                                         </header>
                                         <div class="panel-body">
                                             <section id="unseen">
                                                 <table class="table table-bordered table-striped table-condensed">
                                                     <thead>
                                                         <tr>
                                                             <th>Title</th>
                                                             <th>Topic</th>
                                                             <th>Institute</th>
                                                             <th>Country</th>
                                                             <th>Location</th>
                                                             <th>Year</th>
                                                              <th>Duration</th>
                                                            
                                                         </tr>
                                                     </thead>
                                                     <tbody>-->

                            <!--<?
                                                        $query = "select * from seeker_training where seeker_id='$seekerId' order by training_order desc";
                                                        $queryExecute = mysqli_query($con, $query);
                                                        while ($row = mysqli_fetch_array($queryExecute)) {

                                                            $trainingId = $row['training_id'];
                                                            $trainingTitle = $row['training_title'];
                                                            $topic = $row['topic'];
                                                            $institute = $row['institute'];
                                                            $country = $row['country'];
                                                            $location = $row['location'];
                                                            $year = $row['year'];
                                                            $duration = $row['duration'];
                                                            $trainingOrder = $row['training_order'];
                                                            ?>
                                    <tr>
                                        <td><? echo $trainingTitle ?></td>
                                        <td><? echo $topic ?></td>
                                        <td><? echo $institute ?></td>
                                        <td><? echo $country ?></td>
                                        <td><? echo $location ?></td>
                                        <td><? echo $year ?></td>
                                        <td><? echo $duration ?></td>
                                        

                                    </tr>-->
    <?
}
?>


                            </tbody>
                            </table>
                            </section>
                    </div>
                </section>
                </div>
                </div>


                <section>

                </section>
                </aside>
                </div>

                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <!--<?php include 'content/footer.php'; ?>-->
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
