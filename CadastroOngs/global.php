<?php

//função que faz parte da SPL que significa Standard PHP Library
spl_autoload_register('carregarClasse');

function carregarClasse($nomeClasse)
{   
    if (file_exists('../Classes/' . $nomeClasse . '.php')) {
        require_once('../Classes/' .$nomeClasse . '.php');
    }
}
?>