<?php 
    class Ong{

        private $idOng;
        private $nomeOng;
        private $descricaoOng;
        private $logradouroOng;
        private $cidadeOng;
        private $bairroOng;
        private $numeroOng;
        private $cepOng;
        private $cnpjOng;
        private $fotoOng;
        private $idLoginOng;
        private $idFoneOng;
        private $foneOng;
        
        //GET
        public function getIdOng(){
            return $this->idOng;
        }
        public function getNomeOng(){
            return $this->nomeOng;
        }
        public function getDescricaoOng(){
            return $this->descricaoOng;
        }
        public function getLogradouroOng(){
            return $this->logradouroOng;
        }
        public function getCidadeOng(){
            return $this->cidadeOng;
        }
        public function getBairroOng(){
            return $this->bairroOng;
        }
        public function getNumeroOng(){
            return $this->numeroOng;
        }
        public function getCepOng(){
            return $this->cepOng;
        }
        public function getCnpjOng(){
            return $this->cnpjOng;
        }
        public function getFotoOng(){
            return $this->fotoOng;
        }
        public function getIdLoginOng(){
            return $this->idLoginOng;
        }
        public function getIdFoneOng(){
            return $this->idFoneOng;
        }
        public function getFoneOng(){
            return $this->foneOng;
        }
        // SET
        public function setIdOng($id){
            $this->idOng = $id;
        }
        public function setNomeOng($nome){
            $this->nomeOng = $nome;
        }
        public function setDescricaoOng($descricao){
            $this->descricaoOng = $descricao;
        }
        public function setLogradouroOng($logradouro){
            $this->logradouroOng = $logradouro;
        }
        public function setCidadeOng($cidade){
            $this->cidadeOng = $cidade;
        }
        public function setBairroOng($bairro){
            $this->bairroOng = $bairro;
        }
        public function setNumeroOng($numero){
            $this->numeroOng = $numero;
        }
        public function setCepOng($cep){
            $this->cepOng = $cep;
        }
        public function setCnpjOng($cnpj){
            $this->cnpjOng = $cnpj;
        }
        public function setFotoOng($foto){
            $this->fotoOng = $foto;
        }
        public function setIdLoginOng($idLoginOng){
            $this->idLoginOng = $idLoginOng;
        }
        public function setIdFoneOng($idFoneOng){
            $this->idFoneOng = $idFoneOng;
        }
        public function setFoneOng($foneOng){
            $this->foneOng = $foneOng;
        }

        public function cadastrar($ong){
            $conexao = Conexao::pegarConexao();
            $queryInsert = " insert into tbOng (nomeOng, descricaoOng, logradouroOng,
            cidadeOng, bairroOng, numeroOng, cepOng, cnpjOng, fotoOng, idLoginOng, idFoneOng)
                    values ('".$ong->getNomeOng()."'
                            ,'".$ong->getDescricaoOng()."'
                            ,'".$ong->getLogradouroOng()."'
                            ,'".$ong->getCidadeOng()."'
                            ,'".$ong->getBairroOng()."'
                            ,'".$ong->getNumeroOng()."'
                            ,'".$ong->getCepOng()."'
                            ,'".$ong->getCnpjOng()."'
                            ,'".$ong->getFotoOng()."'
                            ,".$ong->getIdLoginOng()."
                            ,".$ong->getIdFoneOng().")";
                            
            $conexao->exec($queryInsert);
            return header("Location:../index.php");
        }

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select idOng, nomeOng, descricaoOng, logradouroOng,
            cidadeOng, bairroOng, numeroOng, cepOng, cnpjOng, fotoOng from tbOng";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarPesquisa($campoPesquisa){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select idOng, nomeOng, descricaoOng, logradouroOng,
            cidadeOng, bairroOng, numeroOng, cepOng, cnpjOng, fotoOng,
            idLoginOng, idFoneOng from tbOng
                    where nomeOng like '$campoPesquisa' or descricaolOng like '$campoPesquisa'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarOng($ong){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select idOng, nomeOng, descricaoOng, logradouroOng,
            cidadeOng, bairroOng, numeroOng, cepOng, cnpjOng, fotoOng, numeroFoneOng from tbOng inner join tbFoneOng on tbOng.idFoneOng = tbFoneOng.idFoneOng  
            where idOng =".$ong->getIdOng();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $linha){
                $ong->setIdOng($linha['idOng']);
                $ong->setNomeOng($linha['nomeOng']);
                $ong->setDescricaoOng($linha['descricaoOng']);
                $ong->setLogradouroOng($linha['logradouroOng']);
                $ong->setCidadeOng($linha['cidadeOng']);
                $ong->setBairroOng($linha['bairroOng']);
                $ong->setNumeroOng($linha['numeroOng']);
                $ong->setCepOng($linha['cepOng']);
                $ong->setCnpjOng($linha['cnpjOng']);
                $ong->setFotoOng($linha['fotoOng']);
                $ong->setFoneOng($linha['numeroFoneOng']);
            }
            return $ong;   
        }

        public function editar($ong){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "update tbOng
                            set nomeOng = '".$ong->getNomeOng()."',
                            descricaoOng = '".$ong->getDescricaoOng()."',
                            logradouroOng = '".$ong->getLogradouroOng()."',
                            bairroOng = '".$ong->getBairroOng()."',
                            numeroOng = '".$ong->getNumeroOng()."',
                            cepOng = '".$ong->getCepOng()."',
                            cnpjOng = '".$ong->getCnpjOng()."', 
                            fotoOng = '".$ong->getFotoOng()."' 
                                where idOng = ".$ong->getIdOng();
            $conexao->exec($queryUpdate);
        }

        public function excluir($ong){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "delete from tbOng
                            where idOng = ".$ong->getIdOng();
            $conexao->exec($queryUpdate);
            return header("Location:../Painel/painel.php");
        }

        public function devolveId(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select MAX(idOng) as 'id' from tbOng";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach($lista as $linha){
                $id = ($linha['id']);
            }
            return $id;
        }

        public function fotoOng($ong){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = 
                "update tbOng 
                    set fotoOng = '".$ong->getFotoOng()."'
                        where idOng = ".$ong->getIdOng()."";
            $conexao->exec($queryUpdate);
            return $queryUpdate;
        }

    }

?>