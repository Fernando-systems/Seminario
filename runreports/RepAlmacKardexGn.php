<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/InfoAlmacKardexGral.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('L', '8.5 x 13', 'fr');
$rep = new InfoAlmacKardexGral();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$AlmacNumIdKardex = $_REQUEST['AlmacNumIdKardex'];



$data = $Db->GetData("SELECT  Almac.Numeros(Almac.Kardex.AlmacNumIdKardex) AlmacNumIdKardex, Almac.Insumos.AlmacStrNomInsumo, Almac.Insumos.AlmacNumCodInsumo, Almac.Insumos.AlmacNumRenglon, Almac.Kardex.AlmacNumNivelMinimo, 
                         Almac.Kardex.AlmacNumNivelMaximo, Almac.Insumos.AlmacStrCaractInsu
FROM            Almac.Insumos INNER JOIN
                         Almac.Kardex ON Almac.Insumos.AlmacNumCodPresentInsu = Almac.Kardex.AlmacNumCodPresentInsu where Almac.Kardex.AlmacNumIdKardex = '".$AlmacNumIdKardex."'", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayDetalle'] = $Db->GetData("SELECT AlmacNumIdKardex, CONVERT (varchar,AlmacDateFecha, 103) as AlmacDateFecha, AlmacStrNoReferen, AlmacStrDescripci, AlmacStrUnidMedida, AlmacNumEntrCantid,

case when AlmacNumEntrPUnit is not NULL then 'Q.' + CONVERT(varchar(10),AlmacNumEntrPUnit) else '' end AS AlmacNumEntrPUnit,
case when AlmacNumEntrVaTotal is not NULL then 'Q.' + CONVERT(varchar(10),AlmacNumEntrVaTotal) else '' end AS AlmacNumEntrVaTotal,
AlmacNumReajCanti, 
case when AlmacNumReajPUnit is not NULL then 'Q.' + CONVERT(varchar(10),AlmacNumReajPUnit) else '' end AS AlmacNumReajPUnit,
case when AlmacNumReajVTotal is not NULL then 'Q.' + CONVERT(varchar(10),AlmacNumReajVTotal) else '' end AS AlmacNumReajVTotal,
AlmacNumReqCantid, 
case when AlmacNumReqPUnit is not NULL then 'Q.' + CONVERT(varchar(10),AlmacNumReqPUnit) else '' end AS AlmacNumReqPUnit,
case when AlmacNumReqVaTotal is not NULL then 'Q.' + CONVERT(varchar(10),AlmacNumReqVaTotal) else '' end AS AlmacNumReqVaTotal,
AlmacNumExisCantid, 
case when AlmacNumExisPUnit is not NULL then 'Q.' + CONVERT(varchar(10),AlmacNumExisPUnit) else '' end AS AlmacNumExisPUnit,
case when AlmacNumExisVaTotal is not NULL then 'Q.' + CONVERT(varchar(10),AlmacNumExisVaTotal) else '' end AS AlmacNumExisVaTotal,
AlmacStrNoLote, 
CASE WHEN Almac.DetalleKardex.AlmacDateVencimi = '1900-01-01' THEN 'No Aplica' ELSE CONVERT(varchar, Almac.DetalleKardex.AlmacDateVencimi, 103) ENd AS AlmacDateVencimi
FROM      Almac.DetalleKardex  where AlmacNumIdKardex ='".$AlmacNumIdKardex."'", $_SESSION['dbUser'], $_SESSION['dbPass']);



$rep->FnInfoKardexAlma($data);
try {
    //ob_start();
    $rep->RenderInfoKardexAlma();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

