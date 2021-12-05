<?php 

require_once 'model/cmarcaM.php';

class cMarcaC 
{
    function listar(){
        $oMod = new cMarcaM();
        return $oMod->Listar();
    }
}
