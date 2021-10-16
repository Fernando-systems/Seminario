<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/Infor1hAlm.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new Infor1hAlm();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$AlmacNumIdForm1H = $_REQUEST['AlmacNumIdForm1H'];
//$AlmacNumIdPrograma = $_REQUEST['AlmacNumIdPrograma'];
//$No = $_REQUEST['No'];


$data = $Db->GetData("SELECT AF.*, AP.*,
AlmacStrAlmacen,
CASE AlmacStrRespInventario
		when '' then ' '
		when ' ' then ' '
		when null then ''
		else 'Encargada Activos Fijos'
		END as EncarFijos
FROM Almac.Form1H AF
INNER JOIN Almac.Programa AP ON AF.AlmacNumIdPrograma = AP.AlmacNumIdPrograma where AF.AlmacNumIdForm1H = $AlmacNumIdForm1H", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayDetalle'] = $Db->GetData("SELECT        rf.AlmacNumIdForm1H, rf.AlmacStrDependencia, rf.AlmacStrNitProveedor, CONVERT (varchar, rf.AlmacDateFecha, 103) as AlmacDateFecha, rf.AlmacStrUnidEjec, rf.AlmacStrOrdCYPNo, rf.AlmacSolPedido, rf.AlmacStrDatosFactura, rf.AlmacStrNomProveedor, rf.AlmacStrObservacionesForm1H, 
                         rf.AlmacNumIdTipo, rf.AlmacNumIdPrograma, dr.AlmacNumIdDetalleForm1H, dr.AlmacNumIdForm1H AS Expr1, dr.AlmacNumCantidad,  
CASE when CAST ( dr.AlmacNumFolioLibAlmac as varchar) = 0 then ' '
	else CAST (dr.AlmacNumFolioLibAlmac as varchar)  END as AlmacNumFolioLibAlmac, 
		CONVERT(VARCHAR,CAST(dr.AlmacNumPrecUnidad AS MONEY),1) AS AlmacNumPrecUnidad, CONVERT(VARCHAR,CAST(dr.AlmacNumPrecValTotal AS MONEY),1) AS AlmacNumPrecValTotal, 
CASE when CAST ( dr.AlmacNumFolioLibInven as varchar) = 0 then ' '
	else CAST (dr.AlmacNumFolioLibInven  as varchar)  END as AlmacNumFolioLibInven, 
						 dr.AlmacNumIdNomen, dr.AlmacNumCodPresentInsu AS Expr3,   CONVERT(VARCHAR,CAST(dr.AlmacNumTotal AS MONEY),1) AS AlmacNumTotal     , dr.AlmacStrObservacionesDetall, dr.AlmacStrNoFacturaDetall, dr.AlmacStrNoLote, dr.AlmacDateFechaVenci1H, 
                         Almac.Insumos.AlmacNumRenglon, Almac.Insumos.AlmacNumCodInsumo, Almac.Insumos.AlmacStrNomInsumo,
						 '(' + cast (AlmacNumCodInsumo as varchar) + ') ' + AlmacStrNomInsumo + ', ' + Almac.Insumos.AlmacStrCaractInsu
						 + ' ' + AlmacStrPresentInsu + ' - ' + AlmacStrCantYUnidInsu as AlmacStrCaractInsu, Almac.Insumos.AlmacStrPresentInsu, 
                         Almac.Insumos.AlmacStrCantYUnidInsu, Almac.Insumos.AlmacNumCodPresentInsu, Almac.Programa.AlmacNumIdPrograma AS Expr2, Almac.Programa.AlmacStrDescripcion, Almac.Nomenclatura.AlmacNumNomen, 
                         rf.AlmacStrTotalLetras
FROM            Almac.Nomenclatura INNER JOIN
                         Almac.Insumos INNER JOIN
                         Almac.DetalleForm1H AS dr ON Almac.Insumos.AlmacNumCodPresentInsu = dr.AlmacNumCodPresentInsu ON Almac.Nomenclatura.AlmacNumIdNomen = dr.AlmacNumIdNomen RIGHT OUTER JOIN
                         Almac.Programa INNER JOIN
                         Almac.Form1H AS rf ON Almac.Programa.AlmacNumIdPrograma = rf.AlmacNumIdPrograma ON dr.AlmacNumIdForm1H = rf.AlmacNumIdForm1H
						 WHERE        rf.AlmacNumIdForm1H = $AlmacNumIdForm1H", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['Arrayprograma'] = $Db->GetData("SELECT * from Almac.Programa where AlmacNumIdPrograma  = $AlmacNumIdPrograma", $_SESSION ['dbUser'], $_SESSION['dbPass']);

//$data[0]['NoAdmision'] = $No;

$rep->FnInfor1hAlm($data);
try {
    //ob_start();
    $rep->RenderInfor1hAlm();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
