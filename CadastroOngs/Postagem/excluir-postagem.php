<?php

    require_once 'global.php';
    session_start();

    try{

        header("Location: http://localhost/doe+Site/CadastroOngs/examples/lista-postagem.php");
        $postagem = new Postagem();
        $postagem->setIdPostagem($_POST['idPostagem']);
        $postagem->excluirPostagem($postagem);
        $_SESSION['mensagem'] = "Excluido com Sucesso";

    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }