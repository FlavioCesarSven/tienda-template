<?php 

require_once 'model/cProductoM.php';

class cProductoC 
{
    function listar(){
        $oMod = new cProductoM();
        return $oMod->Listar();
    }

    function listarUltimos($nro){
        $oMod = new cProductoM();
        return $oMod->ListarUltimos($nro);
    }

    function listarxIdCategoria($idcat){
        $oMod = new cProductoM();
        return $oMod->ListarPorIdCategoria($idcat);
    }
}
