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

            $stmt = $Db->Sentencia("EXEC Farm.Sp_AddDescripConsolidado ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumCodigo'});
            $stmt->bindParam(2, $_REQUEST{'FarmStrNomInsumo'});
            $stmt->bindParam(3, $_REQUEST{'FarmNumUno'});
            $stmt->bindParam(4, $_REQUEST{'FarmNumDos'});
            $stmt->bindParam(5, $_REQUEST{'FarmNumtres'});
            $stmt->bindParam(6, $_REQUEST{'FarmNumCuatro'});
            $stmt->bindParam(7, $_REQUEST{'FarmNumCinco'});
            $stmt->bindParam(8, $_REQUEST{'FarmNumSeis'});
            $stmt->bindParam(9, $_REQUEST{'FarmNumSiete'});
            $stmt->bindParam(10, $_REQUEST{'FarmNumOcho'});
            $stmt->bindParam(11, $_REQUEST{'FarmNumNueve'});
            $stmt->bindParam(12, $_REQUEST{'FarmNumDiez'});
            $stmt->bindParam(13, $_REQUEST{'FarmNumOnce'});
            $stmt->bindParam(14, $_REQUEST{'FarmNumDoce'});
            $stmt->bindParam(15, $_REQUEST{'FarmNumTrece'});
            $stmt->bindParam(16, $_REQUEST{'FarmNumCatorce'});
            $stmt->bindParam(17, $_REQUEST{'FarmNumQuince'});
            $stmt->bindParam(18, $_REQUEST{'FarmNumDieciseis'});
            $stmt->bindParam(19, $_REQUEST{'FarmNumDiecisiete'});
            $stmt->bindParam(20, $_REQUEST{'FarmNumDieciocho'});
            $stmt->bindParam(21, $_REQUEST{'FarmNumDicinueve'});
            $stmt->bindParam(22, $_REQUEST{'FarmNumVeinte'});
            $stmt->bindParam(23, $_REQUEST{'FarmNumVeintiuno'});
            $stmt->bindParam(24, $_REQUEST{'FarmNumVeintidos'});
            $stmt->bindParam(25, $_REQUEST{'FarmNumVeintitres'});
            $stmt->bindParam(26, $_REQUEST{'FarmNumVeinticuatro'});
            $stmt->bindParam(27, $_REQUEST{'FarmNumVeinticinco'});
            $stmt->bindParam(28, $_REQUEST{'FarmNumVeintiseis'});
            $stmt->bindParam(29, $_REQUEST{'FarmNumVeintisiete'});
            $stmt->bindParam(30, $_REQUEST{'FarmNumVeintiocho'});
            $stmt->bindParam(31, $_REQUEST{'FarmNumVeintinueve'});
            $stmt->bindParam(32, $_REQUEST{'FarmNumTreinta'});
            $stmt->bindParam(33, $_REQUEST{'FarmNumTreintayUno'});
            $stmt->bindParam(34, $_REQUEST{'FarmNumTreintayDos'});
            $stmt->bindParam(35, $_REQUEST{'FarmNumTreintayTres'});
            $stmt->bindParam(36, $_REQUEST{'FarmNumCant'});
            $stmt->bindParam(37, $_REQUEST{'FarmNumDevCons'});
            $stmt->bindParam(38, $_REQUEST{'FarmNumTotalCons'});
            $stmt->bindParam(39, $_REQUEST{'FarmNumCodPrese'});
            $stmt->bindParam(40, $_REQUEST{'FarmNumIdConsoli'});
            $stmt->bindParam(41, $_REQUEST{'FarmStrConsolNom'});

            $stmt->bindParam(42, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(43, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            
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
        $data = $Db->GetData("SELECT * FROM Farm.DescripConsolidado", $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}