<!DOCTYPE html>
 <html lang="pt" class="no-js">
	<head>
	    <meta charset="SO-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<?php ini_set('default_charset','SO-8859-1');?>
		
		<title>Portfólio Fatima Carvalho Borges</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen">
		<link rel="stylesheet" type="text/css" href="lightbox.css" media="screen">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.lightbox-0.5.pack.js"></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/Desyrel_400.font.js"></script>
		
		<!-- Cufon text replacement -->
		<script type="text/javascript">
			$(document).ready(function(){
				Cufon.replace('#about .right ul li');
				Cufon.replace('h2', { textShadow: '0 2px rgba(0, 0, 0, 0.15)' });
				Cufon.replace('#social .right a', {hover:true});
				Cufon.replace('#work .left h3', {hover:true});
				Cufon.replace('h3', { textShadow: '0 2px rgba(0, 0, 0, 0.15)' });
				Cufon.replace('#contactinfo'), {hover:true};
			});
		</script>
		
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
			
			<!-- Site content -->

			<div id="content">
				<div id="about" class="page">
					<div class="left">
						<img src="images/author-photo.png" alt="photo">
					</div>
					<div class="right">
						<h2>E ai beleza? seja bem vindo ao meu site...</h2>
						<p>Este site eu desenvolvi para mostrar um pouco do meu trabalho com desenvolvimento e mídias sociais.
                            Sou formada em Administração de Empresas e Análise de Sistemas pela FIAP, entre outros cursos como Desenvolvimento de Jogos pela PUC - SP.
                            Já fiz parte das equipes de conceituadas empresas como IBM, Accenture e Portal dos Documentos como desenvolvedora. 
                            Atualmente estou cursando a formação de especialista em Marketing Digital da Escola de Marketing Digital.
                        </p>
						<h3>Minhas habilidades:</h3>
						<ul>
							<li><img src="images/icon-print.png" alt="Print Design">Brindes</li>
							<li><img src="images/icon-webdesign.png" alt="Web Design">Web Design</li>
							<li><img src="images/icon-development.png" alt="Development">Desenvolvimento</li>
						</ul>
					</div>
				</div>

				<div id="work" class="page">
					<div class="left">
						<img src="images/image-feature.jpg" alt="Projetos Futuros">
						<h3><a href="#">Projetos Futuros</a></h3>
						<p>Fábrica de brindes e de aplicativos ...</p>
					</div>
					<div class="right">
						<p>Abaixo alguns projetos que desenvolvi ao longo dos anos.</p>
						<h3>Desenvolvimento e Web Design:</h3>
						<ul id="work01">
							<li title="Site desenvolvido em Wordpress">
								<a href="images/image01.jpg"><img src="images/logo01.jpg" alt="Foco Ville"></a>           
                            </li>
							<li title="Site desenvolvido na linguagem php">
								<a href="images/image02.jpg"><img src="images/logo02.jpg" alt="Pedras Progresso"></a>
                            </li>
							<li title="Site desenvolvido na linguagem php">
								<a href="images/image03.jpg"><img src="images/logo03.jpg" alt="Girassol Limpezas"></a>
                            </li>
                            <li title="Sistema em desenvolvimento linguagem php e banco de dados mysql">
								<a href="images/image04.jpg"><img src="images/logo04.jpg" alt="Sistema de Estoque"></a>
                            </li>
						</ul>
						<h3>Marketing Digital:</h3>
						<ul id="work02">
							<li title="Anúncios e campanhas no Facebook Ads e Google Ads">
								<a href="images/image03.jpg"><img src="images/logo03.jpg" alt="Girassol Limpezas"></a>
                            </li>
							<li title="Anúncios e campanhas no Facebook Ads e Google Ads">
								<a href="images/image06.jpg"><img src="images/web02.jpg" alt="Revista Digital"></a>
                            </li>
						</ul>
					</div>
				</div>
	
				<div id="social" class="page">
					<div class="left">
						<p class="tweet-text">“Deem-me café, eu quero escrever”
							<br/><br/>
							<a href="https://www.pensador.com/ultimas_palavras_de_pensadores_famosos/">
                                https://www.pensador.com/ultimas_
							         palavras_de_pensadores_famosos/
                            </a>
						</p>
						<p class="tweet-meta"><a href="#">Olavo Bilac (1865 – 1918)</a></p>
					</div>
					<div class="right">
						<ul>
							<li class="facebook">
								<a href="https://www.facebook.com/facborges">
                                    <img src="images/icon-facebook.png" alt="facebook"> facebook
                                </a>
							</li>
							<li class="flickr">
                                <a href="https:///www.flickr.com/photos/facborges/">
                                    <img src="images/icon-flickr.png" alt="flickr"> flickr
                                </a>
                            </li>
							<li class="linkedin">
                                <a href="https://www.linkedin.com/in/fcborges/">
                                    <img src="images/icon-linkedin.png" alt="linkedin"> linkedin
                                </a>
                            </li>
							<li class="twitter">
                                <a href="https://twitter.com/FatimaCBorges">
                                    <img src="images/icon-twiiter2.png" alt="twitter"> twitter
                                </a>
                            </li>
							<li class="github">
                                <a href="https://github.com/fcborges/fborges.eti.br">
                                    <img src="images/icon-github.png" alt="github"> github
                                </a>
                            </li>
							<li class="instagram">
                                <a href="https://www.instagram.com/borgesfatimac/">
                                    <img src="images/icon-digg.png" alt="instagram"> instagram
                                </a>
                            </li>
						</ul>
					</div>
				</div>
	
				<div id="contact" class="page">
					<div class="left">
					<h3>Como entrar em contato comigo?</h3>
						<form method="post" action="emailenviado.php">
							<ul>
								<li class="msgname">
                                    <label for="nome">Nome: </label>
                                    <input type="text" name="nome" id="nome">
                                </li>
								<li>
                                    <label for="email">E-mail: </label>
                                    <input type="text" name="email" id="email">
                                </li>
								<li>
                                    <label for="mensagem">Message: </label>
                                    <textarea name="mensagem" id="mensagem" rows=2 cols=2></textarea>
                                </li>
								<li>
                                    <input class="send" type="submit" name="submit" value="Enviar">
                                </li>
							</ul>
						</form>
					</div>
					<div class="right">
						<p>
                            Você pode entrar em contato comigo através das mídias sociais, por e-mail ou pelo formulário abaixo.
                        </p>
						<div id="contactinfo">
							<p>Osasco - SP</p>
							<p>11 97713-9310</p>
							<p><a href="#">contato@fborges.eti.br</a></p>
						</div>
					</div>
				</div>
			</div>

			<div id="footer">
				<p>&copy; Copyright © 2019 <a href="http://www.f12digital.com.br/"> F12 Digital </a> Todos os direitos reservados </p>
			</div>
		</div>
	</body>
</html>
