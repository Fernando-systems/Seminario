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

            $stmt = $Db->Sentencia("EXEC Almac.Sp_AddDetalleRequi ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdRequi'});
            $stmt->bindParam(2, $_REQUEST{'AlmacNumCantSolicitada'});
            $stmt->bindParam(3, $_REQUEST{'AlmacNumCantAutorizada'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumCantDespachada'});
            $stmt->bindParam(5, $_REQUEST{'AlmacNumCodPresentInsu'});
            $stmt->bindParam(6, $_REQUEST{'AlmacStrNoLote'});
            $stmt->bindParam(7, $_REQUEST{'AlmacDateFechaVenciReq'});
            
            $stmt->bindParam(8, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(9, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            
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

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdDetalle'});
       
            
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
            $stmt = $Db->Sentencia("EXEC Almac.Sp_UpDetalleRequi ?,?,?,?,?,? ");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdDetalle'});
            $stmt->bindParam(2, $_REQUEST{'AlmacNumIdRequi'});
            $stmt->bindParam(3, $_REQUEST{'AlmacNumCantSolicitada'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumCantAutorizada'});
            $stmt->bindParam(5, $_REQUEST{'AlmacNumCantDespachada'});
            $stmt->bindParam(6, $_REQUEST{'AlmacNumCodPresentInsu'});
            

            $stmt->bindParam(7, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(8, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);

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

        if(isset($_REQUEST['mostRequi'])){
            $dateI = $_REQUEST['dateI'];
            $dateF = $_REQUEST['dateF'];
            $data = $Db->GetData(" Select * from [Almac].[vw_RepRequisiciones] where AlmacDateFechaRequi between '".$dateI."' and '".$dateF."' order by 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        else if(isset($_REQUEST['UnidaSol'])){
            $data = $Db->GetData("select * from Almac.UnidadSolicitanteAlmac U inner join Almac.CentroCosto C on U.AlmacNumIdCenCosto = C.AlmacNumIdCenCosto", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        else {
            $data = $Db->GetData("select * from Almac.DetalleRequi", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}