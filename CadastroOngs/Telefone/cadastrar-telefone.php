<?php 

require_once 'global.php';

try{
    
    $fone = new FoneOng();
    $fone->setNumeroFone($_POST['fone']);
    $fone->cadastrar($fone);

}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>