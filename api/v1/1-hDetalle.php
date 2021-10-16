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

            $stmt = $Db->Sentencia("EXEC Almac.Sp_AddDetalleForm1H ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdForm1H'});
            $stmt->bindParam(2, $_REQUEST{'AlmacNumCantidad'});
            $stmt->bindParam(3, $_REQUEST{'AlmacNumFolioLibAlmac'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumPrecUnidad'});
            $stmt->bindParam(5, $_REQUEST{'AlmacNumPrecValTotal'});
            $stmt->bindParam(6, $_REQUEST{'AlmacNumFolioLibInven'});
            $stmt->bindParam(7, $_REQUEST{'AlmacNumIdNomen'});
            $stmt->bindParam(8, $_REQUEST{'AlmacNumCodPresentInsu'});
            $stmt->bindParam(9, $_REQUEST{'AlmacNumTotal'});
            $stmt->bindParam(10, $_REQUEST{'AlmacStrObservacioensDetall'});
            //$stmt->bindParam(11, $_REQUEST{'AlmacStrNoFacturaDetall'});
            $stmt->bindParam(11, $_REQUEST{'AlmacStrNoLote'});
            $stmt->bindParam(12, $_REQUEST{'AlmacDateFechaVenci1H'});

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
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }
            $stmt = $Db->Sentencia("EXEC Almac.Sp_UpDetalleForm1H ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdDetalleForm1H'});
            $stmt->bindParam(2, $_REQUEST{'AlmacNumIdForm1H'});
            $stmt->bindParam(3, $_REQUEST{'AlmacNumCantidad'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumFolioLibAlmac'});
            $stmt->bindParam(5, $_REQUEST{'AlmacNumPrecUnidad'});
            $stmt->bindParam(6, $_REQUEST{'AlmacNumPrecValTotal'});
            $stmt->bindParam(7, $_REQUEST{'AlmacNumFolioLibInven'});
            $stmt->bindParam(8, $_REQUEST{'AlmacNumIdNomen'});
            $stmt->bindParam(9, $_REQUEST{'AlmacNumCodPresentInsu'});
            $stmt->bindParam(10, $_REQUEST{'AlmacNumTotal'});
            $stmt->bindParam(11, $_REQUEST{'AlmacStrObservacionesDetall'});
            $stmt->bindParam(12, $_REQUEST{'AlmacStrNoFacturaDetall'});
            $stmt->bindParam(13, $_REQUEST{'AlmacStrNoLote'});
            $stmt->bindParam(14, $_REQUEST{'AlmacDateFechaVenci1H'});

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

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['OrdenAdj'])){
             $OrdenC = $_REQUEST['OrdenC'];
             $data = $Db->GetData("SELECT E.ComNumEstatus, S.ComNumCodInsu, S.ComEstadoFinal, A.NumOC, S.ComNumSolicitud, CP.ComNumSolPedido, CP.AnioSolicitud, A.StrNombreProv, A.StrNitProv
FROM Com.ComDetSolicitud AS S
LEFT OUTER JOIN Com.ComEstatus AS E ON E.ComNumEstatus = S.ComEstadoFinal
inner join com.AdjuInsumo as A on A.ComDetSolicitud = S.ComDetSolicitud 
INNER JOIN Com.ComSolicitudPedido CP ON Cp.ComNumSolicitud = S.ComNumSolicitud
where A.NumOC = '$OrdenC' and ComNumEstatus = 59  order by NumOC asc", $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['codigoUnico'])){
            $CodigoInsumo = $_REQUEST['codigoUnico'];
            $data = $Db->GetData(" SELECT top (1) * FROM Almac.DetalleForm1H where AlmacNumCodPresentInsu = $CodigoInsumo order by AlmacNumIdDetalleForm1H desc", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['Nomenclatura'])){
            $CodNomenclatura = $_REQUEST['Nomenclatura'];
            $data = $Db->GetData("SELECT * FROM Almac.Nomenclatura where  AlmacNumIdNomen = $CodNomenclatura", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        else{
            $data = $Db->GetData(" SELECT * FROM Almac.DetalleForm1H ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST ['NoSolPedido'])){
            $Numanio = $_REQUEST['AnioSolPedido'];
            $NumSoliciut = $_REQUEST['NumSol'];
            $data =  $Db->GetData("SELECT S.ComDetSolicitud, E.ComNumEstatus, S.ComNumCodInsu, S.ComEstadoFinal, A.NumOC, S.ComNumSolicitud, CP.ComNumSolPedido, CP.AnioSolicitud, StrNombreProv, StrNitProv
            FROM Com.ComDetSolicitud AS S
            LEFT OUTER JOIN Com.ComEstatus AS E ON E.ComNumEstatus = S.ComEstadoFinal
            INNER JOIN com.AdjuInsumo AS A ON A.ComDetSolicitud = S.ComDetSolicitud 
            INNER JOIN Com.ComSolicitudPedido CP ON Cp.ComNumSolicitud = S.ComNumSolicitud
            where ComNumSolPedido = $NumSoliciut and AnioSolicitud = $Numanio and ComNumEstatus = 59  order by NumOC asc", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);

        }
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
}