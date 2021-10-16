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
            $stmt = $Db->Sentencia("EXEC Farm.Sp_AddReajusteFarm ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdReajuste'});
            $stmt->bindParam(2, $_REQUEST{'FarmDatFecha'});
            $stmt->bindParam(3, $_REQUEST{'FarmStrTipReajuste'});
            $stmt->bindParam(4, $_REQUEST{'FarmStrUnidSolicitante'});
            $stmt->bindParam(5, $_REQUEST{'FarmStrUnidEntrega'});
            $stmt->bindParam(6, $_REQUEST{'FarmStrNomSolic'});
            $stmt->bindParam(7, $_REQUEST{'FarmStrCargoSolic'});
            $stmt->bindParam(8, $_REQUEST{'FarmStrNomEntrega'});
            $stmt->bindParam(9, $_REQUEST{'FarmStrCargoEntrega'});
            $stmt->bindParam(10, $_REQUEST{'FarmStrNomGerFinancSol'});
            $stmt->bindParam(11, $_REQUEST{'FarmStrNomGerAdmFinEnt'});
            $stmt->bindParam(12, $_REQUEST{'FarmStrNomSubDiSol'});
            $stmt->bindParam(13, $_REQUEST{'FarmStrNomDiEjecEnt'});
            $stmt->bindParam(14, $_REQUEST{'FarmStrObserv'});

            $stmt->bindParam(15, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
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
    /*
          case 'DELETE':
        //Procedimiento para Eliminar
                try {
                    $Db = new Database();
                    if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                        echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                        exit(0);
                    }

                    $stmt = $Db->Sentencia("EXEC Almac.Sp_DelReajuste ?");

                    $stmt->bindParam(1, $_REQUEST{'AlmacNumIdReajust'});


                    $stmt->bindParam(2, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
                    $stmt->bindParam(3, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
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
                    $stmt = $Db->Sentencia("EXEC  Almac.Sp_UpReajuste ?,?,?,?,?,?,?,?,?,?,?,?,? ");

                    $stmt->bindParam(1, $_REQUEST{'AlmacDatFecha'});
                    $stmt->bindParam(2, $_REQUEST{'AlmacStrUnidSolicitante'});
                    $stmt->bindParam(3, $_REQUEST{'AlmacStrUnidEntrega'});
                    $stmt->bindParam(4, $_REQUEST{'AlmacStrTipReajuste'});
                    $stmt->bindParam(5, $_REQUEST{'AlmacStrNomSolic'});
                    $stmt->bindParam(6, $_REQUEST{'AlmacStrCargoSolic'});
                    $stmt->bindParam(7, $_REQUEST{'AlmacStrNomEntrega'});
                    $stmt->bindParam(8, $_REQUEST{'AlmacStrCargoEntrega'});
                    $stmt->bindParam(9, $_REQUEST{'AlmacStrNomGerFinanc'});
                    $stmt->bindParam(10, $_REQUEST{'AlmacStrNomGerAdmFin'});
                    $stmt->bindParam(11, $_REQUEST{'AlmacStrNomSubDiSol'});
                    $stmt->bindParam(12, $_REQUEST{'AlmacStrNomDiEjecEnt'});
                    $stmt->bindParam(13, $_REQUEST{'AlmacStrObserv'});


                    $stmt->bindParam(14, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
                    $stmt->bindParam(15, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);

                    $stmt->execute();
                    $data = $stmt->fetchAll();
                    $data = $data[0];
                    echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                    $stmt->closeCursor();
                } catch (PDOException $p) {
                     echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
                }

                break;*/

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        if(isset($_REQUEST['FarmNumIdReajuste'])){
            $FarmNumIdReajuste = $_REQUEST['FarmNumIdReajuste'];
            $data = $Db->GetData("select * from Farm.ReajusteFarm where FarmNumIdReajuste = $FarmNumIdReajuste", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}