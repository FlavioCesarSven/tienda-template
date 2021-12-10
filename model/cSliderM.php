<?php

require_once 'config/connMySQL.php';

class cSliderM
{
    function Listar()
    {
        $oConn = new connMySQL();
        $sql  = "select * from tb_slider where estd_sli=1 order by 1";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

}