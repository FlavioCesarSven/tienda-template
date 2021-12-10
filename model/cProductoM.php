<?php

require_once 'config/connMySQL.php';

class cProductoM
{
    function Listar()
    {
        $oConn = new connMySQL();
        $sql  = "select * from tb_producto order by 2 ";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

    function ListarUltimos($nro)
    {
        $oConn = new connMySQL();
        $sql  = "select * from tb_producto order by 2 desc limit ".$nro;

        $result = $oConn->executeQuery($sql);
        return $result;
    }

    function ListarPorIdCategoria($idcat)
    {
        $oConn = new connMySQL();
        $sql  = "select * from v_productos_x_categorias where idcategoria=".$idcat;

        $result = $oConn->executeQuery($sql);
        return $result;
    }

}