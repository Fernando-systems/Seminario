$(document).ready(function () {

    let date = new Date()

    let day = date.getDate()
    let month = date.getMonth() + 1
    let year = date.getFullYear()


    console.log(day, month, year)


    if ((day + 1) <= 9 && month <= 9) {
        let fecha = (year + "-0" + month + "-0" + day);
        $('#inputFecha').val(fecha);
        console.log(fecha + 'Dia y mes menores a 10');
    } else if ((day + 1) >= 10 && month <= 9) {
        let fecha = (year + "-0" + month + "-" + day);
        $('#inputFecha').val(fecha);
        console.log(fecha + 'dia mayor a 10 y mes menor a 9 ');
    } else if ((day + 1) <= 9 && month >= 10) {
        let fecha = (year + "-" + month + "-0" + day);
        $('#inputFecha').val(fecha);
        console.log(fecha + 'dia menor a 9 y mes mayor a 10 ');
    } else {
        let fecha = ( year + "-" + month + "-" + day);
        $('#inputFecha').val(fecha);
        console.log(fecha + ' dia mayor  a 10 y mes mayor a 10 ');
    }


    //$('#inputEntrega').val('Yanileth R. Jaimes');
    $('#inputCargoEntrega').val('Auxiliar De Farmacia');
    $('#inputJefe').val('Licda. Ana María Ríos Galindo');
    $('#inputCargoJefe').val('Jefe De Farmacia');
    $('#inputLugar').val('Villa Nueva');

    Buscarnombre()
});

function Buscarnombre(){
    $.ajax({
        url: './api/v1/EntradaKardex.php?NombreUsuario=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                SegStrNomUsuario = json[index].SegStrNomUsuario;
                SegStrPuesto = json[index].SegStrPuesto;

                $('#inputEntrega').val(SegStrNomUsuario);
                $('#inputCargoEntrega').val(SegStrPuesto);

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}


//alertar toast
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
    let codInsumo = $('#inputCodigo').val();
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione presentacion</option>");
    let esperaInsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodInsumop=' + codInsumo, //
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
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                $('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+FarmStrPresentInusmo+' '+ FarmStrUniInsumo+'</option>')

            });

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

    let esperarinsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodPresentInsup=' + codigoUnico,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                StrNombreInsumo = json[index].StrNombreInsumo;
                StrCaracteristicas = json[index].StrCaracteristicas;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                //$('#inputNomInsumo').val(AlmacStrNomInsumo);
                $('#inputFarmDescrip').val(StrNombreInsumo+', '+StrCaracteristicas+', '+FarmStrPresentInusmo+','+FarmStrUniInsumo);


            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
    console.log(codigoUnico + "pruebacodigounico")
        cargarLoteVencimiento(codigoUnico);

    bucarKardexFarmacia(codigoUnico);

}

