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
        if(isset($_REQUEST['AlmacAnular'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Almac.Sp_AnularForm1H ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'AlmacNumIdForm1HAnular'});
                $stmt->bindParam(2, $_REQUEST{'AlmacNumIdForm1HNuevo'});
                $stmt->bindParam(3, $_REQUEST{'DateFechaform'});
                $stmt->bindParam(4, $_REQUEST{'DateFechaNueva'});
                $stmt->bindParam(5, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 100);
                $stmt->bindParam(6, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 100);
                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }
else{
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Almac.Sp_AddTestado ?, ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdForm1H'});
            $stmt->bindParam(2, $_REQUEST{'AlmacStrTestado'});


            $stmt->bindParam(3, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 100);
            $stmt->bindParam(4, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 100);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }
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

        if(isset($_REQUEST['Form1HAnular'])){
            $IDAnularFomr1H = $_REQUEST['IDAnularFomr1H'];
            $data = $Db->GetData("Select AlmacDateFecha, AlmacStrNomProveedor from Almac.Form1H where AlmacNumIdForm1H = $IDAnularFomr1H", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
else {
    $data = $Db->GetData("SELECT * FROM Almac.Testado", $_SESSION['dbUser'], $_SESSION['dbPass']);

}





        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
}