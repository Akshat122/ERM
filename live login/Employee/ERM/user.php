<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
error_reporting(E_ALL ^ E_NOTICE); 
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../../login/main_login.php");
}
?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Co-Workers</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a  class="simple-text">
					EMPLOYEE PANEL

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
	                
                    
                    <li class="active">
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
                        include 'db_con.php';
                        ?>  
                        <?php  include "Test.php" ; ?>  
      <?php 
                $sql = "SELECT * from employees"; 
                $result = $conn->query($sql);
                        
                        
                        if($result->num_rows>0)
                        {
                        
                        while($row = $result->fetch_assoc())
                        {
                        echo "
                        <div class=\"col-md-4\">
    						<div class=\"card card-profile\">
    							<div class=\"card-avatar\">
    								<a href=\"#pablo\">
    									<img class=\"img\" src=\"../assets/img/faces/".$row["image_URL"]."\" />
    								</a>
    							</div>

    							<div class=\"content\">
    								<h6 class=\"category text-gray\">   ".$row["empid"]."   </h6>
    								<h4 class=\"card-title\">
                                    ".$row["firstname"]." ".$row["lastname"]."
                                    
                                    </h4>
                                    <h4>" .$row["mobileno"]. "</h4>
    								<p class=\"card-content\">
    				   	".$row["address"]."				</p>
    								
    							</div>
    						</div>
		    			</div>
                        
                        ";
                        
                        
                        }
                            
                        }
                        
                        else
                        {
                            echo "<script>$.notify({
                                // options
                                message: 'No Employees Found ' 
                            },{
                                // settings
                                type: 'danger'
                            });</script>";
                                                    }
                        
          ?>            
                    </div>  
                  
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
	



	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
