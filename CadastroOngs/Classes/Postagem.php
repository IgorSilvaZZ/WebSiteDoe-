<?php

    class Postagem{

        private $idPostagem;
        private $descPostagem;
        private $idOng;

        public function getIdPostagem(){
            return $this->idPostagem;
        }

        public function getDescPostagem(){
            return $this->descPostagem;
        }

        public function getIdOng(){
            return $this->idOng;
        }

        public function setDescPostagem($descPostagem){
            $this->descPostagem = $descPostagem;
        }

        public function setIdPostagem($idPostagem){
            $this->idPostagem = $idPostagem;
        }

        public function setIdOng($idOng){
            $this->idOng = $idOng;
        }

        public function cadastrar($postagem){
            $conexao = Conexao::pegarConexao();
            $queryInsert = "INSERT INTO tbPostagem (descPostagem, idOng) VALUES ('".$postagem->getDescPostagem()."', ".$postagem->getIdOng().")";
            $conexao->exec($queryInsert);
        }

        public function ListarPostagens($postagem){
            $conexao = Conexao::pegarConexao();
            $querySelect = "SELECT * FROM tbPostagem WHERE idOng = ".$postagem->getIdOng();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function ListarPostagem($postagem){
            $conexao = Conexao::pegarConexao();
            $querySelect = "SELECT * FROM tbPostagem WHERE idPostagem = ".$postagem->getIdPostagem();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetch();
            return $lista;  
        }

        public function editarPostagem($postagem){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "UPDATE tbPostagem SET descPostagem = '".$postagem->getDescPostagem()."' WHERE idPostagem = ".$postagem->getIdPostagem();
            $conexao->exec($queryUpdate);
        }

        public function excluirPostagem($postagem){
            $conexao = Conexao::pegarConexao();
            $queryDelete = "DELETE FROM tbPostagem WHERE idPostagem = ".$postagem->getIdPostagem();
            $conexao->exec($queryDelete);
        }

    }