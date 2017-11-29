<html>
    <body>
<?php
require 'includes/functions.php';
include_once 'config.php';

//Pull username, generate new ID and hash password
$newid = "EMP".substr(number_format(time() * rand(),0,'',''),0,6);
$newuser = $_POST['newuser'];
$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];
         echo "<script> iziToast.show({title: 'Error', message: 'Testing start ', theme: 'light',color: 'red',          position: 'topRight', progressBarColor: 'red', });   </script>";
        

    //Enables moderator verification (overrides user self-verification emails)
if (isset($admin_email)) {

    $newemail = $admin_email;

} else {

    $newemail = $_POST['email'];

}
//Validation rules
if ($pw1 != $pw2) {
    echo "Password field must match";
    echo "<script> iziToast.show({title: 'Error', message: 'Password field must match', theme: 'light',color: 'red',          position: 'topRight', progressBarColor: 'red', });   </script>";

} elseif (strlen($pw1) < 4) {
    echo "len 4";

    echo "<script> iziToast.show({title: 'Error', message: 'Password must atleast 4 character', theme: 'light',color: 'red',          position: 'topRight', progressBarColor: 'red', });   </script>";

} elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {
    echo "valid email";
    echo "<script> iziToast.show({title: 'Error', message: 'Enter a valid Email address', theme: 'light',color: 'red',          position: 'topRight', progressBarColor: 'red', });   </script>";

} else {
    //Validation passed
    if (isset($_POST['newuser']) && !empty(str_replace(' ', '', $_POST['newuser'])) && isset($_POST['password1']) && !empty(str_replace(' ', '', $_POST['password1']))) {

        //Tries inserting into database and add response to variable

        $a = new NewUserForm;

        $response = $a->createUser($newuser, $newid, $newemail, $newpw);

        //Success
        if ($response == 'true') {
            echo "Success";
            echo "<script>
            iziToast.show({title: 'info', message: 'To continue please verify your email id ', theme: 'light',color: 'green',          position: 'topRight', progressBarColor: 'red', });
            iziToast.show({title: 'info', message: 'You have been sucessfully registered..', theme: 'light',color: 'green',          position: 'topRight', progressBarColor: 'red', });             
            </script>";

            //Send verification email
            $m = new MailSender;
            $m->sendMail($newemail, $newuser, $newid,$pw1, 'Verify');

        } else {
            //Failure
            mySqlErrors($response);

        }
    } else {
        //Validation error from empty form variables
       
        echo "Error";
         echo "<script> iziToast.show({title: 'Error', message: 'An error occured on the form... Try again', theme: 'light',color: 'green',          position: 'topRight', progressBarColor: 'red', });   </script>";
    }
}; ?>
    </body>
    </html>
