<?php

	require("login.php");

	session_start();
	
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['senha'] = $_POST['senha'];		
	
	if(strcmp ($_SESSION['email'],$email)!=0 || strcmp($_SESSION['senha'],$senha)!=0){		
		session_unset();		
		session_destroy();		
		echo '<script> location.replace("index.php"); </script>';			
	}
	else{
		$_SESSION['correto']=true;
		echo '<script> location.replace("painel.php"); </script>';
		echo '<script> location.replace("dashboard.php"); </script>';		
	}	
?>