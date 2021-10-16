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
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("Farm.Sp_AddRequiFarma ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdRequi'});
            $stmt->bindParam(2, $_REQUEST{'FarmStrServicio'});
            $stmt->bindParam(3, $_REQUEST{'FarmStrNomEntreg'});
            $stmt->bindParam(4, $_REQUEST{'FarmStrCargoEntrega'});
            $stmt->bindParam(5, $_REQUEST{'FarmStrNomRecibe'});
            $stmt->bindParam(6, $_REQUEST{'FarmStrCargoRecibe'});
            $stmt->bindParam(7, $_REQUEST{'FarmStrNomJefe'});
            $stmt->bindParam(8, $_REQUEST{'FarmStrCargoJefe'});
            $stmt->bindParam(9, $_REQUEST{'FarmStrObservaciones'});
            $stmt->bindParam(10, $_REQUEST{'FarmStrLugar'});
            $stmt->bindParam(11, $_REQUEST{'FarmDateFechaReq'});

            $stmt->bindParam(12, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(13, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
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

            $stmt = $Db->Sentencia("EXEC Farm.Sp_DelRequiFarma ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdRequi'});
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
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }
            $stmt = $Db->Sentencia("EXEC Farm.Sp_UpRequiFarma ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt = $Db->Sentencia("Farm.Sp_AddRequiFarma ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdRequi'});
            $stmt->bindParam(2, $_REQUEST{'FarmStrServicio'});
            $stmt->bindParam(3, $_REQUEST{'FarmStrNomEntreg'});
            $stmt->bindParam(4, $_REQUEST{'FarmStrCargoEntrega'});
            $stmt->bindParam(5, $_REQUEST{'FarmStrNomJefe'});
            $stmt->bindParam(6, $_REQUEST{'FarmStrCargoJefe'});
            $stmt->bindParam(7, $_REQUEST{'FarmStrObservaciones'});
            $stmt->bindParam(8, $_REQUEST{'FarmStrLugar'});
            $stmt->bindParam(9, $_REQUEST{'FarmDateFechaReq'});
            $stmt->bindParam(10, $_REQUEST{'FarmDateVencimiento'});
            $stmt->bindParam(11, $_REQUEST{'FarmStrNolote'});

            $stmt->bindParam(12, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(13, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
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

        if(isset($_REQUEST['FarmNumIdRequi'])){
            $numrequi = $_REQUEST['FarmNumIdRequi'];
            $data = $Db->GetData("SELECT * from Farm.RequiFarma where FarmNumIdRequi = $numrequi", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        $data = $Db->GetData("SELECT * FROM Farm.vwFarmBuscar", $_SESSION['dbUser'], $_SESSION['dbPass']);

        //$data = $Db->GetData("select * from   Farm.RequiFarma", $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
}