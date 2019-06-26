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
        
//            $companyId = 4;
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

                            <section class="panel">  
                                <div class="col-xs-12">

                                    <section class="panel">
                                        <div class="panel-body">
                                            <h3>Company Profile</h3>
                                            
                                            <b>Company Name : </b> <br/><? echo $companyName ?>
                                            <br/><br/>
                                            <b>E-mail :</b><br/> <? echo $companyEmail ?>
                                            <br/><br/>
                                            <b>Mobile Number :</b><br/> <? echo $companyMobileNumber ?>
                                            <br/><br/>
                                            <b>Address :</b><br/> <? echo $companyAddress ?>
                                        </div>
                                    </section>

                                </div>

                            </section>
                            
                            
                                   <?PHP

    if(isset($_SESSION['postJob'])){
        echo $_SESSION['postJob'];
        unset($_SESSION['postJob']);
    }
       ?>
            
                            
                            
                            <section>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <a href="postAJobUi.php">
                                            <div class="panel-body">
                                                
                                                <div class="bio-desk">
                                                    <h4 class="red">Post A Job</h4>
                                                    <p>per post 500 </p>   
                                                </div>
                                                    
                                            </div>
                                                </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <a href="publishedJobsUi.php">
                                            <div class="panel-body">
                                             
                                                <div class="bio-desk">
                                                    <h4 class="terques">Published Jobs </h4>
                                                                                                
                                                </div>
                                                   
                                            </div>
                                                </a>
                                        </div>
                                    </div>
                                   <!-- <div class="col-lg-6">
                                        <div class="panel">
                                            <a href="jobRecycleBinUi.php">
                                            <div class="panel-body">
                                              
                                                <div class="bio-desk">
                                                    <h4 class="terques">Company Account </h4>
                                                    <p>Total Published : </p>                                                    
                                                </div>
                                                   
                                            </div>
                                                </a>
                                        </div>
                                    </div> -->
                                    
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
