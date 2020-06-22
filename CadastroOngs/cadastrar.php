<?php  
	include_once("global.php");
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Doe+ - Cadastrar-se</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body >
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="Usuario/cadastrar-usuario.php" style="background-image: url('images/bg-map.png');">

                
					<span class="login100-form-title p-b-43">
						Realize seu cadastro
					</span>

					<center><img src="images/passo1.png" width="100%"></center>					
<br>
					<div class="wrap-input100 validate-input" data-validate = "Insira um email válido: ex@ex.com">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100">Email</span> -->
					</div>

					
					<div class="wrap-input100 validate-input" data-validate="Insira a senha">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100">Senha</span> -->
                    </div>
                    
					
					<!-- <div class="wrap-input100 validate-input" data-validate="Confirme a senha">
						<input class="input100" type="password" name="Confsenha">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirmar Senha</span>
					</div> -->

				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Proximo
						</button>
					</div>

					<div class="text-center p-t-26 p-b-10">
							Já tem uma conta? <a href="index.php">entre</a>
					</div>
		
<br>
					</form>

				<div class="login100-more" style="background-color: #2e4094;">
					<center><img src="images/doe+LogoTransparente.png" width="50%" style="margin-top: 33ch;"></center>
				</div>
			</div>
		</div>
	</div>
	
	

	
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>