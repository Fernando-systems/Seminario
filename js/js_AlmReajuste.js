$(document).ready(function () {


    var f = new Date();

    if(f.getDate() +1 <=9 && f.getMonth() +1 <=9){
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-0" + f.getDate());
        $('#inputFechReaj').val(fecha);
        console.log(fecha + 'Dia y mes menores a 10');
    }else if(f.getDate() +1 >=10 && f.getMonth() +1 <=9) {
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() + 1) + "-" + f.getDate());
        $('#inputFechReaj').val(fecha);
        console.log(fecha + 'dia mayor a 10 y mes menor a 9 ');
    }else if(f.getDate() +1 <=9 && f.getMonth() +1 >=10) {
        let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-0" + f.getDate());
        $('#inputFechReaj').val(fecha);
        console.log(fecha + 'dia menor a 9 y mes mayor a 10 ');
    }

    $("#btnGuardarReaj").text('Guardar Reajuste').attr('disabled', true);
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

function MostrarDatosReajuste(){
    let TipoReajuste = $('#SelReajuste').val();
    console.log(TipoReajuste + "Seleccionar tipo reajustewajajajja")

    if(TipoReajuste == 'DONENT' || TipoReajuste == 'CAMENT' || TipoReajuste == 'PREENT' || TipoReajuste == 'DEVENT'){
        $('#LoteVencimiento').prop('hidden', true);
        $('#NodeLoteSal').prop('hidden', true);
        $('#VenciSal').prop('hidden', true);
        $('#PUnitSal').prop('hidden', true);
        $('#PrecioUnitEntr').prop('hidden', false);
        $('#NodeLoteEntr').prop('hidden', false);
        $('#VenciEntr').prop('hidden', false);
        $('#CantExisEntr').prop('hidden', false);
        $('#CantExisSal').prop('hidden', true);
    }
    else if (TipoReajuste == 'DONSAL' || TipoReajuste == 'CAMSAL' || TipoReajuste == 'PRESAL' || TipoReajuste == 'DEVSAL'){
        $('#LoteVencimiento').prop('hidden', false);
        $('#NodeLoteSal').prop('hidden', false);
        $('#VenciSal').prop('hidden', false);
        $('#PUnitSal').prop('hidden', false);
        $('#CantExisSal').prop('hidden', false);
        $('#PrecioUnitEntr').prop('hidden', true);
        $('#NodeLoteEntr').prop('hidden', true);
        $('#VenciEntr').prop('hidden', true);
        $('#CantExisEntr').prop('hidden', true);

    }
    else {
        $('#LoteVencimiento').prop('hidden', true);
        $('#NodeLoteSal').prop('hidden', true);
        $('#VenciSal').prop('hidden', true);
        $('#PUnitSal').prop('hidden', true);
        $('#PrecioUnitEntr').prop('hidden', true);
        $('#NodeLoteEntr').prop('hidden', true);
        $('#VenciEntr').prop('hidden', true);
        $('#CantExisEntr').prop('hidden', true);
    }
}

