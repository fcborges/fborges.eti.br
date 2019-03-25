
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <!-- meta character set -->
    <!-- <meta charset="ISO-8859-1"> -->
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Girassol Limpezas</title>		
	<!-- Meta Description -->
    <meta name="description" content="Blue One Page Creative HTML5 Template">
    <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Muhammad Morshed">		
	<!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS	================================================== -->	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>		
	<!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- bootstrap.min -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
	<!-- bootstrap.min -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- bootstrap.min -->
    <link rel="stylesheet" href="css/owl.carousel.css">
	<!-- bootstrap.min -->
    <link rel="stylesheet" href="css/slit-slider.css">
	<!-- bootstrap.min -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
	<!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>		
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
</head>	
	
    <body id="body">
    <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header" >
		<div class="container"><a href="#body"><img src="img/girassol_fundo-transp.png" width="50" /></a></div>
    </header>  
	
<?php
require "config/config.php"; //include config file
// GOOGLE GOODNESS
  //ini_set('display_errors',1);  error_reporting(E_ALL);
  //ini_set("allow_url_fopen", true);
  if(isset($_POST['submit'])){
    $message=
        'Nome completo: '.$_POST['nome'].'<br />
		 Telefone: '.$_POST['telefone'].'<br />
         Email:  '.$_POST['email'].'<br /> 
		 Assunto: '.$_POST['assunto'].'<br /><br />         
         Menssagem:   '.$_POST['mensagem'].'
        ';
     			
        require "class.phpmailer.php"; //include phpmailer class
                     
        $mail = new PHPMailer();  
        // Instantiate Class  
          
        // Set up SMTP  
       
        $mail->IsSMTP();                // Sets up a SMTP connection  
        $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
        $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
        //$mail->Host = "smtp.girassollimpezas.com.br";
		$mail->Host = "smtp.gmail.com";			
        $mail->Port = 465;  //Gmail SMTP port
		$mail->SMTPDebug = 1;
        //$mail->Encoding = '8bit';
        
        // Authentication  
        $mail->Username   = $senderEmail; // Your full Gmail address
        $mail->Password   = $senderPassword; // Your Gmail password
          
        // Compose
        $mail->SetFrom($_POST['email'], $_POST['nome']);
        $mail->AddReplyTo($_POST['email'], $_POST['nome']);
        $mail->Subject = "Site girassol";      // Subject (which isn't required)  
        $mail->MsgHTML($message);
		$mail->Body = 
			'Nome completo: '.$_POST['nome'].' <br><br>
			 Telefone:      '.$_POST['telefone'].'</a> <br><br>
			 Assunto:       '.$_POST['assunto'].' <br><br>
			 Email:         '.$_POST['email'].' <br><br>
			 Menssagem:     '.$_POST['mensagem'].' <br>
			';
			
        // Send To  
        $mail->AddAddress($receiverEmail, $receiverName); // Where to send it - Recipient
        //$mail->AddAddress($receiverEmail2, $receiverName2); // Where to send it - Recipient
		//$mail->AddAddress($receiverEmail3, $receiverName3);
		$result = $mail->Send();        // Send!  
        //echo '<script type="text/javascript">alert("Muito Obrigado! Email enviado com sucesso.");</script>'; // Redireciona para uma página de obrigado.
		
	if($mail->Send()){	
		//echo "<meta http-equiv=refresh content='5;URL=http://localhost/site_girassol_oficial/#contact'>";	
		echo "<meta http-equiv=refresh content='1;URL=https://www.girassollimpezas.com.br'>";	
		echo "E-mail enviado com sucesso";
	}else{
	echo "<meta http-equiv=refresh content='1;URL=https://www.girassollimpezas.com.br'>";
		echo "Erro no envio do e-mail: " . $mail->ErrorInfo;
	}
        unset($mail);
      
  }  			
	//echo "<meta http-equiv=refresh content='1;URL=www.girassolterceirizacao.com.br>";
	echo '<script type="text/javascript">alert("Muito Obrigado! Email enviado com sucesso.");</script>';
	//header("location: index.php");
?>	
		
	<head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Girassol Limpezas</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico">

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation style="background-color:#ffc800b5;"
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header" >
            <div class="container">
			<a href="#body"><img src="img/girassol_fundo-transp.png" width="50" /></a>
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo 
					<h1 class="navbar-brand">
						<a href="#body"><img src="img/girassol_fundo-transp.png" width="50" /></a>
					</h1>
					 /logo -->
                </div>
			
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->	
		<main class="site-content" role="main">	
	
        <!--
        End Home SliderEnd
        ==================================== -->
		
			<!-- Contact section -->
			<section id="contact" style="margin-top: 100px;">
				<div class="container">
					<div class="row">					
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<h4 style="color:red;">E-mail enviado com sucesso, em breve entraremos em contato!</h4>
						</div>						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contatos</h3>						
								<p><i class="fa fa-pencil"></i>Rua Agostinho Gomes, 2502<span>04206-001</span> <span>Ipiranga</span><span>São Paulo</span></p><br>
								<p><i class="fa fa-phone"></i>(11) 4237-7768 </p>
								<p><img src="img/logo_whats.png" alt="whatsapp" width="20">( 11) 98219-6451 </p>
								<p><i class="fa fa-envelope"></i>contato@girassollimpezas.com.br</p>
								<!--
								<p><a href="https://wa.me/5511982196451?text=Ola%20Posso%20ajudar?"><img src="img/logo_whats.png" alt="whatsapp" width="30" ></a><a href="https://wa.me/5511982196451?text=Ola%20Posso%20ajudar?">+55 11 98219-6451</p>
								-->
							</address>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>			
    </body>
</html>
