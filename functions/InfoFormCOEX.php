<?php


class InfoFormCOEX
{
    protected $infoCita;

    function InfoFormCita($data)
    {
        $this->infoCita = $data;
    }

    function RenderInfoCOEX2()
    {
        $matriz2 = $this->infoCita[0];
        ?>
        <html>
        <head>
            <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
            <style>
                <!--
                /* Font Definitions */
                @font-face {
                    font-family: "Cambria Math";
                    panose-1: 2 4 5 3 5 4 6 3 2 4;
                }

                @font-face {
                    font-family: Calibri;
                    panose-1: 2 15 5 2 2 2 4 3 2 4;
                }

                /* Style Definitions */
                p.MsoNormal, li.MsoNormal, div.MsoNormal {
                    margin-top: 0cm;
                    margin-right: 0cm;
                    margin-bottom: 8.0pt;
                    margin-left: 0cm;
                    line-height: 107%;
                    font-size: 11.0pt;
                    font-family: "Calibri", sans-serif;
                }

                p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing {
                    margin: 0cm;
                    margin-bottom: .0001pt;
                    font-size: 11.0pt;
                    font-family: "Calibri", sans-serif;
                }

                .MsoChpDefault {
                    font-family: "Calibri", sans-serif;
                }

                .MsoPapDefault {
                    margin-bottom: 8.0pt;
                    line-height: 107%;
                }

                @page WordSection1 {
                    size: 612.0pt 792.0pt;
                    margin: 36.0pt 36.0pt 36.0pt 36.0pt;
                }

                div.WordSection1 {
                    page: WordSection1;
                }

                -->
            </style>
        </head>
        <body lang=ES-GT>
        <div class=WordSection1>
            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td rowspan=4 style='width:21.9%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="21%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><img height=68 id="Imagen 1" src="REPORTECOEX_image001.jpg"
                                             width=70></p>
                    </td>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>MINISTERIO DE SALUD PUBLICA Y
                                ASISTENCIA SOCIAL</b></p>
                    </td>
                    <td rowspan=4 style='width:19.52%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' width="19%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>CÓDIGO 044</b></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>HOSPITAL NACIONAL ESPECIALIZADO DE
                                VILLA NUEVA</b></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>&nbsp;</b></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>HOJA DE DOCUMENTACION Y REGISTRO DE
                                CONSULTA EXTERNA</b></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:19.64%;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>APELLIDOS:</span></p>
                    </td>
                    <td colspan=3 style='width:40.76%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="40%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrApellido']; ?></p>
                    </td>
                    <td style='width:19.7%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>FECHA DE IMPRESIÓN:</span></p>
                    </td>
                    <td style='width:19.9%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['FechaImpresion']; ?>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:19.64%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>NOMBRES:</span></p>
                    </td>
                    <td colspan=3 style='width:40.76%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="40%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrNombre']; ?></p>
                    </td>
                    <td style='width:19.7%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>REGISTRO CLINICO:</span></p>
                    </td>
                    <td style='width:19.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo str_replace("-", "", $matriz2['CitStrRegMedico']); ?></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:19.64%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>FECHA DE NACIMIENTO:</span></p>
                    </td>
                    <td style='width:11.78%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="11%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['FecNacimiento']; ?></p>
                    </td>
                    <td style='width:6.76%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="6%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>EDAD:</span></p>
                    </td>
                    <td style='width:22.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="22%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['EdadPaciente']; ?></p>
                    </td>
                    <td style='width:19.7%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>DPI/CUI:</span></p>
                    </td>
                    <td style='width:19.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'> <?php echo $matriz2['CitNumCUI']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:19.64%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:11.78%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="11%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:6.76%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="6%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:22.22%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="22%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:19.7%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>HORA DE IMPRESIÓN:</span></p>
                    </td>
                    <td style='width:19.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php date_default_timezone_set("America/Guatemala");
                            echo date('h:i:s A'); ?></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:15.26%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="15%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>REFERIDO:</span></p>
                    </td>
                    <?php
                    function marcarReferido($bool, $option)
                    {
                        if ($bool == $option) {
                            echo "X";
                        }
                    }

                    ?>

                    <td style='width:5.7%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="5%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>SI   </span><?php marcarReferido($matriz2['CitStrReferido'], 'S'); ?></p>
                    </td>
                    <td style='width:9.64%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>NO   </span><?php marcarReferido($matriz2['CitStrReferido'], 'N'); ?></p>
                    </td>
                    <td style='width:20.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>LUGAR DE REFERENCIA:</span></p>
                    </td>
                    <td style='width:49.26%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="49%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrLugRef']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:15.26%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="15%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>OBSERVACIONES:</span></p>
                    </td>
                    <td colspan=4 style='width:84.74%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="84%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrObservacion']; ?>&nbsp;</p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='border-collapse:collapse;border:none'>
                <tr>
                    <td colspan=5 style='width:540.0pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=720>
                        <p class=MsoNoSpacing><b><span style='font-size:10.0pt'>CONTACTOS</span>:</b></p>
                    </td>
                </tr>
                <?php foreach ($matriz2['ArrayContactos'] as $row) { ?>
                    <tr>
                        <td style='width:53.55pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=71>
                            <p class=MsoNoSpacing><span style='font-size:10.0pt'>NOMBRE:</span></p>
                        </td>
                        <td style='width:215.8pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=288>
                            <p class=MsoNoSpacing><?php echo $row['CitStrContacto'] ?> </p>
                        </td>
                        <td style='width:106.3pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=142>
                            <p class=MsoNoSpacing><?php echo $row['CitNumTelefono'] ?></p>
                        </td>
                        <td style='width:99.25pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=132>
                            <p class=MsoNoSpacing><span style='font-size:10.0pt'>RELACIÓN FAMILIAR:</span></p>
                        </td>
                        <td style='width:65.1pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=87>
                            <p class=MsoNoSpacing><?php echo $row['CitStrParentesco'] ?></p>
                        </td>
                    </tr>
                <?php }//Fin de Foreach
                ?>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <p align=center class=MsoNoSpacing style='text-align:center'><span
                        style='font-size:10.0pt'>SISTEMA DE CLASIFICACIÓN DE PACIENTE: (Marcar con una
X la casilla que corresponde)</span></p>

            <table border=1 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 5</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 4</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 3</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 2</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 1</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 style='width:20.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>SIN URGENCIA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>URGENCIA MENOR</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>URGENCIA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>EMERGENCIA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>RIESGO VITAL</span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 style='width:20.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>AZUL</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>VERDE</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>AMARILLO</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NARANJA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>ROJO</span></p>
                    </td>
                </tr>
            </table>

            <p align=center class=MsoNoSpacing style='text-align:center'><span lang=ES-MX>&nbsp;</span></p>

            <p align=center class=MsoNoSpacing style='text-align:center'><span lang=ES-MX>SE
