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

        if(isset($_REQUEST['ModCambioKardexDetalle'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }
                $stmt = $Db->Sentencia("EXEC [Almac].[Sp_UpKardexDetalle] ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'AlmacNumIdKardexCerrar'});
                $stmt->bindParam(2, $_REQUEST{'AlmacNumIdKardexNuevo'});
                $stmt->bindParam(3, $_REQUEST{'FilaSeleccionada'});
                $stmt->bindParam(4, $_REQUEST{'UltimaFila'});
                $stmt->bindParam(5, $_REQUEST{'PrimeraFila'});
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
        }

        else{
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Almac.Sp_AddKardex ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'IntIdKardex'});
                $stmt->bindParam(2, $_REQUEST{'IntNivelMinimo'});
                $stmt->bindParam(3, $_REQUEST{'IntNivelMaximo'});
                $stmt->bindParam(4, $_REQUEST{'IntCodPresentInsu'});
                $stmt->bindParam(5, $_REQUEST{'AlmacStrTipo'});

                $stmt->bindParam(6, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
                $stmt->bindParam(7, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
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

            $stmt = $Db->Sentencia("EXEC Almac.Sp_DelKardex ?");

            $stmt->bindParam(1, $_REQUEST{'IntIdKardex'});
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

        if(isset($_REQUEST['ModCambioKardexDetalle'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }
                $stmt = $Db->Sentencia("EXEC [Almac].[Sp_UpKardexDetalle] ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'AlmacNumIdKardexCerrar'});
                $stmt->bindParam(2, $_REQUEST{'AlmacNumIdKardexNuevo'});
                $stmt->bindParam(3, $_REQUEST{'FilaSeleccionada'});
                $stmt->bindParam(4, $_REQUEST{'UltimaFila'});
                $stmt->bindParam(5, $_REQUEST{'PrimeraFila'});
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
        }
        break;

    case 'PUT':
//Procedimiento para modificar


        if(isset($_REQUEST['ModCambioKardex'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }
                $stmt = $Db->Sentencia("EXEC Almac.Sp_UpKardex ?, ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'AlmacNumIdKardexCerrar'});
                $stmt->bindParam(2, $_REQUEST{'AlmacNumIdKardexNuevo'});
                $stmt->bindParam(3, $_REQUEST{'AlmacStrTipo'});
                $stmt->bindParam(4, $_REQUEST{'AlmacNumNivelMinimo'});
                $stmt->bindParam(5, $_REQUEST{'AlmacNumNivelMaximo'});
                $stmt->bindParam(6, $_REQUEST{'AlmacNumCodPresentInsu'});
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
        }

        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['AlmacNumCodInsumo'])){
            $CodInsumo = $_REQUEST['AlmacNumCodInsumo'];
            $data = $Db->GetData("SELECT ROW_NUMBER() OVER(ORDER BY AlmacNumIdDeltKard) AS NoFila, 
       * FROM Almac.vw_AlmacKardex where AlmacNumCodPresentInsu = $CodInsumo and AlmacBinEstado = 1 order by AlmacNumIdDeltKard asc", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['codigoUnico'])){
            $CodInsumo = $_REQUEST['codigoUnico'];
            $data = $Db->GetData("SELECT top (1) * from Almac.vw_AlmacKardex where AlmacNumCodPresentInsu = $CodInsumo order by AlmacNumIdDeltKard desc", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['AlmacDetCerrarKardex'])){
            $detKardAlmac = $_REQUEST['detKardAlmac'];
            $numKardex = $_REQUEST['numKardex'];
            $data = $Db->GetData("select * 
                    from Almac.Kardex K
                    inner join Almac.DetalleKardex KD on K.AlmacNumIdKardex = KD.AlmacNumIdKardex
                    where K.AlmacNumIdKardex = '".$numKardex."' --Kardex que se esta visualizando
                    AND AlmacBinEstado = 1
                    AND AlmacNumIdDeltKard >= $detKardAlmac --Id de fila seleccionado
                    order by 9", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['AlmacDetVanKardex'])){
            $filakardexalmac = $_REQUEST['filakardexalmac'];
            $numKardexalmac = $_REQUEST['numKardexalmac'];
            $data = $Db->GetData("SELECT AlmacNumExisCantid, AlmacNumExisPUnit, AlmacNumExisVaTotal FROM Almac.Kardex K
INNER JOIN Almac.DetalleKardex D ON K.AlmacNumIdKardex = D.AlmacNumIdKardex
WHERE K.AlmacNumIdKardex = '".$numKardexalmac."' AND K.AlmacBinEstado = 1 AND AlmacNumIdDeltKard = $filakardexalmac", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }


       if(isset($_REQUEST['AlmacNumCodPresentInsu'])){
            $CodInsumo = $_REQUEST['AlmacNumCodPresentInsu'];
            $data = $Db->GetData("SELECT I.AlmacNumCodPresentInsu, K.AlmacBinEstado, K.AlmacNumIdKardex, K.AlmacNumCantExist, K.AlmacNumPreUnExist 
FROM Almac.Insumos I
INNER JOIN Almac.Kardex K ON I.AlmacNumCodPresentInsu = K.AlmacNumCodPresentInsu
where I.AlmacNumCodPresentInsu =  $CodInsumo and AlmacBinEstado = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}