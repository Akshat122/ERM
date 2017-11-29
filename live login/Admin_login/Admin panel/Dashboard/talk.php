<?php
$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; // Mysql password
$db_name = "ermsyste_details"; // Database name

    
if(strtolower($_POST["msg"]) == strtolower("Akshat"))
        echo "Hmm he is the one who Made me with love .. He is a great guy";
else if(strtolower($_POST["msg"]) == strtolower("yash"))
        echo "Hmm he is the one who Made me with love .. He is a great guy";
else if(strtolower($_POST["msg"]) == strtolower("fayaz"))
        echo "Hmm he is the one who Made me with love .. He is a great guy";
else if(strtolower($_POST["msg"]) == strtolower("prateek"))
        echo "Hmm he is the one who Made me with love .. He is a great guy";
else if(strtolower($_POST["msg"]) == strtolower("Kundan"))
        echo "Hmm he is the one who Made me with love .. He is a great guy";
else if(strtolower($_POST["msg"]) == strtolower("heLLO"))
        echo "Hey there ...";
else if(strtolower($_POST["msg"]) == strtolower("hey"))
        echo "Hey there ...";
else if(strtolower($_POST["msg"]) == strtolower("MY NUMBER"))
        {
     $conn = new mysqli($host, $username, $password, $db_name);
                                                if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    $sql = "SELECT * FROM employees where UserName = '".$_POST['id']."';";
                                                    $result = mysqli_query($conn, $sql);
        
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                               
                                                                
                                                              echo 'Your number is '.$row["mobileno"];
                                                            }
                                                        } else {
                                                           echo "<script>setTimeout(function(){ $.Notification.notify('error','top right', 'No Records Found !!!', 'There are no Records in the following table!'); }, 100);

                                                            </script>";
                                                        }

                                                        mysqli_close($conn);

        }
else
    echo "Learning new things " .$_POST["id"]."  ";
?>
