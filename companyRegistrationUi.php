<!DOCTYPE html>
<html lang="en">
    <?php include 'content/head.php'; ?>

    <body>

        <section id="container" class="">
            <!--header start-->
            <?php include 'content/header.php'; ?>
            <!--header end-->
            <!--sidebar start-->
            
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Create account as a Company
                                </header>
                                <div class="panel-body">
                                    <div class="form">
                                        <form action="action/createCompanyAction.php" method="post" id="companySignupForm" class="cmxform form-horizontal tasi-form" novalidate="novalidate">
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="company_name">Company Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="company_name" id="company_name" class=" form-control">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="company_username">User Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="company_username" id="username" class="form-control ">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="password">Password</label>
                                                <div class="col-lg-10">
                                                    <input type="password" name="password" id="password" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="confirm_password">Confirm Password</label>
                                                <div class="col-lg-10">
                                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="company_email">E-mail</label>
                                                <div class="col-lg-10">
                                                    <input type="email" name="company_email" id="email" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="company_mobilenumber">Mobile Number</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="company_mobilenumber" id="email" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-lg-2" for="company_address">Address</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="company_address" id="company_address" class="form-control ">
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
                        </div>
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
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script src="js/respond.min.js" ></script>
        <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

        <!--common script for all pages-->
        <script src="js/common-scripts.js"></script>

        <!--script for this page-->
        <script src="js/form-validation-script.js"></script>


    </body>
</html>
