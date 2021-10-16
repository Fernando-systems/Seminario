
function rep1h() {

    let fechaInicio = $('#inputFecIni').val();
    let fechaFin = $('#inputFecFin').val();

    if (fechaInicio == '' || fechaInicio == null || fechaInicio == undefined) {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha Inicio vacío',
            showConfirmButton: true,
        });
        return false;
    }
    if (fechaFin == '' || fechaFin == null || fechaFin == undefined) {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha Fin vacío',
            showConfirmButton: true,
        });
        return false;
    }

    let dI = fechaInicio.split('-');
    let nuevaFecha = dI[0] + '-' + dI[1] + '-' + dI[2];

    let dF = fechaFin.split('-');
    let nuevaFechaFin = dF[0] + '-' + dF[1] + '-' + dF[2];

console.log(fechaInicio)
console.log(fechaFin)
console.log(dI)
console.log(dF)

    var table =$('#tblRep1h').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        destroy: true,
        dom: 'Blfrtip',
        buttons: ['excel'],
        "ajax": "./api/v1/1-h.php?mostrep1h=true&dateI="+fechaInicio+'&dateF='+fechaFin,
        "columns": [
            { "data": "NumCGCOficial" },
            { "data": "AlmacStrDescripcion" },
            { "data": "AlmacDateFecha" },
            { "data": "AlmacStrOrdCYPNo" },
            { "data": "AlmacSolPedido" },
            { "data": "AlmacStrNitProveedor" },
            { "data": "AlmacStrNomProveedor" },
            { "data": "AlmacStrDatosFactura" },
            { "data": "AlmacStrSerieFactura" },
            { "data": "AlmacNumIdForm1H" }
        ]
    } );
}

$('#tblRep1h tbody').on('dblclick', 'td', function () {
   console.log("Hola")
     let datosPre = $(this).closest('tr');
     let CGCOficial = (datosPre.find("td:eq(0)").text());
     var Programa= (datosPre.find("td:eq(1)").text());
     let Fecha= (datosPre.find("td:eq(2)").text());
     let OrdeCompra= (datosPre.find("td:eq(3)").text());
     let SolicitudPedido= (datosPre.find("td:eq(4)").text());
     let Nit= (datosPre.find("td:eq(5)").text());
     let NombreProveedor= (datosPre.find("td:eq(6)").text());
     let DatosFactura= (datosPre.find("td:eq(7)").text());
    let SerieFactura= (datosPre.find("td:eq(8)").text());
    let Correlativo1H= (datosPre.find("td:eq(9)").text());
     // mostrarDetalle1H (CódigodelInsumo);

      abrirModal(Correlativo1H);
     //console.log(Renglon, Nombredelinsumo)


});

function abrirModal(Correlativo1H) {
    $('#modalDbl').fadeIn();

    mostrardetalle(Correlativo1H)
}

function mostrardetalle(Correlativo1H) {
    var table =$('#tbBuscarIns').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        destroy: true,
        dom: 'Blfrtip',
        buttons: ['excel'],
        "ajax": "./api/v1/1-h.php?detalle1h=true&Det1h="+Correlativo1H,
        "columns": [
            { "data": "AlmacNumCodInsumo" },
            { "data": "AlmacNumRenglon" },
            { "data": "AlmacStrNomInsumo" },
            { "data": "AlmacStrPresentInsu" },
            { "data": "AlmacNumCantidad" },
            { "data": "AlmacStrNoLote" },
            { "data": "AlmacDateFechaVenci1H" },
            { "data": "AlmacNumIdKardex" },


        ]
    } );
}


$('#btnCerrar').click(function () {
    $('#modalDbl').fadeOut();
   //$('#inputFecIni').val('');
   //$('#inputFecFin').val('');
   //$('#tbodyRep1H').empty();
});





