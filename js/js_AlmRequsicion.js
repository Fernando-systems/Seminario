$(document).ready(function () {

    SelUnidades();

    var f = new Date();

    if(f.getMonth() +1 <=9){
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-" + f.getDate());
        $('#inputAlmFecha').val(fecha);
        //$('#inputFecha').val(fecha);
        console.log(fecha);
    }else {
        let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate());
        $('#inputAlmFecha').val(fecha);
        //$('#inputFecha').val(fecha);
        console.log(fecha);
    }

    //let fecha = (f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());

//$('#inputAlmFecha').val(fecha);
$('#inputAlmLugar').val('VILLA NUEVA');

    var f2 = new Date();

    if(f2.getMonth() +1 <=9){
        let fecha2 = (f.getFullYear() + "-0" + (f2.getMonth() +1) + "-" + f2.getDate());
        $('#inputAlmFechaDoc').val(fecha2);
        //$('#inputFecha').val(fecha);
        console.log(fecha2);
    }else {
        let fecha2 = (f2.getFullYear() + "-" + (f2.getMonth() + 1) + "-" + f2.getDate());
        $('#inputAlmFechaDoc').val(fecha2);
        //$('#inputFecha').val(fecha);
        console.log(fecha2);
    }




});

function swichSuccessWarning(codstate) {
    /*
    Esta Funcion se utiliza para indicarle al Toast
    que Tipo de Alerta debe mostrar, si Satisfactorio o error
     */
    if (codstate === '0' || codstate === 0) {
        return 'error'
    } else {
        return 'success'
    }
}

function buscarInsumoGeneral(){
    let codInsumo = $('#inputAlmCodigo').val();
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
    let esperaInsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodInsumo1h=' + codInsumo, //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            if(json.length ==0){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El Insumo ingresado no cuenta con Kardex activo, favor asignar un kardex el Insumo No.: '+codInsumo,
                });
            }else{
                $(json).each(function (index, item) {
                    AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                    AlmacNumRenglon = json[index].AlmacNumRenglon;
                    AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                    AlmacStrCaractInsu = json[index].AlmacStrCaractInsu;
                    AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                    AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                    AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;

                    $('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+AlmacStrPresentInsu+' '+ AlmacStrCantYUnidInsu+'</option>')

                });
            }


        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    $.when(esperaInsumo).done(function () {
        $('#SelCodUnico').prop('disabled', false);
    });
}


function buscarInsumoEspecifico(codigoUnico){
    $('#inputUnidadMedida').val('');
    $('#inputNombreProducto').val('');
    $('#inputKardex').val('');
    $('#inputPrecio').val('');
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Seleccione Lote Y Fecha de Vencimiento</option>");
    let esperarinsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodPresentInsu=' + codigoUnico,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu = json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
                AlmacNumIdKardex = json[index].AlmacNumIdKardex;


                $('#inputNombreProducto').val(AlmacStrNomInsumo);
                $('#inputCaracteristicasInsumo').val(AlmacStrCaractInsu);
                $('#inputUnidadMedida').val(AlmacStrPresentInsu);
                $('#inputCodreng').val(AlmacNumRenglon);
                $('#inputKardex').val(AlmacNumIdKardex);
                $('#selLoteVencimiento').empty();
                $('#selLoteVencimiento').append("<option>Seleccione Lote Y Fecha de Vencimiento</option>");

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    bucarKardexAlmacen(codigoUnico);
    cargarLoteVencimiento(codigoUnico);
}


