<?php

    		require_once("../PHPMailerAutoload.php");
    		$mail=new PHPMailer();
    		$mail->IsSMTP();
    		$mail->SMTPDebug=0;
    		$mail->SMTPAuth=true;
    		$mail->SMTPSecure='ssl';
    		$mail->Host='pod103.unisonserver.com';
    		$mail->Port=465;
    		$mail->IsHTML(true);
    		$mail->Username="webadmin@nusinusoid.org";
    		$mail->Password="sinusoid2k17";
    		$mail->SetFrom("webadmin@nusinusoid.org","siNUsoid 2k17: WebAdmin");
    		$mail->Subject="Test Mail";
    		$mail->Body="Message from PHP Mailer";
    		$mail->AddAddress("akshat.khanna@st.niituniversity.in");
    		if(!$mail->Send())
            {echo "Mailer Error: ".$mail->ErrorInfo;
    			return 0;}
    		else
    		{
    			echo "Mail has been sent  successfully.";
    		      return 1;	
    		}
	    
	
?>