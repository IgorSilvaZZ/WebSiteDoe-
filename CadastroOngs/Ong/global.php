<?php

//função que faz parte da SPL que significa Standard PHP Library
spl_autoload_register('carregarClasse');

function carregarClasse($nomeClasse)
{   try{
        if (file_exists('../Classes/' . $nomeClasse . '.php')) {
            require_once '../Classes/' .$nomeClasse . '.php';
        }
    }catch(Exception $e){
        echo "<PRE>";
        $e->getMessage();
        echo "</PRE> ";
    }
}