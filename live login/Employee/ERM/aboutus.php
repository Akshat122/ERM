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

	<title>Company Details</title>

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
					
                    
                    <li>
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
                    
                    
	                <li class="active">
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
			<?php include"topbar.php";
            ?>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-13">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
                                    <h3 class="title"; style="text-align:center; font-family: century schoolbook"> <strong><em>About Us</em></strong></h3>
									
	                            </div>
	                            <div class="card-content">
	                                <form>
	                                    <div class="row">
	                                        <!--<div class="col-md-11">
								            <div class="form-group label-floating"; style="text-align:center">
                                                    <label class="control-label"; style="color: deepskyblue	"> <strong><em>Company Name</em></strong></label>
                                                    <input type="text" class="form-control">
												</div>-->
                                                <div class="header">
                                                    <h1 style="text-align: center; color: black; font-family: century schoolbook; font-size: 30px"><strong><em>Company Name & Logo</em></strong></h1>
                                             
											    </div>
                                                <div class="header">
                                                    <h1 style="text-align: center; color: black; font-family: century schoolbook; font-size: 30px"><strong><em>Owner Of The Company</em></strong></h1>
											    </div>
                                                <div class="header">
                                                    <h1 style="text-align: center; color: black; font-family: century schoolbook; font-size: 30px"><strong><em>Contact Information</em></strong></h1>
											    </div>
                                                <div class="header">
                                                    <h1 style="text-align: center; color: black; font-family: century schoolbook; font-size: 30px"><strong><em>Website Of The Company</em></strong></h1>
											    </div>
                                                <div class="header">
                                                    <h1 style="text-align: center; color: black; font-family: century schoolbook; font-size: 30px"><strong><em>Email-id Of The Company</em></strong></h1>
											    </div
                                                <div class="header">
                                                    
                                                    <h1 style="text-align: left; color: black; font-family: century schoolbook; font-size: 25px;margin-left: 15px" ><strong><em>About The Creators:-</em></strong></h1>
                                                </div>
                                                    <p>
                                                        <ul>
                                                            <li style="font-size: 20px; font-family: century schoolbook; color: dodgerblue">
                                                                <strong><em>Akshat Khanna</em></strong></li>
                                                            <li style="font-size: 20px; font-family: century schoolbook; color: dodgerblue"> 
                                                                <strong><em>Yash Jain</em></strong></li> 
                                                            <li style="font-size: 20px; font-family: century schoolbook; color: dodgerblue">
                                                                <strong><em>Fayaz Maknojia</em></strong></li>
                                                            <li style="font-size: 20px; font-family: century schoolbook; color: dodgerblue">
                                                                <strong><em>Kundan Dewangan</em></strong></li>
                                                            <li style="font-size: 20px; font-family: century schoolbook; color: dodgerblue">
                                                                <strong><em>Prateek Jha</em></strong> </li>
                                                        </ul>
                                            
                                                    </p> 
                                                    <div class="header">
                                                    <h1 style="text-align: left; color: black; font-family: century schoolbook; font-size: 25px"><strong><em>For Reporting Bug Or Any Issues:-</em></strong></h1>
                                                </div>
                                                    <p>
                                                        <ul>
                                                            <li style="font-size: 20px; font-family: century schoolbook; color: dodgerblue">
                                                                <strong><em>Name:</em></strong></li>
                                                            <li style="font-size: 20px; font-family: century schoolbook; color: dodgerblue"> 
                                                                <strong><em>Contact No.:</em></strong></li> 
                                                            <li style="font-size: 20px; font-family: century schoolbook; color: dodgerblue">
                                                                <strong><em>Email-id:</em></strong></li>
                                                        </ul>
                                            
                                                    </p> 
                                            
                                        
                                                    
                                            
                                            
	                                       
	                                        <!--<div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Username</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													
													<input type="email" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Fist Name</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Last Name</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Adress</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">City</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Country</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Postal Code</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>About Me</label>
													<div class="form-group label-floating">
									    				<label class="control-label"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
								    					<textarea class="form-control" rows="5"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>-->
	                        </div>
	                    </div>
						
	                </div>
	            </div>
	        </div>

	        
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
