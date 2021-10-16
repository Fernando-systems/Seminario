<?php


class InfoTrasladoFarm
{
    protected $infoCita;

    function FnInfoTrasladoFarm($data)
    {
        //print_r($data);
        $this->infoCita = $data;
    }

    function RenderInfoTrasladoFarm()
    {
        $matriz2 = $this->infoCita[0];
    ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 6.3.4.2 (Linux)"/>
	<meta name="author" content="Gilda Villeda"/>
	<meta name="created" content="2020-04-22T13:20:10"/>
	<meta name="changedby" content="Gilda Villeda"/>
	<meta name="changed" content="2020-04-22T18:22:26"/>
	<meta name="AppVersion" content="16.0300"/>
	<meta name="DocSecurity" content="0"/>
	<meta name="HyperlinksChanged" content="false"/>
	<meta name="LinksUpToDate" content="false"/>
	<meta name="ScaleCrop" content="false"/>
	<meta name="ShareDoc" content="false"/>
	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  } 
	</style>
	
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup span="5" width="79"></colgroup>
	<colgroup width="95"></colgroup>
	<colgroup width="96"></colgroup>
	<colgroup span="3" width="79"></colgroup>
	<tr>
		<td colspan=2 rowspan=4 height="100" align="center" valign=bottom><b><font size=3><br><img src="logohospital.png" width=108 height=88 hspace=25 vspace=7>
		</font></b></td>
		<td colspan=6 align="center" valign=bottom><b><font size=3>HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</font></b></td>
		<td colspan=2 rowspan=4 align="center" valign=bottom><b><font size=3><br><img src="logoCGC.png" width=138 height=86 hspace=10 vspace=8>
		</font></b></td>
		</tr>
	<tr>
		<td colspan=6 align="center" valign=bottom><b><font size=3>MINISTERIO DE SALUD PÚBLICA Y ASISTENCIA SOCIAL</font></b></td>
		</tr>
	<tr>
		<td colspan=6 align="center" valign=bottom><b><font size=3>DEPARTMENTO DE FARMACIA INTERNA</font></b></td>
		</tr>
	<tr>
		<td colspan=6 align="center" valign=bottom><b><font size=3>TRASLADO DE MEDICAMENTOS  Y PRODUCTOS AFINES </font></b></td>
		</tr>
	<tr>
		<td height="25" align="center" valign=bottom><b><font size=4><br></font></b></td>
		<td align="center" valign=bottom><b><font size=4><br></font></b></td>
		<td align="center" valign=bottom><b><font size=4><br></font></b></td>
		<td align="center" valign=bottom><b><font size=4><br></font></b></td>
		<td align="center" valign=bottom><b><font size=4><br></font></b></td>
		<td align="center" valign=bottom><b><font size=4><br></font></b></td>
		<td align="center" valign=bottom><b><font size=4><br></font></b></td>
		<td align="center" valign=bottom><b><font size=4><br></font></b></td>
		<td align="center" valign=bottom><b><font size=4><br></font></b></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td colspan=2 align="center" valign=bottom><font face="Arial">Correlativo CGC   </font></td>
		<td align="left" valign=bottom><font face="Arial"><br></font><?php echo $matriz2['FarmNumIdTraslado']; ?></td>
		<td align="left" valign=bottom><font face="Arial"><br></font></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><b>SOLICITA:</b></td>
		<td colspan=3 align="left" valign=bottom>AREA PRODUCCIÓN</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom>
            <?php if ( $matriz2['FarmStrUnidSolicita'] == 'AREA DE PRODUCCION') {
                echo 'X';
            }
            else{
                echo '';
            };?>
        </td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td colspan=3 align="left" valign=bottom>AREA DE UNIDOSIS</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom>
            <?php if ( $matriz2['FarmStrUnidSolicita'] == 'AREA DE UNIDOSIS') {
                echo 'X';
            }
            else{
                echo '';
            };?>
        </td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td colspan=3 align="left" valign=bottom>FARMACIA SATÉLITE EMERGENCIA</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
            <?php if ( $matriz2['FarmStrUnidSolicita'] == 'FARMACIA SÁTELITE EMERGENCIA') {
                echo 'X';
            }
            else{
                echo '';
            };?>
        </td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom>FARMACIA INTERNA</td>
		<td align="left" valign=bottom></td>
		<td align="left" valign=bottom><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom>
            <?php if ( $matriz2['FarmStrUnidSolicita'] == 'FARMACIA INTERNA') {
                echo 'X';
            }
            else{
                echo '';
            };?></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><b>ENTREGA</b></td>
		<td colspan=3 align="left" valign=bottom>BODEGA FARMACIA MEDICAMENTOS</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom>
            <?php if ( $matriz2['FarmStrUnidEntrega'] == 'BODEGA FARMACIA DE MEDICAMENTOS') {
                echo 'X';
            }
            else{
                echo '';
            };?></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td colspan=3 align="left" valign=bottom>BODEGA FARMACIA MMQM Y AFINES</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom>
            <?php if ( $matriz2['FarmStrUnidEntrega'] == 'BODEGA FARMACIA MMQM Y AFINES') {
                echo 'X';
            }
            else{
                echo '';
            };?>
        </td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td colspan=3 align="left" valign=bottom>FARMACIA SATÉLITE EMERGENCIA</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom>
            <?php if ( $matriz2['FarmStrUnidEntrega'] == 'FARMACIA SÁTELITE EMERGENCIA') {
                echo 'X';
            }
            else{
                echo '';
            };?>
        </td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="40" align="left" valign=bottom><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>CODIGO</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><b>DESCRIPCIÓN DEL PRODUCTO</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>CANTIDAD SOLICITADA</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>CANTIDAD DESPACHADA</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><b>MOTIVO DE TRASLADO</b></td>
        </tr>
        <?php 
	$cont=0;
	foreach ($matriz2['ArrayDetalle'] as $row) { 
		$cont++;
	?>
        <tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><?php echo $row['FarmNumCodiInsu'] ?></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom><br><?php echo $row['FarmStrDescrip'] ?></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br><?php echo $row['FarmNumCantSoli'] ?></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br><?php echo $row['FarmNumCantDesp'] ?></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><br><?php echo $row['FarmStrMotivo'] ?></td>
		</tr>
	

        <?php }//Fin de Foreach
	?>
		<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br>----</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><br>Ultima Linea</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br>----</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br>----</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><br>----</td>
		</tr>
	
