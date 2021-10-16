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

            $stmt = $Db->Sentencia("EXEC Almac.Sp_AddInsumo ?, ?, ?, ?, ?, ?, ? ");
            $stmt->bindParam(1, $_REQUEST{'AlmacNumRenglon'});
            $stmt->bindParam(2, $_REQUEST{'AlmacNumCodInsumo'});
            $stmt->bindParam(3, $_REQUEST{'AlmacStrNomInsumo'});
            $stmt->bindParam(4, $_REQUEST{'AlmacStrCaractInsu'});
            $stmt->bindParam(5, $_REQUEST{'AlmacStrPresentInsu'});
            $stmt->bindParam(6, $_REQUEST{'AlmacStrCantYUnidInsu'});
            $stmt->bindParam(7, $_REQUEST{'AlmacNumCodPresentInsu'});

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

            $stmt = $Db->Sentencia("EXEC Almac.Sp_DelInsumos ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumCodPresentInsu'});
            //$stmt->bindParam(2, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            //$stmt->bindParam(3, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
           //echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
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
            $stmt = $Db->Sentencia("EXEC Almac.Sp_UpInsumos ?, ?, ?, ?, ?, ?, ? ");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumCodInsumo'});
            $stmt->bindParam(2, $_REQUEST{'AlmacNumRenglon'});
            $stmt->bindParam(3, $_REQUEST{'AlmacStrNomInsumo'});
            $stmt->bindParam(4, $_REQUEST{'AlmacStrCaractInsu'});
            $stmt->bindParam(5, $_REQUEST{'AlmacStrPresentInsu'});
            $stmt->bindParam(6, $_REQUEST{'AlmacStrCantYUnidInsu'});
            $stmt->bindParam(7, $_REQUEST{'AlmacNumCodPresentInsu'});
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

        if(isset($_REQUEST['InsumoKardex'])){
            $codInsumo = $_REQUEST['AlmacNumCodPresentInsuK'];
            $data = $Db->GetData("select top (1) * from [Almac].[vw_InsumoKardex] where AlmacBinEstado = 1 and AlmacNumCodPresentInsu = $codInsumo", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['AlmacNumCodPresentInsu'])){
            $codInsumo = $_REQUEST['AlmacNumCodPresentInsu'];
            $data = $Db->GetData("SELECT * FROM Almac.Insumos WHERE AlmacNumCodPresentInsu = $codInsumo", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['VencimientoReq'])){
            $codInsumo = $_REQUEST['codImsumoAlmacReq'];
            $data = $Db->GetData("select * from Almac.vw_LoteVencimientoInsumo where AlmacNumCodPresentInsu = $codInsumo and AlmacNumCantidad > 0 order by AlmacDateVenci asc", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['VencimientoFarm'])){
            $codInsumo = $_REQUEST['codImsumoFarm'];
            $data = $Db->GetData("SELECT * FROM Farm.vw_LoteVencimientoFarm
WHERE AlmacNumCodPresentInsu = $codInsumo and FarmNumCantidad > 0 and FarmBinEstado = 1 order by FarmDateVencimiento desc", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['AlmacNumCodInsumo'])){
            $codInsumo = $_REQUEST['AlmacNumCodInsumo'];
            $data = $Db->GetData("select * from Almac.Insumos where AlmacNumCodInsumo = $codInsumo", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['AlmacNumCodInsumo1h'])){
            $codInsumo = $_REQUEST['AlmacNumCodInsumo1h'];
            $data = $Db->GetData("SELECT Almac.Insumos.AlmacNumRenglon, Almac.Insumos.AlmacNumCodInsumo, Almac.Insumos.AlmacStrNomInsumo, Almac.Insumos.AlmacStrCaractInsu, Almac.Insumos.AlmacStrPresentInsu, Almac.Insumos.AlmacStrCantYUnidInsu, Almac.Insumos.AlmacNumCodPresentInsu, Almac.Kardex.AlmacNumIdKardex
FROM Almac.Insumos INNER JOIN Almac.Kardex ON Almac.Insumos.AlmacNumCodPresentInsu = Almac.Kardex.AlmacNumCodPresentInsu where AlmacNumCodInsumo = $codInsumo and Almac.Kardex.AlmacBinEstado = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

                if(isset($_REQUEST['AlmacNumCodInsumop'])){
            $codInsumo = $_REQUEST['AlmacNumCodInsumop'];
            $data = $Db->GetData("SELECT Farm.KardexFarmacia.*, Almac.Insumos.AlmacNumRenglon, Almac.Insumos.AlmacNumCodInsumo, Almac.Insumos.AlmacStrNomInsumo, Almac.Insumos.AlmacStrCaractInsu
FROM Almac.Insumos INNER JOIN
Farm.KardexFarmacia ON Almac.Insumos.AlmacNumCodPresentInsu =  Farm.KardexFarmacia.AlmacNumCodPresentInsu where Almac.Insumos.AlmacNumCodInsumo = $codInsumo", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

                if(isset($_REQUEST['AlmacNumCodPresentInsup'])){
            $codInsumo = $_REQUEST['AlmacNumCodPresentInsup'];
            $data = $Db->GetData("SELECT KF.StrNombreInsumo, KF.StrCaracteristicas, KF.FarmStrPresentInusmo, KF.FarmStrUniInsumo, I.AlmacNumRenglon
FROM Almac.Insumos I INNER JOIN
Farm.KardexFarmacia KF ON I.AlmacNumCodPresentInsu =  KF.AlmacNumCodPresentInsu WHERE KF.AlmacNumCodPresentInsu = $codInsumo and KF.FarmBinEstado = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['AlmacNumCodInsumoCrearK'])){
            $codInsumo = $_REQUEST['AlmacNumCodInsumoCrearK'];
            $data = $Db->GetData("SELECT * FROM Almac.Insumos where AlmacNumCodInsumo = $codInsumo", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['abreviatura'])){
            $data = $Db->GetData("DECLARE @NumAlmacen int
select @NumAlmacen = AlmacNumIdTipo from Almac.vw_Abreviatura

IF @NumAlmacen = 1
BEGIN
SELECT *
from Almac.TipoAlmac
WHERE AlmacNumIdTipo in (1, 6)
END
ELSE IF @NumAlmacen = 2
BEGIN
SELECT *
from Almac.TipoAlmac
WHERE AlmacNumIdTipo in (2)
END
ELSE IF @NumAlmacen = 3
BEGIN
SELECT *
from Almac.TipoAlmac
WHERE AlmacNumIdTipo in (3, 4)
END", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}
