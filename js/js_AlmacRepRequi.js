
var table;
function repRequi() {
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
/*
    let dI = fechaInicio.split('-');
    let nuevaFecha = dI[0] + '-' + dI[1] + '-' + dI[2];

    let dF = fechaFin.split('-');
    let nuevaFechaFin = dF[0] + '-' + dF[1] + '-' + dF[2];
*/
    //console.log(fechaInicio)
    //console.log(fechaFin)


    table =$('#tblRepRequi').DataTable( {
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: ['pdf'],
        "ajax": "./api/v1/DetalleRequi.php?mostRequi=true&dateI="+fechaInicio+'&dateF='+fechaFin,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3]}
        ],
        "columns": [
            { "data": "AlmacNumIdRequi" },
            { "data": "AlmacDateFechaRequi" },
            { "data": "AlmacDateReqDoc" },
            { "data": "AlmacStrNomUnidSolici" },
            { "data": "KardexT", "visible": false}
        ]
    } );

}

$('#tblRepRequi tbody').on('dblclick', 'td', function () {

    //datosPre = $(this).closest('td');

    var datosPre = table.row($( this ).parents('tr')).data();

    //console.log(datosPre)
    let SolNumero= (datosPre['AlmacNumIdRequi']);
    let otro= (datosPre['KardexT']);
    abrirModal(otro, SolNumero);
    //otro.empty()
    //table.ajax.reload(null, false);


    //let datosPre = $(this).closest('tr');
    // let NodeRequisicion = (datosPre.find("td:eq(0)").text());
    // var FechadeDespacho= (datosPre.find("td:eq(1)").text());
    // let FechaDocumento= (datosPre.find("td:eq(2)").text());
    // let UnidadSolicitante= (datosPre.find("td:eq(3)").text());
    // let ID= (datosPre.find("td:eq(4)").text());
    //let ID= $('#inputID').val(datosPre.find("td:eq(4)").text());
    //et ID = $('#inputID').val(datosPre['KardexT']);
    //console.log( '//requicompletanumero//'+ otro)
    //console.log(NoRequiCompleta + 'requicompleta')
    //console.log("Holi")
});




/*doblic clic*/




function abrirModal(otro, SolNumero) {
    //console.log(otro + 'requicompleta')
    $('#modalDbl').fadeIn();

    mostrardetalle(otro, SolNumero)
}

function mostrardetalle(otro, SolNumero) {

    var table =$('#tbBuscarIns').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        destroy: true,
        dom: 'Blfrtip',
        buttons: [{extend: 'pdf', title: "Reporte de Requisición No: " + SolNumero,text: 'PDF', filename: 'Reporte Requisición', orientation: 'landscape'} ],
        "ajax": "./api/v1/1-h.php?mostRequi=true&DetReq="+otro,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]}
        ],
        "columns": [
            { "data": "AlmacNumRenglon" },
            { "data": "AlmacNumCodInsumo" },
            { "data": "AlmacStrNomInsumo" },
            { "data": "AlmacStrPresentInsu" },
            { "data": "AlmacStrCantYUnidInsu" },
            { "data": "AlmacNumCantDespachada" },
            { "data": "AlmacStrNoLote" },
            { "data": "AlmacDateFechaVenciReq" },
            { "data": "AlmacNumPreUnExist" },
            { "data": "AlmacNumIdKardex" },
            { "data": "Almacén" }


        ]
    } );

}

$('#btnCerrar').click(function () {


    $('#modalDbl').fadeOut();


});


