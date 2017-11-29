<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../login/main_login.php");
}

require "dbconf_details.php";
?>
<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
       

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>ERM </title>

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>
    
      <script language="JavaScript" type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script language="JavaScript" type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/detect.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/fastclick.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/jquery.blockUI.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/waves.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/wow.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/jquery.nicescroll.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/jquery.scrollTo.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../plugins/switchery/switchery.min.js"></script>

     <!-- Notification js -->
        <script language="JavaScript" type="text/javascript" src="../plugins/notifyjs/dist/notify.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../plugins/notifications/notify-metro.js"></script>
    
        <!-- Custom main Js -->
        <script language="JavaScript" type="text/javascript" src="assets/js/jquery.core.js"></script>
        <script language="JavaScript" type="text/javascript" src="assets/js/jquery.app.js"></script>
    </head>


    <body class="fixed-left">

             <?php require"Top_bar.php" ?>
            <?php require"Side_bar.php" ?>




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
                                    <h4 class="page-title">Grid System</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Minton</a></li>
                                        <li class="breadcrumb-item"><a href="#">Components</a></li>
                                        <li class="breadcrumb-item active">Grid System</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h1 class="text-center">Client Table</h1>
                                   
                                <!--    <p class="text-muted m-b-20 font-13">
                                        See how aspects of the Bootstrap grid system work across multiple devices with a handy table.
                                    </p> -->
                                
                                    
                                    <table class="table table-bordered table-striped table-responsive">
                                        <thead>
                                        <tr>
                                            <th class="text-center">
                                                Name<br>
                                            </th>
                                            <th class="text-center">
                                                Company's Name<br>
                                            </th>
                                            <th class="text-center">
                                                Email<br>
                                            </th>
                                            <th class="text-center">
                                                age<br>
                                            </th>
                                            <th class="text-center">
                                                Mobile No.<br>
                                            </th>
                                            <th class="text-center">
                                                Address<br>
                                            </th>
                                            <th class="text-center">
                                                City<br>
                                            </th>
                                            <th class="test-center">
                                                Country<br>
                                            </th>
                                            <th class="text-center">
                                                Postal Code<br>
                                            </th>
                                        </thead>
                                        <?php
                                             $conn = new mysqli($host, $username, $password, $db_name);
                                                if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    $sql = "SELECT * FROM clients;";
                                                    $result = mysqli_query($conn, $sql);
        
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                               
                                                                
                                                              echo ' <tr>
                                                                    <th class="text-nowrap" scope="row">'.$row["client_name"].'</th>
                                                                    <td>'.$row["company_name"].'</td>
                                                                    <td>'.$row["email_ID"].'</td>
                                                                    <td>'.$row["age"].'</td>
                                                                    <td>'.$row["mobile_no"].'</td>
                                                                    <td>'.$row["address"].'</td>
                                                                    <td>'.$row["city"].'</td>
                                                                    <td>'.$row["country"].'</td>
                                                                    <td>'.$row["postalcode"].'</td>
                                                                   

                                                                </tr>';
                                                            }
                                                        } else {
                                                           echo "<script>setTimeout(function(){ $.Notification.notify('error','top right', 'No Records Found !!!', 'There are no Records in the following table!'); }, 100);

                                                            </script>";
                                                        }

                                                        mysqli_close($conn);

                                                ?>
                                            <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

                <footer class="footer text-right">
                    2017 © Minton.
                </footer>
                
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


                <?php  include "Test.php" ; ?>  

        
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
       

    </body>

<!-- Mirrored from coderthemes.com/minton/new_light/components-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 17:44:28 GMT -->
</html>