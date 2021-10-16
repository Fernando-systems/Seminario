<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/InfoConsolidadoFarm.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new InfoConsolidadoFarm();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


//$FarmNumIdConsoli = $_REQUEST['FarmNumIdConsoli'];
$FarmNumIdConsoli = $_REQUEST['FarmNumIdConsoli'];
//$No = $_REQUEST['No'];




$data = $Db->GetData("SELECT * FROM Farm.ConsolidadoFarma WHERE FarmNumIdConsoli = $FarmNumIdConsoli", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['ArrayDetalle'] = $Db->GetData("SELECT * from Farm.ConsolidadoFarma cf join Farm.DetailConsolFarm dr on dr.FarmNumIdConsoli = dr.FarmNumIdConsoli WHERE dr.FarmNumIdConsoli  = $FarmNumIdConsoli", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayDescripcion'] = $Db->GetData("SELECT * FROM Farm.vw_ImpreConsol WHERE FarmNumIdConsoli = $FarmNumIdConsoli", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['NoAdmision'] = $No;

$rep->FnInfoConsolidadoFarm ($data);
try {
    //ob_start();
    $rep->RenderInfoConsolidadoFarm();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
