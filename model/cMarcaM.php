<?php

require_once 'config/connMySQL.php';

class cMarcaM
{
    function Listar()
    {
        $oConn = new connMySQL();
        $sql  = "select * from tb_marca order by 1";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

}