<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'pod103.unisonserver.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'webmaster@ermsystem.xyz';                 // SMTP username
$mail->Password = 'ermsystem@1234';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('WebTest@ermsystem.xyz', 'WebTest');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('akshat.khanna@st.niituniversity.in');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<br> <head>

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
    <span style="font-weight: bold;">Thank you for joining the Twist beta waitlist!</span>
    </p>
    <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">
            Twist is the communication app for teams who want to create a calmer, more organized, more productive workplace.
    </p>
    <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">
            We’ll send you an invite to get started soon!
    </p>
    <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">
            Have questions about the Beta? We’d love to help! Just hit reply :)
    </p>
    <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; margin: 45px 0 0; ;">
        Our Best, <br> 
    <span style="font-weight: bold;;">Hugo and the Twist team</span>
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
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}