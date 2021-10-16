<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/InfoKardexFarm.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new InfoKardexFarm();

if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$FarmNumIdKardexFarm = $_REQUEST['FarmNumIdKardexFarm'];
$AlmacNumCodPresentInsu = $_REQUEST['AlmacNumCodPresentInsu'];
//$No = $_REQUEST['No'];




$data = $Db->GetData("SELECT * from Farm.KardexFarmacia where FarmNumIdKardexFarm = $FarmNumIdKardexFarm", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayDetalle'] = $Db->GetData("SELECT * FROM Farm.DetalleKardex WHERE FarmNumIdKardexFarm = $FarmNumIdKardexFarm order by FarmNumIdDetKarde asc", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayInsumo'] = $Db->GetData("SELECT * from Almac.Insumos WHERE AlmacNumCodPresentInsu = $AlmacNumCodPresentInsu", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['NoAdmision'] = $No;

$rep-> FnInfoKardexFarm($data);
try {
    //ob_start();
    $rep->RenderInfoKardexFarm();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
