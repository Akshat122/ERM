<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../login/main_login.php");}
?>

  <!--<link rel="stylesheet" href="jquery-ui/jquery-ui.min.css" type="text/css" media="screen" />
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
     
   <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
    <link type="text/css" href="jquery.ui.chatbox.css" rel="stylesheet" /> -->
 <script type="text/javascript" src="jquery.ui.chatbox.js"></script> 
<script>
  
</script>
    <script type="text/javascript">
      $(document).ready(function(){
          var box = null;
               
                  box = $("#chat_div").chatbox({id:"User", 
                                                user:{key : "value"},
                                                title : " chat Bot",
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
 

    <div id="chat_div">
    </div>
   

