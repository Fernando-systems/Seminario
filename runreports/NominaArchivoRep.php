<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/FuncRepoNomina.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FuncRepoNomina();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$Clinica = $_REQUEST['CitNumClinica'];
$FechaI = $_REQUEST['FechaI'];
$FechaF = $_REQUEST['FechaF'];
$Ordenar = $_REQUEST['Ordenar'];

$data = $Db->GetData("	SELECT CitStrEspecialidad, CitStrNomClinica, count(*) Cantidad, convert (varchar, (FechaMostrar),106) as FechaMostrar
                        FROM   cita.vw_RepNominaArchivo
                         WHERE CitNumClinica = '$Clinica' AND FechaMostrar BETWEEN '$FechaI' AND '$FechaF'
                         group by  CitNumClinica, CitStrEspecialidad, CitStrNomClinica, FechaMostrar", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayContactos'] = $Db->GetData("SELECT * FROM cita.vw_RepNominaArchivo WHERE CitNumClinica = '$Clinica' AND FechaMostrar BETWEEN '$FechaI' AND '$FechaF' ORDER BY $Ordenar", $_SESSION['dbUser'], $_SESSION['dbPass']);
$rep->InfoRepoNomina($data);
try {
    //ob_start();
    $rep->RenderInfoNomina();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}