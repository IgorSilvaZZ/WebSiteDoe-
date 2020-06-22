<?php 

require_once 'global.php';

try{
    
    $usuario = new Usuario();
    $usuario->setEmailUsuario($_POST['email']);
    $usuario->setSenhaUsuario($_POST['senha']);
    $usuario->editar($usuario);

}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>