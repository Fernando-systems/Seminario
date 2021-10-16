<?php

require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Content-Type: application/json; charset=UTF-8");

$ObjectJson = new JsonObject();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $Db = new Database();

        if (!isset($_REQUEST['dbUser'], $_REQUEST['dbPass'])) {
            echo $ObjectJson->Json(0, 'Parametros Incompletos', null);
            exit(0);
        }

        if (!$Db->Connect($_REQUEST{'dbUser'}, $_REQUEST['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexión en la Base de Datos', null);
            exit(0);
        } else {
            $_SESSION['dbUser'] = $_REQUEST['dbUser'];
            $_SESSION['dbPass'] = $_REQUEST['dbPass'];
            echo $ObjectJson->Json('1', 'Conexión Establecida', null);
        }
        break;
    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}