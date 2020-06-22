<?php

    require_once 'global.php';
    session_start();

    try {
        header("Location: http://localhost/doe+Site/CadastroOngs/examples/campanha.php");
        $campanha = new Campanha();
        $campanha->setIdOng($_SESSION["idOng"]);
        $campanha->setNomeCampanha($_POST['txtNome']);
        $campanha->setInicioCampanha($_POST['txtDtInicio']);
        $campanha->setFimCampanha($_POST['txtDtFinal']);
        $campanha->setDescricaoCampanha($_POST['txtDescricao']);
        $campanha->cadastrar($campanha);

        $campanha->setIdCampanha($campanha->devolveId());

        $nomeImagem = $_FILES['txtFoto']['name'];
        $arquivoImagem = $_FILES['txtFoto']['tmp_name'];
    
        //Coloquem o numero de ip de vcs, troquem apenas isso.
        $caminho = "http://192.168.0.19/doe+Site/CadastroOngs/image/Ongs/Campanhas/";
    
        $extensao = substr(strstr($nomeImagem, "."),1);
        $nomeImagem = $caminho.$campanha->getIdCampanha().".".$extensao;
        move_uploaded_file($arquivoImagem, __DIR__."/../image/Ongs/Campanhas/".$campanha->getIdCampanha().".".$extensao);
     
        $campanha->setFotoCampanha($nomeImagem);
        $campanha->fotoCampanha($campanha);

    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }