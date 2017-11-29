<!DOCTYPE html>
<html>
  <head>
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
    <meta charset="UTF-8">
    <title>Verify User</title>
  </head>
  <body >
<?php
require 'includes/functions.php';
include 'config.php';

//Pulls variables from url. Can pass 1 (verified) or 0 (unverified/blocked) into url
$uid = $_GET['uid'];
$verify = $_GET['v'];

$e = new SelectEmail;
$eresult = $e->emailPull($uid);

$email = $eresult['email'];
$username = $eresult['username'];

$v = new Verify;

if (isset($uid) && !empty(str_replace(' ', '', $uid)) && isset($verify) && !empty(str_replace(' ', '', $verify))) {

    //Updates the verify column on user
    $vresponse = $v->verifyUser($uid, $verify);

    //Success
    if ($vresponse == 'true') {
        echo  '<div style="position:fixed; left: 50%;  top: 50%;   ">
        <img src="images/tick.gif" style="position:fixed; left: 50%;  top:  50%;  margin-left: -100px;     margin-top:  -150px;">
        <h1 style="position:fixed; left: 45%;  top:  90%;  margin-left: -100px; margin-top: -150px; color: green;     font-family: cursive; ">Verification successful</h1>
        </div>';
       // echo $activemsg;
        
        //Send verification email
        $m = new MailSender;
        $pw1="";
        $m->sendMail($email, $username, $uid, $pw1, 'Active');
    } else {
        //Echoes error from MySQL
        echo $vresponse;
    }
} else {
    //Validation error from empty form variables
    echo 'An error occurred... click <a href="index.php">here</a> to go back.';
};

?>
</body>
</html>
