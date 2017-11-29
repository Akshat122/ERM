<?php
require 'includes/functions.php';
require 'dbconf.php';
include_once 'config.php';

$email = $_POST['email'];

$pw = substr(number_format(time() * rand(),0,'',''),0,6);
$newpw = password_hash($pw, PASSWORD_DEFAULT);

$conn = mysqli_connect($host, $username, $password, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select username from members where email = '$email'";
$result = mysqli_query($conn, $sql);
    
if(mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $userName= $row["username"];
    }
} else {
    echo "Invalid Email address";
}
$newid= 123456789;
$sql = "UPDATE members SET password='$newpw' WHERE email = '$email'";

if (mysqli_query($conn, $sql)) {
            $m = new MailSender;
            $m->sendMail($email, $userName, $newid,$pw , 'Forget');
            echo "Email send";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);