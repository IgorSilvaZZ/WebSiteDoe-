<?php 
    class FoneOng{

        private $idFoneOng;
        private $numeroFone;
        
        //GET
        public function getIdFoneOng(){
            return $this->idFoneOng;
        }
        public function getNumeroFone(){
            return $this->numeroFone;
        }
        // SET
        public function setIdFoneOng($id){
            $this->idFoneOng = $id;
        }
        public function setNumeroFone($numeroFone){
            $this->numeroFone = $numeroFone;
        }

        public function cadastrar($fone){
            $conexao = Conexao::pegarConexao();
            $queryInsert = " insert into tbFoneOng (numeroFoneOng)
                    values ('".$fone->getNumeroFone()."')";
                            
            $conexao->exec($queryInsert);
            return header("Location:../cadastrarOng.php");
        }

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select idFoneOng, numeroFoneOng from tbFoneOng";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarPesquisa($campoPesquisa){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select idFoneOng numeroFoneOng from tbFoneOng
                    where numeroFone like '$campoPesquisa'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarUsuario($fone){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select idFoneOng numeroFoneOng from tbFoneOng
                 where idFoneOng =".$fone->getIdFoneOng();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $linha){
                $fone->setIdFoneOng($linha['idFoneOng']);
                $fone->setNumeroFone($linha['numeroFone']);
            }
            return $fone;   
        }

        public function editar($fone){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "update tbFoneOng
                                set numeroFoneOng = '".$fone->getNumeroFone()."' where idFoneOng = ".$fone->getIdFoneOng();
            $conexao->exec($queryUpdate);
        }

        public function excluir($fone){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "delete from tbFoneOng
                            where idFoneOng = ".$fone->getIdFoneOng();
            $conexao->exec($queryUpdate);
            return header("Location:../Painel/usuario.php");
        }

        public function devolveIdFone(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select MAX(idFoneOng) as 'id' from tbFoneOng";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach($lista as $linha){
                $id = ($linha['id']);
            }
            return $id;
        }
    }

?>