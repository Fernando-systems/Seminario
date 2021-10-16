<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/InfoFarmRequi.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new InfoFarmRequi();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$FarmNumIdRequi = $_REQUEST['FarmNumIdRequi'];
//$FarmNumIdRequi = $_REQUEST['FarmNumIdRequi'];
//$No = $_REQUEST['No'];




$data = $Db->GetData("SELECT FarmNumIdRequi, FarmStrServicio, FarmStrNomEntreg, FarmStrCargoEntrega, FarmStrNomRecibe, FarmStrCargoRecibe, FarmStrNomJefe, FarmStrCargoJefe, FarmStrObservaciones, FarmStrLugar, CONVERT(varchar(20), FarmDateFechaReq, 103) AS FarmDateFechaReq 
FROM Farm.RequiFarma WHERE FarmNumIdRequi = $FarmNumIdRequi", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayDetalle'] = $Db->GetData("SELECT I.AlmacNumCodInsumo, DR.FarmStrDescripcion, DR.FarmNumCantSolicit, DR.FarmNumCantDespac FROM Farm.DetalleRequi DR INNER JOIN Almac.Insumos I ON I.AlmacNumCodPresentInsu = DR.AlmacNumCodPresentInsu WHERE FarmNumIdRequi = $FarmNumIdRequi", $_SESSION['dbUser'], $_SESSION['dbPass']);

$rep->FnInfoFarmRequi($data);
try {
    //ob_start();
    $rep->RenderInfoFarmRequi();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

