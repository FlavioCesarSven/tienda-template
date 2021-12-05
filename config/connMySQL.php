<?php

class connMySQL {

    function getConnection()
    {

        try 
        {

           $conn=new mysqli('localhost','root','','db_tienda');

           return $conn;
        } 
        catch (Exception $ex) {
           //En caso de Error
           if ($conn->connect_error) 
               die ('Error: ').$conn->connect_error;
        }
    }

    function executeQuery($strSql)
    {
        try 
        {
            $oConn=new connMySQL();
            $mysqli=$oConn->getConnection();
            $result=$mysqli->query($strSql);
            $mysqli->close();
            return $result;
        } 
        catch (Exception $ex) 
        {
            echo 'Error: '.$ex->getMessage();
        }
    }
}