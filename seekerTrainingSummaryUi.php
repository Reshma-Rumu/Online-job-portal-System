<!DOCTYPE html>
<html lang="en">
    <?php include 'content/head.php'; ?>

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
            session_start();
            $seekerId = $_SESSION["UserId"];
            $query = "select * from jobseeker where seeker_id='$seekerId'";
            $queryExecute = mysql_query($query);
            while ($row = mysql_fetch_array($queryExecute)) {
                $userType = $row['user_type'];

                $name = $row['name'];
              
                if (!isset($row['filename'])) {

                    $image = 'img/profileimage.jpg';
                } else {
                    $image = $row['filename'];
                }
                
                $email = $row['email'];
                $mobileNumber = $row['mobilenumber'];
                
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
                                <div class="panel-body bio-graph-info">
                                    <h1>Add New Training</h1>
                                    <div class="form">
                                        <form action="action/seekerTrainingSummaryAction.php" method="post" id="signupForm" class="cmxform form-horizontal tasi-form" novalidate="novalidate">
                                             
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="training_title">Training Title</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="training_title" id="training_title" class=" form-control">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="topic">Topic</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="topic" id="topic" class=" form-control">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="institute">Institute</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="institute" id="institute" class=" form-control">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="country">Country</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="country" id="country" class=" form-control">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="location">Location</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="location" id="location" class=" form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="year">Year</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="year" id="year" class=" form-control">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="duration">Duration</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="duration" id="duration" class=" form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label col-lg-2" for="training_order">Showing Order</label>
                                                <div class="col-lg-10">
                                                    <select id="gender" name="training_order" class="form-control m-bot15">
                                                        <option value="1">First Position</option>
                                                        <option value="2">Second Position</option>                                                 
                                                        <option value="3">Third Position</option>
                                                        <option value="4">Fourth Position</option>
                                                        <option value="5">Fifth Position</option>
                                                        <option value="6">Sixth Position</option>
                                                        <option value="7">Seventh Position</option>
                                                        <option value="8">Eighth Position</option>
                                                        <option value="9">Ninth Position</option>
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button type="submit" class="btn btn-danger">Save</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            
                            
                            
                            <section class="panel">
                                        <header class="panel-heading">
                                           Edit Training Summery
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
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?
                                                        $query = "select * from seeker_training where seeker_id='$seekerId' order by training_order desc";
                                                        $queryExecute = mysql_query($query);
                                                        while ($row = mysql_fetch_array($queryExecute)) {

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
                                                                <td><a href="editSeekerTrainingUi.php?training_id=<? echo $trainingId ?>">Edit</a> / 
                                                                <a href="action/deleteSeekerTrainingAction.php?training_id=<? echo $trainingId ?>">Delete</a></td>

                                                            </tr>
                                                            <?
                                                        }
                                                        ?>


                                                    </tbody>
                                                </table>
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

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/respond.min.js" ></script>

        <!--this page plugins-->

        <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
        <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

        <!--common script for all pages-->
        <script src="js/common-scripts.js"></script>
        <!--this page  script only-->
        <script src="js/advanced-form-components.js"></script>


    </body>
</html>
