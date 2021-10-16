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


        if(isset($_REQUEST['invMostrarBuscar'])){
            $data = $Db->GetData("DECLARE @FarmNumIdTipoFarmacia int
        DECLARE @FarmNumIdTipoBodega int
        Select @FarmNumIdTipoFarmacia = FarmNumIDTipFarm from seguridad.TipoFarmacia AS ST INNER JOIN Farm.TipoBodega AS 
		FT ON ST.TipoBodega = FT.FarmNumIdTipBod where LoginFarmacia = ORIGINAL_LOGIN()
        Select @FarmNumIdTipoBodega = FarmNumIdTipBod from seguridad.TipoFarmacia AS ST INNER JOIN Farm.TipoBodega AS FT
		ON ST.TipoBodega = FT.FarmNumIdTipBod where LoginFarmacia = ORIGINAL_LOGIN()
        Select * from Farm.vw_MostrarInvenBuscar where FarmNumTipBodeg = @FarmNumIdTipoBodega and FarmNumIDTipFarm = @FarmNumIdTipoFarmacia
        ORDER BY FarmNumIdKardexFarm ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        else{
            $data = $Db->GetData("DECLARE @FarmNumIdTipoFarmacia int
                                    DECLARE @FarmNumIdTipoBodega int
        Select @FarmNumIdTipoFarmacia = FarmNumIDTipFarm from seguridad.TipoFarmacia AS ST INNER JOIN Farm.TipoBodega AS FT ON ST.TipoBodega = FT.FarmNumIdTipBod where LoginFarmacia = ORIGINAL_LOGIN()
        Select @FarmNumIdTipoBodega = FarmNumIdTipBod from seguridad.TipoFarmacia AS ST INNER JOIN Farm.TipoBodega AS FT ON ST.TipoBodega = FT.FarmNumIdTipBod where LoginFarmacia = ORIGINAL_LOGIN()
        Select * from Farm.vw_Inventario where FarmNumTipBodeg = @FarmNumIdTipoBodega and FarmNumIDTipFarm = @FarmNumIdTipoFarmacia
        ORDER BY FarmNumIdKardexFarm ASC
        ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }



       // $CodigoInsumo = $_REQUEST['AlmacNumCodPresentInsu'];
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
    }