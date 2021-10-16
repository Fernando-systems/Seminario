<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/InforTestado.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new InforTestado();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$AlmacNumIdForm1H = $_REQUEST['AlmacNumIdForm1H'];
//$AlmacNumIdPrograma = $_REQUEST['AlmacNumIdPrograma'];
//$No = $_REQUEST['No'];


$data = $Db->GetData("DECLARE @EncAct VARCHAR (50)
select @EncAct = AlmacStrRespInventario from Almac.Form1H where AlmacNumIdForm1H = $AlmacNumIdForm1H

						 SELECT AF.*, AP.*,
CASE AF.AlmacNumIdTipo WHEN 1 THEN 'Encargada de Almacén de Suministros'
						WHEN 2 THEN 'Encargado de Almacén de Medicamentos'
						WHEN 3 THEN 'Encargado de Almacén de Material Médico Quirúrgico'
						WHEN 4 THEN 'Encargado de Almacén de Material Médico Quirúrgico'
						ELSE 'El Usuario no tiene asignado un Almacén'
						end AS EncAlmacen,

CASE @EncAct when '' then ' '
			when ' ' then ' '
			when null then ''
							else 'Encargada Activos Fijos'
							end as EncarFijos
FROM Almac.Form1H AF
INNER JOIN Almac.Programa AP ON AF.AlmacNumIdPrograma = AP.AlmacNumIdPrograma where AF.AlmacNumIdForm1H = $AlmacNumIdForm1H", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayDetalle'] = $Db->GetData("SELECT rf.AlmacNumIdForm1H, rf.AlmacStrDependencia, rf.AlmacStrNitProveedor, CONVERT (varchar, rf.AlmacDateFecha, 103) as AlmacDateFecha, rf.AlmacStrUnidEjec, rf.AlmacStrOrdCYPNo,
rf.AlmacSolPedido, rf.AlmacStrDatosFactura, rf.AlmacStrNomProveedor, rf.AlmacStrObservacionesForm1H, rf.AlmacNumIdTipo, rf.AlmacNumIdPrograma, dr.AlmacNumIdDetalleForm1H,
dr.AlmacNumIdForm1H AS Expr1, dr.AlmacNumCantidad, CASE when CAST ( dr.AlmacNumFolioLibAlmac as varchar) = 0 then ' ' else CAST (dr.AlmacNumFolioLibAlmac as varchar)  END as AlmacNumFolioLibAlmac,
CONVERT(VARCHAR,CAST(dr.AlmacNumPrecUnidad AS MONEY),1) AS AlmacNumPrecUnidad, CONVERT(VARCHAR,CAST(dr.AlmacNumPrecValTotal AS MONEY),1) AS AlmacNumPrecValTotal, 
CASE when CAST ( dr.AlmacNumFolioLibInven as varchar) = 0 then ' ' else CAST (dr.AlmacNumFolioLibInven  as varchar)  END as AlmacNumFolioLibInven, dr.AlmacNumIdNomen,
dr.AlmacNumCodPresentInsu AS Expr3,   CONVERT(VARCHAR,CAST(dr.AlmacNumTotal AS MONEY),1) AS AlmacNumTotal, dr.AlmacStrObservacionesDetall, dr.AlmacStrNoFacturaDetall, dr.AlmacStrNoLote, dr.AlmacDateFechaVenci1H, 
Almac.Insumos.AlmacNumRenglon, Almac.Insumos.AlmacNumCodInsumo, Almac.Insumos.AlmacStrNomInsumo, '(' + cast (AlmacNumCodInsumo as varchar) + ') ' + AlmacStrNomInsumo + ', ' + Almac.Insumos.AlmacStrCaractInsu	 + ' ' + AlmacStrPresentInsu + ' - ' + AlmacStrCantYUnidInsu as AlmacStrCaractInsu,
Almac.Insumos.AlmacStrPresentInsu, Almac.Insumos.AlmacStrCantYUnidInsu, Almac.Insumos.AlmacNumCodPresentInsu, Almac.Programa.AlmacNumIdPrograma AS Expr2, Almac.Programa.AlmacStrDescripcion,
Almac.Nomenclatura.AlmacNumNomen, rf.AlmacStrTotalLetras
FROM Almac.Nomenclatura
INNER JOIN Almac.Insumos
INNER JOIN Almac.DetalleForm1H AS dr ON Almac.Insumos.AlmacNumCodPresentInsu = dr.AlmacNumCodPresentInsu ON Almac.Nomenclatura.AlmacNumIdNomen = dr.AlmacNumIdNomen 
RIGHT OUTER JOIN Almac.Programa
INNER JOIN Almac.Form1H AS rf ON Almac.Programa.AlmacNumIdPrograma = rf.AlmacNumIdPrograma ON dr.AlmacNumIdForm1H = rf.AlmacNumIdForm1H
WHERE rf.AlmacNumIdForm1H = $AlmacNumIdForm1H", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayTestado'] = $Db->GetData("SELECT T.AlmacStrTestado, T.AlmacNumIdTest, T.AlmacBinEstado
FROM Almac.Form1H F
INNER JOIN Almac.Testado T ON F.AlmacNumIdForm1H = T.AlmacNumIdForm1H
WHERE F.AlmacNumIdForm1H = $AlmacNumIdForm1H", $_SESSION ['dbUser'], $_SESSION['dbPass']);

//$data[0]['NoAdmision'] = $No;

$rep->FnInforTestado($data);
try {
    //ob_start();
    $rep->RenderInforTestado();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}