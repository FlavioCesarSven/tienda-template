<?php 

require_once 'model/cSliderM.php';

class cSliderC 
{
    function listar(){
        $oMod = new cSliderM();
        return $oMod->Listar();
    }
}
