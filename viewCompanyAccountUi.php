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
            <?php include 'content/companySubMenu.php'; ?>
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
                                        <header class="panel-heading">
                                           My Account Balance
                                        </header>
                                        <div class="panel-body">
                                            <div class="form">
                                                <?php
                                               
    $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"]; 
    $sql=mysqli_query($con,"SELECT * FROM company_account where company_id='$companyId'");
   
       $row = mysqli_fetch_array($sql);
          
         
         
       
                                                ?>
                                                <form class="cmxform form-horizontal tasi-form" id="insertjobForm" method="POST" action="action/postAJobsAction.php">

                                                    <div class="form-group ">
                                                        <label for="jobtitle" class="control-label col-lg-2">Current Balance</label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="jobtitle" name="jobtitle" value="<?php echo $row['total'];?>" type="text" />
                                                        </div>
                                                    </div>

                                                   

                                                    

                                                    
                                                      



                                                    

                                                    <!--<div class="form-group ">
                                                        <label for="responsibility" class="control-label col-lg-2">Responsibility</label>
                                                        <div class="col-lg-10">
                                                            <textarea class="form-control" name="responsibility" rows="6"></textarea>

                                                        </div>
                                                    </div>-->
                                                    
                                                
                                          
                                                    
                                                  <a class="btn btn-primary"  href="addCompanyAccount.php">Add Balance</a><br>
                                                    
                                                  
                                                   
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
                $("#datepicker").datepicker();
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
