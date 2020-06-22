<?php

    require_once 'global.php';
    session_start();

    try{

        header("Location: http://localhost/doe+Site/CadastroOngs/examples/postagem.php");
        $postagem = new Postagem();
        $postagem->setIdOng($_SESSION["idOng"]);
        $postagem->setDescPostagem($_POST['txtDescricao']);
        $postagem->cadastrar($postagem);
        $_SESSION['mensagem'] = "Cadastrado com Sucesso";

    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }