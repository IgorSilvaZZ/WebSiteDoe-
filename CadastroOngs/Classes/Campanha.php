<?php

    class Campanha{

        private $idCampanha;
        private $nomeCampanha;
        private $descricaoCampanha;
        private $inicioCampanha;
        private $fimCampanha;
        private $fotoCampanha;
        private $idOng;

        public function getIdCampanha(){
            return $this->idCampanha;
        }

        public function getNomeCampanha(){
            return $this->nomeCampanha;
        }

        public function getDescricaoCampanha(){
            return $this->descricaoCampanha;
        }

        public function getInicioCampanha(){
            return $this->inicioCampanha;
        }

        public function getFimCampanha(){
            return $this->fimCampanha;
        }

        public function getFotoCampanha(){
            return $this->fotoCampanha;
        }

        public function getIdOng(){
            return $this->idOng;
        }

        public function setIdCampanha($idCampanha){
            $this->idCampanha = $idCampanha;
        }

        public function setNomeCampanha($nomeCampanha){
            $this->nomeCampanha = $nomeCampanha;
        }

        public function setDescricaoCampanha($descricaoCampanha){
            $this->descricaoCampanha = $descricaoCampanha;
        }

        public function setInicioCampanha($inicioCampanha){
            $this->inicioCampanha = $inicioCampanha;
        }

        public function setFimCampanha($fimCampanha){
            $this->fimCampanha = $fimCampanha;
        }

        public function setFotoCampanha($fotoCampanha){
            $this->fotoCampanha = $fotoCampanha;
        }

        public function setIdOng($idOng){
            $this->idOng = $idOng;
        }

        public function cadastrar($campanha){
            $conexao = Conexao::pegarConexao();
            $queryInsert = "INSERT INTO tbCampanha(nomeCampanha, descricaoCampanha, inicioCampanha, fimCampanha, fotoCampanha, idOng) 
            VALUES ('".$campanha->getNomeCampanha()."',
                    '".$campanha->getDescricaoCampanha()."',
                    '".$campanha->getInicioCampanha()."',
                    '".$campanha->getFimCampanha()."',
                    '".$campanha->getFotoCampanha()."',
                    ".$campanha->getIdOng().")";
            $conexao->exec($queryInsert);
        }

        public function editarCampanha($campanha){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "UPDATE tbCampanha SET nomeCampanha = '".$campanha->getNomeCampanha()."' , inicioCampanha = '".$campanha->getInicioCampanha()."' , fimCampanha = '".$campanha->getFimCampanha()."' , descricaoCampanha = '".$campanha->getDescricaoCampanha()."' WHERE idCampanha = '".$campanha->getIdCampanha()."' ";
            $conexao->exec($queryUpdate);
        }

        public function excluirCampanha($campanha){
            $conexao = Conexao::pegarConexao();
            $queryDelete = "DELETE FROM tbCampanha WHERE idCampanha = '".$campanha->getIdCampanha()."' ";
            $conexao->exec($queryDelete);
        }

        public function listarCampanhas($campanha){
            $conexao = Conexao::pegarConexao();
            $querySelect = "SELECT idCampanha, nomeCampanha, descricaoCampanha, inicioCampanha, fimCampanha, fotoCampanha, idOng FROM tbCampanha WHERE idOng = ".$campanha->getIdOng();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarCampanha($campanha){
            $conexao = Conexao::pegarConexao();
            $querySelect = "SELECT idCampanha, nomeCampanha, descricaoCampanha, inicioCampanha, fimCampanha, fotoCampanha, idOng FROM tbCampanha WHERE idCampanha = ".$campanha->getIdCampanha();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetch();
            return $lista;   
        }


        public function devolveId(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select MAX(idCampanha) as 'id' from tbCampanha";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach($lista as $linha){
                $id = ($linha['id']);
            }
            return $id;
        }

        public function fotoCampanha($campanha){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = 
                "UPDATE tbCampanha 
                    SET fotoCampanha = '".$campanha->getFotoCampanha()."'
                        WHERE idCampanha = ".$campanha->getIdCampanha()."";
            $conexao->exec($queryUpdate);
            return $queryUpdate;
        }

    }