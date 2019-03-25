<?php
//header('Content-Type: text/html; charset=UTF-8');
require "config/config.php"; //include config file
// GOOGLE GOODNESS
  ini_set('display_errors',1);  error_reporting(E_ALL);
  ini_set("allow_url_fopen", true);
  if(isset($_POST['submit'])){
    $message=
        'Nome completo: '.$_POST['fullname'];
			
            require "/class.phpmailer.php"; //include phpmailer class
            
              
            // Instantiate Class  
            $mail = new PHPMailer();  
              
            // Set up SMTP  
            $utf8 = utf8_encode($mail);
            $mail->Charset = $utf8;
            $mail->IsSMTP();                // Sets up a SMTP connection  
            $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
            $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
            $mail->Host = "mail.gmail.com"; //Gmail SMTP server address
            $mail->Port = 587;  //Gmail SMTP port
			$mail->SMTPDebug = 1;
            //$mail->Encoding = '8bit';
            
            // Authentication  
            $mail->Username   = $senderEmail; // Your full Gmail address
            $mail->Password   = $senderPassword; // Your Gmail password
              
            // Compose
            $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
            $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
            $mail->Subject = "Site girassol";      // Subject (which isn't required)  
            $mail->MsgHTML($message);
			$mail->Body = 'Nome completo: '.$_POST['fullname'].' <br><br>
			Tamanho da Empresa: '.$_POST['subject'].' <br><br>
			Telefone/Whatsapp: <a href=https://api.whatsapp.com/send?phone=55'.$_POST['phone'].'>'.$_POST['phone'].'</a> <br><br>
			Nome da Empresa: '.$_POST['businessname'].' <br><br>
      Email: '.$_POST['emailid'].' <br><br>
			Menssagem:   '.$_POST['comments'].' <br>
			';
            // Send To  
            $mail->AddAddress($receiverEmail, $receiverName); // Where to send it - Recipient
            $mail->AddAddress($receiverEmail2, $receiverName2); // Where to send it - Recipient
            $result = $mail->Send();        // Send!  
            //echo '<script type="text/javascript">alert("Muito Obrigado! Email enviado com sucesso.");</script>'; // Redireciona para uma página de obrigado.
			
	if($mail->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $mail->ErrorInfo;
	}
            
			//echo "<meta http-equiv=refresh content='1;URL=https://lucioesilva.com'>";

           // unset($mail);
      
  }


?>