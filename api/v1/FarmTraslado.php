<?php

require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Content-Type: application/json; charset=UTF-8");

$ObjectJson = new JsonObject();


if (!isset($_SESSION['dbUser'])) {
    echo $ObjectJson->Json('0', 'Usuario no autenticado', null);
    http_response_code(403);
    exit(0);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
//Procedimiento para agregar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Farm.Sp_AddTraslado ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ");

            $stmt->bindParam(1, $_REQUEST['FarmNumIdTraslado']);
            $stmt->bindParam(2, $_REQUEST['FarmStrUnidSolicita']);
            $stmt->bindParam(3, $_REQUEST['FarmStrUnidEntrega']);
            $stmt->bindParam(4, $_REQUEST['FarmStrNomEntrega']);
            $stmt->bindParam(5, $_REQUEST['FarmStrCargEntrega']);
            $stmt->bindParam(6, $_REQUEST['FarmStrNomJefe']);
            $stmt->bindParam(7, $_REQUEST['FarmStrCargJefe']);
            $stmt->bindParam(8, $_REQUEST['FarmStrObservacion']);
            $stmt->bindParam(9, $_REQUEST['FarmStrLugar']);
            $stmt->bindParam(10, $_REQUEST['FarmDateTras']);
            $stmt->bindParam(11, $_REQUEST['FarmStrNomRecibe']);
            $stmt->bindParam(12, $_REQUEST['FarmStrCargRecibe']);

            $stmt->bindParam(13, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(14, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);


            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }

        break;



    case 'DELETE':
//Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Almac.Sp_DelDetalleForm1H ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdDetalleForm1H'});
            //$stmt->bindParam(2, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            //$stmt->bindParam(3, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }
        break;

    case 'PUT':
//Procedimiento para modificar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Farm.Sp_UpTraslado ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?");

            $stmt->bindParam(1, $_REQUEST['FarmNumIdTraslado']);
            $stmt->bindParam(2, $_REQUEST['FarmStrUnidSolicita']);
            $stmt->bindParam(3, $_REQUEST['FarmStrUnidEntrega']);
            $stmt->bindParam(4, $_REQUEST['FarmStrNomEntrega']);
            $stmt->bindParam(5, $_REQUEST['FarmStrCargEntrega']);
            $stmt->bindParam(6, $_REQUEST['FarmStrNomJefe']);
            $stmt->bindParam(7, $_REQUEST['FarmStrCargJefe']);
            $stmt->bindParam(8, $_REQUEST['FarmStrObservacion']);
            $stmt->bindParam(9, $_REQUEST['FarmStrLugar']);
            $stmt->bindParam(10, $_REQUEST['FarmDateTras']);
            $stmt->bindParam(11, $_REQUEST['FarmDateVenciTraslado']);
            $stmt->bindParam(12, $_REQUEST['FarmNoLotTraslado']);
            $stmt->bindParam(13, $_REQUEST['FarmPrecUnitTras']);
            $stmt->bindParam(14, $codeMensaje, PDO::PARAM_INT | PDO:: PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(16, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }

        break;


    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        if(isset($_REQUEST['codigoUnico'])){
            $CodigoInsumo = $_REQUEST['codigoUnico'];
            $data = $Db->GetData(" SELECT top (1) * FROM Almac.DetalleForm1H where AlmacNumCodPresentInsu = $CodigoInsumo order by AlmacNumIdDetalleForm1H desc", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        else{
            $data = $Db->GetData(" SELECT * FROM Almac.DetalleForm1H ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            $data = $Db->GetData("SELECT * FROM Farm.vwFarmBuscar", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}