$(document).ready(function(){

  $("#Regsubmit1").click(function(){

    var username = $("#newuser").val();
    var password = $("#password1").val();
    var password2 = $("#password2").val();
    var email = $("#email").val();

    if((username == "") || (password == "") || (email == "")) {
      $("#message").html("<script> iziToast.show({title: 'info', message: 'Please enter username and password...(signup.js)', theme: 'light',color: 'yellow',          position: 'topRight', progressBarColor: 'red', });   </script>");
    }
    else {
      $.ajax({
        type: "POST",
        url: "createuser.php",
        data: "newuser="+username+"&password1="+password+"&password2="+password2+"&email="+email,
        success: function(html){

			var text = $(html).text();
			//Pulls hidden div that includes "true" in the success response
			var response = text.substr(text.length - 4);

          if(response == "true"){

			$("#message").html(html);

					$('#Regsubmit1').hide();
			}
		else {
			$("#message").html(html);
			$('#Regsubmit1').show();
			}
        },
        beforeSend: function()
        {
          $("#message").html("<script> iziToast.show({title: 'info', message: 'Registering  username and password... please wait for a while (signup.js)', theme: 'light',color: 'yellow',          position: 'topRight', progressBarColor: 'red', });   </script>")
        }
      });
    }
    return false;
  });
});
