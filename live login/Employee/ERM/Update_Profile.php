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

	<title>Update Profile</title>

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
                <a href="#" class="simple-text">
                    
                    <div class"mytext">Employee Panel</div>
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
	                   
                        <?php
                          include"db_con.php"; 
                         $query="select * from employees where UserName='".$_SESSION["username"]."';"; 
                        $result = mysqli_query($conn,$query) or die(); 
                        $row = mysqli_fetch_object($result);
                        if($result->num_rows >0)
                        {
                            $F_Name = $row->firstname;
                            $L_Name = $row->lastname;
                            $age = $row->age;
                            $dob = $row->dob;
                            $gender = $row->gender;
                            $mob= $row->mobileno;
                            $add =$row->address;
                            $city =$row->city;
                            $country=$row->country;
                            $postalcode = $row->postalcode;
                            $salary=$row->Salary;
                        
                        ?>
	                        <div class="card">
	                            
                                <div class="card-content">
	                                <form method="POST" action="Update_p.php">
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating ">
													<label class="control-label" >First Name</label>
													<input type="text" id="F_Name" name="F_Name" class="form-control" value="<?php echo $F_Name ?>">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating  ">
													<label class="control-label">Last Name</label>
													<input type="text" class="form-control" id="L_Name" name="L_Name" value="<?php echo $L_Name ?>" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Age</label>
													<input type="number" class="form-control" id="age" name="age" value="<?php echo $age ?>" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div>
													<label class="control-label">DOB</label>
													<input type="date" id="dob" name="dob" class="form-control" value="<?php echo $dob ?>" >
												</div>
	                                        </div>
	                                        
	                                    </div>
                                            
                                        
                                         
                                        <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Gender</label>
													
											
                                        
                                        
                                        
                                        
                                        <ul class="nav navbar-nav navbar-left">
							
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
								
                            <select name="Genders" id="Genders" style="width: 100px" value="<?php echo $gender ?>">
                                
                             <?php   
                                if($gender == "Male"){
                                echo'<option value="Female" style="font-family:courier; font-weight:Bold" name="sfemale" id="sfemale">Female</option>
                                <option value="Male" style="font-family:courier; font-weight:Bold" name="smale" id="smale" Selected>Male</option>
                                <option value="Other" style="font-family:courier; font-weight:Bold "  name="sother" id="sother">Other</option>
                                ';
                                }
                                
                               else if($gender == "Other"){
                                echo '<option value="Female" style="font-family:courier; font-weight:Bold" name="sfemale" id="sfemale"  >Female</option>
                                <option value="Male" style="font-family:courier; font-weight:Bold" name="smale" id="smale">Male</option>
                                <option value="Other" style="font-family:courier; font-weight:Bold "  name="sother" id="sother" Selected>Other</option>';
                                }
                                
                               else if($gender == "Female"){
                               echo  '<option value="Female" style="font-family:courier; font-weight:Bold" name="sfemale" id="sfemale" Selected>Female</option>
                                <option value="Male" style="font-family:courier; font-weight:Bold" name="smale" id="smale" >Male</option>
                                <option value="Other" style="font-family:courier; font-weight:Bold "  name="sother" id="sother">Other</option>';
                                }
                                
                             else {
                              echo'<option value="Female" style="font-family:courier; font-weight:Bold" name="sfemale" id="sfemale">Female</option>
                                <option value="Male" style="font-family:courier; font-weight:Bold" name="smale" id="smale" Selected>Male</option>
                                <option value="Other" style="font-family:courier; font-weight:Bold "  name="sother" id="sother">Other</option>
                                ';
                             }
                                ?>
                                
                                
                                
                                
                                
                                
                                
                                
                                    </select>
                                 
                                </li>
						
						</ul>
                                        	</div>
	                                   
                                        </div>
	                                    
                                    </div>    
                                        
                                       
                                        
                                        
                                        
                                        
                                        <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Mobileno.</label>
													<input type="text" id="mob" name="mob" class="form-control" value="<?php echo $mob ?>">
												</div>
	                                        </div>
	                                    </div>
                                        
                                        
                                        
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Address</label>
													<input type="text" id="add" name="add" class="form-control" value="<?php echo $add ?>">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">City</label>
													<input type="text" id="city" name="city" class="form-control" value="<?php echo $city ?>" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Country</label>
													<input type="text" id="con" name="con" class="form-control" value="<?php echo $country ?>" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Postal Code</label>
													<input type="text" name="PC" id="PC" class="form-control" value="<?php echo $postalcode ?>">
												</div>
	                                        </div>
	                                    </div>
                                    
	                                  <button type="submit" name="submit" class="btn btn-primary pull-right">Update Profile</button>
                                        
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                     <?php } 
                        else 
                        {
                            echo "<script>$.notify({
                                // options
                                message: 'Complete your profile first... ' 
                            },{
                                // settings
                                type: 'danger'
                            });</script>";
                        ?>
                                  <div class="card">
	                            
                                <div class="card-content">
	                                <form method="POST" action="Update_p.php">
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating ">
													<label class="control-label" >First Name</label>
													<input type="text" class="form-control" value="">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating  ">
													<label class="control-label">Last Name</label>
													<input type="text" class="form-control" value="" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Age</label>
													<input type="number" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div>
													<label class="control-label">DOB</label>
													<input type="date" class="form-control" >
												</div>
	                                        </div>
	                                        
	                                    </div>
                                            
                                        
                                         
                                        <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Gender</label>
													
											
                                        
                                        
                                        
                                        
                                        <ul class="nav navbar-nav navbar-left">
							
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
								
                            <select name="Genders" id="Genders" style="width: 100px">
                                   
                                <!--   <p class="control-label">Select</p>
                                   -->
                                
                                <option value="Male" style="font-family:courier; font-weight:Bold" name="smale" id="smale">Male</option>
                                   
                                <option value="Female" style="font-family:courier; font-weight:Bold" name="sfemale" id="sfemale">Female</option>
                                    <option value="Other" style="font-family:courier; font-weight:Bold "  name="sother" id="sother">Other</option>
                                       
                                
                                    </select>
                                    <!--    <p class="control-label">Select</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="">Male</a></li>
                                    <li><a href="">Female</a></li>
									<li><a href="">Other</a></li>
								</ul>-->
                                </li>
						
						</ul>
                                        	</div>
	                                   
                                        </div>
	                                    
                                    </div>    
                                        
                                       
                                        
                                        
                                        
                                        
                                        <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Mobileno.</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                    </div>
                                        
                                        
                                        
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Address</label>
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
													<input type="text" name="testii" id="testii" class="form-control" >
												</div>
	                                        </div>
	                                    </div>
                                        
                                        
                                        <!--
                                        
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Product's name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                                <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label><B>About The Product</B></label>
													<div class="form-group label-floating">
									    				<label class="control-label"> Write the Details of the product.</label>
								    					<textarea class="form-control" rows="5"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>-->
	                                    

	                                  <button type="submit" name="submit" class="btn btn-primary pull-right">Update Profile</button>
                                        
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>    
                                          
          
                                                
                        
                        <?php }?>
                       
						
                        <!--



 134<div class="col-md-8">

</div>
    254                    <div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="../assets/img/faces/client.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">Desisnation</h6>
    								<h4 class="card-title">Client's name</h4>
    								<p class="card-content">
    									Something about the client like personal details, hobbies...etc
    								</p>
    								<a href="#pablo" class="btn btn-primary btn-round">Follow</a>
    							</div>
    						</div>
		    			</div>
                        
                        -->
                        
                       
	                </div>
	            </div>
	        </div>

	       
	    </div>
	</div>
 <?php
        if(isset($_GET["success"]))
                if ($_GET["success"] == "True")
                    echo "<script>$.notify({
                                // options
                                message: 'Details Updated successfully ' 
                            },{
                                // settings
                                type: 'success'
                            });</script>";
                else
                      echo "<script>$.notify({
                                // options
                                message: 'Error Updating profile contact administrator '  
                            },{
                                // settings
                                type: 'danger'
                            });</script>";
    ?>
</body>

	<!--   Core JS Files   -->

	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	

	
	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
