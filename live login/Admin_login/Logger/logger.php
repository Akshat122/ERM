<?php
    function logger($tag,$desc)
    {
        $logtime=date('Y-m-d H:i:s');
        include "db_con.php";
        $sql = "INSERT INTO logs(Log_Time,Tag,Description) VALUES('".$logtime."','".$tag."','".$desc."')";
        $result = mysqli_query($con,$sql);
        
    }
?>