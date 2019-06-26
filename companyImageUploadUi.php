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

                            <section class="panel">  
                                <div class="panel-body bio-graph-info">
                                    <h1>Upload Company Logo</h1>

                                    <?

                                    function isMobile() {
                                        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
                                    }

                                    if (isMobile()) {
                                        ?>
                                        <div class="form">
                                            <form action="action/companyImageUploadAction.php" method="POST" id="signupForm" enctype="multipart/form-data" class="cmxform form-horizontal tasi-form" novalidate="novalidate">
                                                <div class="form-group last">
                                                    <label class="control-label col-md-3">Image Upload</label>
                                                    <div class="col-md-9">
                                                        <div data-provides="fileupload" class="fileupload fileupload-new">
                                                            <input type="file" name="photo" />
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button type="submit" name="submit" class="btn btn-danger">Save</button>
                                                        <button type="button" class="btn btn-default">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <?
                                    } else {
                                        ?>
                                        <div class="form">
                                            <form action="action/companyImageUploadAction.php" method="POST" id="signupForm" enctype="multipart/form-data" class="cmxform form-horizontal tasi-form" novalidate="novalidate">
                                                <div class="form-group last">
                                                    <label class="control-label col-md-3">Image Upload</label>
                                                    <div class="col-md-9">
                                                        <div data-provides="fileupload" class="fileupload fileupload-new">
                                                            <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                                                                <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=upload+image">
                                                            </div>
                                                            <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                                            <div>
                                                                <span class="btn btn-white btn-file">
                                                                    <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                                                    <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                                    <input type="file" name="photo" class="default">
                                                                </span>
                                                                <a data-dismiss="fileupload" class="btn btn-danger fileupload-exists" href="#"><i class="icon-trash"></i> Remove</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>                                              


                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button type="submit" name="submit" class="btn btn-danger">Save</button>
                                                        <button type="button" class="btn btn-default">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>



                                        <?
                                    }
                                    ?>


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
