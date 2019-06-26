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
                $userType = $row['user_type'];

                $name = $row['name'];
                if (!isset($row['fathersname'])) {

                    $fathersName = 'Input Name of Your Father';
                } else {
                    $fathersName = $row['fathersname'];
                }
                if (!isset($row['mothersname'])) {

                    $mothersName = 'Input Name of Your Mother';
                } else {
                    $mothersName = $row['mothersname'];
                }
                if (!isset($row['nationality'])) {

                    $nationality = 'What is your nationality';
                } else {
                    $nationality = $row['nationality'];
                }
                if (!isset($row['religion'])) {

                    $religion = 'Your Religion ?';
                } else {
                    $religion = $row['religion'];
                }
                if (!isset($row['presentaddress'])) {

                    $presentAddress = 'Present Address ?';
                } else {
                    $presentAddress = $row['presentaddress'];
                }
                if (!isset($row['permanentaddress'])) {

                    $permanentAddress = 'Present Address ?';
                } else {
                    $permanentAddress = $row['permanentaddress'];
                }
                if (!isset($row['permanentaddress'])) {

                    $currentLocation = 'Your Location ?';
                } else {
                    $currentLocation = $row['currentlocation'];
                }
                
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
                                    <h1>Edit Personal Information</h1>
                                    <div class="form">
                                        <form action="action/editJobSeekerPersonalInfoAction.php" method="post" id="signupForm" class="cmxform form-horizontal tasi-form" novalidate="novalidate">
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="name">Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="name" value="<? echo $name ?>" id="name" class=" form-control">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="fathersname">Father's Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="fathersname" value="<? echo $fathersName ?>" id="fathersname" class=" form-control">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="mothersname">Mother's Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="mothersname" value="<? echo $mothersName ?>" id="mothersname" class=" form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date of Birth</label>
                                                <div class="col-md-3 col-xs-11">

                                                    <div class="input-append date dpYears" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                        <input type="text" class="form-control" name="dateofbirth" id="dateofbirth" size="16" value="12-02-2012" readonly="">
                                                        <span class="input-group-btn add-on">
                                                            <button type="button" class="btn btn-danger"><i class="icon-calendar"></i></button>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label for="gender" class="col-sm-2 control-label col-lg-2">Gender</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control m-bot15" name="gender" id="gender">
                                                        <option value="Male">Male </option>
                                                        <option value="Female">Female </option>                                                 
                                                        <option value="Other">Other </option>
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="maritalstatus" class="col-sm-2 control-label col-lg-2">Marital Status</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control m-bot15" name="maritalstatus" id="maritalstatus">
                                                        <option value="Unmarried">Unmarried </option>
                                                        <option value="Married">Married </option>                                                 
                                                        <option value="Divorced">Divorced </option>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="nationlity">Nationality</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="nationality" value="<? echo $nationality ?>" id="nationality" class=" form-control">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="">Religion</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="religion" value="<? echo $religion ?>" id="religion" class=" form-control">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="">Present Address</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="presentaddress" value="<? echo $presentAddress ?>" id="presentaddress" class=" form-control">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="">Permanent Address</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="permanentaddress" value="<? echo $permanentAddress ?>" id="permanentaddress" class=" form-control">
                                                </div>
                                            </div>                                            


                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="currentlocation">Current Location</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="currentlocation" value="<? echo $currentLocation ?>" id="currentlocation" class=" form-control">
                                                </div>
                                            </div>                                            


                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="email">E-mail</label>
                                                <div class="col-lg-10">
                                                    <input type="email" name="email" value="<? echo $email ?>" id="email" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="mobilenumber">Mobile Number</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="mobilenumber" value="<? echo $mobileNumber ?>" id="email" class="form-control ">
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
