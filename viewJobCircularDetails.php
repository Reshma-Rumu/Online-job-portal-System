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
          <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row state-overview">
                       

                        <?
                        $jobsId = $_GET['jobsId'];
                        include 'database/db.php';
                        $query = "select * from jobs where id='$jobsId'";
                        $queryExecute = mysqli_query($con,$query);
                        while ($row = mysqli_fetch_array($queryExecute)) {
                            if ($row['jobnature'] == 1) {
                                $JobNature = "Full Time";
                            } elseif ($row['jobnature'] == 2) {
                                $JobNature = "Part Time";
                            } elseif ($row['jobnature'] == 3) {
                                $JobNature = "Contractual";
                            }



                            if ($row['joblocation'] == 1) {
                                $JobLocation = "Dhaka";
                            } elseif ($row['joblocation'] == 2) {
                                $JobLocation = "Chittagong";
                            } elseif ($row['joblocation'] == 3) {
                                $JobLocation = "Sylhet";
                            } elseif ($row['joblocation'] == 4) {
                                $JobLocation = "Khulna";
                            } elseif ($row['joblocation'] == 5) {
                                $JobLocation = "Barisal";
                            } elseif ($row['joblocation'] == 6) {
                                $JobLocation = "Mymensingh";
                            } elseif ($row['joblocation'] == 7) {
                                $JobLocation = "Rajshahi";
                            } elseif ($row['joblocation'] == 8) {
                                $JobLocation = "Overseas";
                            }





                            if ($row['job_category'] == 1) {
                                $JobCatagory = "Accounting / Finance";
                            } elseif ($row['job_category'] == 2) {
                                $JobCatagory = "Bank / Financial Institution";
                            } elseif ($row['job_category'] == 3) {
                                $JobCatagory = "Commercial / Supply Chain";
                            } elseif ($row['job_category'] == 4) {
                                $JobCatagory = "IT / Telecommunication";
                            } elseif ($row['job_category'] == 5) {
                                $JobCatagory = "Engineer / Architecture";
                            } elseif ($row['job_category'] == 6) {
                                $JobCatagory = "Garments / Textile";
                            } elseif ($row['job_category'] == 7) {
                                $JobCatagory = "HR / Org. Development";
                            } elseif ($row['job_category'] == 8) {
                                $JobCatagory = "Education / Training";
                            } elseif ($row['job_category'] == 9) {
                                $JobCatagory = "Marketing / Sales";
                            } elseif ($row['job_category'] == 10) {
                                $JobCatagory = "Support / Call Center";
                            } elseif ($row['job_category'] == 11) {
                                $JobCatagory = "Media / Event Management";
                            } elseif ($row['job_category'] == 12) {
                                $JobCatagory = "Admin";
                            } elseif ($row['job_category'] == 13) {
                                $JobCatagory = "Design / Creative";
                            } elseif ($row['job_category'] == 14) {
                                $JobCatagory = "Electrician / Construction";
                            } elseif ($row['job_category'] == 15) {
                                $JobCatagory = "Production / Operation";
                            } elseif ($row['job_category'] == 16) {
                                $JobCatagory = "Hospital / Medical / Pharma";
                            } elseif ($row['job_category'] == 17) {
                                $JobCatagory = "Travel / Tourism";
                            } elseif ($row['job_category'] == 18) {
                                $JobCatagory = "NGO / Development";
                            } elseif ($row['job_category'] == 19) {
                                $JobCatagory = "Beauty Care / Health";
                            } elseif ($row['job_category'] == 20) {
                                $JobCatagory = "Research / Consultancy";
                            } elseif ($row['job_category'] == 21) {
                                $JobCatagory = "Data Entry / BPO";
                            } elseif ($row['job_category'] == 22) {
                                $JobCatagory = "Security / Law";
                            } elseif ($row['job_category'] == 22) {
                                $JobCatagory = "Other";
                            }
                            ?>

                            <div class="col-lg-12">
                                <section class="panel">                                   
                                    <div class="panel-body">

                                        <h4>Job Title :</h4>
                                        <b><?php echo $row['jobs_title'] ?></b>

                                        <h4>Company Name :</h4>
                                        <b><?php echo $row['company_name'] ?></b>
                                    </div>                                      
                                </section>
                            </div>

                            <div class="col-lg-12">
                                <section class="panel">                                   
                                    <div class="panel-body">

                                        <h4>Job Summary :</h4><br/>

                                        <p>No. of Vacancies : <?php echo $row['no_of_vacancies'] ?></p>
                                        <p>Job Nature : <?php echo $JobNature ?></p>                                        
                                        <p>Published On : <?php echo $row['published_date'] ?></p>
                                        <p>Application Deadline : <?php echo $row['applicationdeadline'] ?></p>
                                        <p>Salary : <?php echo $row['salary'] ?></p>
                                        <p>Job Category : <?php echo $JobCatagory ?></p>
                                        <p>Job Location : <?php echo $JobLocation ?></p>

                                    </div>                                      
                                </section>
                            </div>

                            <div class="col-lg-12">
                                <section class="panel">                                   
                                    <div class="panel-body">

                                        <h4>Educational Requirements :</h4><br/>

                                        <?php echo $row['educationalrequirements'] ?>


                                    </div>                                      
                                </section>
                            </div>

                            <div class="col-lg-12">
                                <section class="panel">                                   
                                    <div class="panel-body">

                                        <h4>Job Description :</h4><br/>

                                        <?php echo $row['jobdescription'] ?>


                                    </div>                                      
                                </section>
                            </div>

                                    
                            <div class="col-lg-12">
                                <section class="panel">                                   
                                    <div class="panel-body">

                                        <h4>Additional Requirements :</h4><br/>

                                        <?php echo $row['additionaljobrequirements'] ?>


                                    </div>                                      
                                </section>
                            </div>


                            <div class="col-lg-12">
                                <section class="panel">                                   
                                    <div class="panel-body">

                                        <h4>Apply Instruction :</h4><br/>
                                        <?
                                        $companyId = $row['company_id'];
                                        
                                        $category = $row['job_category'];
                                        
                
                                        if (isset($_SESSION['UserId']) && !empty($_SESSION['UserId'])) {
                                         $ApplycationStatus = false;   
                                        $query = "select * from online_applications where jobs_id='$jobsId' and seeker_id='$seekerId'";
                                        $queryExecute = mysqli_query($con,$query);
                                        while ($row = mysqli_fetch_array($queryExecute)) {
                                            
                                                $ApplycationStatus = true;
                                          
                                        }
                                            if ($ApplycationStatus != true) {
                                                ?>
                                            <a href="action/applyOnlineAction.php?jobsId=<? echo $jobsId ?>&candidateId=<? echo $seekerId ?>&jobCategory=<? echo $category ?>&companyId=<? echo $companyId ?>" class="btn btn-success btn-lg btn-block" type="button">Apply Online</a>
                                            <?
                                                
                                            }
                                            
 else {
                                                echo 'Already Applyed';
 }
                                            
                                        } else {
                                            echo '<a href="login.php">Please login to apply this job</a>';
                                        }
                                        ?>
                                            
                                            
                                    </div>                                      
                                </section>
                            </div>

    <?
}
?>  

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