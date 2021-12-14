<?php 

require_once 'model/cCategoriaM.php';

class cCategoriaC 
{
    function listar(){
        $oMod = new cCategoriaM();
        return $oMod->Listar();
    }

    function SeleccionarxID($idcat){
        $oMod = new cCategoriaM();
        return $oMod->SeleccionarxID($idcat);
    }

    function SeleccionarSubcategoriaxID($idcat){
        $oMod = new cCategoriaM();
        return $oMod->SeleccionarSubcategoriaxID($idcat);
    }

    function SeleccionarMarcasxIdCat($idcat){
        $oMod = new cCategoriaM();
        return $oMod->ListarMarcarxIdCat($idcat);
    }
}
