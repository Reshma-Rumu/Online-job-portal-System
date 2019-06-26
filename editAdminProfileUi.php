<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];
    include 'content/head.php';
    ?>

    <body>

        <section id="container" class="">
            <!--header start-->
            <?php
            include 'content/header.php';
            include 'content/adminSubMenu.php';
            include 'database/db.php';
            $query = "select * from admin where admin_id='$companyId'";
            $queryExecute = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($queryExecute)) {

                $userType = $row['user_type'];

                $adminName = $row['name'];
                $companyUserName = $row['username'];
                $adminPassword = $row['password'];
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

                            <section class="panel">  
                                <div class="col-xs-12">

                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="form">
                                                <form action="action/editAdminProfileAction.php" method="post" id="companySignupForm" class="cmxform form-horizontal tasi-form" novalidate="novalidate">
                                                    <div class="form-group ">
                                                        <label class="control-label col-lg-2" for="name">Admin Name</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" name="name" value="<? echo $name ?>" id="name" class=" form-control">
                                                        </div>
                                                    </div>                                                    


                                                    <div class="form-group ">
                                                        <label class="control-label col-lg-2" for="confirm_password">Password</label>
                                                        <div class="col-lg-10">
                                                            <input type="password" name="confirm_password" value="<? echo $adminPassword ?>" id="confirm_password" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label col-lg-2" for="company_email">E-mail</label>
                                                        <div class="col-lg-10">
                                                            <input type="email" name="company_email" value="<? echo $companyEmail ?>" id="email" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label col-lg-2" for="company_mobilenumber">Mobile Number</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" name="company_mobilenumber" value="<? echo $companyMobileNumber ?>" id="email" class="form-control ">
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
