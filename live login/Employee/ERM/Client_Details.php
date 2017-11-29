<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../../login/main_login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-notify.js"></script>
    </head>

<body>

	<div class="wrapper">
	     <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a class="simple-text">
					Employee Panel
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            
                <ul class="nav">
	               
                    
                    <li >
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                
                    
                    <li>
	                    <a href="user.php">
	                        <i class="material-icons">accessibility</i>
	                        <p>Co-Workers</p>
	                    </a>
					</li>
                    
					
                    
                    <li>
							<a href="add_client.php">
								<i class="material-icons">person</i>
								<p>Add Client</p>
							</a>
					</li>
					
                    
                    <li class="active">
							<a href="Client_Details.php">
								<i class="material-icons">account_circle</i>
								<p>Client Details</p>
							</a>
					</li>
	               
                    
                    
                    
                    <!--
Dashboard
User Profile
Edit Profile
Add Client
Client Details
About Us
Notifications
Chat Bot

-->
                    
                    
	                <li>
	                    <a href="aboutus.php">
	                        <i class="material-icons">C</i>
	                        <p>About Us</p>
	                    </a>
	                </li>
	               <!--<li>
	                    <a href="Email.html">
	                        <i class="material-icons">person</i>
	                        <p>Send Email</p>
	                    </a>
					</li>
                    -->
	                <li>
	                    <a href="notifications.php">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>
                    
				
	            </ul>
                
                
	    	</div>
	    </div>

	    <div class="main-panel">
			
            
            <?php include"topbar.php" ?>
            
            
            
            
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Client details</h4>
	                                
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" style='font-size: 20px;'>
	                                    <thead class="text-primary">
	                                    	<th >Company Name</th>
	                                    	<th>Client Name</th>
	                                    	<th>EmailID</th>
											
                                            <th>Mobile_No</th>
                                            <th>Address</th>
                                             <th>PostalCode</th>
                                            <th>City</th>
                                            <th>Country</th>
                                            <th>Product</th>
                                            <th>About product</th>
                                           
                                            
	                                    </thead>
                                        
                                       
            
                                        
	                                    <tbody>
                                            
                                             <?php 
                                        include "db_con.php";
    $sql = "SELECT company_name, client_name, email_ID,  mobile_no,address, city, country, postalcode,productname,aboutproduct from clients"; 
                $result = $conn->query($sql);
                        
                        
                        if($result->num_rows>0)
                        {
                        
                        while($row = $result->fetch_assoc())
                        {
	                                         echo"<tr>
	                                        	<td  >".$row["company_name"]."</td>
	                                        	<td>".$row["client_name"]."</td>
	                                        	<td>".$row["email_ID"]."</td>
												
												<td>".$row["mobile_no"]."</td>
												<td>".$row["address"]."</td>
												
                                               <td>".$row["postalcode"]."</td> <td>".$row["city"]."</td>
												<td>".$row["country"]."</td>
												<td>".$row["productname"]."</td>
                                                <td>".$row["aboutproduct"]."</td>
	                                        </tr>
	                                      ";
                            
                        }
                        }
             else
                        {
                 
                 echo "<script>$.notify({
                                // options
                                message: 'No Clients Found ' 
                            },{
                                // settings
                                type: 'danger'
                            });</script>";
             }
	                                       ?>
                                        
                                        </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>

	                </div>
                    <?php  include "Test.php" ; ?> 
	            </div>
	        </div>

	        
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->

	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
