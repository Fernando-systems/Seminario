<?php


class InfoKardexFarm
{
    protected $infoCita;

    function FnInfoKardexFarm($data)
    {
        //print_r($data);
        $this->infoCita = $data;
	}
	
	function filaDetalle($data){
	?>
	 <tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="66" align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font size=2 color="#000000"><br></font><?php echo $data['FarmDateFecha'] ?></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $data['FarmStrNoReferen'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $data['FarmStrDescripci'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $data['FarmStrUnidMedida'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $data['FarmNumEntrCantid'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=3 color="#000000"><br><?php echo $data['FarmNumEntrPUnit'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=3 color="#000000"><br><?php echo $data['FarmNumEntrVaTotal'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $data['FarmNumReajCanti'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=3 color="#000000"><br><?php echo $data['FarmNumReajPUnit'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=3 color="#000000"><br><?php echo $data['FarmNumReajVTotal'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $data['FarmNumReqCantid'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=3 color="#000000"><br><?php echo $data['FarmNumReqPUnit'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=3 color="#000000"><br><?php echo $data['FarmNumReqVaTotal'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $data['FarmNumExisCantid'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=3 color="#000000"><br><?php echo $data['FarmNumExisPUnit'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=3 color="#000000"><br><?php echo $data['FarmNumExisVaTotal'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $data['FarmStrNoLote'] ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;MMM-YY"><font size=3 color="#000000"><br><?php echo $data['FarmDateVencimi'] ?></font></td>
	</tr>
	<?php
	}

	function cambioPagina(){
		?>
<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font size=4 color="#000000"></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;MMM-YY"><font size=5 color="#000000"><br></font></td>
	</tr>    
    <tr>
		<td colspan=18 rowspan=2 height="123" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">AUTORIZADO RESOLUCIÓN CGC FL./ 002343 GESTIÓN NUMERO 380720 DE FECHA 19/06/2019 CORRELATIVO 739 DE FECHA 09-08-2019 E. FISCAL 4-ASCC 16711 DE FECHA 09-08-2019 AUTORIZADO DEL 1 AL 3000 LIBRO 4-ASCC FOLIO 109 HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA Y 9651988-6</font></b></td>
	</tr>
	<tr>
    </tr>        
	<tr>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" rowspan=2 height="104" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">FECHA</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">DOCUMENTO DE RESPALDO</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">DESCRIPCIÓN</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">UNIDAD DE MEDIDA</font></b></td>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">ENTRADAS</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">REAJUSTE (+/-)</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">SALIDAS</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">EXISTENCIAS</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">Información producto</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">CANTIDAD</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">PRECIO UNITARIO Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">VALOR Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">CANTIDAD</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">PRECIO UNITARIO Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">VALOR Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">CANTIDAD</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">PRECIO UNITARIO Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">VALOR Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">CANTIDAD</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">PRECIO UNITARIO Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000"> TOTAL Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">No.lote</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;MMM-YY"><b><font color="#000000">Vencimiento</font></b></td>
    </tr>    
		<?php
	}

    function RenderInfoKardexFarm()
    {
		$matriz2 = $this->infoCita[0];
		$encabezado = $this->infoCita[0]['ArrayInsumo'][0];
		$detalle = $this->infoCita[0]['ArrayDetalle'];

    ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 6.3.4.2 (Linux)"/>
	<meta name="author" content="Gilda Villeda"/>
	<meta name="created" content="2020-04-22T23:57:37"/>
	<meta name="changedby" content="Gilda Villeda"/>
	<meta name="changed" content="2020-04-23T01:18:43"/>
	<meta name="AppVersion" content="16.0300"/>
	<meta name="DocSecurity" content="0"/>
	<meta name="HyperlinksChanged" content="false"/>
	<meta name="LinksUpToDate" content="false"/>
	<meta name="ScaleCrop" content="false"/>
	<meta name="ShareDoc" content="false"/>
	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Times New Roman"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  } 
	</style>
	
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup width="141"></colgroup>
	<colgroup width="160"></colgroup>
	<colgroup width="218"></colgroup>
	<colgroup width="116"></colgroup>
	<colgroup width="85"></colgroup>
	<colgroup width="101"></colgroup>
	<colgroup width="139"></colgroup>
	<colgroup span="6" width="80"></colgroup>
	<colgroup width="80"></colgroup>
	<colgroup width="126"></colgroup>
	<colgroup width="139"></colgroup>
	<colgroup width="123"></colgroup>
	<colgroup width="174"></colgroup>
	<tr>
		<td height="15" colspan=2 rowspan=4 height="110" align="center" valign=bottom><b><font size=5 color="#000000"><br><img src="logohospital.png" width=112 height=101 hspace=95 vspace=6>
		</font></b></td>
		<td height="10" colspan=15 align="center" valign=top><b><font style="font-size: 10; color: #FF0000  size=2 color="#000000">HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</font></b></td>
		<td rowspan=4 align="center" valign=bottom><b><font size=3 color="#000000"><br><img src="logoCGC.png" width=109 height=101 hspace=32 vspace=6>
	</font></b></td>
	</tr>
	<tr>
		<td height="8"colspan=15 align="center" valign=top><b><font style="font-size: 10; color: ="#000000">MINISTERIO DE SALUD PÚBLICA  ASISTENCIA SOCIAL </font></b></td>
		</tr>
	<tr>
		<td height="10" colspan=15 align="center" valign=top><b><font style="font-size: 10; color: ="#000000">-UNIDAD EJECUTORA 285- </font></b></td>
		</tr>
	<tr>
		<td height="10" colspan=15 align="center" valign=top><b><font style="font-size: 10; color:= "#000000">FARMACIA INTERNA</font></b></td>
		</tr>
	<tr>
		<td height="10" align="center" valign=bottom><b><font size=5 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font size=5 color="#000000"><br></font></b></td>
		<td height="10" colspan=15 align="center" valign=top><b><font style="font-size: 10;="#000000">TARJETA DE CONTROL DE INGRESOS Y EGRESOS DE MEDICAMENTOS Y PRODUCTOS AFINES</font></b></td>
		<td height="10" align="center" valign=bottom><b><font size=5 color="#000000"><br></font></b></td>
	</tr>
	<tr>
		<td height="39" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td colspan=2 align="left" valign=bottom style="font-size: 25; color: #FF0000 " bgcolor="#FFFFFF"><font size=4 color="#000000">Correlativo CGC</font><?= $matriz2['FarmNumIdKardexFarm'] ?></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font size=6 color="#FF0000"><br></font></b></td>
	</tr>
	<tr>
		<td colspan=2 height="20" align="center" valign=bottom style="font-size: 10; color: #FF0000" bgcolor="#FFFFFF"><font size=2 color="#000000">NOMBRE DEL PRODUCTO:</font></td>
		<td style="border-bottom: 1px solid #000000" colspan=13 align="center" valign=bottom style="font-size: 10; bgcolor="#FFFFFF"><b><font size=4 color="#000000"><br><?= $encabezado['AlmacStrNomInsumo'] ?></font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000">Cantidad de Producto para mantener niveles de seguridad </font></td>
		</tr>
	<tr>
		<td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000">Minimo</font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000">Máximo</font></td>
	</tr>
	<tr>
		<td colspan=2 height="32" align="center" valign=bottom style="font-size: 10; bgcolor="#FFFFFF"><font size=2 color="#000000">CÓDIGO DEL PRODUCTO: </font></td>
		<td style="border-bottom: 1px solid #000000" colspan=4 align="center" valign=bottom bgcolor="#FFFFFF"><font size=2  color="#000000"><br><?= $encabezado['AlmacNumCodInsumo'] ?></font></td>
		<td colspan=3 align="right" valign=bottom style="font-size: 10; bgcolor="#FFFFFF"><font color="#000000">RENGLON PRESUPUESTARIO: </font></td>
		<td style="border-bottom: 1px solid #000000" colspan=6 align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#000000"><br><?= $encabezado['AlmacNumRenglon'] ?></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		</tr>
	<tr>
		<td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $matriz2['FarmNumNivelMinimo'] ?></font></td>
		<td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font size=2 color="#000000"><br><?php echo $matriz2['FarmNumNivelMaximo'] ?></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		</tr>
	<tr>
		<td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br>sgsdfgsd</font></td>
	</tr>
	<tr>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" rowspan=2 height="104" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">FECHA</font></b></td>
		<td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">DOCUMENTO DE RESPALDO</font></b></td>
		<td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">DESCRIPCIÓN</font></b></td>
		<td style="border-top: 2px solid #000000; border-left: 1px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">UNIDAD DE MEDIDA</font></b></td>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">ENTRADAS</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">REAJUSTE (+/-)</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">SALIDAS</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">EXISTENCIAS</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">Información producto</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">CANTIDAD</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">PRECIO UNITARIO Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">VALOR Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">CANTIDAD</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">PRECIO UNITARIO Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">VALOR Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">CANTIDAD</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">PRECIO UNITARIO Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">VALOR Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">CANTIDAD</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">PRECIO UNITARIO Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000"> TOTAL Q.</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">No.lote</font></b></td>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;MMM-YY"><b><font color="#000000">Vencimiento</font></b></td>
    </tr>
    <?php 
	
	$cont = 0;

	foreach($detalle as $row){
		$cont++;
		$this->filaDetalle($row);

		if ($cont == 19){
			$this->cambioPagina();
			$cont=0;
		}

	}
	
	for($j=$cont; $j<=19; $j++){ ?>

	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;_-&quot;Q&quot;* #,##0.00_-;-&quot;Q&quot;* #,##0.00_-;_-&quot;Q&quot;* &quot;-&quot;??_-;_-@_-"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><font size=5 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;MMM-YY"><font size=5 color="#000000"><br></font></td>
    </tr>    	
	<?php	} ?>

	
  
	<tr>
		<td style="border-top: 1px solid #000000" colspan=18 rowspan=2 height="40" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">AUTORIZADO RESOLUCIÓN CGC FL./ 002343 GESTIÓN NUMERO 380720 DE FECHA 19/06/2019 CORRELATIVO 739 DE FECHA 09-08-2019 E. FISCAL 4-ASCC 16711 DE FECHA 09-08-2019 AUTORIZADO DEL 1 AL 3000 LIBRO 4-ASCC FOLIO 109 HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA Y 9651988-6</font></b></td>
	</tr>
	
</table>

</body>

</html>



<?php
    }

}