function buscarInsumoGeneral(){
    let codInsumo = $('#inputCodInsumoReaj').val();
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
    let esperaInsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodInsumo=' + codInsumo, //
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


                $('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+AlmacStrPresentInsu+' '+ AlmacStrCantYUnidInsu+'</option>')


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
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Seleccione Lote Y Fecha de Vencimiento</option>");
    $.ajax({
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

                $('#inputCaracReaj').val(AlmacStrCaractInsu);
                $('#inputPresentReaj').val(AlmacStrPresentInsu);
                $('#inputRenglonReaj').val(AlmacNumRenglon);


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
    console.log(codigoUnico + "Entra funcion kardex")
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
        console.log(IdKardexAlmacen)
                $('#inputKardexR').val(IdKardexAlmacen);
                $('#inputPUnitSal').val(AlmacNumPreUnExist);
                $('#inputCantExisEntr').val(AlmacNumCantExist);

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
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
        $('#inputNodeLoteSal').val('');
    }else {
        $('#inputNodeLoteSal').val(lote);
    }
    $('#inputVenciSal').val(vencimiento);
    $('#inputCantExisSal').val(cantidad);
}


function añadirTabla() {
    let SelReajuste = $('#SelReajuste').val();
    let SelCodUnico = $('#SelCodUnico').val();
    let inputCantSoliR = $('#inputCantSoliR').val();
    let inputCantEntregadaR = $('#inputCantEntregadaR').val();
    let inputCaracReaj = $('#inputCaracReaj').val();
    let inputPresentReaj = $('#inputPresentReaj').val();
    let inputCGCReaj = $('#inputCGCReaj').val();
    let inputPrecioUnitEntr = $('#inputPrecioUnitEntr').val();
    let inputNodeLoteEntr = $('#inputNodeLoteEntr').val();
    let inputVenciEntr = $('#inputVenciEntr').val();
    let inputKardexR = $('#inputKardexR').val();
    //Datos de Salida
    let inputNodeLoteSal = $('#inputNodeLoteSal').val();
    let inputVenciSal = $('#inputVenciSal').val();
    let inputPUnitSal = $('#inputPUnitSal').val();

    if(SelReajuste == '' ||SelReajuste == null ||SelReajuste == undefined || SelReajuste == 0){
        swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Seleccione Tipo de Reajuste',
            text: 'Debe seleccionar que tipo de reajuste desea realizar',
        });

        return false;
    }

    if(SelCodUnico == '' ||SelCodUnico == null ||SelCodUnico == undefined || SelCodUnico == 0 || SelCodUnico == 'Seleccione Unidad'){
        swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Seleccione Presentación de Insumo',
            text: 'Debe seleccionar Cantidad y Unidad',
        });

        return false;
    }
    if(inputCantSoliR == '' ||inputCantSoliR == null ||inputCantSoliR == undefined){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Ingresar Cantidad Solicitada',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }
    if(inputCantEntregadaR == '' ||inputCantEntregadaR == null ||inputCantEntregadaR == undefined){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Ingresar Cantidad Entregada',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }


    if(SelReajuste == 'DONENT' || SelReajuste == 'CAMENT'  ||SelReajuste == 'PREENT'  || SelReajuste == 'DEVENT' ) {
        $('#tbodyAlmReajuste').append('<tr>' +
            '<td>' + inputCGCReaj + '</td>' +
            '<td>' + AlmacNumCodPresentInsu + '</td>' +
            '<td>' + AlmacStrNomInsumo + '</td>' +
            '<td>' + AlmacStrCantYUnidInsu + '</td>' +
            '<td scope="row" hidden>' + AlmacStrNomInsumo + ', ' + AlmacStrCantYUnidInsu + '</td>' +
            '<td>' + inputPresentReaj + '</td>' +
            '<td>' + inputCantSoliR + '</td>' +
            '<td>' + inputCantEntregadaR + '</td>' +
            '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>' +
            '<td hidden>' + inputPrecioUnitEntr + '</td>' +
            '<td hidden>' + inputNodeLoteEntr + '</td>' +
            '<td hidden>' + inputVenciEntr + '</td>' +
            '<td hidden>' + inputKardexR + '</td>' +
            +'</tr>');

        $('#inputCodInsumoReaj').val('');
        $('#SelCodUnico').empty();
        $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
        $('#inputKardexR').val('');
        $('#inputRenglonReaj').val('');
        $('#inputCaracReaj').val('');
        $('#inputCantExisEntr').val('');
        $('#inputCantSoliR').val('');
        $('#inputCantEntregadaR').val('');
        $('#inputPrecioUnitEntr').val('');
        $('#inputNodeLoteEntr').val('');
        $('#inputVenciEntr').val('');
        $("#btnGuardarReaj").text('Guardar Reajuste').attr('disabled', false);

        $('#inputCGCReaj').prop('disabled', true);
        $('#SelReajuste').prop('disabled', true);
        $('#inputUnidSolReaj').prop('disabled', true);
        $('#inputUnidEntrReaj').prop('disabled', true);
    }
    else{
            $('#tbodyAlmReajuste').append('<tr>' +
                '<td>'+inputCGCReaj+'</td>' +
                '<td>'+AlmacNumCodPresentInsu+'</td>' +
                '<td>'+AlmacStrNomInsumo+'</td>' +
                '<td>'+AlmacStrCantYUnidInsu+'</td>' +
                '<td scope="row" hidden>'+AlmacStrNomInsumo+', '+AlmacStrCantYUnidInsu+'</td>' +
                '<td>'+inputPresentReaj+'</td>' +
                '<td>'+inputCantSoliR+'</td>' +
                '<td>'+inputCantEntregadaR+'</td>' +
                '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>' +
                '<td hidden>'+inputPUnitSal+'</td>' +
                '<td hidden>'+inputNodeLoteSal+'</td>' +
                '<td hidden>'+inputVenciSal+'</td>' +
                '<td hidden>'+inputKardexR+'</td>' +
                +'</tr>');

            $('#inputCodInsumoReaj').val('');
            $('#SelCodUnico').empty();
            $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
            $('#inputKardexR').val('');
            $('#inputRenglonReaj').val('');
            $('#inputCaracReaj').val('');
            $('#inputCantExisEntr').val('');
            $('#inputCantSoliR').val('');
            $('#inputCantEntregadaR').val('');
            $('#inputPrecioUnitEntr').val('');
            $('#inputNodeLoteEntr').val('');
            $('#inputVenciEntr').val('');
            $("#btnGuardarReaj").text('Guardar Reajuste').attr('disabled', false);

            $('#inputCGCReaj').prop('disabled', true);
            $('#SelReajuste').prop('disabled', true);
            $('#inputUnidSolReaj').prop('disabled', true);
            $('#inputUnidEntrReaj').prop('disabled', true);


            $('#inputPresentReaj').val('');
            $('#inputNodeLoteSal').val('');
            $('#inputVenciSal').val('');
            $('#inputPUnitSal').val('');
            $('#inputCantExisSal').val('');

            $('#selLoteVencimiento').empty();
            $('#selLoteVencimiento').append("<option>Seleccione Lote Y Fecha de Vencimiento</option>");
        }


}

/*funcion para eliminar fila*/
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});


