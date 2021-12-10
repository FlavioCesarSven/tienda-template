<?php

require_once 'config/connMySQL.php';

class cCategoriaM
{
    function Listar()
    {
        $oConn = new connMySQL();
        $sql  = "select * from tb_categoria order by 1";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

}