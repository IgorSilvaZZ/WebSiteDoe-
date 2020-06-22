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
				
					<form class="login100-form validate-form" method="post" action="Telefone/cadastrar-telefone.php">
					
                    <span class="login100-form-title p-b-43">
						Insira o telefone de contato da sua Ong
					</span>
                    
                    <center><img src="images/passo2.png" width="100%"></center>					
<br>
					<div class="wrap-input100 validate-input" data-validate="Coloque um Telefone de contato">
						<input class="input100" type="text" name="fone" maxlength="14" placeholder="Telefone">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100">Telefone</span> -->
					</div>

				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Proximo
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-color: #2e4094;">
					<center><img src="images/foneIcon.png" width="80%" style="margin-top: 19ch;"></center>
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