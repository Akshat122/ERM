<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../../login/main_login.php");
}
?><!-- The following line is essential for the "position: fixed" property to work correctly in IE -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>jquery.ui.chatbox</title>
    <link rel="stylesheet" href="jquery-ui/jquery-ui.min.css" type="text/css" media="screen" />
   <!--<script
  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>-->
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
    <link type="text/css" href="jquery.ui.chatbox.css" rel="stylesheet" />
    <script type="text/javascript" src="jquery.ui.chatbox.js"></script>
     <script type="text/javascript">
      $(document).ready(function(){
          var box = null;
          
              
                  box = $("#chat_div").chatbox({id:"<?php echo $_SESSION['username'] ?>", 
                                                user:{key : "value"},
                                                title : " ERM BOT...",
                                                messageSent : function(id, user, msg) {
                                                  //  $("#log").append(id + " said: " + msg + "<br/>");
                                                   $("#chat_div").chatbox("option", "boxManager").addMsg(id, msg);
                                                    $.ajax({ //Process the form using $.ajax()
                                                        type      : 'POST', //Method type
                                                        url       : 'talk.php', //Your form processing file URL
                                                        data      : {id:id,msg:msg}, //Forms name
                                                        dataType  : 'text',
                                                        success   : function(data) {
                                                                           $("#chat_div").chatbox("option", "boxManager").addMsg("BOT", data);//If successful, than throw a success message
                                                                            
                                                                        }
                                                    });
                                                }});
              
          
                                            });
    </script>
  </head>
  <body>
   
    <div id="chat_div">
    </div>
    <hr />
    <div id="log">
    </div>
  </body>
</html>
