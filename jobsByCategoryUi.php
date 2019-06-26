<!DOCTYPE html>
<html lang="en">
    <?php
    include 'content/head.php'; 
    ?>

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
                        

                        <?php
                        $categoryId = $_GET['categoryId'];
                        ?>
                        <header class="panel-heading"><i class=" icon-list"></i>
                        <?php
                        if ($categoryId == 1) {
                                $JobCatagory = "Accounting / Finance";
                            } elseif ($categoryId == 2) {
                                $JobCatagory = "Bank / Financial Institution";
                            } elseif ($categoryId == 3) {
                                $JobCatagory = "Commercial / Supply Chain";
                            } elseif ($categoryId == 4) {
                                $JobCatagory = "IT / Telecommunication";
                            } elseif ($categoryId == 5) {
                                $JobCatagory = "Engineer / Architecture";
                            } elseif ($categoryId == 6) {
                                $JobCatagory = "Garments / Textile";
                            } elseif ($categoryId == 7) {
                                $JobCatagory = "HR / Org. Development";
                            } elseif ($categoryId == 8) {
                                $JobCatagory = "Education / Training";
                            } elseif ($categoryId == 9) {
                                $JobCatagory = "Marketing / Sales";
                            } elseif ($categoryId == 10) {
                                $JobCatagory = "Support / Call Center";
                            } elseif ($categoryId == 11) {
                                $JobCatagory = "Media / Event Management";
                            } elseif ($categoryId == 12) {
                                $JobCatagory = "Admin";
                            } elseif ($categoryId == 13) {
                                $JobCatagory = "Design / Creative";
                            } elseif ($categoryId == 14) {
                                $JobCatagory = "Electrician / Construction";
                            } elseif ($categoryId == 15) {
                                $JobCatagory = "Production / Operation";
                            } elseif ($categoryId == 16) {
                                $JobCatagory = "Hospital / Medical / Pharma";
                            } elseif ($categoryId == 17) {
                                $JobCatagory = "Travel / Tourism";
                            } elseif ($categoryId == 18) {
                                $JobCatagory = "NGO / Development";
                            } elseif ($categoryId == 19) {
                                $JobCatagory = "Beauty Care / Health";
                            } elseif ($categoryId == 20) {
                                $JobCatagory = "Research / Consultancy";
                            } elseif ($categoryId == 21) {
                                $JobCatagory = "Data Entry / BPO";
                            } elseif ($categoryId == 22) {
                                $JobCatagory = "Security / Law";
                            } elseif ($categoryId == 22) {
                                $JobCatagory = "Other";
                            }
                            
                            echo $JobCatagory;

                        ?>
                        
                        </header>
                            <?php
                        include 'database/db.php';
                        $query = "select * from jobs where job_category='$categoryId'";
                        $queryExecute = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($queryExecute)) {
							
                           
                            if($row['jobnature'] == 1){
                            $JobNature = "Full Time";
                            
                            }
                            elseif ($row['jobnature'] == 2) {
                            $JobNature = "Part Time";
                        }
                        elseif ($row['jobnature'] == 3) {
                            $JobNature = "Contractual";
                        }
                        
                        
                        
                        if($row['joblocation'] == 1){
                            $JobLocation = "Dhaka";
                            
                            }
                            elseif ($row['joblocation'] == 2) {
                            $JobLocation = "Chittagong";
                        }
                        elseif ($row['joblocation'] == 3) {
                            $JobLocation = "Sylhet";
                        }
                        elseif ($row['joblocation'] == 4) {
                            $JobLocation = "Khulna";
                        }
                        elseif ($row['joblocation'] == 5) {
                            $JobLocation = "Barisal";
                        }
                        elseif ($row['joblocation'] == 6) {
                            $JobLocation = "Mymensingh";
                        }
                        elseif ($row['joblocation'] == 7) {
                            $JobLocation = "Rajshahi";
                        }
                        elseif ($row['joblocation'] == 8) {
                            $JobLocation = "Overseas";
                        }
                        
                            
                            ?>

                            <div class="col-lg-12">
                                <section class="panel">
                                    <a href="jobsViewUi.php?jobsId=<?php echo $row['id']; ?>">
                                    <div class="panel-body">
                                        
                                        <h4>Title : <?php echo $row['jobs_title'] ?></h4>
                                        Company Name : <?php echo $row['company_name']?>
                                        <br>
                                        Job Nature : <?php echo $JobNature ?>
                                        <br/>
                                       Location : <?php echo $JobLocation ?>
                                       <br/>
                                    
                                      
                                       <?php 
                                         
                                        $toDay=date("m/d/Y");
                                        $applicationDateline = date("m/d/Y");
                                        $applicationDateline = $row['applicationdeadline'];
                                         if ($toDay <= $applicationDateline){ 
                                       
                                        
                                       echo 'Dateline:' . $applicationDateline; 
                                         }
                                        else {
                                         echo 'Dateline:' . '<strike>' .$applicationDateline . '</strike>';
                                              }
                                                 
                                                 ?>
                                       
                                       
                                       <br/>
                                         
                                        
                                    </div>
                                       </a>
                                </section>
                            </div>


                            <?php
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
