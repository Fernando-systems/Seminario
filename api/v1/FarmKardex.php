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

            $stmt = $Db->Sentencia("EXEC Farm.Sp_AddKardexFarmacia ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdKardexFarm'});
            $stmt->bindParam(2, $_REQUEST{'FarmNumNivelMinimo'});
            $stmt->bindParam(3, $_REQUEST{'FarmNumNivelMaximo'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumCodPresentInsu'});
            $stmt->bindParam(5, $_REQUEST{'FarmStrPresentInusmo'});
            $stmt->bindParam(6, $_REQUEST{'FarmStrUniInsumo'});
            $stmt->bindParam(7, $_REQUEST{'StrNombreInsumo'});
            $stmt->bindParam(8, $_REQUEST{'StrCaracteristicas'});

         

            $stmt->bindParam(9, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(10, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            
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

            $stmt = $Db->Sentencia("EXEC Farm.Sp_DelKardexFarmacia ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdKardexFarm'});
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
            $stmt = $Db->Sentencia("EXEC Farm.Sp_UpKardexFarmacia ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdKardexFarm'});
            $stmt->bindParam(2, $_REQUEST{'FarmNumNivelMinimo'});
            $stmt->bindParam(3, $_REQUEST{'FarmNumNivelMaximo'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumCodPresentInsu'});
            $stmt->bindParam(5, $_REQUEST{'FarmNumTipBodeg'});
        
         
            $stmt->bindParam(10, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(11, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
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

        if(isset($_REQUEST['AlmacNumCodPresentInsu'])){
            $codInsumo = $_REQUEST['AlmacNumCodPresentInsu'];
            $data = $Db->GetData("SELECT * FROM Farm.KardexFarmacia where AlmacNumCodPresentInsu = $codInsumo", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['FarmNumIdKardexFarm'])){
            $codInsumo = $_REQUEST['FarmNumIdKardexFarm'];
            $data = $Db->GetData("SELECT * FROM Farm.DetalleKardex where FarmNumIdKardexFarm = $codInsumo", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['AlmacNumCodPresentInsuDet'])){
            $codInsumo = $_REQUEST['AlmacNumCodPresentInsuDet'];
            $data = $Db->GetData("SELECT * FROM Farm.vw_MostrarKardex WHERE FarmNumIdKardexFarm = $codInsumo AND FarmBinEstado = 1 ORDER BY FarmNumIdDetKarde ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['DetalleFArm'])){//llena la tabla del kardex
            $numkardexdetalle = $_REQUEST['numkardexdetalle'];
            $data = $Db->GetData("SELECT * FROM 	Farm.vw_MostrarKardex where FarmNumIdKardexFarm = $numkardexdetalle order by FarmNumIdDetKarde asc", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['PR'])){//llena el encabezado del kardex famracia
            $numkardex = $_REQUEST['numkardex'];
            $data = $Db->GetData("Select I.AlmacNumRenglon, I.AlmacNumCodInsumo, KF.StrNombreInsumo, KF.FarmStrPresentInusmo, KF.FarmStrUniInsumo, KF.FarmNumNivelMinimo, KF.FarmNumNivelMaximo, KF.FarmNumIdKardexFarm
from Almac.Insumos I
INNER JOIN Farm.KardexFarmacia KF ON KF.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu
WHERE FarmNumIdKardexFarm = $numkardex and FarmBinEstado = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}