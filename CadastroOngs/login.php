<?php
	
	//Para iniciar a sessão
	session_start();
	
	//Para conectar com o banco de dados	
	require('Classes/ConexaoLogin.php');	
	
	if( (isset($_POST["email"])) && (isset($_POST["senha"])) ){
		//Recebimento dos valores digitados na tela de login
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		
		//consulta para verificação de login
		$conUsuario = $pdo->query("SELECT * from tbLoginOng where emailOng ='$email' and senhaOng = '$senha'");
		
		//consulta para verificação da quantidade de registros trazidos da consulta
		$conUser = $conUsuario->rowCount(); 
		
		//se a consulta trouxer um valor maior que 0 	
		if($conUser > 0 ){
			//se a consulta trouxer um valor maior que 0 	

			//valores da tabela de acordo com a consulta
			$campUsers = $conUsuario->fetch(PDO::FETCH_ASSOC);
			//echo $campUsers['idUser'];
			//echo $campUsers['emailUser'];
			//echo $campUsers['senha'];
			
			$_SESSION["idLoginOng"] = $campUsers['idLoginOng'];
			$idLogin = $_SESSION["idLoginOng"];
			$_SESSION["emailOng"]= $email;
			$_SESSION["senhaOng"]= $senha;

			$conOngs = $pdo->query("SELECT * from tbOng where idLoginOng ='$idLogin'");
			$result = $conOngs->fetch(PDO::FETCH_ASSOC);

			$_SESSION["idOng"]= $result['idOng'];
			$_SESSION["nomeOng"]= $result['nomeOng'];
			$_SESSION["descricaoOng"]= $result['descricaoOng'];
			$_SESSION["logradouroOng"]= $result['logradouroOng'];
			$_SESSION["cidadeOng"]= $result['cidadeOng'];
			$_SESSION["bairroOng"]= $result['bairroOng'];
			$_SESSION["numeroOng"]= $result['numeroOng'];
			$_SESSION["cepOng"]= $result['cepOng'];
			$_SESSION["fotoOng"]= $result['fotoOng'];
			$_SESSION["idFoneOng"]= $result['idFoneOng'];

						
			header("Location: http://localhost/doe+Site/CadastroOngs/examples/dashboard.php");
			
		}
		else{
			//se a consulta trouxer um valor igual a 0 	
			
			//Destrói
			session_destroy();

			//Limpa
			unset ($_SESSION["idUsuario"]);
			unset ($_SESSION['emailUsuario']);
			unset ($_SESSION['senhaUsuario']);
			
			
			header("Location: index.php");
			exit();
			
		}
	}else{
		session_start();
		session_unset();
		session_destroy();
		header("Location: index.php");
	}


	
?>