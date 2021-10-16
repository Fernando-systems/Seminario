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


    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if (isset($_REQUEST['NombreUsuario'])) {
            $data = $Db->GetData("Select SU.SegNumUsuario, SU.SegStrUsuario, SU.SegStrPuesto, SU.SegStrNomUsuario, STF.TipoBodega, FTB.FarmNumStrTipBod, FTB.FarmNumIDTipFarm, FTF.FarmStrTipoFarmacia, FTF.FarmStrEstado
from seguridad.Usuario SU
INNER JOIN seguridad.TipoFarmacia STF ON STF.LoginFarmacia = SU.SegStrUsuario
INNER JOIN Farm.TipoBodega FTB ON STF.TipoBodega = FTB.FarmNumIdTipBod
INNER JOIN Farm.TipoFarmacia FTF ON FTB.FarmNumIDTipFarm = FTF.FarmNumIDTipFarm
where SU.SegStrUsuario = ORIGINAL_LOGIN() AND FTF.FarmStrEstado = 1
", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        } else {



        $CodigoInsumo = $_REQUEST['AlmacNumCodInsumo'];


        $data = $Db->GetData("SELECT EntK.AlmacDateFecha, Entk.AlmacStrDatosFactura, Entk.AlmacStrNomProveedor, EntK.AlmacStrPresentInsu, EntK.AlmacStrNoLote, EntK.AlmacDateFechaVenci1H, EntK.AlmacNumPrecValTotal, EntK.AlmacNumCantidad, EntK.AlmacNumPrecUnidad, Requi.AlmacDateFechaRequi, Requi.AlmacNumIdRequi, UniSolA.AlmacStrNomUnidSolici, Insu.AlmacStrPresentInsu, DetF1h.AlmacDateFechaVenci1H, DetRequi.AlmacNumCantDespachada,EntK.AlmacNumPrecValTotal
            FROM Almac.DetalleForm1H  AS DetF1h
            INNER JOIN Almac.Insumos AS Insu on Insu.AlmacNumCodPresentInsu= DetF1h.AlmacNumCodPresentInsu
            INNER JOIN Almac.DetalleRequi AS DetRequi on DetRequi.AlmacNumCodPresentInsu= Insu.AlmacNumCodPresentInsu
            INNER JOIN Almac.Requisicion AS Requi on Requi.AlmacNumIdRequi= DetRequi.AlmacNumIdRequi
            INNER JOIN Almac.UnidadSolicitanteAlmac AS UniSolA on UniSolA.AlmacNumIdUnidadSoli = Requi.AlmacNumIdUnidadSoli
            INNER JOIN Almac.vw_EntradaKardex  AS EntK on EntK.AlmacNumCodInsumo= Insu.AlmacNumCodInsumo
            WHERE Insu.AlmacNumCodPresentInsu ='$CodigoInsumo'",
            $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
}
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
    }