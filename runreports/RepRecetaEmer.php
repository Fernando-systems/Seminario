<?php
error_reporting(0);
session_start();
require_once '../functions/Database.php';
require_once '../functions/FunReceta.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FunReceta();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$CitNumIngresoEmer = $_REQUEST['CitNumIngresoEmer'];


$data = $Db->GetData("SELECT * FROM Hdia.vw_MostReceta WHERE CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['ArrayContactos'] = $Db->GetData("SELECT TOP(1) * FROM cita.Familiares WHERE CitStrRegMedico = '" . $CitStrRegMedico . "'", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['ArrayEntrada'] = $Db->GetData("SELECT * FROM Hdia.IngresoHdiaEmer WHERE CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['NoAdmision'] = $No;

$rep->InfoReceta($data);
try {
    //ob_start();
    $rep->RenderReceta();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

