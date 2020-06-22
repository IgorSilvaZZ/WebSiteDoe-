<?php 

    require_once 'global.php';

    try{
        
        $usuario = new Usuario();
        $usuario->setIdUsuario($_GET['id']);
        echo $usuario->excluir($usuario);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
 ?>