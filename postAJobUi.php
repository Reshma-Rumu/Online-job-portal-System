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
           
            $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];
            $query = "select * from company where company_id='$companyId'";
            $queryExecute = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($queryExecute)) {

                $userType = $row['user_type'];

                $companyName = $row['name'];
                $companyEmail = $row['company_email'];
                $companyMobileNumber = $row['company_mobilenumber'];
                $companyAddress = $row['company_address'];

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
                                <?php include 'content/ProfileSide.php'; ?>

                            </section>
                        </aside>
                        <aside class="profile-info col-lg-9">


                            <div class="row">
                                <div class="col-lg-12">
                                    <section class="panel">
                                        <div class="alert alert-success">
                                            <?php
                                            if(isset($_SESSION['message'])){
                                                echo $_SESSION['message'];
                                                unset ($_SESSION['message']);
                                            }
                                            ?>
                                        </div>
                                        <header class="panel-heading">
                                            Post A Job
                                        </header>
                                        <div class="panel-body">
                                            <div class="form">
                                                <form class="cmxform form-horizontal tasi-form" id="insertjobForm" method="POST" action="action/postAJobsAction.php">

                                                    <div class="form-group ">
                                                        <label for="jobtitle" class="control-label col-lg-2">Job Title</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="jobtitle" name="jobtitle" type="text" required="" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="company_name" class="control-label col-lg-2">Company Name</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="company_name" value="<? echo $companyName ?>" name="company_name" type="text" required="" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="jobcategory" class="control-label col-lg-2">Job Category</label>
                                                        <div class="col-lg-10">
                                                            <select class=" form-control" name="jobcategory">
                                                                <option value="23">Select Job Category </option>
                                                                <option value="1">Accounting / Finance </option>                                    
                                                                <option value="2">Bank / Financial Institution </option> 
                                                                <option value="3">Commercial / Supply Chain </option>
                                                                <option value="4">IT / Telecommunication</option>
                                                                <option value="5">Engineer / Architecture </option>
                                                                <option value="6">Garments / Textile </option>
                                                                <option value="7">HR / Org. Development </option>
                                                                <option value="8">Education / Training </option>
                                                                <option value="9">Marketing / Sales </option>                                    
                                                                <option value="10">Support / Call Center </option> 
                                                                <option value="14">Electrician / Construction </option>
                                                                <option value="15">Production / Operation </option>
                                                                <option value="16">Hospital / Medical / Pharma </option>
                                                                <option value="17">Travel / Tourism </option>                                    
                                                                <option value="18">NGO / Development </option> 
                                                                <option value="21">Data Entry / BPO </option>
                                                                

                                                            </select> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-lg-2">Application Deadline</label>
                                                        <div class="col-lg-10">

                                                            <div class="input-append date dpYears" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                                <input class="form-control" type="text" name="applicationdeadline" id="datepicker" required="">

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="no_of_vacancies" class="control-label col-lg-2">No. of Vacancies</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="no_of_vacancies" name="no_of_vacancies" type="number" min="0" />
                                                        </div>
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="jobdescription" class="control-label col-lg-2">Description</label>
                                                      <div class="col-lg-10">
                                                            <textarea class="form-control" name="jobdescription" rows="6" required=""></textarea>

                                                        </div>
                                                    </div>

                                                    <!--<div class="form-group ">
                                                        <label for="responsibility" class="control-label col-lg-2">Responsibility</label>
                                                        <div class="col-lg-10">
                                                            <textarea class="form-control" name="responsibility" rows="6"></textarea>

                                                        </div>
                                                    </div>-->
                                                    <div class="form-group ">
                                                        <label for="jobnature" class="control-label col-lg-2">Job Nature</label>
                                                        <div class="col-lg-10">
                                                            <select class=" form-control" name="jobnature">
                                                                <option value="1">Full-Time</option>
                                                                <option value="2">Part Time</option>
                                                                <option value="3">Contractual</option>                                                                    
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="educationalrequirements" class="control-label col-lg-2">Educational Requirements</label>
                                                        <div class="col-lg-10">
                                                            <textarea class="form-control " name="educationalrequirements" rows="6" required=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="additionaljobrequirements" class="control-label col-lg-2">Job Requirements</label>
                                                        <div class="col-lg-10">
                                                            <textarea class="form-control" name="additionaljobrequirements" rows="6" required=""></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="joblocation" class="control-label col-lg-2">Job Location</label>
                                                        <div class="col-lg-10">
                                                            <select class=" form-control" name="joblocation">
                                                                <option value="1">Dhaka</option>                                    
                                                                <option value="2">Chittagong</option> 
                                                                <option value="3">Sylhet</option>
                                                                <option value="4">Khulna</option>
                                                                <option value="5">Barisal</option>
                                                                <option value="6">Mymensingh</option>
                                                                <option value="7">Rajshahi</option>
                                                                <option value="8">Overseas</option>

                                                            </select>   
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="salary" class="control-label col-lg-2">Salary</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="salary" name="salary" type="text"  required=""/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="company_location" class="control-label col-lg-2">Company Location</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="company_location" value="<? echo $companyAddress ?>" name="company_location" type="text" required="" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="company_email" class="control-label col-lg-2">E-mail</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="company_email" value="<? echo $companyEmail ?>" name="company_email" type="text" required="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="apply_instruction" class="control-label col-lg-2">Apply_instruction</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="apply_instruction" placeholder="Short Instruction for candidates (Ex: Send Your CV to: youremail@gmail.com. Applicant must enclose his/her Photograph with CV) " name="apply_instruction" type="text" required="" />
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                     <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <button class="btn btn-success" type="submit">Save</button>
                                                            <!--<button class="btn btn-default" type="button">Cancel</button>-->
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>


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
        <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>



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



        <script>
            $(function() {
                  $('#datepicker').datepicker({
                        startDate: 'today'
                    });
                    
            });
        </script>

        <!--common script for all pages-->
        <script src="js/common-scripts.js"></script>

        <script>

            //knob
            $(".knob").knob();

        </script>


    </body>
</html>
