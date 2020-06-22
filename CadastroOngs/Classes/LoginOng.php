<?php 
    class LoginOng{

        private $idLoginOng;
        private $emailOng;
        private $senhaOng;
      
        public function getIdLoginOng(){
            return $this->idLoginOng;
        }
        public function getEmailOng(){
            return $this->emailOng;
        }
        public function getSenhaOng(){
            return $this->senhaOng;
        }

        public function setIdLoginOng($idLoginOng){
            $this->idLoginOng = $idLoginOng;
        }
        public function setEmailOng($emailOng){
            $this->emailOng = $emailOng;
        }
        public function setSenhaOng($senhaOng){
            $this->senhaOng = $senhaOng;
        }

        public function cadastrar($loginOng){
            $conexao = Conexao::pegarConexao();
            $queryInsert = " insert into tbLoginOng ( emailOng, senhaOng)
                    values ('".$loginOng->getEmailOng()."',
                            '".$loginOng->getSenhaOng()."'
                            )";
                            
            $conexao->exec($queryInsert);
            return header("Location:../cadastrarFone.php");
        }

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select idLoginOng, emailOng, senhaOng from tbLoginOng";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarPesquisa($campoPesquisa){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select idLoginOng, emailOng, senhaOng from tbLoginOng
                    where emailOng like '$campoPesquisa'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarLoginOng($loginOng){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select idLoginOng, emailOng, senhaOng from tbLoginOng
                 where idLoginOng =".$loginOng->getIdLoginOng();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $linha){
                $loginOng->setIdLoginOng($linha['idLoginOng']);
                $loginOng->setEmailOng($linha['emailOng']);
                $loginOng->setSenhaOng($linha['senhaOng']);
            }
            return $loginOng;   
        }

        public function editarLoginOng($loginOng){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "update tbLoginOng
                            emailOng = '".$loginOng->getEmailOng()."',
                            senhaOng = '".$loginOng->getSenhaOng()."',
                                where idLoginOng = ".$loginOng->idLoginOng();
            $conexao->exec($queryUpdate);
            return header("Location:../Painel/usuario.php");
        }

        public function excluir($loginOng){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "delete from tbLoginOng
                            where idLoginOng = ".$loginOng->idLoginOng();
            $conexao->exec($queryUpdate);
            return header("Location:../Painel/usuario.php");
        }

        public function devolveIdLogin(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select MAX(idLoginOng) as 'id' from tbLoginOng";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach($lista as $linha){
                $id = ($linha['id']);
            }
            return $id;
        }
    }

?>