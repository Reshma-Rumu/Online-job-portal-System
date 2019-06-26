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
            <section id="main-content-index">
                <section class="wrapper">


                    <!-- page start-->
                    <?
                    if (!isset($_SESSION['UserId'])) {
                        ?>
                        <div class="row state-overview">
                        <div class="col-lg-6">
                            <a href="ChoceUserTypeUi.php">
                                <section class="panel">
                                    <div class="symbol terques">
                                        <i class="icon-user"></i>
                                    </div>
                                    <div disable class="value">
                                        <h3>Login / Sign Up</h3>

                                    </div>
                                </section>
                            </a>
                        </div>
                            


             <div class="col-lg-6">
                            <a href="company.php">
                                <section class="panel">
                                    <div class="symbol yellow">
                                        <i class="icon-tasks"></i>
                                    </div>
                                    <div class="value">
                                        <h3>Post A Job</h3>

                                    </div>
                                </section>
                            </a>
                        </div>
                        
                        
                    </div> 
                     <?  
                    }
                    ?>
                    
                    <div class="row state-overview">

                        <header class="panel-heading"> <i class=" icon-list"></i> Job Categories </header>

                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=1">
                                <section class="panel">
                                    <div class="panel-body">
                                        Accounting / Finance
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=2">
                                <section class="panel">
                                    <div class="panel-body">
                                        Bank / Financial Institution
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=3">
                                <section class="panel">
                                    <div class="panel-body">
                                        Commercial / Supply Chain
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=4">
                                <section class="panel">
                                    <div class="panel-body">
                                        IT / Telecommunication
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=5">
                                <section class="panel">
                                    <div class="panel-body">
                                        Engineer / Architecture
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=6">
                                <section class="panel">
                                    <div class="panel-body">
                                        Garments / Textile
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=7">
                                <section class="panel">
                                    <div class="panel-body">
                                        HR / Org. Development
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=8">
                                <section class="panel">
                                    <div class="panel-body">
                                        Education / Training
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=9">
                                <section class="panel">
                                    <div class="panel-body">
                                        Marketing / Sales
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=10">
                                <section class="panel">
                                    <div class="panel-body">
                                        Support / Call Center
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=11">
                                <section class="panel">
                                    <div class="panel-body">
                                        Media / Event Management
                                    </div>
                                </section>
                            </a>
                        </div>
                        
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=13">
                                <section class="panel">
                                    <div class="panel-body">
                                        Design / Creative
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=14">
                                <section class="panel">
                                    <div class="panel-body">
                                        Electrician / Construction
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=15">
                                <section class="panel">
                                    <div class="panel-body">
                                        Production / Operation
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=16">
                                <section class="panel">
                                    <div class="panel-body">
                                       Hospital / Medical / Pharma
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=17">
                                <section class="panel">
                                    <div class="panel-body">
                                        Travel / Tourism
                                    </div>
                                </section>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=18">
                                <section class="panel">
                                    <div class="panel-body">
                                        NGO / Development
                                    </div>
                                </section>
                            </a>
                        </div>
                        
                        
                        <div class="col-lg-3">
                            <a href="jobsByCategoryUi.php?categoryId=21">
                                <section class="panel">
                                    <div class="panel-body">
                                        Data Entry / BPO
                                    </div>
                                </section>
                            </a>
                        </div>
                       
                        

                    </div>
                    
                    <!-- page end-->
                </section>
            </section>
            <!--main content end-->
            
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
