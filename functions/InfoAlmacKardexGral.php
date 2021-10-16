<?php


class InfoAlmacKardexGral
{
    protected $infoKardex;

    function FnInfoKardexAlma($data)
    {
        //print_r($data);
        $this->infoKardex = $data;
    }

    function RenderFilaData($data)
    {
        echo "<tr height=53 class=x35 style='mso-height-source:userset;height:39.95pt' id='r16'>
                    <td height=51 class=x72 style='height:38.45pt;'>" . $data['AlmacDateFecha'] . " </td>
                    <td class=x73>" . $data['AlmacStrNoReferen'] . " </td>
                    <td class=x74>" . $data['AlmacStrDescripci'] . "</td>
                    <td class=x74> " . $data['AlmacStrUnidMedida'] . "</td>
                    <td class=x75> " . $data['AlmacNumEntrCantid'] . "</td>
                    <td class=x78>  " . $data['AlmacNumEntrPUnit'] . "</td>
                    <td class=x76> " . $data['AlmacNumEntrVaTotal'] . "</td>
                    <td class=x77>" . $data['AlmacNumReajCanti'] . "</td>
                    <td class=x76> " . $data['AlmacNumReajPUnit'] . "</td>
                    <td class=x74> " . $data['AlmacNumReajVTotal'] . "</td>
                    <td class=x48 style='text-align: center; vertical-align: middle'> " . $data['AlmacNumReqCantid'] . "</td>
                    <td class=x88> " . $data['AlmacNumReqPUnit'] . "</td>
                    <td class=x78> " . $data['AlmacNumReqVaTotal'] . "</td>
                    <td class=x75> " . $data['AlmacNumExisCantid'] . "</td>
                    <td class=x89> " . $data['AlmacNumExisPUnit'] . "</td>
                    <td class=x89> " . $data['AlmacNumExisVaTotal'] . "</td>
                    <td class=x93> " . $data['AlmacStrNoLote'] . "</td>
                    <td class=x93> " . $data['AlmacDateVencimi'] . "</td>
                </tr>";
    }

