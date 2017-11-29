<?php
class MailSender
{
   public function sendMail($email, $user, $id ,$pw1, $type)
    {
        require 'scripts/PHPMailer/PHPMailerAutoload.php';
        include 'config.php';

        $finishedtext = $active_email;

        // ADD $_SERVER['SERVER_PORT'] TO $verifyurl STRING AFTER $_SERVER['SERVER_NAME'] FOR DEV URLS USING PORTS OTHER THAN 80
        // substr() trims "createuser.php" off of the current URL and replaces with verifyuser.php
        // Can pass 1 (verified) or 0 (unverified/blocked) into url for "v" parameter
        $verifyurl = substr($base_url . $_SERVER['PHP_SELF'], 0, -strlen(basename($_SERVER['PHP_SELF']))) . "verifyuser.php?v=1&uid=" . $id;

        // Create a new PHPMailer object
        // ADD sendmail_path = "env -i /usr/sbin/sendmail -t -i" to php.ini on UNIX servers
        $mail = new PHPMailer;
        $mail->isHTML(true);
        $mail->CharSet = "text/html; charset=UTF-8;";
        $mail->WordWrap = 80;
        $mail->setFrom($from_email, $from_name);
        $mail->AddReplyTo($from_email, $from_name);
        /****
        * Set who the message is to be sent to
        * CAN BE SET TO addAddress(youremail@website.com, 'Your Name') FOR PRIVATE USER APPROVAL BY MODERATOR
        * SET TO addAddress($email, $user) FOR USER SELF-VERIFICATION
        *****/
        $mail->addAddress($email, $user);

        //Sets message body content based on type (verification or confirmation)
        if ($type == 'Verify') {

            //Set the subject line
            $mail->Subject = $user . ' Account Verification';

            //Set the body of the message
            $mail->Body = '<div style="background-color:#fff;margin:0 auto 0 auto;padding:30px 0 30px 0;color:#4f565d;font-size:13px;line-height:20px;font-family:"Helvetica Neue",Arial,sans-serif;text-align:left;">
    <center>
      <table style="width:550px;text-align:center">
        <tbody>
          <tr>
            
          </tr>
          <tr>
            <td colspan="2" style="padding:30px 0;">
              <p style="color:#1d2227;line-height:28px;font-size:22px;margin:12px 10px 20px 10px;font-weight:400;"> Hi '.$user.", it's great to meet you.</p>".
              '<p style="margin:0 10px 10px 10px;padding:0;">'."We'd like to make sure we got your email address right.</p>
              <p>".'<p>Your one time login password is <strong >'.$pw1.'</strong></p>'.'<p>Make sure to change your password after your 1st login</p>'.
                '<a style="display:inline-block;text-decoration:none;padding:15px 20px;background-color:#2baaed;border:1px solid #2baaed;border-radius:3px;color:#FFF;font-weight:bold;" href="'.$verifyurl.'" target="_blank">'."Yes, it's me – let's get started</a>
              </p>
            </td>
          </tr>
          <tr>".
            '<td colspan="2" style="padding:30px 0 0 0;border-top:1px solid #e9edee;color:#9b9fa5">
              If you have any questions you can contact us at <a style="color:#666d74;text-decoration:none;" href="mailto:webadmin@ermsystem.xyz" target="_blank">webadmin@ermsystem.xyz</a>
            </td>
          </tr>
        </tbody>
      </table>
    </center>
  </div>';

            $mail->AltBody  =  $verifymsg . $verifyurl;

        } elseif ($type == 'Active') {

            //Set the subject line
            $mail->Subject = 'ERMsystem Account Created!';

            //Set the body of the message
            $mail->Body ='<br> <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Confirmed, you’re on the Twist beta waitlist!</title>

        <style type="text/css">
            html,
            body {
                margin: 0 auto !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
            }
             {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }
            div[style*="margin: 16px 0"] {
                margin: 0 !important;
            }
            table,
            td {
                mso-table-lspace: 0pt !important;
                mso-table-rspace: 0pt !important;
            }

            
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
                table-layout: fixed !important;
                margin: 0 auto !important;
            }

            
            img {
                line-height: 100%;
                outline: none;
                text-decoration: none;
                
                -ms-interpolation-mode: bicubic;
                
                border: 0;
               
                max-width: 100%;
                height: auto;
                
                vertical-align: middle;
            }

           
            .yshortcuts a {
                border-bottom: none !important;
            }

            
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }

            
            @media screen and (min-width: 600px) {
                .ios-responsive-grid {
                    display: -webkit-box !important;
                    display: flex !important;
                }
               
                .ios-responsive-grid__unit  {
                    float: left;
                }
            }

            

        </style>

       
      
        <style type="text/css">

            
            .button__td,
            .button__a {
                transition: all 100ms ease;
            }

            .button__td:hover,
            .button__a:hover {
                background: #1ab77b !important;
            }

