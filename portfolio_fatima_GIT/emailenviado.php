<!DOCTYPE html>
 <html lang="pt" class="no-js">
	<head>
	    <meta charset="SO-utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<?php ini_set('default_charset','utf-8');?>
		
		<title>Portfólio Fatima Carvalho Borges</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen">
		<link rel="stylesheet" type="text/css" href="lightbox.css" media="screen">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.lightbox-0.5.pack.js"></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/Desyrel_400.font.js"></script>

		<!-- jQuery lightbox -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('#work .right a').lightBox();
			});
		</script>
		
		<!-- Navigation and Content effects -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.page').hide();
				$('#navigation li:first').addClass('active').show();
				$('.page:first').show();
				
				$('#navigation li').click(function(){
					$('#navigation li').removeClass('active');
					$(this).addClass('active');
					
					$('.page').hide();
					var activeTab = $(this).find('a').attr('href');
					$(activeTab).fadeIn('slow');
					return false;
				});
			});
		</script>

	</head>
	<body>
		<div id="pagewrap">
			
			<!-- Site header and navigation -->
			<div id="header">
				<ul id="navigation">
					<li><a class="about" href="#about"><img src="images/icon-about.png" alt="About"></a></li>
					<li><a class="work" href="#work">work</a></li>
					<li><a class="social" href="#social"><img src="images/icon-social.png" alt="Social"></a></li>
					<li><a class="contact" href="#contact"><img src="images/icon-contact.png" alt="Contact"></a></li>
				</ul>
			</div>
	
<?php
require "config/config.php"; //include config file

  if(isset($_POST['submit'])){
    $message=
        'Nome: '    .$_POST['nome'].'<br />		
         Email:  '  .$_POST['email'].'<br />        
         Menssagem:'.$_POST['mensagem'].'
        ';
     			
        require "class.phpmailer.php"; //include phpmailer class
                     
        $mail = new PHPMailer();  
        // Instantiate Class  
          
        // Set up SMTP  
       
        $mail->IsSMTP();                // Sets up a SMTP connection  
        $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
        $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
        //$mail->Host = "smtp.fborges.eti.br";
		$mail->Host = "smtp.gmail.com";			
        $mail->Port = 465;  //Gmail SMTP port
		$mail->SMTPDebug = 0;
        
        // Authentication  
        $mail->Username   = $senderEmail; // Your full Gmail address
        $mail->Password   = $senderPassword; // Your Gmail password
          
        // Compose
        $mail->SetFrom($_POST['email'], $_POST['nome']);
        $mail->AddReplyTo($_POST['email'], $_POST['nome']);
        $mail->Subject = "Site Portfolio";      // Subject (which isn't required)  
        $mail->MsgHTML($message);
		$mail->Body = 
			'Nome:          '.$_POST['nome'].' <br><br>
			 Email:         '.$_POST['email'].' <br><br>
			 Menssagem:     '.$_POST['mensagem'].' <br>
			';
			
        // Send To  
        $mail->AddAddress($receiverEmail, $receiverName); 
		$result = $mail->Send(); 
        echo '<script type="text/javascript">alert("Muito Obrigado! Email enviado com sucesso.");</script>';        
        unset($mail);
        //header("location: index.php");
        echo "<meta http-equiv=refresh content='1;URL=http://www.fborges.eti.br'>";	
		echo "E-mail enviado com sucesso";
      
  }  			
	
	
?>	
		
	<div id="footer">
				<p>&copy; Copyright © 2019 <a href="http://www.f12digital.com.br/"> F12 Digital </a> Todos os direitos reservados </p>
    </div>	
    </body>
</html>
