<?php

require_once 'Config.php';
require_once 'JsonObject.php';

class Database
{

    protected $Connection;

    /**
     * @param $Sql
     * @param $dbUser
     * @param $dbPass
     * @return mixed
     */

    function GetData($Sql, $dbUser="", $dbPass="")
    {
        /*
         * Ejecuta una Consulta y retorna un array
         */
        //$db = $this->Connect($dbUser, $dbPass);

        $db = $this->Connection;
        try {
            $stmt = $db->Prepare($Sql);
            $stmt->execute();
        } catch (PDOException $e) {
            $ObjectJson = new JsonObject();
            echo $ObjectJson->Json(0, 'Se produjo un error Codigo: ' . $e->getCode() . ' ' . $e->getMessage(), null);
            exit(0);
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @param $dbUser
     * @param $dbPass
     * @return bool
     */

    function Connect($dbUser, $dbPass)
    {
        /*
         * Conecta a la base de datos mediante PDO
         */
        try {
            //$dbh = new PDO ("dblib:version=8.0;charset=UTF-8;host={$hostname};51226;dbname={$dbname}", $username, $pwd);
            //$this->Connection = new PDO(DRIVER . ";" . CHARSET . ";host=" . DBHOST . ";51226;dbname=" . DBNAME, $dbUser, $dbPass);
            $this->Connection = new PDO(DRIVER . ":Server=" . DBHOST . ";Database=" . DBNAME, $dbUser, $dbPass);
            $this->Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $e) {
            $ObjectJson = new JsonObject();
            if ($e->getCode() == '20002') {
                echo $ObjectJson->Json(0, "Combinacion de Clave Invalida", null);
            } else {
                echo $ObjectJson->Json(0, 'Error Codigo: ' . $e->getCode() . ' Mensaje: ' . $e->getMessage(), null);
            }
            exit(0);
        }
    }

    function Sentencia($Sql)
    {
        $Db = $this->Connection;
        return $Db->Prepare($Sql);
    }

}

function CleanString($String)
{
    $String = str_replace('[Microsoft]', '', $String);
    $String = str_replace('[SQL Server]', '', $String);
    $String = str_replace('[ODBC Driver 17 for SQL Server]', '', $String);
    $String = str_replace('SQLSTATE[42000]:', '', $String);
    return $String;
}