	<?php 
		for($j=$cont; $j<24; $j++){ ?>

	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><br></td>
        </tr>
        <?php	} ?>



	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Entrega:</font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font><?php echo $row['FarmStrNomEntrega'] ?></b></td>
		<td style="border-bottom: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font><?php echo $row['FarmStrCargEntrega'] ?></b></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><foant face="Calibri Light" size=3 color="#000000">Nombre Completo</foant></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Cargo</font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Firma</font></b></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Recibe</font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br><?php echo $row['FarmStrNomRecibe'] ?></font></b></td>
		<td style="border-bottom: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br><?php echo $row['FarmStrCargRecibe'] ?></font></b></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Nombre Completo</font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Cargo</font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Firma</font></b></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td colspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Vo. Bo JEFE DEPARTAMENTO DE FARMACIA INTERNA</font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" color="#000000"><br><?php echo $row['FarmStrNomJefe'] ?></font></b></td>
		<td style="border-bottom: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">JEFE DE FARMACIA INTERNA</font></b></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Nombre Completo</font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Cargo</font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">Firma</font></b></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000">OBSERVACIONES:</font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" colspan=7 align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font><?php echo $row['FarmStrObservacion'] ?></b></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" colspan=7 align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" colspan=7 align="left" valign=bottom bgcolor="#FFFFFF"><b><font face="Calibri Light" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" size=1 color="#000000">   </font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td colspan=2 height="21" align="right" valign=bottom><font face="Calibri Light" color="#000000">Lugar y Fecha: </font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font face="Calibri Light" size=3 color="#000000"><br><?php echo $row['FarmStrLugar'] . "    " .$row ['FarmDateTras'] ?></font></b></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" size=1 color="#000000">   </font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Calibri Light" size=1 color="#000000"><br></font></td>
		<td colspan=2 align="right" valign=middle><b><font face="Cambria" color="#FF0000">Original: Entrega</font></b></td>
		</tr>
	<tr>
		<td height="20" align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Calibri Light" color="#000000"><br></font></td>
		<td colspan=2 align="right" valign=middle><b><font face="Cambria" color="#FF0000">Copia:  Solicitante</font></b></td>
		</tr>
	<tr>
		<td height="20" align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
		<td align="left" valign=bottom><br></td>
	</tr>
	<tr>
		<td colspan=10 rowspan=2 height="40" align="center" valign=bottom><b><font color="#000000">AUTORIZADO RESOLUCIÓN CGC SM./ 002344 NUMERO DE GESTIÓN 380713 DE FECHA 19/06/2019 CORRELATIVO 740-2019 DE FECHA 09-08-2019 E. FISCAL 4-ASCC 16712 DE FECHA 09-08-2019 AUTORIZADO DEL 1 AL 10,000 LIBRO 4-ASCC FOLIO 109 HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA Y 9651988-6</font></b></td>
		</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>





<?php
    }

}