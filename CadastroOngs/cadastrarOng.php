<?php 
	include_once("global.php");
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Doe+ - Cadastrar-se</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.min.css" rel="stylesheet">
	
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


<body style="background-color: rgb(41, 57, 133);">

	<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
				<form  class= "login100-form validate-form" method="post" method="get" action="Ong/cadastrar-ong.php" action="." style="background-image: url('images/bg-map.png');">
    
					<span class="login100-form-title p-b-43">
						Coloque as informações da sua Ong
					</span>

					<center><img src="images/passo3.png" width="100%"></center>					
<br>
					<center><table>	
						<td><div class="file-field">
							<div class="btn btn-outline-griz btn-rounded waves-effect btn-sm float-left">
								<span>Anexar<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
								<input name="foto" type="file" multiple>
							</div> 
						</div></td>
					</table></center>

					
<br>

					<div class="wrap-input100 validate-input" data-validate = "Nome obrigatório!">
						<input class="input100" type="text" name="nome" placeholder="Nome">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100" >Nome</span> -->
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Descrição da Ong">
						<input class="input100" type="text" name="descricao" placeholder="Descrição da Ong">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100" >Descrição da Ong</span> -->
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Insira um cep válido">
						<input class="input100" type="text" name="cep" maxlength="9" id="cep" onblur="pesquisacep(this.value);" placeholder="CEP">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100">CEP</span> -->
					</div>

					
					<div class="wrap-input100 validate-input" data-validate="Insira o endereco">
						<input class="input100" type="text" name="end" id="rua" placeholder="Endereço">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100">Endereço</span> -->
                    </div>
                    
					
					<div class="wrap-input100 validate-input" data-validate="Insira o n° da residencia">
						<input class="input100" type="number" name="numero" placeholder="N°">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100">N°</span> -->
					</div>

					<div class="wrap-input100 validate-input" data-validate="Insira a cidade">
						<input class="input100" type="text" name="cidade" id="cidade" placeholder="Cidade">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100">Cidade</span> -->
					</div>


					<div class="wrap-input100 validate-input" data-validate="Insira o bairro">
						<input class="input100" type="text" name="bairro" id="bairro" placeholder="Bairro">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100">Bairro</span> -->
					</div>


					<div class="wrap-input100 validate-input" data-validate="Insira um CNPJ Valido">
						<input class="input100" type="text" name="cnpj" maxlength="14" placeholder="CNPJ">
						<span class="focus-input100"></span>
						<!-- <span class="label-input100">CNPJ</span> -->
					</div>
                        

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Proximo
						</button>
					</div>

				</form>
			

					<div class="login100-more" style="background-color: #2e4094;">
						<center><img src="images/infoIcon.png" width="80%" style="margin-top: 20ch;"></center>
					</div>
			</div>
		</div>
		</div>
<?php
	//require_once("../Painel/footer.php");
?>
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

	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<!-- Initializations -->
	<script type="text/javascript">
	// Animations initialization
	new WOW().init();

	</script>


</body>
</html>

<!-- AUTO CEP -->
<!-- Adicionando Javascript -->
<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
