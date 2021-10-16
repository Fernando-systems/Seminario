<?php
session_start();

require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

try {
    $CitStrRegMedico = $_REQUEST['CitStrRegMedico'];
    ob_start();

    include ("./RepFormatoTarjetaCita.php");
    $content = ob_get_clean();
    $html2pdf = new Html2Pdf('P', 'A4', 'es');
    $html2pdf->setDefaultFont('calibri');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('RepFormatoTarjetaCitaPDF.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