function bucarKardexAlmacen(codigoUnico) {
    console.log(codigoUnico)
    var IdKardexAlmacen;
    let esperarKAlmacen =  $.ajax({
        url: './api/v1/Kardex.php?AlmacNumCodPresentInsu=' + codigoUnico,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                IdKardexAlmacen=  AlmacNumIdKardex = json[index].AlmacNumIdKardex;
                AlmacNumCantExist = json[index].AlmacNumCantExist;
                AlmacNumPreUnExist = json[index].AlmacNumPreUnExist;
        
        $('#inputKardex').val(AlmacNumIdKardex);
        $('#inputPrecio').val(AlmacNumPreUnExist);
        //$('#inputCantExis').val(AlmacNumCantExist);

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    /*$.when(esperarKAlmacen).done(function () {
       bucarKardexAlmacen(codigoUnico);
   });
*/
}




//function buscarInsumo() {
//    let codInsumo = $('#inputAlmCodigo').val();
//
//    $.ajax({
//        url: './api/v1/Insumo.php?AlmacNumCodPresentInsuK=' + codInsumo +'&InsumoKardex=true', //
//        type: "GET",
//        dataType: "json",
//        contentType: "application/json; charset=utf-8",
//
//        success: function (data) {
//            var json = data.data;
//            console.log("que recibo");
//            console.log(json);
//            $(json).each(function (index, item) {
//
//
//
//                AlmacNumIdKardex = json[index].AlmacNumIdKardex;
//                AlmacBinEstado = json[index].AlmacBinEstado;
//                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
//                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
//                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
//                AlmacNumPreUnExist = json[index].AlmacNumPreUnExist;
//               // AlmacNumCantExist = json[index].AlmacNumCantExist;
//
//                $('#inputNombreProducto').val(AlmacStrNomInsumo);
//                $('#inputUnidadMedida').val(AlmacStrCantYUnidInsu);
//                $('#inputKardex').val(AlmacNumIdKardex);
//                $('#inputPrecio').val(AlmacNumPreUnExist);
//                //$('#inputCantExis').val(AlmacNumCantExist;
//
//
//            });
//
//        },
//        error: function (data) {
//            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
//        }
//    });
//
//
//    cargarLoteVencimiento(codInsumo);
//}

$('#selUniSolicitante').select2();

function añadirTabla() {
    let Tipoalm = $('#Tipoalm').val();
    let inputCorrelativoCGC = $('#inputCorrelativoCGC').val().replace(/^0+/, '') + '-' + $('#Tipoalm').val();
    let inputAlmCodigo = $('#inputAlmCodigo').val();
    let inputNombreProducto = $('#inputNombreProducto').val();
    let inputUnidadMedida = $('#inputUnidadMedida').val();
    let inputSolicitada = $('#inputSolicitada').val();
    let inputCantidadAutorizada = $('#inputCantidadAutorizada').val();
    let inputCantidadDespachada = $('#inputCantidadDespachada').val();
    let inputKardex = $('#inputKardex').val();
    let inputPrecio = $('#inputPrecio').val();
    let inputAlmFecha = $('#inputAlmFecha').val();
    let lote = $('#inputLote').val();
    let vencimiento = $('#inputVencimiento').val();
    let present = $('#SelCodUnico').val();
    let inputCantExis = $('#inputCantExis').val();
    let inputAlmFechaDoc = $('#inputAlmFechaDoc').val();
    let CentroCosto = $('#CentroCosto').val();
    let a = 5//$(selLoteVencimiento).val();
    console.log(a+ "Prueba para quitar selección");
    console.log(inputCorrelativoCGC + "Correlativo");

    if($('#inputCorrelativoCGC').val() == '' ||$('#inputCorrelativoCGC').val() == null ||$('#inputCorrelativoCGC').val() == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Correlativo CGC',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }
    if(Tipoalm == '' ||Tipoalm == null ||Tipoalm == undefined || Tipoalm == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Tipo Almacén',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }


    if(inputAlmCodigo == '' ||inputAlmCodigo == null ||inputAlmCodigo == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Código de Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(inputKardex == '' ||inputKardex == null ||inputKardex == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Unidad Del Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(inputCantidadDespachada == '' ||inputCantidadDespachada == null ||inputCantidadDespachada == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Cantidad a Despachar',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(lote == '' || lote == null || lote == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Una Fecha De Vencimiento',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(lote == '' || lote == null || lote == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Una Fecha De Vencimiento',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }
    console.log(inputCantidadDespachada, inputCantExis);

    if(parseInt(inputCantidadDespachada) > parseInt(inputCantExis)){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'No tiene suficiente cantidad existente',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
       return false;
    }

    if(vencimiento == 'No Aplica'){
        vencimiento = '1900-01-01';
    }else {
        $('#inputVencimiento').val(vencimiento);
    }

    if(inputAlmFecha == '' || inputAlmFecha == null || inputAlmFecha == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Fecha de Despacho',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(inputAlmFechaDoc == '' || inputAlmFechaDoc == null || inputAlmFechaDoc == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Fecha de Documento',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(CentroCosto == '' || CentroCosto == null || CentroCosto == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Unidad Solicitante',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    console.log(inputAlmFecha + 'probando fecha')


    $('#tbodyRequisicion').append('<tr>' +
        '<th scope="row">'+inputAlmFecha+'</th>' +
        '<td>'+inputAlmCodigo+'</td>' +
        '<td>'+inputNombreProducto+'</td>' +
        '<td>'+inputUnidadMedida+'</td>' +
        '<td>'+inputSolicitada+'</td>' +
        '<td>'+inputCantidadAutorizada+'</td>' +
        '<td>'+inputCantidadDespachada+'</td>' +
        '<td>'+inputKardex+'</td>' +
        '<td>'+inputPrecio+'</td>' +
        '<td hidden>'+lote+'</td>' +
        '<td hidden>'+vencimiento+'</td>' +
        '<td hidden>'+present+'</td>' +
        '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'+
        '</tr>');



    //$("#selLoteVencimiento option[value="+a+"]").remove();




    $('#inputAlmCodigo').val('');
    $('#inputNombreProducto').val('');
    $('#inputUnidadMedida').val('');
    $('#inputSolicitada').val('');
    $('#inputCantidadAutorizada').val('');
    $('#inputCantidadDespachada').val('');
    $('#inputKardex').val('');
    $('#inputPrecio').val('');
    $('#inputLote').val('');
    $('#inputVencimiento').val('');
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Seleccione lote o fecha de vencimiento</option>");


    $('#inputUnidadMedida').val('');
    $('#inputCantExis').val('');

    $('#inputAlmLugar').prop('disabled', true);
    $('#inputAlmFecha').prop('disabled', true);
    $('#selUniSolicitante').prop('disabled', true);
    $('#inputCorrelativoCGC').prop('disabled', true);
    $('#inputAlmFechaDoc').prop('disabled', true);
    $("#btnGuardarRequisicion").attr('disabled', false);

}

/*funcion para eliminar fila*/
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});


function insertarEncabezado() {
    let inputAlmFecha = $('#inputAlmFecha').val()
    let Unidad = $('#Unidad').val();
    let inputAlmLugar = $('#inputAlmLugar').val();
    var inputCorrelativoCGC = $('#inputCorrelativoCGC').val().replace(/^0+/, '') + '-' + $('#Tipoalm').val();
    let inputAlmFechaDoc = $('#inputAlmFechaDoc').val();

    let datos = {
        AlmacNumIdRequi: inputCorrelativoCGC,
        AlmacStrLugarRequi: inputAlmLugar,
        AlmacDateFechaRequi: inputAlmFecha,
        AlmacNumIdUnidadSoli: Unidad,
        AlmacDateReqDoc: inputAlmFechaDoc
    };

    console.log(datos);
    var insertEncabezado = $.ajax({
        url: './api/v1/Requisicion.php',
        type: 'POST',
        data: datos,
        beforeSend: function () {
            $("#btnGuardarRequisicion").text('GUARDANDO...').prop('disabled', true);
        },
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
        },
        error: function (request, status, error) {
            //console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.strstate,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
        }
    });

    $.when(insertEncabezado).done(function () {
        console.log("entreaa?");

        var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyRequisicion tr'), function(tr){
            return Array.prototype.map.call(tr.querySelectorAll('td'), function(td){
                return td.innerHTML;
            });
        });

        console.log(tableInfo);

        for (let j = 0; j<tableInfo.length ; j++){
            console.log("solo nombre: " + tableInfo[j][1]);

            let datosDetalle = {
                AlmacNumIdRequi: inputCorrelativoCGC,
                AlmacNumCantSolicitada:tableInfo[j][3],
                AlmacNumCantAutorizada:tableInfo[j][4],
                AlmacNumCantDespachada:tableInfo[j][5],
                AlmacNumCodPresentInsu:tableInfo[j][10],
                AlmacStrNoLote:tableInfo[j][8],
                AlmacDateFechaVenciReq:tableInfo[j][9]
            };
            console.log("cada datosDetalle enviado");
            console.log(datosDetalle);
            $.ajax({
                url: './api/v1/DetalleRequi.php',
                type: 'POST',
                data: datosDetalle,
                beforeSend: function () {
                    $("#btnGuardarRequisicion").text('GUARDANDO...').prop('disabled', true);
                },
                success: function (response) {
                    $.toast({
                        title: 'Informativo',
                        subtitle: '1 segundo',
                        content: response.state.strstate,
                        type: swichSuccessWarning(response.state.codstate),
                        pause_on_hover: true,
                        delay: 5000
                    });
                    $("#btnGuardarRequisicion").text('OTRA REQUISICION').attr('disabled', false);

                    $("#btnGuardarRequisicion").removeClass("btn-success");
                    $("#btnGuardarRequisicion").addClass("btn-warning");
                },
                error: function (request, status, error) {
                    console.log(request);
                    $.toast({
                        title: 'Ups!',
                        subtitle: '1 segundo',
                        content: ' ' + request.responseText,
                        type: 'error',
                        pause_on_hover: true,
                        delay: 5000
                    });
                    $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
                    return false;
                }
            });
        }
    });

    $('#inputAlmLugar').prop('disabled', false);
    $('#inputAlmFecha').prop('disabled', false);
    $('#selUniSolicitante').prop('disabled', false);
    $('#inputCorrelativoCGC').prop('disabled', false);
    $('#inputAlmFechaDoc').prop('disabled', false);

    $('#inputAlmLugar').val('');
   // $('#inputAlmFecha').val('');
    $('#selUniSolicitante').val('');
    $('#inputCorrelativoCGC').val('');
    $('#inputAlmFechaDoc').val('');
    $('#selUniSolicitante').empty();

    SelUnidades();
    //$('#selUniSolicitante').append('<option selected value="" hidden>Selecionar...</option>');

}


function cargarLoteVencimiento(codInsumo) {
    $('#inputLote').val('');
    $('#inputVencimiento').val('');
    $('#inputCantExis').val('');
    let esperaVencimiento = $.ajax({
        url: './api/v1/Insumo.php?codImsumoAlmacReq=' + codInsumo +'&VencimientoReq=true', //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                    AlmacNumCodInsumo= json[index].AlmacNumCodInsumo;
                    AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                AlmacStrLote= json[index].AlmacStrLote;
                AlmacDateVenci= json[index].AlmacDateVenci;
                AlmacNumCantidad= json[index].AlmacNumCantidad

                //$('#inputLote').val('');
                $('#selLoteVencimiento').append('<option value="'+AlmacStrLote+'*'+ AlmacDateVenci+'*'+ AlmacNumCantidad+'">'+'Lote: '+AlmacStrLote +' - F.Vencimiento '+AlmacDateVenci+ '</option>')
                //$('#inputLote').val('');
            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    $.when(esperaVencimiento).done(function () {
        $('#selLoteVencimiento').prop('disabled', false);
    })
}

function cargarFormsVencimiento(valores) {


    console.log("esto trae valores "+ valores);
    let partida = valores.split('*');
    let lote = partida[0];
    let vencimiento = partida[1];
    let cantidad = partida[2];

    if(lote == 'Seleccione Lote Y Fecha de Vencimiento'){
        $('#inputLote').val('');
    }else {
        $('#inputLote').val(lote);
    }



    $('#inputVencimiento').val(vencimiento);
    $('#inputCantExis').val(cantidad);
}

function limpiar(){
    $('#inputAlmCodigo').val('');
    $('#inputNombreProducto').val('');
    $('#inputUnidadMedida').val('');
    $('#inputSolicitada').val('');
    $('#inputCantidadAutorizada').val('');
    $('#inputCantidadDespachada').val('');
    $('#inputKardex').val('');
    $('#inputPrecio').val('');
    $('#inputLote').val('');
    $('#inputVencimiento').val('');
    $('#CentroCosto').val('');
    //$('#SelCodUnico').empty();
    //$('#selLoteVencimiento').empty();
    //$('#selUniSolicitante').append('<option selected value="" hidden>Selecionar...</option>');

    $('#inputAlmLugar').prop('disabled', true);
    //$('#inputAlmFecha').prop('disabled', true);
    //$('#selUniSolicitante').prop('disabled', true);
    //$('#inputCorrelativoCGC').prop('disabled', true);

    $('#tbodyRequisicion').empty();

    var f = new Date();
    let fecha = (f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());

    $('#inputAlmFecha').val(fecha);
    $('#inputAlmLugar').val('VILLA NUEVA');
}

$('#btnGuardarRequisicion').click(function () {
   let texto =  $('#btnGuardarRequisicion').text();

   if(texto == 'Guardar'){
       insertarEncabezado();
   }else{
       limpiar();
       $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', true);
       $("#btnGuardarRequisicion").removeClass("btn-warning");
       $("#btnGuardarRequisicion").addClass("btn-success");
       fnOpenForm(event, 'AlmRequisicion')
   }
});

$('#btnGuardarEntrada').click(function () {
    añadirTabla();
});




$('#tbBuscarIns').DataTable( {

    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSearch": ""  },//busca un dato exacto
    dom: 'Blfrtip',
    buttons: [
        'print', 'pdf'
    ],
    "ajax": "./api/v1/Requisicion.php",
    "columns": [

        { "data": "AlmacNumCodInsumo" },
        { "data": "AlmacStrNomInsumo" },
        { "data": "AlmacStrCaractInsu" },
        { "data": "AlmacNumRenglon" },
        { "data": "AlmacNumIdKardex" },
        { "data": "AlmacNumCantidad" },
        { "data": "AlmacStrPresentInsu" },
        { "data": "AlmacStrCantYUnidInsu" },

    ]

} );

function abrModIns() {
    console.log("Holaaaaaaaaaaaaaaaaa")
    $('#modIns').fadeIn();
}

$('#tbBuscarIns tbody').on('dblclick', 'td', function () {
    console.log("Hola")
    let buscarinsu = $(this).closest('tr');
    let codigoinsumo = (buscarinsu.find("td:eq(0)").text());
    let nombre = (buscarinsu.find("td:eq(1)").text());
    let Carac = (buscarinsu.find("td:eq(2)").text());
    let renglon = (buscarinsu.find("td:eq(3)").text());
    let kardex = (buscarinsu.find("td:eq(4)").text());
    let cante = (buscarinsu.find("td:eq(5)").text());
    let presentacion = (buscarinsu.find("td:eq(6)").text());
    let unidad = (buscarinsu.find("td:eq(7)").text());

    agrCodIns(codigoinsumo);
    $('#modIns').fadeOut();

});

function agrCodIns(codigoInsumo){

    $('#inputAlmCodigo').val(codigoInsumo);
    buscarInsumoGeneral();


}


function SelUnidades() {
    //$("#selUniSolicitante").empty();
    $('#selUniSolicitante').append('<option selected value="" hidden>Selecionar...</option>');
    $.ajax({
        url:  './api/V1/DetalleRequi.php?UnidaSol=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json)
            $(json).each(function (index, item) {
                AlmacNumIdUnidadSoli = json[index].AlmacNumIdUnidadSoli;
                AlmacStrNomUnidSolici = json[index].AlmacStrNomUnidSolici;
                AlmacStrNomCenCosto = json[index].AlmacStrNomCenCosto;
                $('#selUniSolicitante').append('<option value="('+AlmacNumIdUnidadSoli+')'+AlmacStrNomCenCosto+'"> '+AlmacStrNomUnidSolici+'</option>');
                //$('#selLoteVencimiento').append('<option value="'+AlmacStrLote+'*'+ AlmacDateVenci+'*'+ AlmacNumCantidad+'">'+'Lote: '+AlmacStrLote +' - F.Vencimiento '+AlmacDateVenci+ '</option>')

            })
            //se actualiza combo para que aparezcan nuevos valores cargados
            $("#selUniSolicitante").selectpicker("refresh");
        },
        error: function (data) {
            alert("No se lograron cargar los datos" + data);
        }
    })
}

$('#selUniSolicitante').change(function(){
    $('#CentroCosto').val($('#selUniSolicitante').val());
    let tipofiguraContrato = '#selUniSolicitante';
    let init = $(tipofiguraContrato).val().indexOf('(');
    let fin = $(tipofiguraContrato).val().indexOf(')');
    let idFiguraContrato = $(tipofiguraContrato).val().substr(init+1,fin-init-1);

    var CenCosto = $(tipofiguraContrato).val().substr($(tipofiguraContrato).val().indexOf(')')+1, $(tipofiguraContrato).val().length);
    $('#CentroCosto').val(CenCosto);
    $('#Unidad').val(idFiguraContrato);
    console.log(CenCosto)
});

