<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ermsyste_details";

    date_default_timezone_set('Asia/Kolkata');

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>