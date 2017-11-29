$(document).ready(function () {
    "use strict";
    $("#submit").click(function () {

        var username = $("#myusername").val(), password = $("#mypassword").val();

        if ((username === "") || (password === "")) {
            $("#message").html("<script> iziToast.show({title: 'info', message: 'Enter proper username and password...',theme: 'light',color: 'yellow',          position: 'topRight', progressBarColor: 'red', });   </script>");
        } else {
            $.ajax({
                type: "POST",
                url: "checklogin.php",
                data: "myusername=" + username + "&mypassword=" + password,
                dataType: 'JSON',
                success: function (html) {
                    //console.log(html.response + ' ' + html.username);
                    if (html.response === 'true') {
                        //location.assign("../index.php");
                       location.reload();
                        return html.username;
                    } else {
                        $("#message").html(html.response);
                    }
                },
                error: function (textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                },
                beforeSend: function () {
                    $("#message").html("<script> iziToast.show({title: 'info', message: 'Validating username and password...',theme: 'light',color: 'yellow',          position: 'topRight', progressBarColor: 'red', });   </script>");
                }
            });
        }
        return false;
    });
});
