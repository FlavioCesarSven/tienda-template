<?php

require_once 'config/connMySQL.php';

class cCategoriaM
{
    function Listar()
    {
        $oConn = new connMySQL();
        $sql  = "select * from tb_categoria order by 2";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

    function SeleccionarxID( $idest ){
        $oConn = new connMySQL();
        $sql = "SELECT * FROM tb_categoria WHERE idcategoria = '$idest'";
        $result = $oConn->executeQuery($sql);
        $row= $result->fetch_assoc();
        return $row;
    }

    function SeleccionarSubcategoriaxID( $idest ){
        $oConn = new connMySQL();
        $sql = "SELECT * FROM tb_subcategoria WHERE idcategoria = '$idest'";
        $result = $oConn->executeQuery($sql);
        return $result;
    }

    function ListarMarcarxIdCat( $idest ){
        $oConn = new connMySQL();
        $sql = "SELECT * FROM v_marca_x_categoria WHERE idcategoria = '$idest'";
        $result = $oConn->executeQuery($sql);
        return $result;
    }


}