function bucarKardexFarmacia(codigoUnico) {
    var IdKardexFarmacia;
    let esperarKFamrmacia =  $.ajax({
        url: './api/v1/FarmKardex.php?AlmacNumCodPresentInsu=' + codigoUnico,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                IdKardexFarmacia=  FarmNumIdKardexFarm= json[index].FarmNumIdKardexFarm;
                FarmNumNivelMinimo= json[index].FarmNumNivelMinimo;
                FarmNumNivelMaximo= json[index].FarmNumNivelMaximo;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                FarmNumTipBodeg= json[index].FarmNumTipBodeg;
                FarmBinEstado= json[index].FarmBinEstado;
                //FarmNumCantExist= json[index].FarmNumCantExist;
                //FarmNumPreUnExist= json[index].FarmNumPreUnExist;
                //FarmNumPreTotExist= json[index].FarmNumPreTotExist;

                $('#inputKardex').val(FarmNumIdKardexFarm);

                

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

}

$('#btnGuardarRequisicion').click(function () {
    let texto =  $('#btnGuardarRequisicion').text();

    console.log(texto + 'Aquí el estado del boton antes del if');
    if(texto == 'GUARDAR'){
        guardarRequi();
    }
    else{
        console.log(texto + 'Aquí el estado del boton antes del else');
        $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', true);
        $("#btnGuardarRequisicion").removeClass("btn-warning");
        $("#btnGuardarRequisicion").addClass("btn-success");
        fnOpenForm(event, 'FarmRequisicion')
    }
});


contadorfilasrequi = 0;
function añadirTabla() {
    let inputCodigo = $('#inputCodigo').val();
    let inputFarmDescrip = $('#inputFarmDescrip').val();
    let SelCodUnico = $('#SelCodUnico').val();
    let inputCantSolicitada = $('#inputCantSolicitada').val();
    let inputCantDespachada = $('#inputCantDespachada').val();
    let inputKardex = $('#inputKardex').val();
    let inputDateVenci = $('#inputDateVenci').val();
    let inputNoLote = $('#inputNoLote').val();
    let inputCantActual = $('#inputCantActual').val();    
    let selLoteVencimiento = $('#selLoteVencimiento').val();


    /*------------------------------*/

    var arr = [];
    var arr2 = [];

    $('#tbodyConsolidadoFarm tr').each(function () {
        var idLote = $(this).find(".nuevaClase").html();
        arr.push(idLote);
    });

    $('#tbodyConsolidadoFarm tr').each(function () {
        var idVenc = $(this).find(".nuevaClase2").html();
        arr2.push(idVenc);
    });

    if (arr.includes(inputNoLote) && arr2.includes(inputFechaVencimiento)) {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Lote y vencimiento ya han sido agregados, por favor seleccione otro',
        });

        return false;
    }

    if(inputCodigo == '' ||inputCodigo == null ||inputCodigo == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese un Código de Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(SelCodUnico == '' ||SelCodUnico == null ||SelCodUnico == undefined || SelCodUnico == 'Seleccione presentacion'){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Presentación del Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(selLoteVencimiento == '' ||selLoteVencimiento == null ||selLoteVencimiento == undefined ||selLoteVencimiento == 'Selecciones Lote y Vencimiento'){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Lote y Vencimiento',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(inputCantSolicitada == '' ||inputCantSolicitada == null ||inputCantSolicitada == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Cantidad Solicitada',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }


    if(inputCantDespachada == '' ||inputCantDespachada == null ||inputCantDespachada == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Cantidad Despachada',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    console.log (inputCantDespachada + ' ' + inputCantActual)
    if(parseInt (inputCantDespachada) > parseInt (inputCantActual)){
      $.toast({
          title: 'Ups!',
          subtitle: '1 segundo',
          content: 'No hay cantidad suficiente',
          type: 'error',
          pause_on_hover: true,
          delay: 5000
      });

      return false;
   }


if (contadorfilasrequi <= 28){
    $('#tbodyRequi').append('<tr>' +
        '<td scope="row">'+inputCodigo+'</td>' +
        '<td style="text-align: left">'+inputFarmDescrip+'</td>' +
        '<td>'+inputCantSolicitada+'</td>' +
        '<td>'+inputCantDespachada+'</td>' +
        '<td hidden>'+inputKardex+'</td>' +
        '<td hidden>'+SelCodUnico+'</td>' +
        '<td hidden>'+inputDateVenci+'</td>' +
        '<td hidden>'+inputNoLote+'</td>' +
        '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'
        +'</tr>');

    $('#inputCodigo').val('');
    $('#inputFarmDescrip').val('');
    $('#SelCodUnico').val('');
    $('#inputCantSolicitada').val('');
    $('#inputCantDespachada').val('');
    $('#inputKardex').val('');
    $('#inputDateVenci').val('');
    $('#inputNoLote').val('');
    $('#inputPrecUnit').val('');
    $('#inputCantActual').val('');
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Selecciones Lote y Vencimiento</option>");

    contadorfilasrequi = contadorfilasrequi + 1;
    $("#btnGuardarRequisicion").attr('disabled', false);
}
else{
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Ha ocupado el límite de filas',
    });
}


}

/*funcion para eliminar fila*/
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
    contadorfilasrequi = contadorfilasrequi - 1;
});

