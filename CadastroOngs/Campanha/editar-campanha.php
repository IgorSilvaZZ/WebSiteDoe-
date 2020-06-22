<?php

    session_start();
    require_once('global.php');
    
    try{

        header("Location: http://localhost/doe+Site/CadastroOngs/examples/lista-campanha.php");

        $campanha = new Campanha();
        $campanha->setIdCampanha($_POST['idCampanha']);
        $campanha->setNomeCampanha($_POST['txtNomeCampanha']);
        $campanha->setInicioCampanha($_POST['txtDtInicio']);
        $campanha->setFimCampanha($_POST['txtDtFim']);
        $campanha->setDescricaoCampanha($_POST['txtDescricao']);
        $campanha->editarCampanha($campanha);
        $_SESSION['mensagem'] = "Atualizado com Sucesso";

    }catch(Expection $e){
        echo '<pre>';
        print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }