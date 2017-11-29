<?php
$ID=$_POST["EMP_ID"];
$Task=$_POST["Work"];
$Deadline=$_POST["Deadline"];
//DATABASE CONNECTION VARIABLES
$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; // Mysql password
$db_name = "ermsyste_details"; // Database name

$conn = new mysqli($host, $username, $password, $db_name);
                                                if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }
    
                                          $sql = "Insert into notifications(Noti_from,Message,Noti_to,Deadline) VALUES('Admin','".$Task."','".$ID."','".$Deadline."')";
                                            if(mysqli_query($conn, $sql))
                                            {
                                                
                                                header("Location: Task.php?success=True");
                                            }
                                            else
                                            {header("Location: Task.php?success=false");}

                                                        mysqli_close($conn);

                                                                                          
?>