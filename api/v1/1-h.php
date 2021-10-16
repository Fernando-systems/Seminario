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

            $stmt = $Db->Sentencia("EXEC Almac.Sp_AddForm1H ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdForm1H'});
            $stmt->bindParam(2, $_REQUEST{'AlmacStrDependencia'});
            $stmt->bindParam(3, $_REQUEST{'AlmacStrNitProveedor'});
            $stmt->bindParam(4, $_REQUEST{'AlmacDateFecha'});
            $stmt->bindParam(5, $_REQUEST{'AlmacStrUnidEjec'});
            $stmt->bindParam(6, $_REQUEST{'AlmacStrOrdCYPNo'});
            $stmt->bindParam(7, $_REQUEST{'AlmacStrDatosFactura'});
            $stmt->bindParam(8, $_REQUEST{'AlmacStrNomProveedor'});
            $stmt->bindParam(9, $_REQUEST{'AlmacStrObservacionesForm1H'});
            $stmt->bindParam(10, $_REQUEST{'AlmacNumIdPrograma'});
            $stmt->bindParam(11, $_REQUEST{'AlmacStrSerieFactura'});
            $stmt->bindParam(12, $_REQUEST{'NumCGCOficial'});
            $stmt->bindParam(13, $_REQUEST{'AlmacStrResponsable'});
            $stmt->bindParam(14, $_REQUEST{'AlmacStrRespInventario'});
            $stmt->bindParam(15, $_REQUEST{'AlmacStrTotalLetras'});
            $stmt->bindParam(16, $_REQUEST{'AlmacSolPedido'});
            $stmt->bindParam(17, $_REQUEST{'AlmacStrAlmacen'});

            $stmt->bindParam(18, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 100);
            $stmt->bindParam(19, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 100);
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

            $stmt = $Db->Sentencia("EXEC Almac.Sp_DelForm1H ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdForm1H'});
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
            $stmt = $Db->Sentencia("EXEC Almac.Sp_UpForm1H ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdForm1H'});
            $stmt->bindParam(2, $_REQUEST{'AlmacStrDependencia'});
            $stmt->bindParam(3, $_REQUEST{'AlmacStrNitProveedor'});
            $stmt->bindParam(4, $_REQUEST{'AlmacDateFecha'});
            $stmt->bindParam(5, $_REQUEST{'AlmacStrUnidEjec'});
            $stmt->bindParam(6, $_REQUEST{'AlmacStrOrdCYPNo'});
            $stmt->bindParam(7, $_REQUEST{'AlmacStrDatosFactura'});
            $stmt->bindParam(8, $_REQUEST{'AlmacStrNomProveedor'});
            $stmt->bindParam(9, $_REQUEST{'AlmacStrObservacionesForm1H'});
            $stmt->bindParam(10, $_REQUEST{'AlmacNumIdTipo'});
            $stmt->bindParam(11, $_REQUEST{'AlmacNumIdPrograma'});
            $stmt->bindParam(11, $_REQUEST{'AlmacStrTotalLetras'});
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

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['mostVale'])){
        $data = $Db->GetData("SELECT * FROM Almac.Form1H WHERE NumCGCOficial IS NULL", $_SESSION['dbUser'], $_SESSION['dbPass']);
         }
        if(isset($_REQUEST['mostrep1h'])){
            $dateI = $_REQUEST['dateI'];
            $dateF = $_REQUEST['dateF'];
            $data = $Db->GetData(" Select * from [Almac].[View_1Rep1H] where AlmacDateFecha between '".$dateI."' and '".$dateF."'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['detalle1h'])){
            $Det1h = $_REQUEST['Det1h'];
            $data = $Db->GetData("select I.AlmacNumRenglon, I.AlmacNumCodInsumo, I.AlmacStrNomInsumo, /*I.AlmacStrCaractInsu,*/ I.AlmacStrPresentInsu,
            DF1.AlmacNumCantidad, DF1.AlmacNumPrecValTotal, DF1.AlmacStrNoLote, Almac.Numeros(K.AlmacNumIdKardex) AS AlmacNumIdKardex,

			CASE WHEN K.AlmacNumIdKardex LIKE '%-AS%' THEN 'Suministros' WHEN K.AlmacNumIdKardex LIKE '%-AA%' THEN 'Alimentos' WHEN K.AlmacNumIdKardex LIKE '%-MP%' THEN 'Medicamentos y Productos a Fines'
            WHEN K.AlmacNumIdKardex LIKE '%-MMQ%' THEN 'Médico Quirúrgico y Productos a Fines' WHEN K.AlmacNumIdKardex LIKE '%-MA%' THEN 'Medicamentos y Productos a Fines' 
			END AS Almacén,

			CASE WHEN AlmacDateFechaVenci1H = '1900-01-01' THEN 'No Aplica' ELSE CONVERT(varchar, AlmacDateFechaVenci1H, 103) END AS AlmacDateFechaVenci1H
			
			from Almac.DetalleForm1H DF1
            INNER JOIN Almac.Insumos I ON DF1.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu
            INNER JOIN Almac.Kardex K ON K.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu
            where AlmacNumIdForm1H  = $Det1h ", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['mostRequi'])){
            $DetReq = $_REQUEST['DetReq'];
            $data = $Db->GetData("Select * from [Almac].[vw_RepRequisicion]  where RequiCompleta = '".$DetReq."' order by 14", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

       echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
}