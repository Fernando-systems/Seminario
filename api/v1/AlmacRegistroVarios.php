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
//Procedimiento para agregar encabezado Solicitud
        if(isset($_REQUEST['AlmacStrTipMovi'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }
                //procedimiento para renombrar archivo y moverlo a la carpeta del servidor
                $nombreArchivo = trim($_FILES['adjuntoDocRespaldo']['name']); //Tomo el nombre de la imagen y elimina espacion
                $nomGuardar= NULL;
                if($nombreArchivo != NULL) {
                    $patron = '[\s+]'; //Detecta espacion en blanco
                    $sustitución = '';
                    //preg_replace($patron, $sustitución, $cadena);
                    $nombreArchivo = preg_replace($patron, $sustitución, $nombreArchivo); //sustituye expresion regular
                    $fechaactual = date("m.d.y");   //Fecha Actual
                    $no_aleatorio = rand(10, 99); //Generamos dos Digitos aleatorio
                    $archivo = $_FILES['adjuntoDocRespaldo']['tmp_name']; //Tomo el archivo como tal
                    $ruta = "../../docs/"; // nombre de la capeta contenedora de las imagenes
                    $ruta = $ruta . "/" . $fechaactual . "_" . $no_aleatorio . $nombreArchivo; //completo ruta y nombre del archivo adjuntando otro formato para que no se repita el nombre del mismo
                    $nomGuardar = $fechaactual . "_" . $no_aleatorio . $nombreArchivo;
                    move_uploaded_file($archivo, $ruta); //se coloca el arvhico en la ruta
                }

                // procedimiento para agregar a BD
                $stmt = $Db->Sentencia("EXEC Almac.Sp_AddIngreEgreVarios ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'AlmacStrTipMovi'});
                $stmt->bindParam(2, $_REQUEST{'AlmacFecha'});
                $stmt->bindParam(3, $_REQUEST{'AlmacNoDocumento'});
                $stmt->bindParam(4, $_REQUEST{'AlmacStrDescrip'});
                $stmt->bindParam(5, $nomGuardar);
                $stmt->bindParam(6, $_REQUEST{'AlmacStrEncargado'});
                $stmt->bindParam(7, $_REQUEST{'AlmacStrIngreEgre'});
                $stmt->bindParam(8, $_REQUEST{'AlmacStrDireccion'});
                $stmt->bindParam(9, $_REQUEST{'AlmacStrGAF'});
                $stmt->bindParam(10, $_REQUEST{'AlmacStrActiFijos'});
                $stmt->bindParam(11, $_REQUEST{'AlmacStrOb'});
                //$stmt->bindParam(5, $nomGuardarFicha);

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }
        //Procedimiento para agregar Detalle Solicitud
        if(isset($_REQUEST['AlmacDateVencimiento'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Almac.Sp_DetalleAddIngreEgreVarios ?, ?, ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'AlmacNumIdVarios'});
                $stmt->bindParam(2, $_REQUEST{'AlmacNumIdKardex'});
                $stmt->bindParam(3, $_REQUEST{'AlmacNumCodPresentInsu'});
                $stmt->bindParam(4, $_REQUEST{'AlmacNumCantidad'});
                $stmt->bindParam(5, $_REQUEST{'AlmacNumPrecUni'});
                $stmt->bindParam(6, $_REQUEST{'AlmacStrNoLote'});
                $stmt->bindParam(7, $_REQUEST{'AlmacDateVencimiento'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        break;

    case 'PUT':
        //Procedimiento para modificar
        if(isset($_REQUEST['HdiaNumEstados'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_ModEstadoCompras ?, ?");

                $stmt->bindParam(1, $_REQUEST{'ComNumSolicitud'});
                $stmt->bindParam(2, $_REQUEST{'HdiaNumEstados'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        if(isset($_REQUEST['SegNumUsuarioEnc'])){


            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_AsignarEncargado ?, ?");

                $stmt->bindParam(1, $_REQUEST{'ComNumSolicitud'});
                $stmt->bindParam(2, $_REQUEST{'SegNumUsuarioEnc'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        if(isset($_REQUEST['numTipoCompra'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                //SE SUSTITUYO EL Com.sp_ModTipoCompra POR -> sp_AsignTipoCompra
                $stmt = $Db->Sentencia("EXEC Com.sp_AsignTipoCompra ?, ?");

                $stmt->bindParam(1, $_REQUEST{'solicitud'});
                $stmt->bindParam(2, $_REQUEST{'numTipoCompra'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        if(isset($_REQUEST['AsigCorrelativoTCompra'])){ //se asigna el correlativo del tipo de compra
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_AsigCorrelativoCompra ?, ?");

                $stmt->bindParam(1, $_REQUEST{'solicitud'});
                $stmt->bindParam(2, $_REQUEST{'numTipoCompraC'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        if(isset($_REQUEST['asigCorrelativo'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_crearNoSolPedido ?");

                $stmt->bindParam(1, $_REQUEST{'ComNumSolicitud'});
                $stmt->bindParam(2, $_REQUEST{'ComNumValorEstim'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        if(isset($_REQUEST['modMonto'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_ModValEstimado ?, ?");

                $stmt->bindParam(1, $_REQUEST{'ComDetSolicitud'});
                $stmt->bindParam(2, $_REQUEST{'ComNumValorEstim'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
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

            $stmt = $Db->Sentencia("EXEC cita.sp_elimMedico ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumMedico'});

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['SolRecibidas'])){
            //$CitNumEspecialidad = $_REQUEST['CitNumEspecialidad'];
            $data = $Db->GetData("SELECT * FROM Com.vw_SolRecibidas where ComNumEstatus = 1 ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        } else if (isset($_REQUEST['SolAtoriza2'])) {
            $data = $Db->GetData("SELECT * FROM Com.vw_SolRecibidas WHERE ComNumEstatus = 3 ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['SolicitudesUsuarios'])){
            $tipo = $_REQUEST['SolicitudesUsuarios'];
            $data = $Db->GetData("SELECT * FROM Com.vw_SolicitudesUsuario WHERE ComNumEstatus = $tipo ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['procesoUsuario'])){
            $data = $Db->GetData("SELECT * FROM Com.vw_SolicitudesUsuario WHERE ComNumEstatus != 6 AND ComNumEstatus !=7 ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['ProcesoComras'])){
            $data = $Db->GetData("SELECT * FROM Com.vw_SolProcesoCompras WHERE ComNumEstatus != 6 AND ComNumEstatus !=7 ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['Reasignacion'])){
            $data = $Db->GetData("SELECT * FROM Com.vw_SolReasignacion WHERE ComNumEstatus != 6 AND ComNumEstatus !=7 AND ComNumEstatus !=1 ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['SolTrabajadas'])){
            //solicitudes que ya fueron finalizadas
            $data = $Db->GetData("SELECT * FROM Com.vw_SolProcesoCompras WHERE ComNumEstatus = 6 ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['SolicitudId'])){
            $SolicitudId = $_REQUEST['SolicitudId'];
            $data = $Db->GetData("SELECT * FROM Com.vw_InsumosFinal WHERE ComNumSolicitud = $SolicitudId", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['SolRecibidasPresu'])){
            $data = $Db->GetData("SELECT * FROM Presu.vw_mostSolPresupuesto WHERE (ComNumStatus = 62 OR ComNumStatus = 63 OR ComNumStatus = 64 OR ComNumStatus = 65 OR ComNumStatus = 66 OR ComNumStatus = 67) AND ComNumDeptoEncargado = 1 and NumAutorizacion is null ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['SolAutorizaPresu'])){
            $data = $Db->GetData("SELECT * FROM Presu.vw_mostSolPresupuesto WHERE (ComNumStatus = 62 OR ComNumStatus = 63 OR ComNumStatus = 64 OR ComNumStatus = 65 OR ComNumStatus = 66 OR ComNumStatus = 67) AND ComNumDeptoEncargado = 2 ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['SolGF'])){
            $data = $Db->GetData("SELECT * FROM Presu.vw_mostSolPresupuesto WHERE StrAutorizaGF is not null AND CharAutorizaGF is null", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['SolDE'])){
            $data = $Db->GetData("SELECT * FROM Presu.vw_mostSolPresupuesto WHERE StrAutorizaDE is not null AND CharAutorizaDE is null", $_SESSION['dbUser'], $_SESSION['dbPass']);
        } else if(isset($_REQUEST['RepRevision'])){
            $dateI = $_REQUEST['dateI'];
            $dateF = $_REQUEST['dateF'];
            $status = $_REQUEST['status'];
            $data = $Db->GetData("SELECT * FROM Com.vw_RepoSolRec WHERE ComNumStatus = $status AND ComDatFechaCreacion between '".$dateI."' and '".$dateF."'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else if(isset($_REQUEST['RepConfirmadas'])){
            $dateIni = $_REQUEST['dateIni'];
            $dateFin = $_REQUEST['dateFin'];
            $data = $Db->GetData("SELECT * FROM Com.vw_SolReasignacion WHERE ComNumEstatus != 6 AND ComNumEstatus !=7 AND ComNumEstatus !=1 AND ComDatFechaCreacion between '".$dateIni."' and '".$dateFin."'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['detSolicitud'])){
            $soliPedi = $_REQUEST['soliPedi'];
            $data = $Db->GetData("SELECT * FROM  Com.ComDetSolicitud where ComNumSolicitud= $soliPedi", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['pendienteFisica'])){
            $data = $Db->GetData("SELECT * FROM Com.vw_SolRecibidas WHERE ComNumEstatus = 68 ORDER BY ComNumSolicitud ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['RepSolisProceso'])){
            $solCompraPed = $_REQUEST['solCompraPed'];
            $data = $Db->GetData("SELECT * FROM Com.vw_MostSolProceso where ComNumSolicitud = $solCompraPed", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['mostRepSolTrab'])){
            $data = $Db->GetData("SELECT * FROM Com.vw_SolTrabRep WHERE ComNumEstatus = 6 AND AnioSolicitud > '2020' ORDER BY ComNumSolicitud ASC ", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['mostRepSolTrabDet'])){
            $numSolPedi = $_REQUEST['numSolPedi'];
            $data = $Db->GetData("SELECT * FROM Com.vw_ComDetSolTrab  where ComNumSolicitud = $numSolPedi AND ComNumStatus = 6", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['mostrarRepServicio'])){
            $idSolPediServ = $_REQUEST['idSolPediServ'];
            $data = $Db->GetData("SELECT * FROM Com.vw_ComDetServSolTrab  where ComNumSolicitud = $idSolPediServ AND ComNumStatus = 6", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['mostTipComp'])){
            $data = $Db->GetData("select * from Com.ComTipoCompra where CompNumTipCompra <> 1 and CompNumTipCompra <> 9", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else {
            //si no se manda ninguna variable
            //$data = $Db->GetData("SELECT * FROM cita.Medico", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }



        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}