            @media screen and (max-width: 599px) {

.tw-card { padding: 20px !important; }
.tw-h1 { font-size: 22px !important; }


                .mobile-hidden {
                    display: none !important;
                }

                .mobile-d-block {
                    display: block !important;
                }

                  .mobile-w-full {
                    width: 100% !important;
                }

                .mobile-m-h-auto {
                    margin: 0 auto !important;
                }

                
                .mobile-p-0 {
                    padding: 0 !important;
                }

                .mobile-p-t-0 {
                    padding-top: 0 !important;
                }

               
                .mobile-img-fluid {
                    max-width: 100% !important;
                    width: 100% !important;
                    height: auto !important;
                }
            }

        </style>
    </head>
 <body style="background: #ffffff; height: 100% !important; margin: 0 auto !important; padding: 0 !important; width: 100% !important; ;">
  <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all;">
  </div>
<table cellpadding="0" cellspacing="0" style="background: #f2f2f2; border: 0; border-radius: 0; width: 100%;">
        <tbody><tr>
            <td align="center" class="" style="padding: 0 20px;">

                <table cellpadding="0" cellspacing="0" style="background: #f2f2f2; border: 0; border-radius: 0;">
                    <tbody><tr>
                        <td align="center" class="" style="width: 600px;">

    <table cellpadding="0" cellspacing="0" style="background: #ffffff; border: 0; border-radius: 4px; width: 100%;">
        <tbody><tr>
            <td align="center" class="tw-card" style="padding: 20px 50px;">
    <table cellpadding="0" cellspacing="0" dir="ltr" style="border: 0; width: 100%;">

        <tbody><tr>
            <td class="" style="padding: 20px 0; text-align: center; ;">
        <img alt="" class=" " src="https://static.twistapp.com/eee278cf8d8222ad8c36e3fdfeeafbf5.png" style="border: 0; height: auto; max-width: 100%; vertical-align: middle; ;" width="337">
            </td>
        </tr>

    </tbody></table>
    <table cellpadding="0" cellspacing="0" dir="ltr" style="border: 0; width: 100%;">

        <tbody><tr>
            <td class="" style="padding: 20px 0; text-align: left; color: #474747; font-family: sans-serif;;">
    <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">
    <span style="font-weight: bold;">Thank you '.$user.' for Registering on ERMsystem</span>
    </p>
    <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">
            ERM system is a platform for the employees to work togather in more organized, more productive workplace.
    </p>
    <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">
            Have questions about the Beta? We’d love to help! Just hit reply :)
    </p>
    <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; margin: 45px 0 0; ;">
        Our Best, <br> 
    <span style="font-weight: bold;;">Team ERMsystem</span>
    </p>

            </td>
        </tr>

    </tbody></table>
        </td>
        </tr>
    </tbody></table>

                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody></table>';
            $mail->AltBody  =  $active_email . $signin_url;

        } elseif ($type == 'Forget') {
            
            $mail->Subject = $user . ' Forgot your password ??';
            
            $mail->Body = '<div style="background-color:#fff;margin:0 auto 0 auto;padding:30px 0 30px 0;color:#4f565d;font-size:13px;line-height:20px;font-family:"Helvetica Neue",Arial,sans-serif;text-align:left;">
                <center>
                  <table style="width:550px;text-align:center">
                    <tbody>
                      <tr>

                      </tr>
                      <tr>
                        <td colspan="2" style="padding:30px 0;">
                          <p style="color:#1d2227;line-height:28px;font-size:22px;margin:12px 10px 20px 10px;font-weight:400;"> Hi '.$user.", it's great to meet you again.</p>".
                          '<p style="margin:0 10px 10px 10px;padding:0;">'."We'd like to make sure your account is in right hands.</p>
                          <p>".'<p>Your new login password is <strong >'.$pw1.'</strong></p>'.'<p>Make sure to change your password after successfull login</p>
                          
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" style="padding:30px 0 0 0;border-top:1px solid #e9edee;color:#9b9fa5">
                          If you have any questions you can contact us at <a style="color:#666d74;text-decoration:none;" href="mailto:webadmin@ermsystem.xyz" target="_blank">webadmin@ermsystem.xyz</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </center>
              </div>';

          
            
        };
       

        //SMTP Settings
        if ($mailServerType == 'smtp') {

            $mail->IsSMTP(); //Enable SMTP
            $mail->SMTPAuth = true; //SMTP Authentication
            $mail->Host = $smtp_server; //SMTP Host
            //Defaults: Non-Encrypted = 25, SSL = 465, TLS = 587
            $mail->SMTPSecure = $smtp_security; // Sets the prefix to the server
            $mail->Port = $smtp_port; //SMTP Port
            //SMTP user auth
            $mail->Username = $smtp_user; //SMTP Username
            $mail->Password = $smtp_pw; //SMTP Password
            //********************
            $mail->SMTPDebug = 0; //Set to 0 to disable debugging (for production)

        }

        try {

            $mail->Send();

        } catch (phpmailerException $e) {

            echo $e->errorMessage();// Error messages from PHPMailer

        } catch (Exception $e) {

            echo $e->getMessage();// Something else

        }
    }
}
