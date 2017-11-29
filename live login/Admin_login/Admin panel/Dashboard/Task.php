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
                                    <h1 class="text-center">Assign Task</h1>
                                     
                                            <div class=" row" id="Select" name="Select">
                                          
                                                <label class="col-2 col-form-label">Employee</label>
                                        <div class="btn-group">
                                           <form id="emp" name="emp"> 
                                       <select id="EmpName" name="EmpName" class="col-sm-12  form-control" >
                                            
                                            <?php 
                                            require "dbconf_details.php";
                                                $conn = new mysqli($host, $username, $password, $db_name);
                                                if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    $sql = "SELECT UserName FROM employees;";
                                                    $result = mysqli_query($conn, $sql);
        
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                               
                                                                
                                                              echo ' <option>'.$row["UserName"].'</option>';
                                                                   
                                                            }
                                                        } else {
                                                           echo '<option>First Add Employees</option>';
                                                        }

                                                        mysqli_close($conn);

                                                ?>
                                         </select>
                                              
                                            </form> 
                                             <button style="margin-left: 61px;     border-radius: 8px" class="btn btn-danger waves-effect waves-light btn-m m-b-5" onclick="emp.submit()"  type="submit" >Get Employee ID</button>
                                   </div>
                                    </div>
                                <br>
                                       <form method="POST" action="AddNoti.php" id="Task_form" name="Task_form"> 
                                            <div class="form-group row">
                                                        <label class="col-2 col-form-label">EmpNo.</label>
                                                        <div class="col-10">
                                                            <?php
    

                                                        if (isset($_GET['EmpName'])){
                                                        //DATABASE CONNECTION VARIABLES


                                                        $host = "localhost"; // Host name
                                                        $username = "root"; // Mysql username
                                                        $password = ""; // Mysql password
                                                        $db_name = "ermsyste_details"; // Database name
                                                        $UserName=$_GET["EmpName"];

                                                        $conn = new mysqli($host, $username, $password, $db_name);
                                                if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }
    
                                         
                                                    $sql = "SELECT * FROM employees where UserName = '".$UserName."';";
                                                    $result = mysqli_query($conn, $sql);
        
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                               
                                                                
                                                         //     return = $row["empid"];
                                                               // echo "<script>alert('Testing')</script>";
                                                               echo ' <input class="form-control" type="text" name="EMP_ID" id="EMP_ID" value="'.$row["empid"].'" >';
                                                                echo '<style>
                                                                #Select{
                                                                    visibility: hidden;
                                                                
                                                                }
                                                                </style>';

                                                            }
                                                        } else {
                                                                echo '<input class="form-control" type="text" name="EMP_ID" id="EMP_ID" required >';
                                                        }

                                                        mysqli_close($conn);
                                                                        }

                                                                        ?>
                                                           
                                                        </div>
                                                    </div> 
                                                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Assign Task</label>
                                                        <div class="col-10">
                                                            <textarea class="form-control" rows="5" name="Work" id="Work" required></textarea>
                                                        </div>
                                                    </div>
                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Deadline</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="date" name="Deadline" id="Deadline" required>
                                                        </div>
                                                    </div>  
                                         <button class="btn btn-success waves-effect waves-light btn-lg" type="submit" id="sub" name="sub">Assign Task</button>
                                         <button style="margin-left : 30px;"  class="btn btn-warning waves-effect waves-light btn-lg m-b-5" type="reset" >Clear</button>
                                            <button style="margin-left : 30px;"  class="btn btn-danger waves-effect waves-light btn-lg m-b-5"  onclick='window.location="Task.php";'>Reset form</button>
                                    </form>
                                    
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

            <?php
                if(isset($_GET["success"]))
                {
                    if($_GET["success"]=="True")
                    {
                        echo "<script>setTimeout(function(){ $.Notification.notify('success','top right', 'Task Assign', 'Task has been successfully assigned to the employee'); }, 100);</script>";
                    }
                    if($_GET["success"]=="False")
                    {
                        echo "<script>setTimeout(function(){ $.Notification.notify('error','top right', 'Error Found', 'There was an Error in assigning the task'); }, 100);</script>";
                    }
                }
        ?>
            

        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
       

    </body>

<!-- Mirrored from coderthemes.com/minton/new_light/components-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 17:44:28 GMT -->
</html>