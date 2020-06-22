<?php 

require_once('global.php');

try{
    
    $loginOng = new LoginOng();
    $loginOng->setEmailOng($_POST['email']);
    $loginOng->setSenhaOng($_POST['senha']);
    $loginOng->cadastrar($loginOng);

}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>