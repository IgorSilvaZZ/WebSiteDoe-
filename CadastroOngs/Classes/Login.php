<?php

class LoginOng {
    private $idloginong;
    private $emailOng;
    private $senhaOng;

    //GET
    public function getIdLoginOng(){
        return $this->idLoginOng;
    }
    public function getEmailOng(){
        return $this->emailOng;
    }
    public function getSenhaOng(){
        return $this->senhaOng;
    }

    //SET
    public function setIdLoginOng($idloginong){
        $this->idLoginOng = $id;
    }
    public function setEmailOng($emailOng){
        $this->emailOng =$emailOng;
    }
    public function setSenhaOng($senhaOng){
        $this->senhaOng =$senhaOng;
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select idLoginOng, 
        emailOng, senhaOng from tbloginong";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

    public function listarMarca($login){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select idloginong, emailOng, senhaOng from tbloginong
         where idOng = ".$login->getIdOng();
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha){
            
            $login->setIdOng($linha['idOng']);
            $login->setEmailOng($linha['emailOng']);
            $login->setSenhaOng($linha['senhaOng']);
            
        }
        return $login;   
    }
    public function cadastrar($login){
        $conexao = Conexao::pegarConexao();
        $queryInsert = " insert into tbloginong (emailOng, senhaOng)
                values ('".$login->getNomeOng()."',
                        '".$login->getDescricaoOng()."',
                        '".$login->getLogradouroOng()."',
                        '".$login->getCidadeOng()."'
                        '".$login->getBairroOng()."'
                        '".$login->getNumeroOng()."'
                        '".$login->getCepOng()."'
                        '".$login->getCnpjOng()."'
                        '".$login->getFotoOng()."'
                        '".$login->getIdLoginOngOng()."'
                        '".$login->getIdFoneOng()."'
                        )";
                        
        $conexao->exec($queryInsert);
        return header("Location:../painel.php");
    }
}
?>