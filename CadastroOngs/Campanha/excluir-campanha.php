<?php

    session_start();
    require_once('global.php');

    try{

        header("Location: http://localhost/doe+Site/CadastroOngs/examples/lista-campanha.php");

        $campanha = new Campanha();
        $campanha->setIdCampanha($_POST['idCampanha']);
        $campanha->excluirCampanha($campanha);
        $_SESSION['mensagem'] = "Excluido com Sucesso";

    }catch(Execption $e){
        echo '<pre>';
        print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }