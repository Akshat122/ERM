<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login System</title>
  
  
  <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
     
      <link rel="stylesheet" href="../css/style.css">
    <script src="../js/iziToast.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/iziToast.min.css">
    
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<style>
    
    #bodyMain{
        background-size: cover;
        background-image : url("../pexels-photo-64779.jpeg");
    }    
</style>
  
</head>

<body id="bodyMain">
  <div class="materialContainer">

<form class="form-signin" name="form1" method="post" action="checklogin.php">
   <div class="box">

      <div class="title">LOGIN</div>

     <div class="group">      
          <input type="text" required id="myusername">
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Name</label>
        </div>

       <div class="group">      
          <input type="password" required id="mypassword">
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Password</label>
        </div>
      <div class="button login">
         <button  name="Submit" id="submit"  type="submit" ><span>LOGIN</span> <i class="fa fa-check"></i></button>
      </div>

      <a href="" class="pass-forgot">Forgot your password?</a>

   </div>
      </form>
   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>
<script src="js/signup.js"></script>
      <div class="title">REGISTER</div>
<form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
      <div class="input">
         <label for="regname">Username</label>
         <input name="newuser" id="newuser" type="text" autofocus>
         <span class="spin"></span>
      </div>
       
        <div class="input">
         <label for="regpass">Email</label>
         <input name="email" id="email" type="text">
         <span class="spin"></span>
      </div>
       
      <div class="input">
         <label for="regpass">Password</label>
         <input name="password1" id="password1" type="password">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">Repeat Password</label>
         <input name="password2" id="password2" type="password">
         <span class="spin"></span>
      </div>

      <div class="button">
         <button name="RegSubmit1" id="Regsubmit1" type="submit"><span>Sign Up</span></button>
      </div>
       </form>

   </div>

</div>
    <div id="message"></div>

    <script src="js/index.js"></script>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>
     
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

<script>
    iziToast.show({
    title: 'Hey',
    message: 'Welcome user..',
         theme: 'light', // dark
    color: 'blue', // blue, red, green, yellow
         position: 'topRight',
         progressBarColor: 'red',
         
});

    </script>
</body>
</html>
