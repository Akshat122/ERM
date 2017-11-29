 <?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../../login/main_login.php");
}

$F_Name=$_POST["F_Name"];
$L_Name=$_POST["L_Name"];
$age = $_POST["age"];
$dob=$_POST["dob"];
$Genders =$_POST["Genders"];
$mob =$_POST["mob"];
$add =$_POST["add"];
$city = $_POST["city"];
$con = $_POST["con"];
$PC = $_POST["PC"];
                     
                        include"db_con.php";       
                        if(isset($_POST["submit"])){
                           
                            $sql = "UPDATE employees SET firstname='".$F_Name."',lastname='".$L_Name."',age='".$age."',dob='".$dob."',gender='".$Genders."',mobileno='".$mob."',address='".$add."',city='".$city."',country='".$con."',postalcode='".$PC."' WHERE UserName = '".$_SESSION['username']."';";
                       
                            if(mysqli_query($conn, $sql))
                        {
                          header("location: Update_Profile.php?success=True");
                        }
                        else
                        {
                             header("location: Update_Profile.php?success=False");
                          
                           
                            $conn->close();

                        }
                        }
                        

                        

?>  