<?php 
include "db_con.php";
     echo "0 results";


$sql = "SELECT UserId, UserName, EmailId, PhoneNumber FROM employee";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "UserId: " . $row["UserId"]. " - Name: " . $row["UserName"]. " " . $row["EmailId"]."Ph nu".$row["PhoneNumber"]. "<br>";
    

       
   
    }

?>