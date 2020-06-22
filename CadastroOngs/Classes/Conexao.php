<?php

class Conexao
{
    public static function pegarConexao()
    {
        try{
            
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $bdname = 'bdTcc';
        
            $conexao = new PDO('mysql:host='.$servidor.';dbname='.$bdname, $usuario, $senha);
            
        
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET CHARACTER SET utf8");
            return $conexao;
        }catch(PDOException $th){
		    echo 'teste exception';
		    echo $th->getMessage();
	    }
	}
}
	
?>