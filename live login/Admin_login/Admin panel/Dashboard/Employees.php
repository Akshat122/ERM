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
<?php
                                                $conn = new mysqli($host, $username, $password, $db_name);
                                                if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }
                                                    
                                                    $i=1;
                                                    $sql = "SELECT * FROM employees;";
                                                    $result = mysqli_query($conn, $sql);
                                                    $total =mysqli_num_rows($result);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            echo '<div class="row">';
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                               
                                                                
                                                              
                                                            echo ' <div class="col-sm-4 col-lg-3 col-xs-12">
                                                                            <div class="card m-b-20">
                                                                                <img class="card-img-top img-fluid" src="User_Profile/'.$row["image_URL"].'" alt="Card image cap">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">'.$row["firstname"].' '.$row["lastname"].'</h5>
                                                                                    <p class="card-text">
                                                                                    UserName : '.$row["UserName"].'<br>
                                                                                    Emp ID :<strong> '.$row["empid"].'</strong><br>
                                                                                    Age : '.$row["age"].'<br>
                                                                                    D.O.B : '.$row["dob"].'<br>
                                                                                    Gender : '.$row["gender"].'<br>
                                                                                    Mobile No : '.$row["mobileno"].'<br>
                                                                                    Address : '.$row["address"].'<br>
                                                                                    City : '.$row["city"].'<br>
                                                                                    Country : '.$row["country"].'<br>
                                                                                    Postal Code : '.$row["postalcode"].'<br>
                                                                                    Status : ';
                                                                                        if($row["status"] == 1)
                                                                                                    echo '<strong style="color: green;">ONLINE</strong>';
                                                                                                else
                                                                                                    echo '<strong style="color: red;">OFFLINE</strong>';
                                                                                    
                                                                                    echo '<br>
                                                                                    Salary : '.$row["Salary"].'<br></p>
                                                                                </div>
                                                                            </div>

                                                                        </div>';
                                                                if($i == 0)
                                                                {
                                                                    
                                                                }
                                                               else if($i%4==0 || $i==$total)
                                                                {
                                                                    echo "</div>";
                                                                    echo '<div class="row">';
                                                                   
                                                                }
                                                                $i++;
                                                            }
                                                        } else {
                                                           echo "<script>setTimeout(function(){ $.Notification.notify('error','top right', 'No Records Found !!!', 'There are no Records in the following table!'); }, 100);

                                                            </script>";
                                                        }

                                                        mysqli_close($conn);
                            
                ?>       

            </div>
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
       

    </body>

</html>