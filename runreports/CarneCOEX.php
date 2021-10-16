<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/InfoCarneCOEX.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new InfoCarneCOEX();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}

if (!isset($_REQUEST['CitStrRegMedico'])) {
    echo $ObjectJson->Json(0, 'No se especifico el Codigo de Registro Medico');
    exit(0);
}

$CitStrRegMedico = $_REQUEST['CitStrRegMedico'];
$data = $Db->GetData("SELECT * FROM cita.vw_repcoex WHERE CitStrRegMedico = '" . $CitStrRegMedico . "'", $_SESSION['dbUser'], $_SESSION['dbPass']);
$data[0]['ArrayContactos'] = $Db->GetData("SELECT * FROM cita.Familiares WHERE CitStrRegMedico = '" . $CitStrRegMedico . "'", $_SESSION['dbUser'], $_SESSION['dbPass']);
$rep->InfoFormCita($data);
try {
    //ob_start();
    $rep->RenderInfoCOEX2();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}