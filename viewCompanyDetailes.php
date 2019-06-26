<!DOCTYPE html>
<html lang="en">
    <?php include 'content/head.php'; ?>

    <body>

        <section id="container" class="">
            <!--header start-->
            <?php include 'content/header.php'; ?>
            <!--header end-->
            <!--sidebar start-->
            <?php include 'content/adminSubMenu.php'; ?>
            <!--sidebar end-->
            <!--main content start-->
            <?
            include 'database/db.php';
            session_start();
            $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];
            $query = "select * from admin where admin_id='$companyId'";
            $queryExecute = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($queryExecute)) {
                
                $userType = $row['user_type'];

                $companyName = $row['name'];               
                $companyEmail = $row['email'];
                $companyMobileNumber = $row['mobile_no'];
               
                
                if (!isset($row['company_logo'])) {

                    $companyLogo = 'Null';
                } else {
                    $companyLogo = $row['company_logo'];
                }
                                
            }
            
            ?>

            <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row">
                        <aside class="profile-nav col-lg-3">
                            <section class="panel">
                                <?php include 'content/adminProfileSide.php'; ?>

                            </section>
                        </aside>
                        
                        <aside class="profile-info col-lg-9">
                
                <?
            include 'database/db.php';
            
            $seekerId = $_GET["seekerId"];
            $query = "select * from company where company_id='$companyId'";
            $queryExecute = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($queryExecute)) {

                $name = $row['name'];
                $userType = $row['user_type'];
                if (!isset($row['company_address'])) {

                    $dateOfBirth = 'Null';
                } else {
                    $dateOfBirth = $row['company_address'];
                }
                if (!isset($row['company_mobilenumber'])) {

                    $gender = 'Null';
                } else {
                    $gender = $row['company_mobilenumber'];
                }

                if (!isset($row['company_email'])) {

                    $maritalStatus = 'Null';
                } else {
                    $maritalStatus = $row['company_email'];
                }


            }
            ?>

                           <!-- <section class="panel">  
                                <div class="col-xs-12">

                                    <section class="panel">
                                        <div class="panel-body">
                                            <img class="img-rounded" width="250" height="250" src="seekerimage/<?php echo $image ?>">
                                            
                                            <h3>Career Information</h3>
                                            
                                             <b>Objective : </b> <br/><? echo $objective ?>
                                             <br/><br/>
                                            <b> Career Summary :</b><br/> <? echo $careerSummary ?>
                                        </div>
                                    </section>

                                </div>

                            </section>-->



                            <section class="panel">                               
                                <div class="panel-body bio-graph-info">
                                    <h1></h1>
                                    <div class="row">
                                        <div class="bio-row">
                                            <p><span>Company Name </span>: <? echo $name ?></p>
                                        </div>

                                        <div class="bio-row">
                                            <p><span>Email </span>: <? echo $company_email ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Contact No</span>: <? echo $company_mobilenumber ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Address </span>: <? echo $company_address ?></p>
                                        </div>
                                      
                                    </div>
                                </div>
                            </section>


                            <!--<div class="row">
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
                                                            <th>Pas. Year</th>
                                                            <th>Duration</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?
                                                        $query = "select * from seeker_result where seeker_id='$seekerId' order by result_order desc";
                                                        $queryExecute = mysqli_query($con,$query);
                                                        while ($row = mysqli_fetch_array($queryExecute)) {

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
                            <!--<div class="row">
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
                                                    <tbody>

                                                        <?
                                                        $query = "select * from seeker_training where seeker_id='$seekerId' order by training_order desc";
                                                        $queryExecute = mysqli_query($con,$query);
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


                            <section>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="bio-chart">
                                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="35" data-fgColor="#e06b7d" data-bgColor="#e8e8e8">
                                                </div>
                                                <div class="bio-desk">
                                                    <h4 class="red">Envato Website</h4>
                                                    <p>Started : 15 July</p>
                                                    <p>Deadline : 15 August</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="bio-chart">
                                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="63" data-fgColor="#4CC5CD" data-bgColor="#e8e8e8">
                                                </div>
                                                <div class="bio-desk">
                                                    <h4 class="terques">ThemeForest CMS </h4>
                                                    <p>Started : 15 July</p>
                                                    <p>Deadline : 15 August</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="bio-chart">
                                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="75" data-fgColor="#96be4b" data-bgColor="#e8e8e8">
                                                </div>
                                                <div class="bio-desk">
                                                    <h4 class="green">VectorLab Portfolio</h4>
                                                    <p>Started : 15 July</p>
                                                    <p>Deadline : 15 August</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="bio-chart">
                                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="50" data-fgColor="#cba4db" data-bgColor="#e8e8e8">
                                                </div>
                                                <div class="bio-desk">
                                                    <h4 class="purple">Adobe Muse Template</h4>
                                                    <p>Started : 15 July</p>
                                                    <p>Deadline : 15 August</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </aside>
                        
                    </div>

                    <!-- page end-->
                </section>
            </section>-->            
            
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
        
    
    <script src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>


    </body>
</html>