EVALÚA PACIENTE EN CLÍNICA DE CLASIFICACIÓN Y SE REFIERE PARA SU CONTINUIDAD A
LA ESPECIALIDAD</span></p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE PEDIATRÍA</p>
                    </td>
                    <td style='width:9.1%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE CIRUGIA PEDIATRÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE ENDOCRINOLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE NEFROLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE NEUMOLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE NEUROLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE PSICOLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>OBSTETRICIA ALTO RIESGO</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE GINECOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE MEDICINA REPRODUCTIVA, INFERTELIDAD Y
                            CLIMATERIO</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CARDIOLOGIA DE ADULTOS</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNCIA DE ODONTOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE MEDICINA INTERNA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>GASTROENTEROLOGÍA ADULTOS</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>ENDOCRINOLOGÍA ADULTOS</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td colspan=3 rowspan=3 style='width:27.22%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="27%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE NUTRICIÓN</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE NEUMOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE DERMATOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td colspan=3 style='width:27.22%;border:none;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="27%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>FIRMA DEL MÉDICO</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE OTORRINOLARINGOLOGIA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE UROLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE NEUROCIRUGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td colspan=3 rowspan=3 style='width:27.22%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="27%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE PSICOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE CIRUGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE CIRUGÍA RODILLA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td colspan=3 style='width:27.22%;border:none;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="27%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>SELLO</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE TRAUMATOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>EMERGENCIA DE ADULTOS</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>EMERGENCIA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
            </table>
        </div>
        </body>
        </html>
        <?php
    }//Fin RenderRepCoex2

    function RenderInfoCOEXPDF()
    {
        $matriz2 = $this->infoCita[0];
        ?>
        <html>

        <head>
            <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
            <style>
                <!--
                /* Font Definitions */
                @font-face {
                    font-family: "Cambria Math";
                    panose-1: 2 4 5 3 5 4 6 3 2 4;
                }

                @font-face {
                    font-family: Courier;
                    panose-1: 2 15 5 2 2 2 4 3 2 4;
                }

                /* Style Definitions */
                p.MsoNormal, li.MsoNormal, div.MsoNormal {
                    margin-top: 0cm;
                    margin-right: 0cm;
                    margin-bottom: 8.0pt;
                    margin-left: 0cm;
                    line-height: 107%;
                    font-size: 11.0pt;
                    font-family: "Courier", sans-serif;
                }

                p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing {
                    margin: 0cm;
                    margin-bottom: .0001pt;
                    font-size: 11.0pt;
                    font-family: "Courier", sans-serif;
                }

                .MsoChpDefault {
                    font-family: "Courier", sans-serif;
                }

                .MsoPapDefault {
                    margin-bottom: 8.0pt;
                    line-height: 107%;
                }

                @page WordSection1 {
                    size: 612.0pt 792.0pt;
                    margin: 36.0pt 36.0pt 36.0pt 36.0pt;
                }

                div.WordSection1 {
                    page: WordSection1;
                }

                -->
            </style>

        </head>

        <body lang=ES-GT>

        <div class=WordSection1>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td rowspan=4 style='width:21.9%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="21%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><img height=68 id="Imagen 1" src="REPORTECOEX_image001.jpg"
                                             width=70></p>
                    </td>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>MINISTERIO DE SALUD PUBLICA Y
                                ASISTENCIA SOCIAL</b></p>
                    </td>
                    <td rowspan=4 style='width:19.52%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' width="19%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>CÓDIGO 044</b></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>HOSPITAL NACIONAL ESPECIALIZADO DE
                                VILLA NUEVA</b></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>&nbsp;</b></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>HOJA DE DOCUMENTACION Y REGISTRO DE
                                CONSULTA EXTERNA</b></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:19.64%;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>APELLIDOS:</span></p>
                    </td>
                    <td colspan=3 style='width:40.76%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="40%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrApellido']; ?></p>
                    </td>
                    <td style='width:19.7%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>FECHA DE IMPRESIÓN:</span></p>
                    </td>
                    <td style='width:19.9%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['FechaImpresion']; ?>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:19.64%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>NOMBRES:</span></p>
                    </td>
                    <td colspan=3 style='width:40.76%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="40%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrNombre']; ?></p>
                    </td>
                    <td style='width:19.7%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>REGISTRO CLINICO:</span></p>
                    </td>
                    <td style='width:19.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo str_replace("-", "", $matriz2['CitStrRegMedico']); ?></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:19.64%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>FECHA DE NACIMIENTO:</span></p>
                    </td>
                    <td style='width:11.78%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="11%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['FecNacimiento']; ?></p>
                    </td>
                    <td style='width:6.76%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="6%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>EDAD:</span></p>
                    </td>
                    <td style='width:22.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="22%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['EdadPaciente']; ?></p>
                    </td>
                    <td style='width:19.7%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>DPI/CUI:</span></p>
                    </td>
                    <td style='width:19.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'> <?php echo $matriz2['CitNumCUI']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:19.64%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:11.78%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="11%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:6.76%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="6%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:22.22%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="22%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:19.7%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>HORA DE IMPRESIÓN:</span></p>
                    </td>
                    <td style='width:19.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php date_default_timezone_set("America/Guatemala");
                            echo date('h:i:s A'); ?></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:15.26%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="15%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>REFERIDO:</span></p>
                    </td>
                    <?php
                    function marcarReferido($bool, $option)
                    {
                        if ($bool == $option) {
                            echo "X";
                        }
                    }

                    ?>

                    <td style='width:5.7%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="5%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>SI   </span><?php marcarReferido($matriz2['CitStrReferido'], 'S'); ?></p>
                    </td>
                    <td style='width:9.64%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>NO   </span><?php marcarReferido($matriz2['CitStrReferido'], 'N'); ?></p>
                    </td>
                    <td style='width:20.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>LUGAR DE REFERENCIA:</span></p>
                    </td>
                    <td style='width:49.26%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="49%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrLugRef']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:15.26%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="15%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>OBSERVACIONES:</span></p>
                    </td>
                    <td colspan=4 style='width:84.74%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="84%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrObservacion']; ?>&nbsp;</p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='border-collapse:collapse;border:none'>
                <tr>
                    <td colspan=5 style='width:540.0pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=720>
                        <p class=MsoNoSpacing><b><span style='font-size:10.0pt'>CONTACTOS</span>:</b></p>
                    </td>
                </tr>
                <?php foreach ($matriz2['ArrayContactos'] as $row) { ?>
                    <tr>
                        <td style='width:53.55pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=71>
                            <p class=MsoNoSpacing><span style='font-size:10.0pt'>NOMBRE:</span></p>
                        </td>
                        <td style='width:215.8pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=288>
                            <p class=MsoNoSpacing><?php echo $row['CitStrContacto'] ?> </p>
                        </td>
                        <td style='width:106.3pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=142>
                            <p class=MsoNoSpacing><?php echo $row['CitNumTelefono'] ?></p>
                        </td>
                        <td style='width:99.25pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=132>
                            <p class=MsoNoSpacing><span style='font-size:10.0pt'>RELACIÓN FAMILIAR:</span></p>
                        </td>
                        <td style='width:65.1pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=87>
                            <p class=MsoNoSpacing><?php echo $row['CitStrParentesco'] ?></p>
                        </td>
                    </tr>
                <?php }//Fin de Foreach
                ?>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <p align=center class=MsoNoSpacing style='text-align:center'><span
                        style='font-size:10.0pt'>SISTEMA DE CLASIFICACIÓN DE PACIENTE: (Marcar con una
X la casilla que corresponde)</span></p>

            <table border=1 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 5</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 4</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 3</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 2</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 1</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 style='width:20.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>SIN URGENCIA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>URGENCIA MENOR</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>URGENCIA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>EMERGENCIA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>RIESGO VITAL</span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 style='width:20.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>AZUL</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>VERDE</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>AMARILLO</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NARANJA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>ROJO</span></p>
                    </td>
                </tr>
            </table>

            <p align=center class=MsoNoSpacing style='text-align:center'><span lang=ES-MX>&nbsp;</span></p>

            <p align=center class=MsoNoSpacing style='text-align:center'><span lang=ES-MX>SE
