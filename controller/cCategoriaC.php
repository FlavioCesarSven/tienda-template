<?php 

require_once 'model/cCategoriaM.php';

class cCategoriaC 
{
    function listar(){
        $oMod = new cCategoriaM();
        return $oMod->Listar();
    }
}
