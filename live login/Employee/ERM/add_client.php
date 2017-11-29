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

	<title>Add Client</title>

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
                    
					
                    
                    <li class="active">
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
			<nav class="navbar navbar-transparent navbar-absolute">
				<?php include"topbar.php";
                ?>
				
                
			</nav>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                   
  	                        <div class="card">
	                            
                             
	                            <div class="card-content">
	                                <form method="post" action="">
	                                    <div class="row">
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label" >Company's name</label>
													<input name="cname" id="cname" type="text" class="form-control" value="">
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating ">
													<label class="control-label">Client's Name</label>
													<input name="cuname" id="cuname" type="text" class="form-control" >
												</div>
	                                        </div>
	                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email address</label>
													<input name="eemail" id="eemail" type="email" class="form-control" >
												</div>
	                                        </div>
                                            <div class="col-md-4">
                                            	<div class="form-group label-floating">
													<label class="control-label">Mobile Number</label>
													<input name="mno" id="mno" type="text" class="form-control" >
												</div>
                                            </div>
                                            </div>
	                                    
                                        <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Address</label>
													<input name="add" id="add" type="text" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">City</label>
													<input name="cityn" id="cityn" type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Country</label>
													<input name="countryn" id="countryn" type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Postal Code</label>
													<input name="postaln" id="postaln" type="text" class="form-control" >
												</div>
	                                        </div>
	                                    </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Product's name</label>
                                                <input name="productn" id="productn" type="text" class="form-control">
                                            </div>
                                        </div>
                                                <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label><B>About The Product</B></label>
													<div class="form-group label-floating">
									    				<label class="control-label"> Write the Details of the product.</label>
								    					<textarea name="abt" id="abt" class="form-control" rows="5"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add Client</button>
	                
                         <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Product's name</label>
                                                <input name="UserName" id="UserName" type="text" class="form-control" style="visibility: hidden;" value="<?php echo $_SESSION['username'] ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
	                                </form>
	                            </div>
                
                                
                                
                                
                                
                                
        <?php
                            include"db_con.php"; 
                         $query="select empid from employees where UserName='".$_SESSION['username']."';"; 
                        $result = mysqli_query($conn,$query) or die(); 
                        $row = mysqli_fetch_object($result);
                        $id = $row->empid; 
                                              
                       
                                                       
                                                       
                                                       
                                                       
                                                       
                                                       
                                
                        if(isset($_POST["submit"])){
                       
                        $sql = "Insert into clients(company_name, client_name, email_ID,  mobile_no,address, city, country, postalcode,productname,aboutproduct,EmpID) VALUES('".$_POST["cname"]."','".$_POST["cuname"]."','".$_POST["eemail"]."','".$_POST["mno"]."','".$_POST["add"]."','".$_POST["cityn"]."','".$_POST["countryn"]."','".$_POST["postaln"]."','".$_POST["productn"]."','".$_POST["abt"]."','".$id."')";
                       
                            if(mysqli_query($conn, $sql))
                        {
                            echo "<script>$.notify({
                                // options
                                message: 'Client added successfully ' 
                            },{
                                // settings
                                type: 'success'
                            });</script>";
                        }
                        else
                        {
                            
                          
                            echo "<script>$.notify({
                                // options
                                message: 'Duplicate Entry for EmailID Detected... '  
                            },{
                                // settings
                                type: 'danger'
                            });</script>";}
                            echo mysqli_connect_error();
                            $conn->close();

                        }
                                                       //.mysqli_error($conn)

                                ?>
                        
                        
                        
                        
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
