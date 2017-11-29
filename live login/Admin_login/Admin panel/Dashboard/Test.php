

    <link rel="stylesheet" href="chat/jquery-ui/jquery-ui.min.css" type="text/css" media="screen" />
   <!-- <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>-->
      
   <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
    <link type="text/css" href="chat/jquery-ui/jquery.ui.chatbox.css" rel="stylesheet" />
    <script type="text/javascript" src="chat/jquery.ui.chatbox.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          var box = null;
          
                        $('#chat_div').css('position', 'absolute');
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
 

    <div id="chat_div">
    </div>
   

