<?php 

require_once 'global.php';

try{
    
    $loginOng = new LoginOng();
    $fone = new FoneOng();
    $ong = new Ong();
    $ong->setNomeOng($_POST['nome']);
    $ong->setDescricaoOng($_POST['descricao']);
    $ong->setCepOng($_POST['cep']);
    $ong->setLogradouroOng($_POST['end']);
    $ong->setNumeroOng($_POST['numero']);
    $ong->setCidadeOng($_POST['cidade']);
    $ong->setBairroOng($_POST['bairro']);
    $ong->setCnpjOng($_POST['cnpj']);
    $ong->setIdLoginOng($loginOng->devolveIdLogin());
    $ong->setIdFoneOng($fone->devolveIdFone());
    $ong->cadastrar($ong);

    $ong->setIdOng($ong->devolveId());

    $nomeImagem = $_FILES['foto']['name'];
    $arquivoImagem = $_FILES['foto']['tmp_name'];

    //Coloquem o numero de ip de vcs, troquem apenas isso.
    $caminho = "http://192.168.0.19/doe+Site/CadastroOngs/image/Ongs/";
    
    $extensao = substr(strstr($nomeImagem, "."),1);
    /* $nomeImagem = $caminho.$ong->devolveId().".".$extensao; */
    move_uploaded_file($arquivoImagem, __DIR__."/../image/Ongs/" .$ong->devolveId().".".$extensao);

    $ong->setFotoOng($nomeImagem);
    $ong->fotoOng($ong);   
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>

