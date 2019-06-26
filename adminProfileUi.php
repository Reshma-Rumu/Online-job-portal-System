<!DOCTYPE html>
<html lang="en">
    
    <?php 
    session_start();
    echo $companyId = $_SESSION["c-o+m*p4a.n5y-I*d"];
    include 'content/head.php';    
    ?>

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
            
            $query = "select * from admin where admin_id='$companyId'";
            $queryExecute = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($queryExecute)) {
                
                $userType = $row['user_type'];
     
                $companyName = $row['name'];               
             $companyEmail = $row['email'];
                $companyMobileNumber = $row['mobile_no'];
                
                
                if (!isset($row['admin_logo'])) {

                    $adminLogo = 'Null';
                } else {
                    $adminLogo = $row['admin_logo'];
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
                                            <h3>Admin Profile</h3>
                                            
                                            <b>Admin Name : </b> <br/><? echo    $companyName ?>
                                            <br/><br/>
                                            <b>E-mail :</b><br/> <? echo $companyEmail ?>
                                            <br/><br/>
                                            <b>Mobile Number :</b><br/> <? echo $companyMobileNumber ?>
                                            <br/><br/>
                                            
                                        </div>
                                    </section>

                                </div>

                            </section>
                            
                            <section>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <a href="viewJobSeeker.php">
                                            <div class="panel-body">
                                                
                                                <div class="bio-desk">
                                                    <h4 class="red">View JobSeeker List</h4>
                                                    
                                                </div>
                                                    
                                            </div>
                                                </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <a href="viewCompany.php">
                                            <div class="panel-body">
                                             
                                                <div class="bio-desk">
                                                    <h4 class="terques">View Company List </h4>
                                                                                                       
                                                </div>
                                                   
                                            </div>
                                                </a>
                                        </div>
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


    </body>
</html>
