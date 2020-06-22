<?php
    session_start();
    require_once('global.php');
    require('../Classes/ConexaoLogin.php');	

    try {
        header("Location: ../examples/info-admin.php");
        $ong = new Ong();
        $fone = new FoneOng();
        $fone->setIdFoneOng($_SESSION["idFoneOng"]);
        $ong->setIdOng($_SESSION["idOng"]);
        $ong->setNomeOng($_POST['txtNomeOng']);
        $ong->setCnpjOng($_POST['txtCpnj']);
        $ong->setNumeroOng($_POST['txtNumero']);
        $ong->setBairroOng($_POST['txtBairro']);
        $ong->setCidadeOng($_POST['txtCidade']);
        $ong->setCepOng($_POST['txtCep']);
        $ong->setDescricaoOng($_POST['txtDescricao']);
        $ong->setLogradouroOng($_POST['txtEndereco']);
        $fone->setNumeroFone($_POST['txtTelefone']);

        $nomeImagem = $_FILES['foto']['name'];
        $arquivoImagem = $_FILES['foto']['tmp_name'];

        if($nomeImagem == null){
            $conOngs = $pdo->query("SELECT fotoOng from tbOng where idOng = ".$ong->getIdOng());
			$result = $conOngs->fetch(PDO::FETCH_ASSOC);
            $imagemAntiga = $result['fotoOng'];
            $ong->setFotoOng($imagemAntiga);
            echo $fone->editar($fone);
            echo $ong->editar($ong);
            $_SESSION['mensagem'] = "Atualizado com Sucesso";

        }else{
             //Coloquem o numero de ip de vcs, troquem apenas isso.
            $caminho = "http://192.168.0.19/doe+Site/CadastroOngs/image/Ongs/";
            
            $extensao = substr(strstr($nomeImagem, "."),1);
            $nomeImagem = $caminho.$ong->getIdOng().".".$extensao;
            move_uploaded_file($arquivoImagem, __DIR__."/../image/Ongs/".$ong->getIdOng().".".$extensao);
        
            $ong->setFotoOng($nomeImagem);

            echo $fone->editar($fone);
            echo $ong->editar($ong);
            $_SESSION['mensagem'] = "Atualizado com Sucesso";
            
        }
        


    } 
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>