    function RenderInfoKardexAlma()
    {
        $matriz2 = $this->infoKardex[0];
        ?>
        <!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en"
                "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <html xmlns:v="urn:schemas-microsoft-com:vml"
              xmlns:o="urn:schemas-microsoft-com:office:office"
              xmlns:x="urn:schemas-microsoft-com:office:excel"
              xmlns="http://www.w3.org/TR/REC-html40">

        <head>
            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Aspose.Cell ">
            <link rel=File-List href="artdg-6eqkw_files/filelist.xml">
            <link rel=Edit-Time-Data href="artdg-6eqkw_files/editdata.mso">
            <link rel=OLE-Object-Data href="artdg-6eqkw_files/oledata.mso">
            <link rel="stylesheet" type="text/css" href="home.css" media="screen"/>
            <link rel="stylesheet" type="text/css" href="print.css" media="print"/>
            <!--[if gte mso 9]>
            <xml>
                <o:DocumentProperties>
                    <o:Author>Lic. Rios</o:Author>
                    <o:LastPrinted>2021-06-10T07:12:09Z</o:LastPrinted>
                    <o:Created>2018-04-24T06:59:33Z</o:Created>
                    <o:LastSaved>2021-06-10T07:14:04Z</o:LastSaved>
                </o:DocumentProperties>
            </xml><![endif]-->
            <style>
                <!--
                table {
                    mso-displayed-decimal-separator: "\.";
                    mso-displayed-thousand-separator: "\,";
                }

                @page {
                    mso-header-data: "";
                    mso-footer-data: "";
                    margin: 0in 0in 0in 0in;
                    mso-header-margin: 0in;
                    mso-footer-margin: 0in;
                    mso-page-orientation: Landscape;
                    mso-horizontal-page-align: center;
                    mso-vertical-page-align: center;
                }

                @media print {


                    body {

                        zoom: 45%;
                        margin-top: -1.5cm;


                    }

                    @page :left {

                        margin-left: 0.5cm;
                        margin-top: 2.5cm;

                    }

                    @page :right {
                        margin-left: 0.5cm;

                    }

                }

                tr {
                    mso-height-source: auto;
                    mso-ruby-visibility: none;
                }

                col {
                    mso-width-source: auto;
                    mso-ruby-visibility: none;
                }

                br {
                    mso-data-placement: same-cell;
                }

                ruby {
                    ruby-align: left;
                }

                .style0 {
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border: none;
                    mso-protection: locked visible;
                    mso-style-name: Normal;
                    mso-style-id: 0;
                }

                .font0 {
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font1 {
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                }

                .font2 {
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font3 {
                    color: #000000;
                    font-size: 18pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font4 {
                    color: #000000;
                    font-size: 16pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font5 {
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font6 {
                    color: #000000;
                    font-size: 24pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font7 {
                    color: #000000;
                    font-size: 24pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font8 {
                    color: #FF0000;
                    font-size: 20pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font9 {
                    color: #000000;
                    font-size: 22pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font10 {
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font11 {
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font12 {
                    color: #000000;
                    font-size: 20pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font13 {
                    color: #FF0000;
                    font-size: 24pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font14 {
                    color: #000000;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                .font15 {
                    color: #000000;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                }

                td {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border: none;
                    mso-protection: locked visible;
                    mso-ignore: padding;
                }

                .style0 {
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                    mso-style-name: "Normal";
                }

                .style1 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style2 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style3 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style4 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style5 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style6 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style7 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style8 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style9 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style10 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style11 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style12 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style13 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .style14 {
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                }

                .x15 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .style16 {
                    mso-number-format: "0%";
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                    mso-style-name: "Percent";
                }

                .style17 {
                    mso-number-format: "_\(\0022$\0022* \#\,\#\#0\.00_\)\;_\(\0022$\0022* \(\#\,\#\#0\.00\)\;_\(\0022$\0022* \0022-\0022??_\)\;_\(\@_\)";
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                    mso-style-name: "Currency";
                }

                .style18 {
                    mso-number-format: "_\(\0022$\0022* \#\,\#\#0_\)\;_\(\0022$\0022* \(\#\,\#\#0\)\;_\(\0022$\0022* \0022-\0022_\)\;_\(\@_\)";
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                    mso-style-name: "Currency [0]";
                }

                .style19 {
                    mso-number-format: "_\(* \#\,\#\#0\.00_\)\;_\(* \(\#\,\#\#0\.00\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                    mso-style-name: "Comma";
                }

                .style20 {
                    mso-number-format: "_\(* \#\,\#\#0_\)\;_\(* \(\#\,\#\#0\)\;_\(* \0022-\0022_\)\;_\(\@_\)";
                    text-align: general;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 10pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Arial", "sans-serif";
                    mso-protection: locked visible;
                    mso-style-name: "Comma [0]";
                }

                .style21 {
                    mso-number-format: "_\(\0022Q\0022* \#\,\#\#0\.00_\)\;_\(\0022Q\0022* \\\(\#\,\#\#0\.00\\\)\;_\(\0022Q\0022* \0022-\0022??_\)\;_\(\@_\)";
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                    mso-style-name: "Moneda";
                }

                .x22 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x23 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x24 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x25 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x26 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x27 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x28 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 2px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x29 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x30 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x31 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 16pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: none;
                    border-bottom: 1px solid windowtext;
                    border-left: none;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x32 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x33 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x34 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x35 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x36 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x37 {
                    mso-style-parent: style0;
                    mso-number-format: "MMM-yy";
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x38 {
                    mso-style-parent: style21;
                    mso-number-format: "_\(\0022Q\0022* \#\,\#\#0\.00_\)\;_\(\0022Q\0022* \\\(\#\,\#\#0\.00\\\)\;_\(\0022Q\0022* \0022-\0022??_\)\;_\(\@_\)";
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x39 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x40 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x41 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #FF0000;
                    font-size: 20pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x42 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 24pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x43 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 24pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x44 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x45 {
                    mso-style-parent: style0;
                    mso-number-format: "0";
                    text-align: center;
                    vertical-align: bottom;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x46 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x47 {
                    mso-style-parent: style0;
                    mso-number-format: "MMM-yy";
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 2px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x48 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x49 {
                    mso-style-parent: style0;
                    mso-number-format: "M\/d\/yyyy";
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x50 {
                    mso-style-parent: style0;
                    mso-number-format: "M\/d\/yyyy";
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x51 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x52 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x53 {
                    mso-style-parent: style0;
                    mso-number-format: "M\/d\/yyyy";
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x54 {
                    mso-style-parent: style0;
                    mso-number-format: "_-\0022Q\0022* \#\,\#\#0\.00_-\;\\-\0022Q\0022* \#\,\#\#0\.00_-\;_-\0022Q\0022* \0022-\0022??_-\;_-\@_-";
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x55 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x56 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x57 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 2px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x58 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: none;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x59 {
                    mso-style-parent: style0;
                    mso-number-format: "MMM-yy";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x60 {
                    mso-style-parent: style0;
                    mso-number-format: "M\/d\/yyyy";
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x61 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x62 {
                    mso-style-parent: style0;
                    mso-number-format: "MMM-yy";
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 2px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x63 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 16pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x64 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 16pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: none;
                    border-bottom: none;
                    border-left: none;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x65 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x66 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x67 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x68 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x69 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x70 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #FF0000;
                    font-size: 24pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x71 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x72 {
                    mso-style-parent: style0;
                    mso-number-format: "M\/d\/yyyy";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x73 {
                    mso-style-parent: style0;
                    mso-number-format: "0";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x74 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x75 {
                    mso-style-parent: style0;
                    mso-number-format: "\#\,\#\#0";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x76 {
                    mso-style-parent: style0;
                    mso-number-format: "\0022Q\0022\#\,\#\#0\.00";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x77 {
                    mso-style-parent: style0;
                    mso-number-format: "0";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x78 {
                    mso-style-parent: style0;
                    mso-number-format: "\0022Q\0022\#\,\#\#0\.00";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x79 {
                    mso-style-parent: style0;
                    mso-number-format: "\#\,\#\#0";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x80 {
                    mso-style-parent: style0;
                    mso-number-format: "M\/d\/yyyy";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x81 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x82 {
                    mso-style-parent: style0;
                    mso-number-format: "\0022Q\0022\#\,\#\#0\.00";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x83 {
                    mso-style-parent: style0;
                    mso-number-format: "0\.00";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x84 {
                    mso-style-parent: style0;
                    mso-number-format: "\0022Q\0022\#\,\#\#0\.0000";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x85 {
                    mso-style-parent: style0;
                    mso-number-format: "0";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x86 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: none;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x87 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x88 {
                    mso-style-parent: style0;
                    mso-number-format: "\@";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: unlocked visible;
                }

                .x89 {
                    mso-style-parent: style0;
                    mso-number-format: "\0022Q\0022\#\,\#\#0\.00";
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 15pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x90 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: none;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x91 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: none;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x92 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: none;
                    border-bottom: none;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x93 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x94 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x95 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x96 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x97 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: none;
                    border-bottom: none;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x98 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: none;
                    border-left: none;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x99 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x100 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 11pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x101 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: none;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x102 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x103 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x104 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x105 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x106 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x107 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x108 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: none;
                    border-bottom: 1px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x109 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: none;
                    border-bottom: 2px solid windowtext;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x110 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: none;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x111 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: none;
                    border-bottom: 2px solid windowtext;
                    border-left: none;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x112 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: none;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x113 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: none;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x114 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: none;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x115 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: none;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x116 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: none;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x117 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x118 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x119 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: right;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 16pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x120 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: none;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x121 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: none;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x122 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: 2px solid windowtext;
                    border-bottom: 1px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x123 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 14pt;
                    font-weight: 400;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 1px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: 2px solid windowtext;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x124 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 22pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x125 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 18pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x126 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: auto;
                    mso-pattern: auto;
                    color: #000000;
                    font-size: 20pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    mso-protection: locked visible;
                }

                .x127 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: bottom;
                    white-space: nowrap;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 16pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: none;
                    border-right: none;
                    border-bottom: 1px solid windowtext;
                    border-left: none;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x128 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 1px solid windowtext;
                    border-bottom: none;
                    border-left: 2px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                .x129 {
                    mso-style-parent: style0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    white-space: normal;
                    word-wrap: break-word;
                    background: #FFFFFF;
                    mso-pattern: auto none;
                    color: #000000;
                    font-size: 12pt;
                    font-weight: 700;
                    font-style: normal;
                    font-family: "Calibri", "sans-serif";
                    border-top: 2px solid windowtext;
                    border-right: 2px solid windowtext;
                    border-bottom: none;
                    border-left: 1px solid windowtext;
                    mso-diagonal-down: none;
                    mso-diagonal-up: none;
                    mso-protection: locked visible;
                }

                -->
            </style>
            <!--[if gte mso 9]>
            <xml>
                <x:ExcelWorkbook>
                    <x:ExcelWorksheets>
                        <x:ExcelWorksheet>
                            <x:Name>0002</x:Name>
                            <x:WorksheetOptions>
                                <x:StandardWidth>500</x:StandardWidth>
                                <x:Print>
                                    <x:ValidPrinterInfo/>
                                    <x:PaperSizeIndex>5</x:PaperSizeIndex>
                                    <x:Scale>46</x:Scale>
                                    <x:HorizontalResolution>00</x:HorizontalResolution>
                                    <x:VerticalResolution>00</x:VerticalResolution>
                                </x:Print>
                                <x:Zoom>10</x:Zoom>
                                <x:Selected/>
                            </x:WorksheetOptions>
                        </x:ExcelWorksheet>
                    </x:ExcelWorksheets>
                    <x:WindowHeight>15000</x:WindowHeight>
                    <x:WindowWidth>20000</x:WindowWidth>
                    <x:WindowTopX>-18920</x:WindowTopX>
                    <x:WindowTopY>-120</x:WindowTopY>
                    <x:RefModeR1C1/>
                    <x:TabRatio>100</x:TabRatio>
                    <x:ActiveSheet>0</x:ActiveSheet>
                </x:ExcelWorkbook>
                <x:ExcelName>
                    <x:Name>PRINT_AREA</x:Name>
                    <x:SheetIndex>1</x:SheetIndex>
                    <x:Formula>='0002'!$A$1:$S$65</x:Formula>
                </x:ExcelName>
            </xml><![endif]-->
        </head>
        <body link=blue vlink=purple class=x23>


        <table border=0 cellpadding=0 cellspacing=0 width=2383 style='border-collapse:
 collapse;table-layout:fixed;width:1787pt'>
            <col class=x23 width=119 style='mso-width-source:userset;width:89.25pt'>
            <col class=x23 width=144 style='mso-width-source:userset;width:108pt'>
            <col class=x23 width=495 style='mso-width-source:userset;width:371.25pt'>
            <col class=x23 width=150 style='mso-width-source:userset;width:200pt'>
            <col class=x23 width=122 style='mso-width-source:userset;width:91.5pt'>
            <col class=x23 width=104 style='mso-width-source:userset;width:78pt'>
            <col class=x23 width=87 style='mso-width-source:userset;width:88.25pt'>
            <col class=x23 width=104 span=2 style='mso-width-source:userset;width:78pt'>
            <col class=x23 width=88 style='mso-width-source:userset;width:88pt'>
            <col class=x23 width=100 style='mso-width-source:userset;width:75pt'>
            <col class=x23 width=101 style='mso-width-source:userset;width:75.75pt'>
            <col class=x23 width=89 style='mso-width-source:userset;width:95.75pt'>
            <col class=x23 width=135 style='mso-width-source:userset;width:75.25pt'>
            <col class=x23 width=120 style='mso-width-source:userset;width:90.75pt'>
            <col class=x23 width=90 style='mso-width-source:userset;width:100.75pt'>
            <col class=x39 width=157 style='mso-width-source:userset;width:110.75pt'>
            <col class=x39 width=148 style='mso-width-source:userset;width:110pt'>
            <tr height=15 style='mso-height-source:userset;height:15pt' id='r0'>
            <td height=20 class=x130 width=119 style='height:15pt;width:89.25pt;' align=left valign=top><span
                            style='mso-ignore:vglayout;position:absolute;z-index:0;margin-left:63px;margin-top:18px;width:189px;height:176px'><img
                                width=189 height=176 src="logohospital.png" name='Imagen 2'></span><span
                            style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td height=20 class=x23
                                                                                                    width=119
                                                                                                    style='height:15pt;width:89.25pt;'></td></tr></table></span>
                </td>
                <td class=x23 width=144 style='width:108pt;'></td>
                <td class=x23 width=495 style='width:371.25pt;'></td>
                <td class=x23 width=80 style='width:60pt;'></td>
                <td class=x23 width=122 style='width:91.5pt;'></td>
                <td class=x23 width=104 style='width:78pt;'></td>
                <td class=x23 width=87 style='width:65.25pt;'></td>
                <td class=x23 width=104 style='width:78pt;'></td>
                <td class=x23 width=104 style='width:78pt;'></td>
                <td class=x23 width=88 style='width:66pt;'></td>
                <td class=x23 width=100 style='width:75pt;'></td>
                <td class=x23 width=101 style='width:75.75pt;'></td>
                <td class=x23 width=89 style='width:66.75pt;'></td>
                <td class=x23 width=127 style='width:95.25pt;'></td>
                <td class=x23 width=109 style='width:81.75pt;'></td>
                <td height=20 class=x130 width=105 style='height:15pt;width:78.75pt;' align=left valign=top><span
                            style='mso-ignore:vglayout;position:absolute;z-index:1;margin-left:11px;margin-top:0px;width:231px;height:166px'><img
                                width=231 height=166 src="logoCGC.png" name='Imagen 3'></span><span
                            style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td height=20 class=x23
                                                                                                    width=105
                                                                                                    style='height:15pt;width:78.75pt;'></td></tr></table></span>
                </td>
                <td class=x39 width=157 style='width:117.75pt;'></td>
                <td class=x39 width=148 style='width:111pt;'></td>

            </tr>
            <tr height=35 style='mso-height-source:userset;height:26.25pt' id='r1'>
                <td colspan=18 height=35 class=x126 style='height:26.25pt;'>MINISTERIO DE SALUD PÚBLICA Y ASISTENCIA
                    SOCIAL
                </td>
            </tr>
            <tr height=35 style='mso-height-source:userset;height:26.25pt' id='r2'>
                <td colspan=18 height=35 class=x126 style='height:26.25pt;'>HOSPITAL NACIONAL ESPECIALIZADO DE VILLA
                    NUEVA - UNIDAD EJECUTORA 285
                </td>
            </tr>
            <tr height=35 style='mso-height-source:userset;height:26.25pt' id='r3'>


                <td colspan=18 height=35 class=x126 style='height:26.25pt;'>ALMACEN GENERAL DE SUMINISTROS</td>
            </tr>
            <tr height=31 style='mso-height-source:userset;height:23.25pt' id='r4'>
                <td colspan=18 height=31 class=x125 style='height:23.25pt;'></td>
            </tr>
            <tr height=42 style='mso-height-source:userset;height:31.5pt' id='r5'>
                <td height=42 class=x23 style='height:31.5pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td colspan=2 class=x43 style='mso-ignore:colspan;'>Correlativo CGC</td>
                <td class=x44></td>
                <td class=x44></td>
            </tr>
            <tr height=43 class=x24 style='mso-height-source:userset;height:32.25pt' id='r6'>
                <td height=43 class=x24 style='height:32.25pt;'></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x29></td>
                <td class=x70>No.</td>
                <td class=x41><?php echo $matriz2['AlmacNumIdKardex'] ?></td>
            </tr>
            <tr height=29 class=x24 style='mso-height-source:userset;height:21.75pt' id='r7'>
                <td colspan=2 height=29 class=x63 style='mso-ignore:colspan;height:21.75pt;'>NOMBRE DEL PRODUCTO:</td>
                <td colspan=13 class=x127
                    style='border-bottom:1px solid windowtext;'><?php echo $matriz2['AlmacStrNomInsumo'] . ' ' . $matriz2['AlmacStrCaractInsu'] ?> </td>
                <td class=x24></td>
                <td colspan=2 class=x128 style='border-right:2px solid windowtext;'>NIVELES DE SEGURIDAD</td>
            </tr>
            <tr height=28 class=x24 style='mso-height-source:userset;height:21pt' id='r8'>
                <td height=28 class=x63 style='height:21pt;'></td>
                <td class=x63></td>
                <td class=x64></td>
                <td class=x64></td>
                <td class=x64></td>
                <td class=x64></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x24></td>
                <td rowspan=2 height=54 class=x115 style='border-bottom:2px solid windowtext;height:40.5pt;'>Minimo</td>
                <td rowspan=2 height=54 class=x117
                    style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;height:40.5pt;'>Máximo
                </td>
            </tr>
            <tr height=29 class=x24 style='mso-height-source:userset;height:21.75pt' id='r9'>
                <td colspan=2 height=29 class=x63 style='mso-ignore:colspan;height:21.75pt;'>CÓDIGO DEL PRODUCTO:</td>
                <td class=x31></td>
                <td class=x31><?php echo $matriz2['AlmacNumCodInsumo'] ?></td>
                <td class=x31></td>
                <td class=x31></td>
                <td colspan=3 class=x119><span style='float:right'>RENGLON PRESUPUESTARIO: </span></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31><?php echo $matriz2['AlmacNumRenglon'] ?></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x24></td>
            </tr>
            <tr height=20 class=x24 style='mso-height-source:userset;height:15pt' id='r10'>
                <td height=20 class=x24 style='height:15pt;'></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td rowspan=2 height=38 class=x120 style='border-bottom:2px solid windowtext;height:28.5pt;'></td>
                <td rowspan=2 height=38 class=x122
                    style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;height:28.5pt;'></td>
            </tr>
            <tr height=21 class=x24 style='mso-height-source:userset;height:15.75pt' id='r11'>
                <td height=21 class=x24 style='height:15.75pt;'></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
            </tr>
            <tr height=38 class=x24 style='mso-height-source:userset;height:28.5pt' id='r12'>
                <td colspan=18 height=38 class=x124 style='height:28.5pt;'>TARJETA DE CONTROL DE INVENTARIO DE ALMACEN
                    GENERAL DE SUMINISTROS
                </td>
            </tr>
            <br></br>
            <br></br>
            <br></br>

            <tr height=21 class=x24 style='mso-height-source:userset;height:15.75pt' id='r13'>
                <td height=21 class=x24 style='height:15.75pt;'></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x40></td>
                <td class=x40></td>
            </tr>


            <tr height=22 class=x24 style='mso-height-source:userset;height:16.5pt' id='r14'>
                <td rowspan=2 height=94 class=x102
                    style='border-right:1px solid windowtext;border-bottom:2px solid windowtext;height:70.5pt;'>FECHA
                </td>
                <td rowspan=2 height=94 class=x104
                    style='border-right:1px solid windowtext;border-bottom:2px solid windowtext;height:70.5pt;overflow:hidden;'>
                    DOCUMENTO DE RESPALDO
                </td>
                <td rowspan=2 height=94 class=x108 style='border-bottom:2px solid windowtext;height:70.5pt;'>
                    DESCRIPCIÓN
                </td>
                <td rowspan=2 height=94 class=x113
                    style='border-bottom:2px solid windowtext;height:70.5pt;overflow:hidden;'>UNIDAD DE MEDIDA
                </td>
                <td colspan=3 class=x94 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>
                    ENTRADAS
                </td>
                <td colspan=3 class=x110 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>
                    REAJUSTE (+/-)
                </td>
                <td colspan=3 class=x101 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>
                    SALIDAS
                </td>
                <td colspan=3 class=x94 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>
                    EXISTENCIAS
                </td>
                <td colspan=2 class=x97 style='border-right:2px solid windowtext;'>INFORMACION PRODUCTO</td>
            </tr>
            <tr height=75 class=x24 style='mso-height-source:userset;height:56.25pt' id='r15'>
                <td class=x55>CANTIDAD</td>
                <td class=x56 style='overflow:hidden;'>PRECIO UNITARIO Q.</td>
                <td class=x57>VALOR Q.</td>
                <td class=x55>CANTIDAD</td>
                <td class=x56 style='overflow:hidden;'>PRECIO UNITARIO Q.</td>
                <td class=x58>VALOR Q.</td>
                <td class=x87>CANTIDAD</td>
                <td class=x86 style='overflow:hidden;'>PRECIO UNITARIO Q.</td>
                <td class=x57>VALOR Q.</td>
                <td class=x90>CANTIDAD</td>
                <td class=x91 style='overflow:hidden;'>PRECIO UNITARIO Q.</td>
                <td class=x92> TOTAL Q.</td>
                <td class=x71>No.lote</td>
                <td class=x59>Vencimiento</td>
            </tr>


            <?php
            $cont = 0;
            $numero_de_registros = count($matriz2['ArrayDetalle']) - 1;

            for ($i = 0; $i < 21; $i++)
                if ($i <= $numero_de_registros)
                    $this::RenderFilaData($matriz2['ArrayDetalle'][$i]);

            ?>

            <tr height=53 class=x24 style='mso-height-source:userset;height:39.95pt' id='r37'>
                <td colspan=18 rowspan=2 height=104 class=x99 style='height:78.4pt;'>FORMA AUTORIZADA SEGÚN RESOLUCION
                    DE CONTRALORIA NUMERO F.O.-ES-64-2021 001753 GESTION: 559752 DE FECHA 03/05/2021 NUMERO CORRELATIVO
                    Y FECHA DE AUTORIZACION DE IMPRESIÓN 358-2021 DE FECHA 28-05-2021 NUMERO Y FECHA DEL TIPO DE ENVIO
                    E.FISCAL 4-ASCC 18189 DE FECHA 28-05-2021 RANGO DE NUMERACION IMPRESA DEL 1 AL 3000 SIN SERIE DATOS
                    ADICIONALES LIBRO 4-ASCC FOLIO 63
                </td>
            </tr>


            <tr height=53 class=x24 style='mso-height-source:userset;height:39.95pt' id='r38'>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r39'>
                <td height=19 class=x24 style='height:14.25pt;'></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x40></td>
                <td class=x40></td>
            </tr>


            <?php
            if ($numero_de_registros >22){
                ?>
                <!--empieza la segunda hoja-->

                <tr height=20 style='mso-height-source:userset;height:15pt' id='r40'>
                    <td rowspan=2 height=100 class=x102
                        style='border-right:1px solid windowtext;border-bottom:2px solid windowtext;height:75.6pt;'>FECHA
                    </td>
                    <td rowspan=2 height=100 class=x104
                        style='border-right:1px solid windowtext;border-bottom:2px solid windowtext;height:75.6pt;overflow:hidden;'>
                        DOCUMENTO DE RESPALDO
                    </td>
                    <td rowspan=2 height=100 class=x106
                        style='border-right:1px solid windowtext;border-bottom:2px solid windowtext;height:75.6pt;'>
                        DESCRIPCIÓN
                    </td>
                    <td rowspan=2 height=100 class=x108
                        style='border-bottom:2px solid windowtext;height:75.6pt;overflow:hidden;'>UNIDAD DE MEDIDA
                    </td>
                    <td colspan=3 class=x94 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>
                        ENTRADAS
                    </td>
                    <td colspan=3 class=x110 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>
                        REAJUSTE (+/-)
                    </td>
                    <td colspan=3 class=x94 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>
                        SALIDAS
                    </td>
                    <td colspan=3 class=x94 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>
                        EXISTENCIAS
                    </td>
                    <td colspan=2 class=x97 style='border-right:2px solid windowtext;'>INFORMACION PRODUCTO</td>
                </tr>
                <tr height=83 style='mso-height-source:userset;height:62.85pt' id='r41'>
                    <td class=x55>CANTIDAD</td>
                    <td class=x56 style='overflow:hidden;'>PRECIO UNITARIO Q.</td>
                    <td class=x57>VALOR Q.</td>
                    <td class=x55>CANTIDAD</td>
                    <td class=x56 style='overflow:hidden;'>PRECIO UNITARIO Q.</td>
                    <td class=x57>VALOR Q.</td>
                    <td class=x55>CANTIDAD</td>
                    <td class=x56 style='overflow:hidden;'>PRECIO UNITARIO Q.</td>
                    <td class=x57>VALOR Q.</td>
                    <td class=x55>CANTIDAD</td>
                    <td class=x56 style='overflow:hidden;'>PRECIO UNITARIO Q.</td>
                    <td class=x58> TOTAL Q.</td>
                    <td class=x71>No.lote</td>
                    <td class=x59>Vencimiento</td>
                </tr>

                <?php

                if ($numero_de_registros > 21)
                    for ($i=21; $i<42; $i++)
                        if ($i <= $numero_de_registros )
                            $this::RenderFilaData($matriz2['ArrayDetalle'][$i]);

                ?>

                <tr height=20 style='mso-height-source:userset;height:15pt' id='r63'>
                    <td colspan=18 rowspan=2 height=38 class=x99 style='height:28.5pt;'>FORMA AUTORIZADA SEGÚN RESOLUCION DE
                        CONTRALORIA NUMERO F.O.-ES-64-2021 001753 GESTION: 559752 DE FECHA 03/05/2021 NUMERO CORRELATIVO Y
                        FECHA DE AUTORIZACION DE IMPRESIÓN 358-2021 DE FECHA 28-05-2021 NUMERO Y FECHA DEL TIPO DE ENVIO
                        E.FISCAL 4-ASCC 18189 DE FECHA 28-05-2021 RANGO DE NUMERACION IMPRESA DEL 1 AL 3000 SIN SERIE DATOS
                        ADICIONALES LIBRO 4-ASCC FOLIO 63
                    </td>
                </tr>
                <!--Termina segunda hoja -->
                <?php
            }
                ?>




            <tr height=20 style='mso-height-source:userset;height:15pt' id='r64'>
            </tr>
            <![if supportMisalignedColumns]>
            <tr height=0 style='display:none'>
                <td width=119 style='width:89.25pt'></td>
                <td width=144 style='width:108pt'></td>
                <td width=495 style='width:371.25pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=122 style='width:91.5pt'></td>
                <td width=104 style='width:78pt'></td>
                <td width=87 style='width:65.25pt'></td>
                <td width=104 style='width:78pt'></td>
                <td width=104 style='width:78pt'></td>
                <td width=88 style='width:66pt'></td>
                <td width=100 style='width:75pt'></td>
                <td width=101 style='width:75.75pt'></td>
                <td width=89 style='width:66.75pt'></td>
                <td width=127 style='width:95.25pt'></td>
                <td width=109 style='width:81.75pt'></td>
                <td width=105 style='width:78.75pt'></td>
                <td width=157 style='width:117.75pt'></td>
                <td width=90 style='width:100pt'></td>
            </tr>
            <![endif]>
        </table>

        <script language='javascript' type='text/javascript'>
            function ChangeRowspanHiddenData() {
                var node;
                var params = ["r8", "r10", "r14", "r37", "r40", "r63"];
                for (var i = 0; i < params.length; i++) {
                    node = document.getElementById(params[i]);
                    if (node != null) {
                        node.style.display = "";
                    }
                }
            }

            ChangeRowspanHiddenData();
        </script>
        </body>

        <style>
            <!--
            .x130 {
                mso-style-parent: style0;
                mso-number-format: General;
                text-align: general;
                vertical-align: middle;
                white-space: nowrap;
                background: auto;
                mso-pattern: auto;
                color: #000000;
                font-size: 11pt;
                font-weight: 400;
                font-style: normal;
                font-family: "Calibri", "sans-serif";
                mso-protection: locked visible;
            }

            -->
        </style>
        </html>


        <?php
    }


}