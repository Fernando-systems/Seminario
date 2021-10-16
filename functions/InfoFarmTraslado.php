<?php

class InfoFarmTraslado{
    protected $infoTraslado;

    function FnInfoTrasladoFarm($data){
        $this -> infoTraslado = $data;
    }

    function RenderInfoTrasladoFarm(){
        $matriz2 = $this->infoTraslado[0];
        ?>
<!--Empieza el formato-->

        <!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <html xmlns:v="urn:schemas-microsoft-com:vml"
              xmlns:o="urn:schemas-microsoft-com:office:office"
              xmlns:x="urn:schemas-microsoft-com:office:excel"
              xmlns="http://www.w3.org/TR/REC-html40">

        <head>
            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Aspose.Cell ">
            <link rel=File-List href="a8yss-6rkfz_files/filelist.xml">
            <link rel=Edit-Time-Data href="a8yss-6rkfz_files/editdata.mso">
            <link rel=OLE-Object-Data href="a8yss-6rkfz_files/oledata.mso">
            <!--[if gte mso 9]><xml>
                <o:DocumentProperties>
                    <o:Author>Evelyn Zeceña</o:Author>
                    <o:LastPrinted>2021-05-06T11:58:38Z</o:LastPrinted>
                    <o:Created>2021-05-06T09:01:55Z</o:Created>
                    <o:LastSaved>2021-05-06T12:27:44Z</o:LastSaved>
                </o:DocumentProperties>
            </xml><![endif]-->
            <style>
                <!--table
                {mso-displayed-decimal-separator:"\.";
                    mso-displayed-thousand-separator:"\,";}
                @page
                {
                    mso-header-data:"";
                    mso-footer-data:"";
                    margin:0.118110236220472in 0.196850393700787in 0.118110236220472in 0in;
                    mso-header-margin:0.118110236220472in;
                    mso-footer-margin:0in;
                    mso-page-orientation:Portrait;
                    mso-horizontal-page-align:center;
                }
                tr
                {mso-height-source:auto;
                    mso-ruby-visibility:none;}
                col
                {mso-width-source:auto;
                    mso-ruby-visibility:none;}
                br
                {mso-data-placement:same-cell;}
                ruby
                {ruby-align:left;}
                .style0
                {
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border:none;
                    mso-protection:locked visible;
                    mso-style-name:Normal;
                    mso-style-id:0;}
                .font0
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font1
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font2
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font3
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font4
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font5
                {
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font6
                {
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font7
                {
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font8
                {
                    color:#FF0000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font9
                {
                    color:#000000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font10
                {
                    color:#000000;
                    font-size:14pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font11
                {
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font12
                {
                    color:#FF0000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","sans-serif"; }
                td
                {mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border:none;
                    mso-protection:locked visible;
                    mso-ignore:padding;}
                .style0
                {
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Normal";
                }
                .style1
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style2
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style3
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style4
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style5
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style6
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style7
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style8
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style9
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style10
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style11
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style12
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style13
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style14
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x15
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .style16
                {
                    mso-number-format:"0%";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Percent";
                }
                .style17
                {
                    mso-number-format:"_\(\0022$\0022* \#\,\#\#0\.00_\)\;_\(\0022$\0022* \(\#\,\#\#0\.00\)\;_\(\0022$\0022* \0022-\0022??_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Currency";
                }
                .style18
                {
                    mso-number-format:"_\(\0022$\0022* \#\,\#\#0_\)\;_\(\0022$\0022* \(\#\,\#\#0\)\;_\(\0022$\0022* \0022-\0022_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Currency [0]";
                }
                .style19
                {
                    mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \(\#\,\#\#0\.00\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Comma";
                }
                .style20
                {
                    mso-number-format:"_\(* \#\,\#\#0_\)\;_\(* \(\#\,\#\#0\)\;_\(* \0022-\0022_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Comma [0]";
                }
                .x21
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x22
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x23
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x24
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x25
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x26
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x27
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x28
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x29
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x30
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x31
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x32
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x33
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x34
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x35
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x36
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x37
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x38
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x39
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x40
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x41
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    white-space:normal;
                    word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x42
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x43
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x44
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x45
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x46
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arialf";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x47
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x48
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x49
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x50
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x51
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x52
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#FF0000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x53
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x54
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x55
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x56
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x57
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x58
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x59
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x60
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x61
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x62
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x63
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x64
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x65
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:14pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x66
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x67
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x68
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x69
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x70
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x71
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x72
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x73
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","sans-serif";
                    mso-protection:locked visible;
                }
                -->
            </style>
            <!--[if gte mso 9]><xml>
                <x:ExcelWorkbook>
                    <x:ExcelWorksheets>
                        <x:ExcelWorksheet>
                            <x:Name>TRASLADOS </x:Name>
                            <x:WorksheetOptions>
                                <x:StandardWidth>2560</x:StandardWidth>
                                <x:FitToPage/>
                                <x:Print>
                                    <x:ValidPrinterInfo/>
                                    <x:PaperSizeIndex>1</x:PaperSizeIndex>
                                    <x:Scale>67</x:Scale>
                                    <x:HorizontalResolution>600</x:HorizontalResolution>
                                    <x:VerticalResolution>600</x:VerticalResolution>
                                </x:Print>
                                <x:ShowPageBreakZoom/>
                                <x:Zoom>84</x:Zoom>
                                <x:Selected/>
                                <x:TopRowVisible>24</x:TopRowVisible>
                            </x:WorksheetOptions>
                        </x:ExcelWorksheet>
                    </x:ExcelWorksheets>
                    <x:WindowHeight>15840</x:WindowHeight>
                    <x:WindowWidth>29040</x:WindowWidth>
                    <x:WindowTopX>-120</x:WindowTopX>
                    <x:WindowTopY>-120</x:WindowTopY>
                    <x:RefModeR1C1/>
                    <x:TabRatio>600</x:TabRatio>
                    <x:ActiveSheet>0</x:ActiveSheet>
                </x:ExcelWorkbook>
                <x:ExcelName>
                    <x:Name>PRINT_AREA</x:Name>
                    <x:SheetIndex>1</x:SheetIndex>
                    <x:Formula>='TRASLADOS '!$A$1:$J$52</x:Formula>
                </x:ExcelName>
            </xml><![endif]-->
        </head>
        <body link=blue vlink=purple class=x21>

        <table border=0 cellpadding=0 cellspacing=0 width=1157 style='border-collapse:
 collapse;table-layout:fixed;width:950pt'>
            <col class=x21 width=80 style='mso-width-source:userset;width:20pt'>
            <col class=x21 width=119 style='mso-width-source:userset;width:50pt'>
            <col class=x21 width=145 span=3 style='mso-width-source:userset;width:125pt'>
            <col class=x21 width=115 style='mso-width-source:userset;width:50pt'>
            <col class=x21 width=98 style='mso-width-source:userset;width:55pt'>
            <col class=x21 width=75 style='mso-width-source:userset;width:50pt'>
            <col class=x21 width=67 style='mso-width-source:userset;width:50.25pt'>
            <col class=x21 width=88 style='mso-width-source:userset;width:66pt'>
            <col width=80 style='width:60pt'>
            <tr height=35 style='mso-height-source:userset;height:26.25pt' id='r0'>
                <td colspan=10 height=35 class=x74 width=1077 style='height:26.25pt;' align=left valign=top>
                    <span style='mso-ignore:vglayout;position:absolute;z-index:2;margin-left:925px;margin-top:4px;width:143px;height:115px'>
                        <img width=143 height=115 src="..\img\LogoCGCTraslado.png" name='Imagen 3'>
                    </span>
                    <span style='mso-ignore:vglayout;position:absolute;z-index:1;margin-left:6px;margin-top:10px;width:120px;height:110px'>
                        <img width=120 height=110 src="..\img\logo.png" name='Imagen 2'>
                    </span>
                    <span  style='mso-ignore:vglayout2'>
                        <table cellpadding=0 cellspacing=0><tr>
                                <td colspan=10 height=35 class=x53 width=5000 style='height:26.25pt;'>
                                    <a name="PRINT_AREA" >
                                        <span style='font-size:14pt;color:#000000;font-weight:700;text-decoration:none;text-line-through:none;font-family:"Calibri";'>HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </span>
                </td>
                <td class=x21 width=80 style='width:60pt;'></td>
            </tr>
            <tr height=26 style='mso-height-source:userset;height:19.5pt' id='r1'>
                <td colspan=10 height=26 class=x53 style='height:19.5pt;'>MINISTERIO DE SALUD PÚBLICA Y ASISTENCIA SOCIAL</td>
                <td class=x21></td>
            </tr>
            <tr height=26 style='mso-height-source:userset;height:19.5pt' id='r2'>
                <td colspan=10 height=26 class=x53 style='height:19.5pt;'>DEPARTAMENTO DE FARMACIA INTERNA</td>
                <td class=x21></td>
            </tr>
            <tr height=26 style='mso-height-source:userset;height:19.5pt' id='r3'>
                <td colspan=10 height=26 class=x53 style='height:19.5pt;'>TRASLADO DE MEDICAMENTOS Y PRODUCTOS AFINES</td>
                <td class=x21></td>
            </tr>
            <tr height=26 style='mso-height-source:userset;height:19.5pt' id='r4'>
                <td height=26 class=x21 style='height:19.5pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td colspan=2 class=x65>Correlativo CGC</td>
                <td class=x52>No.<span style='mso-spacerun:yes'>&nbsp;&nbsp; </span><?php echo $matriz2['FarmNumIdTraslado']; ?></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r5'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21>SOLICITA:</td>
                <td class=x21>AREA PRODUCCIÓN</td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x51 align="center">
                    <?php if ( $matriz2['FarmStrUnidSolicita'] == 1) {
                        echo 'X';
                    }
                    else{
                        echo '';
                    };?> </td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r6'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21></td>
                <td class=x21>AREA DE UNIDOSIS</td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x51 align="center">
                    <?php if ( $matriz2['FarmStrUnidSolicita'] == 2) {
                        echo 'X';
                    }
                    else{
                        echo '';
                    };?> </td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r7'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21></td>
                <td colspan=2 class=x21 style='mso-ignore:colspan;'>FARMACIA SATÉLITE EMERGENCIA</td>
                <td class=x21></td>
                <td class=x51 align="center">
                    <?php if ( $matriz2['FarmStrUnidSolicita'] == 3 || $matriz2['FarmStrUnidSolicita'] == 4) {
                        echo 'X';
                    }
                    else{
                        echo '';
                    };?>
                </td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r8'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21></td>
                <td class=x21>FARMACIA INTERNA</td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x51 align="center">
                    <?php if ( $matriz2['FarmStrUnidSolicita'] == 5 || $matriz2['FarmStrUnidSolicita'] == 6) {
                        echo 'X';
                    }
                    else{
                        echo '';
                    };?> </td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r9'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r10'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21>ENTREGA:</td>
                <td colspan=2 class=x21 style='mso-ignore:colspan;'>BODEGA FARMACIA MEDICAMENTOS</td>
                <td class=x21></td>
                <td class=x51  align="center">
                    <?php if ( $matriz2['FarmStrUnidEntrega'] == 1) {
                        echo 'X';
                    }
                    else{
                        echo '';
                    };?> </td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r11'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21></td>
                <td colspan=2 class=x21 style='mso-ignore:colspan;'>BODEGA FARMACIA MMQM Y AFINES</td>
                <td class=x21></td>
                <td class=x51 align="center">
                    <?php if ( $matriz2['FarmStrUnidEntrega'] == 2) {
                        echo 'X';
                    }
                    else{
                        echo '';
                    };?> </td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r12'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21></td>
                <td colspan=2 class=x21 style='mso-ignore:colspan;'>FARMACIA SATÉLITE EMERGENCIA</td>
                <td class=x21></td>
                <td class=x51 align="center">
                    <?php if ( $matriz2['FarmStrUnidEntrega'] == 3 || $matriz2['FarmStrUnidEntrega'] == 4) {
                        echo 'X';
                    }
                    else{
                        echo '';
                    };?> </td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r13'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=52 style='mso-height-source:userset;height:25pt' id='r14'>
                <td height=52 class=x21 style='height:25pt;'></td>
                <td class=x50>CODIGO</td>
                <td colspan=3 class=x46 style='border-bottom:2px solid windowtext;'>DESCRIPCIÓN DEL PRODUCTO</td>
                <td class=x48 style='overflow:hidden;'>CANTIDAD SOLICITADA</td>
                <td class=x47 style='overflow:hidden;'>CANTIDAD DESPACHADA</td>
                <td colspan=3 class=x46 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>MOTIVO DE TRASLADO</td>
                <td class=x21></td>
            </tr>

            <?php
                $cont=0;
                foreach ($matriz2['ArrayDetalle'] as $row) {
                $cont++;

            ?>

            <tr height=39 style='mso-height-source:userset;height:20pt' id='r15'>
                <td height=39 class=x21 style='height:20pt;'></td>
                <td class=x43 align="center"><?php echo $row['FarmNumCodiInsu'] ?></td>
                <td colspan=3 class=x41 style='border-bottom:1px solid windowtext;' align="justify"><?php echo $row['FarmStrDescrip'] ?></td>
                <td class=x43 align="center"><?php echo $row['FarmNumCantSoli'] ?></td>
                <td class=x42 align="center"><?php echo $row['FarmNumCantDesp'] ?></td>
                <td colspan=3 class=x62 style='border-right:2px solid windowtext;border-bottom:1px solid windowtext;' align="justify"><?php echo $row['FarmStrMotivo'] ?></td>
                <td class=x21></td>
            </tr>

    <?php }//Fin de Foreach
?>


            <tr height=39 style='mso-height-source:userset;height:20pt' id='r16'>
                <td height=39 class=x21 style='height:20pt;'></td>
                <td class=x38 align="center">---------------</td>
                <td colspan=3 class=x36 style='border-bottom:1px solid windowtext;' align="center">---------------Última Línea---------------</td>
                <td class=x38 align="center">---------------</td>
                <td class=x37 align="center">---------------</td>
                <td colspan=3 class=x36 style='border-right:2px solid windowtext;border-bottom:1px solid windowtext;' align="center">---------------</td>
                <td class=x21></td>
            </tr>

        <?php
        for($j=$cont; $j<24; $j++){ ?>

            <tr height=39 style='mso-height-source:userset;height:20pt' id='r16'>
                <td height=39 class=x21 style='height:20pt;'></td>
                <td class=x38 align="center"></td>
                <td colspan=3 class=x36 style='border-bottom:1px solid windowtext;' align="center"></td>
                <td class=x38 align="center"></td>
                <td class=x37 align="center"></td>
                <td colspan=3 class=x36 style='border-right:2px solid windowtext;border-bottom:1px solid windowtext;' align="center"></td>
                <td class=x21></td>
            </tr>

        <?php	} ?>


            <tr height=22 class=x23 style='mso-height-source:userset;height:20pt' id='r33'>
                <td height=22 class=x25 style='height:20pt;'></td>
                <td class=x26>Entrega:</td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x25></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
            </tr>


            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r34'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td colspan=2 class=x29 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['FarmStrNomEntrega'] ?></td>
                <td class=x58></td>
                <td colspan=2 class=x29 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['FarmStrCargEntrega'] ?></td>
                <td class=x30></td>
                <td colspan=3 class=x69 style='border-bottom:1px solid windowtext;'></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r35'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td colspan=2 class=x55>Nombre Completo</td>
                <td class=x58></td>
                <td colspan=2 class=x70>Cargo</td>
                <td class=x23></td>
                <td colspan=3 class=x28>Firma</td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r36'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td class=x30></td>
                <td class=x30></td>
                <td class=x30></td>
                <td class=x30></td>
                <td class=x30></td>
                <td class=x30></td>
                <td class=x30></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r37'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td class=x26>Recibe</td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r38'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td class=x54 colspan="2"><?php echo $matriz2['FarmStrNomRecibe'] ?></td>
                <td class=x58></td>
                <td colspan=2 class=x29 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['FarmStrCargRecibe'] ?></td>
                <td class=x58></td>
                <td colspan=3 class=x29 style='border-bottom:1px solid windowtext;'></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r39'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td colspan=2 class=x28>Nombre Completo</td>
                <td class=x58></td>
                <td colspan=2 class=x28>Cargo</td>
                <td class=x23></td>
                <td colspan=3 class=x28>Firma</td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r40'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r41'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td colspan=3 class=x27 style='mso-ignore:colspan;'>Vo. Bo JEFE DEPARTAMENTO DE FARMACIA INTERNA</td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r42'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td colspan=2 class=x68 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['FarmStrNomJefe'] ?></td>
                <td class=x72></td>
                <td colspan=2 class=x29 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['FarmStrCargJefe'] ?></td>
                <td class=x26></td>
                <td colspan=3 class=x29 style='border-bottom:1px solid windowtext;'></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r43'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td colspan=2 class=x28>Nombre Completo</td>
                <td class=x58></td>
                <td colspan=2 class=x55>Cargo</td>
                <td class=x23></td>
                <td colspan=3 class=x71>Firma</td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r44'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r45'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td class=x27>OBSERVACIONES:</td>
                <td colspan=8 class=x29 style='border-bottom:1px solid windowtext;'>

                    <?php

                    $str = $matriz2['FarmStrObservacion'];
                    if ($str == NULL){
}
                    else{
                        $str= substr($str, 0, 135). "-";
                        echo $str;
                    }




                    ?>
                </td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r46'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td class=x56>
                    <?php

                    /*echo $row['FarmStrObservacion'] */
                    $str = substr($matriz2['FarmStrObservacion'], 135);

                    echo $str;




                    ?>

                </td>
                <td class=x56></td>
                <td class=x56></td>
                <td class=x56></td>
                <td class=x56></td>
                <td class=x56></td>
                <td class=x56></td>
                <td class=x56></td>
                <td class=x56></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r47'>
                <td height=21 class=x25 style='height:15.75pt;'></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x25></td>
                <td class=x26></td>
                <td height=20 class=x75 width=98 style='height:15pt;width:73.5pt;' align=left valign=top><span style='mso-ignore:vglayout;position:absolute;z-index:0;margin-left:67px;margin-top:6px;width:245px;height:37px'><img width=245 height=37 src="..\img\OriginalTraslado.png" name='Text Box 18'></span><span  style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td height=20 class=x24 width=98 style='height:15pt;width:73.5pt;'></td></tr></table></span></td>
                <td class=x24></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
            </tr>
            <tr height=21 class=x23 style='mso-height-source:userset;height:15.75pt' id='r48'>
                <td height=21 class=x67 style='height:15.75pt;'></td>
                <td class=x73>Lugar y Fecha:</td>
                <td colspan=6 height=20 class=x77 width=723 style='border-bottom:1px solid windowtext;height:15pt;width:542.25pt;' align=left valign=top>
                    <span style='mso-ignore:vglayout;position:absolute;z-index:3;margin-left:640px;margin-top:8px;width:242px;height:33px'>

                    </span>
                    <span  style='mso-ignore:vglayout2'>
                        <table cellpadding=0 cellspacing=0>
                            <tr>

                                <td colspan=4 height=20  class=x76 width=723 style='height:15pt;width:542.25pt;'>
                                    <span style='mso-spacerun:yes;white-space:nowrap; font-size: 12pt; font-family: "Calibri", "sans-serif"; font-weight: 700'><?php echo $matriz2['FarmStrLugar'] . "    " .date("d/m/Y", strtotime($matriz2  ['FarmDateTras'])) ?> &nbsp;&nbsp;
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </span>
                </td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
            </tr>
            <tr height=20 class=x23 style='mso-height-source:userset;height:15pt' id='r49'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23> <img align="left" width=245 height=37 src="..\img\Traslado_Copia.png" name='Text Box 18'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r50'>
                <td colspan=10 rowspan=2 height=50 class=x22 style='height:37.5pt;'>AUTORIZADO RESOLUCIÓN CGC SM./ 002344 NUMERO DE GESTIÓN 380713 DE FECHA 19/06/2019 CORRELATIVO 740-2019 DE FECHA 09-08-2019 E. FISCAL 4-ASCC 16712 DE FECHA 09-08-2019 AUTORIZADO DEL 1 AL 10,000 LIBRO 4-ASCC FOLIO 109 HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA Y 9651988-6</td>
                <td class=x21></td>
            </tr>
            <tr height=30 style='mso-height-source:userset;height:22.5pt' id='r51'>
                <td class=x21></td>
            </tr>
            <![if supportMisalignedColumns]>
            <tr height=0 style='display:none'>
                <td width=80 style='width:60pt'></td>
                <td width=119 style='width:89.25pt'></td>
                <td width=145 style='width:108.75pt'></td>
                <td width=145 style='width:108.75pt'></td>
                <td width=145 style='width:108.75pt'></td>
                <td width=115 style='width:86.25pt'></td>
                <td width=98 style='width:73.5pt'></td>
                <td width=75 style='width:56.25pt'></td>
                <td width=67 style='width:50.25pt'></td>
                <td width=88 style='width:66pt'></td>
                <td width=80 style='width:60pt'></td>
            </tr>
            <![endif]>
        </table>

        <script language = 'javascript' type='text/javascript'>
            function ChangeRowspanHiddenData()
            {
                var node;
                var params=["r50"];
                for (var i = 0;i < params.length; i++)
                {
                    node = document.getElementById(params[i]);
                    if (node != null)
                    {
                        node.style.display = "";
                    }
                }
            }
            ChangeRowspanHiddenData();
        </script>
        </body>

        <style>
            <!--
            .x74
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                white-space:nowrap;
                background:auto;
                mso-pattern:auto;
                font-size:14pt;
                font-weight:700;
                font-style:normal;
                font-family:"Calibri","sans-serif";
                mso-protection:locked visible;
            }
            .x75
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                white-space:nowrap;
                background:#FFFFFF;
                mso-pattern:auto none;
                color:#000000;
                font-size:8pt;
                font-weight:400;
                font-style:normal;
                font-family:"Calibri Light","serif";
                mso-protection:locked visible;
            }
            .x76
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:center;
                vertical-align:bottom;
                white-space:nowrap;
                background:#FFFFFF;
                mso-pattern:auto none;
                color:#000000;
                font-size:8pt;
                font-weight:400;
                font-style:normal;
                font-family:"Calibri Light","serif";
                mso-protection:locked visible;
            }
            .x77
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                white-space:nowrap;
                background:#FFFFFF;
                mso-pattern:auto none;
                color:#000000;
                font-size:8pt;
                font-weight:400;
                font-style:normal;
                font-family:"Calibri Light","serif";
                border-top:none;
                border-right:none;
                border-bottom:1px solid windowtext;
                border-left:none;
                mso-diagonal-down:none;
                mso-diagonal-up:none;
                mso-protection:locked visible;
            }
            -->
        </style>
        </html>





<!--Termina la estructura php-->
        <?php
    }
}