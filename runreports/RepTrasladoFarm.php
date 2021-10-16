<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/InfoFarmTraslado.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'letter', 'fr');
$rep = new InfoFarmTraslado();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$FarmNumIdTraslado = $_REQUEST['FarmNumIdTraslado'];
//$FarmNumIdRequi = $_REQUEST['FarmNumIdRequi'];
//$No = $_REQUEST['No'];




$data = $Db->GetData("SELECT * from Farm.Traslado where FarmNumIdTraslado = $FarmNumIdTraslado", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayDetalle'] = $Db->GetData("Select * from Farm.DetalleTraslado DT WHERE FarmNumIdTraslado = $FarmNumIdTraslado", $_SESSION['dbUser'], $_SESSION['dbPass']);

$rep-> FnInfoTrasladoFarm($data);
try {
    //ob_start();
    $rep->RenderInfoTrasladoFarm();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
