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

                            <section class="">  
                                <div class="col-xs-12">

                                    <section class="panel">
                                       <table class="table table-bordered" id="example" class="display">
                            <thead>
                                <tr class="success"><td>Job Title</td><td>Date Line</td><td>Action</td></tr>
                            </thead>

                          <!-- <tfoot>
                                <tr class="success"><td>Job Title</td><td>Published Date</td><td>Action</td></tr>
                            </tfoot>
                            <tbody>-->
                                
                                <?
                        
                        $query = "select * from jobs where company_id='$companyId'";
                        $queryExecute = mysqli_query($con,$query);
                        while ($row = mysqli_fetch_array($queryExecute)) {
                            ?>

                           <tr> 
                          <td><?php echo $row['jobs_title'] ?></td>
                          <td><?php echo $row['applicationdeadline'] ?></td>
                          
                          <td><a class="btn btn-shadow btn-info" href="viewJobCircularDetails.php?jobsId=<?php echo $row['id'] ?>">View Job Circular Details</a> /<a class="btn btn-shadow btn-info" href="viewCandidatesUi.php?jobsId=<?php echo $row['id'] ?>">Applied Candidates</a> /<a class="btn btn-shadow btn-success" href="EditJobsUi.php?jobsId=<?php echo $row['id'] ?>">Edit</a>/ <a class="btn btn-shadow btn-danger" href="action/DeleteJobsAction.php?jobsId=<?php echo $row['id'] ?>">Delete</a></td> 
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
        
    
    <script src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js"></script>
   <!-- <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>-->


    </body>
</html>