function guardarRequi() {
    var inputCorrelativoRequi = $('#inputCorrelativoRequi').val();
    let inputServicio = $('#inputServicio').val();
    let inputEntrega = $('#inputEntrega').val();
    let inputCargoEntrega = $('#inputCargoEntrega').val();
    let inputRecibe = $('#inputRecibe').val();
    let inputCargoRecibe = $('#inputCargoRecibe').val();
    let inputJefe = $('#inputJefe').val();
    let inputCargoJefe = $('#inputCargoJefe').val();
    let inputObservaciones = $('#inputObservaciones').val();
    let inputLugar = $('#inputLugar').val();
    let inputFecha = $('#inputFecha').val();
    var validar = false;

    if(contadorfilasrequi == '' ||contadorfilasrequi == null ||contadorfilasrequi == undefined ||contadorfilasrequi == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Debe de ingresar un insumo para guardar el documento',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(inputCorrelativoRequi == '' ||inputCorrelativoRequi == null ||inputCorrelativoRequi == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese un Número de Correlativo CGC',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(inputServicio == '' ||inputServicio == null ||inputServicio == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Nombre de Servicio',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(inputEntrega == '' ||inputEntrega == null ||inputEntrega == undefined ||inputEntrega == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Nombre Entrega',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(inputCargoEntrega == '' ||inputCargoEntrega == null ||inputCargoEntrega == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Cargo Entrega',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    /* if(inputRecibe == '' ||inputRecibe == null ||inputRecibe == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Nombre Recibe',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(inputCargoRecibe == '' ||inputCargoRecibe == null ||inputCargoRecibe == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Cargo Recibe',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }
*/

    if(inputJefe == '' ||inputJefe == null ||inputJefe == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Nombre Jefe',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(inputCargoJefe == '' ||inputCargoJefe == null ||inputCargoJefe == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Cargo Jefe',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(inputFecha == '' ||inputFecha == null ||inputFecha == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Fecha',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    let datos = {
        FarmNumIdRequi: inputCorrelativoRequi,
        FarmStrServicio: inputServicio,
        FarmStrNomEntreg: inputEntrega,
        FarmStrCargoEntrega: inputCargoEntrega,
        FarmStrNomRecibe: inputRecibe,
        FarmStrCargoRecibe: inputCargoRecibe,
        FarmStrNomJefe: inputJefe,
        FarmStrCargoJefe: inputCargoJefe,
        FarmStrObservaciones: inputObservaciones,
        FarmStrLugar: inputLugar,
        FarmDateFechaReq: inputFecha,
        };

    console.log(datos);
    var insertEncabezado = $.ajax({
        url: './api/v1/FarmRequisicion.php',
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


            
            if (swichSuccessWarning(response.state.codstate)=='success'){

                validar = true;
            }

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
        }
    });

    $.when(insertEncabezado).done(function(){
      console.log("entreaa?");

      var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyRequi tr'), function(tr){
        return Array.prototype.map.call(tr.querySelectorAll('td'), function(td){
            return td.innerHTML;
        });
    });
      console.log (validar);
    if (validar == true) {
      console.log(tableInfo);

      for (let j = 0; j<tableInfo.length ; j++){
        console.log("solo nombre: " + tableInfo[j][1]);

        let datosDetalle = {
            FarmNumIdRequi:inputCorrelativoRequi,
            FarmStrDescripcion: tableInfo[j][1],
            FarmNumCantSolicit: tableInfo[j][2],
            FarmNumCantDespac: tableInfo[j][3],
            FarmNumIdKardexFarm: tableInfo[j][4],
            AlmacNumCodPresentInsu: tableInfo[j][5],
            FarmDateVencimiento: tableInfo[j][6],
            FarmStrNolote: tableInfo[j][7]
        };
        console.log("cada datosDetalle enviado");
        console.log(datosDetalle);
        $.ajax({
            url: './api/v1/FarmaciaRequiDetalle.php',
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
            }
        });
        } 
    } else {
        $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: ' Requisición ya existe ',
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
    }
});


}

function cargarLoteVencimiento(codigoUnico) {
    console.log(codigoUnico + "cargarlotevencimiento")
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Selecciones Lote y Vencimiento</option>");
    
    let esperaVencimiento = $.ajax({
        url: './api/v1/Insumo.php?codImsumoFarm=' + codigoUnico +'&VencimientoFarm=true', //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                    //AlmacNumCodInsumo= json[index].AlmacNumCodInsumo;
                    AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                FarmStrLote= json[index].FarmStrLote;
                FarmDateVencimiento= json[index].FarmDateVencimiento;
                FarmNumPreUnExist= json[index].FarmNumPreUnExist;
                FarmNumCantidad= json[index].FarmNumCantidad;

                    $('#selLoteVencimiento').append('<option value="'+FarmStrLote+'*'+ FarmDateVencimiento+'*'+FarmNumPreUnExist+'*'+FarmNumCantidad+'">'+'Lote: '+FarmStrLote +' - F.Vencimiento '+FarmDateVencimiento+'</option>')
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
    let preunit = partida[2]
    let cantidad = partida[3];
    $('#inputNoLote').val(lote);
    $('#inputDateVenci').val(vencimiento);
    $('#inputPrecUnit').val(preunit);
    $('#inputCantActual').val(cantidad);
    
}

//boton para general excel
//$('#generarExcel').on('click',requestgenerarExcel);
    
//function requestgenerarExcel() {
    //tableToExcel('tblFarmRequi', 'Requisicion Medicamentos y Productos Afines');


//}


function buscarrequi(){
    console.log('abriendo modal')
    $('#BuscarRequi').fadeIn();
}

$('#tbBuscar').DataTable( {
    destroy: true,
    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSearch": ""  },//busca un dato exacto
    dom: 'Blfrtip',
    buttons: [
        //'print', 'pdf'
    ],
    "ajax": "./api/v1/ControlDeInventarioFarmacia.php?&invMostrarBuscar=true",
    "columns": [

        { "data": "AlmacNumRenglon" },
        { "data": "AlmacNumCodInsumo" },
        { "data": "StrNombreInsumo" },
        { "data": "StrCaracteristicas" },
        { "data": "FarmStrPresentInusmo" },
        { "data": "FarmStrUniInsumo" },
        { "data": "FarmNumIdKardexFarm" },
        { "data": "FarmNumCantExist" },
        { "data": "FarmNumPreUnExist" }

    ]

} );

$('#tbBuscar tbody').on('dblclick', 'td', function () {
    console.log("Hola")
    let buscarinsu = $(this).closest('tr');
    let codigoinsumo = (buscarinsu.find("td:eq(1)").text());
    /*let nombre = (buscarinsu.find("td:eq(1)").text());
    let Carac = (buscarinsu.find("td:eq(2)").text());
    let renglon = (buscarinsu.find("td:eq(3)").text());
    let kardex = (buscarinsu.find("td:eq(4)").text());
    let cante = (buscarinsu.find("td:eq(5)").text());
    let presentacion = (buscarinsu.find("td:eq(6)").text());
    let unidad = (buscarinsu.find("td:eq(7)").text());*/

    agrCodIns(codigoinsumo);
    $('#BuscarRequi').fadeOut();
});

function agrCodIns(codigoInsumo){
    $('#inputCodigo').val(codigoInsumo);

    buscarInsumoGeneral();
}


function ejecutarRep(){
    let numrequi = $('#inputCorrelativoRequi').val();
window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/RepFarmRequi.php?FarmNumIdRequi=' + numrequi);
fnOpenForm(event, 'FarmRequisicion')
};