EVALÚA PACIENTE EN CLÍNICA DE CLASIFICACIÓN Y SE REFIERE PARA SU CONTINUIDAD A
LA ESPECIALIDAD</span></p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE PEDIATRÍA</p>
                    </td>
                    <td style='width:9.1%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE CIRUGIA PEDIATRÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE ENDOCRINOLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE NEFROLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE NEUMOLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE NEUROLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE PSICOLOGÍA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>OBSTETRICIA ALTO RIESGO</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE GINECOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE MEDICINA REPRODUCTIVA, INFERTELIDAD Y
                            CLIMATERIO</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CARDIOLOGIA DE ADULTOS</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNCIA DE ODONTOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE MEDICINA INTERNA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>GASTROENTEROLOGÍA ADULTOS</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>ENDOCRINOLOGÍA ADULTOS</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td colspan=3 rowspan=3 style='width:27.22%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="27%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE NUTRICIÓN</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE NEUMOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE DERMATOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td colspan=3 style='width:27.22%;border:none;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="27%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>FIRMA DEL MÉDICO</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE OTORRINOLARINGOLOGIA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE UROLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE NEUROCIRUGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td colspan=3 rowspan=3 style='width:27.22%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="27%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE PSICOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE CIRUGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLÍNICA DE CIRUGÍA RODILLA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td colspan=3 style='width:27.22%;border:none;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="27%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>SELLO</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>CLINICA DE TRAUMATOLOGÍA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>EMERGENCIA DE ADULTOS</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:9.08%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:45.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="45%">
                        <p class=MsoNoSpacing>EMERGENCIA PEDIATRICA</p>
                    </td>
                    <td style='width:9.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.1%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                    <td style='width:9.02%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p align=center class=MsoNoSpacing style='text-align:center'>&nbsp;</p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

        </div>

        </body>

        </html>
        <?php
    }//Fin RenderRepCoexPDF
}

?>

    
	