function GuardalReajAlmac() {
    var inputCGCReaj = $('#inputCGCReaj').val();
    let inputFechReaj = $('#inputFechReaj').val();
    let SelReajuste = $('#SelReajuste').val();
    let inputUnidSolReaj = $('#inputUnidSolReaj').val();
    let inputUnidEntrReaj = $('#inputUnidEntrReaj').val();
    let inputNomSolicitante = $('#inputNomSolicitante').val();
    let inputCargoSolitane = $('#inputCargoSolitane').val();
    let inputNomGerenteFinan = $('#inputNomGerenteFinan').val();
    let inputNomDirEjec = $('#inputNomDirEjec').val();
    let inputNomEntrega = $('#inputNomEntrega').val();
    let inputCargoEntrega = $('#inputCargoEntrega').val();
    let inputNombAdminiFin = $('#inputNombAdminiFin').val();
    let inputNomDirEjeEntrega = $('#inputNomDirEjeEntrega').val();
    let inputObservaciones = $('#inputObservaciones').val();
    var validar = false;

    let datos = {
        AlmacNumIdReajust: inputCGCReaj,
        AlmacDatFecha: inputFechReaj,
        AlmacStrTipReajuste: SelReajuste,
        AlmacStrUnidSolicitante: inputUnidSolReaj,
        AlmacStrUnidEntrega: inputUnidEntrReaj,
        AlmacStrNomSolic: inputNomSolicitante,
        AlmacStrCargoSolic: inputCargoSolitane,
        AlmacStrNomEntrega: inputNomEntrega,
        AlmacStrCargoEntrega: inputCargoEntrega,
        AlmacStrNomGerFinancSol: inputNomGerenteFinan,
        AlmacStrNomGerAdmFinEnt: inputNombAdminiFin,
        AlmacStrNomSubDiSol: inputNomDirEjec,
        AlmacStrNomDiEjecEnt: inputNomDirEjeEntrega,
        AlmacStrObserv: inputObservaciones,
    };

    console.log(datos);
    var InsertarReajuste = $.ajax({
        url: './api/v1/AlmacReajuste.php',
        type: 'POST',
        data: datos,
        beforeSend: function () {
            $("#btnGuardarReaj").text('GUARDANDO...').prop('disabled', true);
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
            $("#btnGuardarReaj").text('GUARDAR').attr('disabled', true);

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
            $("#btnGuardarReaj").text('GUARDAR').attr('disabled', false);
        }
    });

   $.when(InsertarReajuste).done(function() {
        console.log("Entran detalles para entrada?");

        var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyAlmReajuste tr'), function (tr) {
            return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
                return td.innerHTML;
            });
        });


        if (validar == true) {
            console.log(tableInfo);

            for (let j = 0; j < tableInfo.length; j++) {
                console.log("solo nombre: " + tableInfo[j][1]);

                let datosDetalle = {
                    AlmacNumIdReajust: inputCGCReaj,
                    AlmacNumCodPresentInsu: tableInfo[j][1],
                    AlmacStrInsumo: tableInfo[j][2],
                    AlmcStrCantUnid: tableInfo[j][3],
                    AlmacStrPresentacion: tableInfo[j][5],
                    AlmacNumCantSolicit: tableInfo[j][6],
                    AlmacNumCantEntregad: tableInfo[j][7],
                    AlmacNumPrecUni: tableInfo[j][9],
                    AlmacStrNoLote: tableInfo[j][10],
                    AlmacDatFechaVenc: tableInfo[j][11],
                    AlmacNumIdKardex: tableInfo[j][12],
                };
                console.log("cada datosDetalle enviado");
                console.log(datosDetalle);
                $.ajax({
                    url: './api/v1/AlmacDetReajust.php',
                    type: 'POST',
                    data: datosDetalle,
                    beforeSend: function () {
                        $("#btnGuardarReaj").text('GUARDANDO...').prop('disabled', true);
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
                        $("#btnGuardarReaj").text('GUARDAR').attr('disabled', false);
                        fnOpenForm(event, 'AlmReajuste');
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
                        $("#btnGuardarReaj").text('GUARDAR').attr('disabled', false);
                    }
                });
            }
        } else {
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: 'Número de Reajuste ya existe',
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
/*
            $('#inputCodInsumoR').val('');
            $('#inputNombreInsumoReaj').val('');
            $('#inputCaractInsumoReaj').val('');
            $('#inputPresentaciónReaj').val('');
            $('#inputCantUnidad').val('');
            $('#inputRenglonReaj').val('');
            $('#inputKardexReaju').val('');
            $('#inputCantSoliR').val('');
            $('#inputCantEntregadaR').val('');
            $('#inputPrecioUnit').val('');
            $('#inputNodeLote').val('');
            $('#inputFecVencimientoReaj').val('');*/
        }
    });
}