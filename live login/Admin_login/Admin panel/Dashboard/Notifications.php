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

    
     <!-- Plugins  -->
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
                                    <h1 class="text-center">Notifications</h1>
                                   
                                <!--    <p class="text-muted m-b-20 font-13">
                                        See how aspects of the Bootstrap grid system work across multiple devices with a handy table.
                                    </p> -->
                                
                                   
                                    <table class="table table-bordered table-striped table-responsive">
                                        <thead>
                                        <tr>
                                            <th class="text-center">
                                                S/N<br>
                                            </th>
                                            <th class="text-center">
                                                Notification<br>
                                            </th>
                                            <th class="text-center">
                                                From<br>
                                            </th><th class="text-center">
                                                Time<br>
                                            </th>
                                                                                        
                                        </thead>
                                        <?php
                                            $SN=0;
                                             $conn = new mysqli($host, $username, $password, $db_name);
                                                if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    $sql = "SELECT * FROM Notifications where Noti_to ='Admin';";
                                                    $result = mysqli_query($conn, $sql);
        
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                               
                                                                
                                                              echo ' <tr>
                                                                    <td>'.$SN.'</td>
                                                                    <td>'.$row["Message"].'</td>
                                                                    <td>'.$row["Noti_from"].'</td>
                                                                    <td>'.$row["TimeStamp"].'</td>
                                                                    </tr>';
                                                                $SN++;
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


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="">
                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                        <li class="nav-item">
                            <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="messages-2">

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
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

    </body>

<!-- Mirrored from coderthemes.com/minton/new_light/components-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 17:44:28 GMT -->
</html>