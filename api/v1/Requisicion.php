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

            $stmt = $Db->Sentencia("Almac.Sp_AddRequisicion ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdRequi'});
            $stmt->bindParam(2, $_REQUEST{'AlmacStrLugarRequi'});
            $stmt->bindParam(3, $_REQUEST{'AlmacDateFechaRequi'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumIdUnidadSoli'});
            $stmt->bindParam(5, $_REQUEST{'AlmacDateReqDoc'});
            // $stmt->bindParam(10, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            //$stmt->bindParam(11, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            //echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
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

            $stmt = $Db->Sentencia("EXEC Almac.Sp_DelRequisicion ?");

            $stmt->bindParam(1, $_REQUEST{'IntIdRequiAlmac'});
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
            $stmt = $Db->Sentencia("EXEC Almac.Sp_UpRequisicion ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'IntIdRequiAlmac'});
            $stmt->bindParam(2, $_REQUEST{'StrLugarRequi'});
            $stmt->bindParam(3, $_REQUEST{'DateFechaRequi'});
            $stmt->bindParam(4, $_REQUEST{'IntIdUnidadSoli'});
            $stmt->bindParam(5, $_REQUEST{'AlmacDateReqDoc'});
            // $stmt->bindParam(10, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            //$stmt->bindParam(11, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            //  echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }

        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        //$data = $Db->GetData("select * from Almac.Requisicion", $_SESSION['dbUser'], $_SESSION['dbPass']);
        $data = $Db->GetData("DECLARE @TipoAlmacen int
SELECT @TipoAlmacen = AlmacNumIdTipo from seguridad.TipoAlmacen where LoginAlmacen = ORIGINAL_LOGIN()
--select @TipoAlmacen

if @TipoAlmacen = 3
BEGIN
SELECT Almac.Insumos.AlmacNumCodInsumo, Almac.Insumos.AlmacStrNomInsumo, Almac.Insumos.AlmacStrCaractInsu, Almac.Insumos.AlmacStrPresentInsu, Almac.Insumos.AlmacStrCantYUnidInsu, Almac.Insumos.AlmacNumRenglon, Almac.Kardex.AlmacNumIdKardex, Almac.Kardex.AlmacNumPreUnExist, 
CASE WHEN Vencimiento.AlmacDateVenci = '1900-01-01' THEN 'No Aplica' ELSE CAST(Vencimiento.AlmacDateVenci AS varchar(MAX)) END AS AlmacDateVenci, 
CASE WHEN Vencimiento.AlmacStrLote = '' THEN 'No Aplica' ELSE CAST(Vencimiento.AlmacStrLote AS VARCHAR(MAX)) END AS AlmacStrLote, Almac.Vencimiento.AlmacNumCantidad, Almac.Vencimiento.AlmacNumIdTipo
FROM Almac.Insumos
INNER JOIN Almac.Kardex ON Almac.Insumos.AlmacNumCodPresentInsu = Almac.Kardex.AlmacNumCodPresentInsu
INNER JOIN Almac.Vencimiento ON Almac.Kardex.AlmacNumIdKardex = Almac.Vencimiento.AlmacNumIdKardex
CROSS JOIN seguridad.TipoAlmacen
left JOIN seguridad.TipoAlmacen TA ON TA.AlmacNumIdTipo = Vencimiento.AlmacNumIdTipo where Vencimiento.AlmacNumIdTipo between 3 and 4
GROUP BY Almac.Insumos.AlmacNumCodInsumo, Almac.Insumos.AlmacStrNomInsumo, Almac.Insumos.AlmacStrCaractInsu, Almac.Insumos.AlmacStrPresentInsu, Almac.Insumos.AlmacStrCantYUnidInsu, Almac.Insumos.AlmacNumRenglon, Almac.Kardex.AlmacNumIdKardex, Almac.Kardex.AlmacNumPreUnExist, Almac.Vencimiento.AlmacDateVenci, Almac.Vencimiento.AlmacStrLote, Almac.Vencimiento.AlmacNumCantidad, Almac.Vencimiento.AlmacNumIdTipo
END
ELSE 
BEGIN 
SELECT  Almac.Insumos.AlmacNumCodInsumo, Almac.Insumos.AlmacStrNomInsumo, Almac.Insumos.AlmacStrCaractInsu, Almac.Insumos.AlmacStrPresentInsu, Almac.Insumos.AlmacStrCantYUnidInsu, Almac.Insumos.AlmacNumRenglon, Almac.Kardex.AlmacNumIdKardex, Almac.Kardex.AlmacNumPreUnExist, 
CASE WHEN Vencimiento.AlmacDateVenci = '1900-01-01' THEN 'No Aplica' ELSE CAST(Vencimiento.AlmacDateVenci AS varchar(MAX)) END AS AlmacDateVenci, 
CASE WHEN Vencimiento.AlmacStrLote = '' THEN 'No Aplica' ELSE CAST(Vencimiento.AlmacStrLote AS VARCHAR(MAX)) END AS AlmacStrLote, Almac.Vencimiento.AlmacNumCantidad, Almac.Vencimiento.AlmacNumIdTipo
FROM Almac.Insumos INNER JOIN Almac.Kardex ON Almac.Insumos.AlmacNumCodPresentInsu = Almac.Kardex.AlmacNumCodPresentInsu
INNER JOIN Almac.Vencimiento ON Almac.Kardex.AlmacNumIdKardex = Almac.Vencimiento.AlmacNumIdKardex CROSS JOIN seguridad.TipoAlmacen JOIN seguridad.TipoAlmacen TA ON TA.AlmacNumIdTipo = Vencimiento.AlmacNumIdTipo where TA.AlmacNumIdTipo = @TipoAlmacen
GROUP BY Almac.Insumos.AlmacNumCodInsumo, Almac.Insumos.AlmacStrNomInsumo, Almac.Insumos.AlmacStrCaractInsu, Almac.Insumos.AlmacStrPresentInsu, Almac.Insumos.AlmacStrCantYUnidInsu, Almac.Insumos.AlmacNumRenglon, Almac.Kardex.AlmacNumIdKardex, Almac.Kardex.AlmacNumPreUnExist, Almac.Vencimiento.AlmacDateVenci, Almac.Vencimiento.AlmacStrLote, Almac.Vencimiento.AlmacNumCantidad, Almac.Vencimiento.AlmacNumIdTipo END
", $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}