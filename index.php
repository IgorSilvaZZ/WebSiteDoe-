	<!DOCTYPE html>
	<html lang="pt-br" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Doe+</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		 
			<!--CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">				
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/hexagons.min.css">			
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/estilo.css">
		</head>
<body>

<?php session_start(); ?>
<?php
if(isset($_SESSION["nomeOng"])) {
   header("Location: CadastroOngs/examples/dashboard.php"); 
  }

?>

<!-- SEÇÃO DO INICIO DA PÁGINA-->
<section class="banner-area" id="home" >

<!-- COMEÇO DO MENU/CABEÇALHO-->
	<header class="default-header" style="background-image: url(img/conteudo/bg-map.png)">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">

				<a class="navbar-brand" href="#home">
					<img src="img/logos/logo.png" alt="">
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="lnr lnr-menu"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li><a href="#home">Início</a></li>
						<li><a href="#service">Trajetóra</a></li>
						<!-- <li><a href="#app">Apresentação</a></li>				 -->
						
						<li><a href="#footer">Informações</a></li>
						<li><a href="CadastroOngs/index.php">LOGIN</a></li>									
					</ul>
				</div>		

			</div>
		</nav>
	</header>
<!-- FINAL DO MENU/CABEÇALHO -->

<!-- BANNER COM ACESSO A AREA DE LOGIN E CASDASTRO -->
				<div class="container">
					<div class="row justify-content-end fullscreen align-items-center">
						<div class="col-lg-6 col-md-12 banner-left">
								<h1 class="text-white">
									Fazer o bem nunca foi tão fácil!
								</h1>
								<p class="mx-auto text-white  mt-20 mb-40">
								Um aplicativo para doações moderno e de fácil usabilidade<br>pensado para sua Ong.
							</p>
								<a href="CadastroOngs/index.php" class="text-uppercase header-btn ">Faça parte!</a>
						</div>
						<div class="col-lg-6 col-md-12 no-padding banner-right">
							<img class="img-fluid" src="img/conteudo/header-img.png" alt="">
						</div>
					</div>
				</div>
<!-- FINAL DO BANNER COM ACESSO A AREA DE LOGIN E CASDASTRO -->

</section>
<!-- FINAL SEÇÃO DO INICIO DA PÁGINA -->	

<!-- COMEÇO DA SEÇÃO DA TRAJETÓRIA/HISTÓRIA -->
<section class="cat-area section-gap" id="service" style="background-image: url(img/conteudo/bg-map.png" >
	<div class="container" >
<!-- TÍTULO -->
			<div class="row d-flex justify-content-center" >
				<div class="menu-content pb-60 col-lg-8" >
					<div class="title text-center" >
						<h1 class="mb-10">História do aplicativo</h1>
					</div>
				</div>
			</div>	
<!-- TÍTULO -->

<!-- SUBTITULOS -->
<div class="row">
	<div class="col-lg-4">	
		<div class="single-cat d-flex flex-column">
			<a href="#service" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-dropbox-inv"><span class="lnr lnr-bubble"></span></span></a>
			<h4 class="mb-20" style="margin-top: 23px;">Ideia para criar</h4>
			<p>
             A ideia surgiu pela dificuldade de Ong's menores conseguirem arrecadações, e isso acontecia muito por conta da falta de divulgação.
			</p>
		</div>															
	</div>
	<div class="col-lg-4">	
		<div class="single-cat">
				<a href="#service" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-dropbox-inv"><span class="lnr lnr-highlight"></span></span></a>
				<h4 class="mt-40 mb-20">Primeiros passos</h4>
				<p>
				O app teve ínicio no seu desenvolvimento em 2020 começando com alguns rasbiscos de como seria em uma plataformas de edição de imagem.
				</p>
		</div>															
	</div>
	<div class="col-lg-4">
		<div class="single-cat">
			<a href="#service" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-dropbox-inv"><span class="lnr lnr-code"></span></span></a>
			<h4 class="mt-40 mb-20">Desenvolvimento do App</h4>
			<p>
            Para a criação de sua estrutura foi utilizado o framework Ionic onde por muito tempo foi desenvolvido pelos programadores da empresa Winner.
			</p>
		</div>							
	</div>
</div>
<!-- SUBTITULOS -->

	</div>	
</section>
<!-- FINAL DA SEÇÃO DA TRAJETÓRIA/HISTÓRIA -->


					
<!-- COMEÇO DA SEÇÃO DO RODAPÉ/FOOTER -->		
<footer class="footer-area section-gap" id="footer">
	<div class="container">
		<div class="row">

<!-- VIDEO PITCH -->
<div class="col-lg-3  col-md-12">

	<div class="single-footer-widget">
	<div class="video-content">
	<center>
	<h2 class="text-white">Apresentação do Aplicativo</h2>
	<p class="mx-auto text-white  mt-20 mb-40">
				<!-- Fazer o bem nunca foi tão fácil -->
	</p>
		<a href="img/conteudo/pitch.mp4" 
		class="play-btn"><img src="img/conteudo/play-btn.png" alt=""></a>
	</center>
	</div>
	</div>
</div>
<!-- VIDEO PICTH -->

<!-- IMAGEM -->
			<div class="col">
			<center>
				<img class="img-fluid" src="img/conteudo/app.png" alt="">
			</center>
			</div>	
			&nbsp;
			&nbsp;
						

<!-- TÍTULO E SUBTÍTULO -->

<div class="col-lg-6  col-md-12" >
&nbsp;

	<div class="single-footer-widget newsletter">
		<h6>Receba as novidades do app
			<img class="logo" src="img/logos/doe+SimpleLogoTransparenteBlue.png" alt="">
		</h6>
		<p>
			Informe seu e-mail e seja o primeiro a receber notícias sobre o app
		</p>
<!-- TÍTULO E SUBTÍTULO -->

<!-- CAIXA DE TXT E BOTÃO DE ENVIAR -->
<div id="mc_embed_signup">
	<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
		<div class="form-group row" style="width: 100%">
			<div class="col-lg-8 col-md-12">
				<input name="EMAIL" placeholder="Escreva o email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu Email '" required="" type="email">
			</div> 
										
			<div class="col-lg-4 col-md-12">
				<button class="nw-btn primary-btn">Enviar<span class="lnr lnr-arrow-right"></span></button>
			</div> 
		</div>		
	</form>
</div>	
<!-- CAIXA DE TXT E BOTÃO DE ENVIAR -->	

	</div>
</div>
<!-- FORMULÁRIO DE NOVIDADES POR EMAIL -->


					
<!-- DIREITOS DE IMAGEM/COPYRIGHT -->
<div class="row footer-bottom d-flex justify-content-between">
	<p class="col-lg-12 col-sm-12 footer-text m-0 text-center text-white"> 
		<b>Copyright&copy; <script>document.write(new Date().getFullYear());</script></b>
			<a href=""><img class="logo" src="img/logos/WinnerLogoBranco.png" alt=""></a>
		<br>Todos os direitos reservados.
	</p>  
</div>
<!-- DIREITOS DE IMAGEM/COPYRIGHT -->	

		</div>									
	</div>
</footer>
<!-- FINAL DA SEÇÃO DO RODAPÉ/FOOTER -->		

			<!-- SCRIPS  -->
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>				
			<script src="js/parallax.min.js"></script>			
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/hexagons.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>				
			<script src="js/main.js"></script>	
			<!-- SCRIPTS -->
		</body>
	</html>