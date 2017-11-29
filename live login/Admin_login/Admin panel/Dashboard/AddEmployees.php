<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../login/main_login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Administrator</title>

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../plugins/morris/morris.css">
        <link rel="stylesheet" href="../../css/iziToast.min.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="assets/js/modernizr.min.js"></script>
        <script src="../../js/iziToast.min.js"></script>
        
    </head>


    <body class="fixed-left">
        
             <?php require"Top_bar.php" ?>
<?php require"Side_bar.php" ?>

            <!-- Left Sidebar End -->




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Welcome !</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Minton</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                      
                        <!-- end row -->
                       

                        <div class="row">
                            <div class="col-lg-12 ">
                        		<div class="card-box">
                                    <h1 style="text-align: center;" >Add New Employees</h1><br>
                        			<form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php" >
                                      <div class="input">
                                         <label for="regname">Username</label>
                                         <input name="newuser" class="form-control" id="newuser" type="text" autofocus>
                                         <span class="spin"></span>
                                      </div>

                                        <div class="input">
                                         <label for="regpass">Email</label>
                                         <input name="email" id="email" class="form-control" type="text">
                                         <span class="spin"></span>
                                      </div>

                                      <div class="input">
                                         <label for="regpass">Password</label>
                                         <input name="password1" id="password1" class="form-control" type="password">
                                         <span class="spin"></span>
                                      </div>

                                      <div class="input">
                                         <label for="reregpass">Repeat Password</label>
                                         <input name="password2" id="password2" class="form-control" type="password">
                                         <span class="spin"></span>
                                      </div>
                                        <br>
                                     
                                         <button name="RegSubmit1" id="Regsubmit1" style="margin-left: 20px;" class="btn btn-success" type="submit" ><span>Add Employee</span> </button>
                                        
                                           <button name="Pass" id="Pass" type="button" onclick="pass();" style="margin-left: 20px;" class="btn btn-info" ><span>Generate password</span></button>
                                        
                                              <button name="reset" id="reset" type="reset" style="margin-left: 20px;"  class="btn btn-danger" ><span>reset</span></button>
                                         </form>
                                      
                                        <div class="button">
                                        
                                      </div>
                                       
                        		</div>

                            </div>

                           <script>
                              function pass(){
                                 $pass=Math.random().toString(36).slice(-8);
                                  password1.value=$pass;
                                  password2.value=$pass;
                               }
                            </script>
                        <!-- end row -->
                            <div id="message"></div>


                       
                        <!-- end row -->


                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

                <footer class="footer text-right">
                    2017 © ERM system.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
        
        <!-- Counter Up  -->
        <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
         <script src="signup.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Page js  -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

       
    </body>

</html>