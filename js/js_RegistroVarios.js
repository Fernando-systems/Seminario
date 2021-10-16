$(document).ready(function () {

    var f = new Date();

    if(f.getDate() +1 <=9 && f.getMonth() +1 <=9){
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-0" + f.getDate());
        $('#inputDateMov').val(fecha);
        console.log(fecha + 'Dia y mes menores a 10');
    }else if(f.getDate() +1 >=10 && f.getMonth() +1 <=9) {
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() + 1) + "-" + f.getDate());
        $('#inputDateMov').val(fecha);
        console.log(fecha + 'dia mayor a 10 y mes menor a 9 ');
    }else if(f.getDate() +1 <=9 && f.getMonth() +1 >=10) {
        let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-0" + f.getDate());
        $('#inputDateMov').val(fecha);
        console.log(fecha + 'dia menor a 9 y mes mayor a 10 ');
    }

    $("#btnGuardarMov").text('Guardar Movimiento').attr('disabled', true);
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

function MostrarDatosVarios(){
    let TipoMovimiento = $('#SelVarios').val();
    console.log(TipoMovimiento + "Seleccionar Tipo de Movimiento")

    if(TipoMovimiento == 'CPE'){
        $('#LoteVencimientoSalida').prop('hidden', true);
        $('#NodeLoteSal').prop('hidden', true);
        $('#VenciSal').prop('hidden', true);
        $('#PUnitSal').prop('hidden', true);
        $('#CantExisSal').prop('hidden', true);
        $('#CantSalida').prop('hidden', true);
        //Valores de entrada cambian
        $('#CanEntrada').prop('hidden', false);
        $('#PrecioUnitEntr').prop('hidden', false);
        $('#NodeLoteEntr').prop('hidden', false);
        $('#VenciEntr').prop('hidden', false);
        $('#CantExisEntr').prop('hidden', false);
        //Habilitar campos de referencia
        $('#inputEntrega').prop('hidden', false);
        $('#EncAlmacen').prop('hidden', false);

        $('#inputRecibe').prop('hidden', true);
        $('#DireccionEje').prop('hidden', true);
        $('#EncActivos').prop('hidden', true);
        $('#GAF').prop('hidden', true);

    }

    else if (TipoMovimiento == 'CPS'){
        $('#LoteVencimientoSalida').prop('hidden', false);
        $('#NodeLoteSal').prop('hidden', false);
        $('#VenciSal').prop('hidden', false);
        $('#PUnitSal').prop('hidden', false);
        $('#CantExisSal').prop('hidden', false);
        $('#CantSalida').prop('hidden', false);
        //Valores de entrada cambian
        $('#CanEntrada').prop('hidden', true);
        $('#PrecioUnitEntr').prop('hidden', true);
        $('#NodeLoteEntr').prop('hidden', true);
        $('#VenciEntr').prop('hidden', true);
        $('#CantExisEntr').prop('hidden', true);
        //Habilitar campos de referencia
        $('#inputRecibe').prop('hidden', false);
        $('#EncAlmacen').prop('hidden', false);
        $('#inputEntrega').prop('hidden', true);
        $('#DireccionEje').prop('hidden', true);
        $('#EncActivos').prop('hidden', true);
        $('#GAF').prop('hidden', true);

    }

    else if(TipoMovimiento == 'EA'){
        $('#LoteVencimientoSalida').prop('hidden', true);
        $('#NodeLoteSal').prop('hidden', true);
        $('#VenciSal').prop('hidden', true);
        $('#PUnitSal').prop('hidden', true);
        $('#CantExisSal').prop('hidden', true);
        $('#CantSalida').prop('hidden', true);
        //Valores de entrada cambian
        $('#CanEntrada').prop('hidden', false);
        $('#PrecioUnitEntr').prop('hidden', false);
        $('#NodeLoteEntr').prop('hidden', false);
        $('#VenciEntr').prop('hidden', false);
        $('#CantExisEntr').prop('hidden', false);
        //Habilitar campos de referencia
        $('#inputEntrega').prop('hidden', true);
        $('#inputRecibe').prop('hidden', true);
        $('#EncAlmacen').prop('hidden', false);
        $('#DireccionEje').prop('hidden', false);
        $('#inputDireEje').val('Dra. Melissa Estrada Martínez');
        $('#EncActivos').prop('hidden', false);
        $('#inputActivosFijos').val('Sonia Adaí Saravia vásquez');
        $('#GAF').prop('hidden', false);
        $('#inputNomGerenteFinan').val('Lic. Edgar René Yoc Shol');

    }

    else if (TipoMovimiento == 'SA'){
        $('#LoteVencimientoSalida').prop('hidden', false);
        $('#NodeLoteSal').prop('hidden', false);
        $('#VenciSal').prop('hidden', false);
        $('#PUnitSal').prop('hidden', false);
        $('#CantExisSal').prop('hidden', false);
        $('#CantSalida').prop('hidden', false);
        //Valores de entrada cambian
        $('#CanEntrada').prop('hidden', true);
        $('#PrecioUnitEntr').prop('hidden', true);
        $('#NodeLoteEntr').prop('hidden', true);
        $('#VenciEntr').prop('hidden', true);
        $('#CantExisEntr').prop('hidden', true);
        //Habilitar campos de referencia

        $('#inputEntrega').prop('hidden', true);
        $('#inputRecibe').prop('hidden', true);
        $('#EncAlmacen').prop('hidden', false);
        $('#DireccionEje').prop('hidden', false);
        $('#inputDireEje').val('Dra. Melissa Estrada Martínez');
        $('#EncActivos').prop('hidden', false);
        $('#inputActivosFijos').val('Sonia Adaí Saravia vásquez');
        $('#GAF').prop('hidden', false);
        $('#inputNomGerenteFinan').val('Lic. Edgar René Yoc Shol');
    }

    else if(TipoMovimiento == 'ET'){
        $('#LoteVencimientoSalida').prop('hidden', true);
        $('#NodeLoteSal').prop('hidden', true);
        $('#VenciSal').prop('hidden', true);
        $('#PUnitSal').prop('hidden', true);
        $('#CantExisSal').prop('hidden', true);
        $('#CantSalida').prop('hidden', true);
        //Valores de entrada cambian
        $('#CanEntrada').prop('hidden', false);
        $('#PrecioUnitEntr').prop('hidden', false);
        $('#NodeLoteEntr').prop('hidden', false);
        $('#VenciEntr').prop('hidden', false);
        $('#CantExisEntr').prop('hidden', false);
        //Habilitar campos de referencia
        $('#inputEntrega').prop('hidden', true);
        $('#inputRecibe').prop('hidden', true);
        $('#EncAlmacen').prop('hidden', false);
        $('#DireccionEje').prop('hidden', false);
        $('#inputDireEje').val('Dra. Melissa Estrada Martínez');
        $('#EncActivos').prop('hidden', false);
        $('#inputActivosFijos').val('Sonia Adaí Saravia vásquez');
        $('#GAF').prop('hidden', false);
        $('#inputNomGerenteFinan').val('Lic. Edgar René Yoc Shol');

    }

    else if (TipoMovimiento == 'ST'){
        $('#LoteVencimientoSalida').prop('hidden', false);
        $('#NodeLoteSal').prop('hidden', false);
        $('#VenciSal').prop('hidden', false);
        $('#PUnitSal').prop('hidden', false);
        $('#CantExisSal').prop('hidden', false);
        $('#CantSalida').prop('hidden', false);
        //Valores de entrada cambian
        $('#CanEntrada').prop('hidden', true);
        $('#PrecioUnitEntr').prop('hidden', true);
        $('#NodeLoteEntr').prop('hidden', true);
        $('#VenciEntr').prop('hidden', true);
        $('#CantExisEntr').prop('hidden', true);
        //Habilitar campos de referencia

        $('#inputEntrega').prop('hidden', true);
        $('#inputRecibe').prop('hidden', true);
        $('#EncAlmacen').prop('hidden', false);
        $('#DireccionEje').prop('hidden', false);
        $('#inputDireEje').val('Dra. Melissa Estrada Martínez');
        $('#EncActivos').prop('hidden', false);
        $('#inputActivosFijos').val('Sonia Adaí Saravia vásquez');
        $('#GAF').prop('hidden', false);
        $('#inputNomGerenteFinan').val('Lic. Edgar René Yoc Shol');
    }

    else {
        $('#LoteVencimientoSalida').prop('hidden', true);
        $('#NodeLoteSal').prop('hidden', true);
        $('#VenciSal').prop('hidden', true);
        $('#PUnitSal').prop('hidden', true);
        $('#PrecioUnitEntr').prop('hidden', true);
        $('#NodeLoteEntr').prop('hidden', true);
        $('#VenciEntr').prop('hidden', true);
        $('#CantExisEntr').prop('hidden', true);


        $('#inputDireEje').val('');
        $('#inputActivosFijos').val('');
        $('#inputNomGerenteFinan').val('');
    }
}

function buscarInsumoGeneral(){
    let codInsumo = $('#inputCodInsumoVar').val();
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
    $('#selLoteVencimiento').append("<option value=0>Seleccione Lote Y Fecha de Vencimiento</option>");
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

                $('#inputCaracVa').val(AlmacStrCaractInsu);
                $('#inputPresentVa').val(AlmacStrPresentInsu);
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
    let SelVarios = $('#SelVarios').val();
    let SelCodUnico = $('#SelCodUnico').val();
    let inputCantSalida = $('#inputCantSalida').val();
    let inputCantEntregada = $('#inputCantEntregada').val();
    let inputCaracVa = $('#inputCaracVa').val();
    let inputPresentVa = $('#inputPresentVa').val();
    //let inputCGCReaj = $('#inputCGCReaj').val();
    let inputPrecioUnitEntr = $('#inputPrecioUnitEntr').val();
    let inputNodeLoteEntr = $('#inputNodeLoteEntr').val();
    let inputVenciEntr = $('#inputVenciEntr').val();
    let inputKardexR = $('#inputKardexR').val();
    //Datos de Salida
    let inputNodeLoteSal = $('#inputNodeLoteSal').val();
    let inputVenciSal = $('#inputVenciSal').val();
    let inputPUnitSal = $('#inputPUnitSal').val();
    let selLoteVencimiento = $('#selLoteVencimiento').val();

    if(SelVarios == '' ||SelVarios == null ||SelVarios == undefined || SelVarios == 0){
        swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Seleccione Tipo de Movimiento',
            text: 'Debe seleccionar que tipo de movimiento desea realizar',
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
    console.log(SelVarios + ' Tipo')
    console.log(selLoteVencimiento + ' Lotesssss')
    if((SelVarios == 'CPS' || SelVarios == 'SA') && selLoteVencimiento == '' ||selLoteVencimiento == null ||selLoteVencimiento == undefined ){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Seleccione Lote y Vencimiento',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }

    /*
    if(inputCantEntregadaR == '' ||inputCantEntregadaR == null ||inputCantEntregadaR == undefined){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Ingresar Cantidad Entregada',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }*/


    if(SelVarios == 'CPE' || SelVarios == 'EA' || SelVarios == 'ET') {
        if (inputNodeLoteEntr == ''){
            inputNodeLoteEntr = 'No Aplica'
        }
        else{
            inputNodeLoteEntr = inputNodeLoteEntr
        }


        if (inputVenciEntr == ''){
            inputVenciEntr = 'No Aplica'
        }
        else{
            inputVenciEntr = inputVenciEntr
        }


        $('#tbodyAlmReajuste').append('<tr>' +
            '<td hidden>' + AlmacNumCodPresentInsu + '</td>' +
            '<td>' + AlmacNumCodInsumo + '</td>' +
            '<td>' + AlmacStrNomInsumo + '</td>' +
            '<td>' + inputPresentVa + '</td>' +
            '<td scope="row">'+ AlmacStrCantYUnidInsu + '</td>' +
            '<td>' + inputCantEntregada + '</td>' +
            '<td>' + inputPrecioUnitEntr + '</td>' +
            '<td>' + inputNodeLoteEntr + '</td>' +
            '<td>' + inputVenciEntr + '</td>' +
            '<td>' + inputKardexR + '</td>' +
            '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>' +
            +'</tr>');

        $('#inputCodInsumoVar').val('');
        $('#SelCodUnico').empty();
        $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
        $('#inputKardexR').val('');
        $('#inputRenglonReaj').val('');
        $('#inputCaracVa').val('');
        $('#inputPresentVa').val('');
        $('#inputCantExisEntr').val('');
        $('#inputCantEntregada').val('');
        $('#inputPrecioUnitEntr').val('');
        $('#inputNodeLoteEntr').val('');
        $('#inputVenciEntr').val('');
        $("#btnGuardarMov").text('Guardar Movimiento').attr('disabled', false);

        $('#SelVarios').prop('disabled', true);
        $('#inputnodocument').prop('disabled', true);
        $('#inputDescri').prop('disabled', true);
    }
    else{
        $('#tbodyAlmReajuste').append('<tr>' +
            '<td hidden>'+AlmacNumCodPresentInsu+'</td>' +
            '<td>'+AlmacNumCodInsumo+'</td>' +
            '<td>'+AlmacStrNomInsumo+'</td>' +
            '<td>'+inputPresentVa+'</td>' +
            '<td scope="row">'+AlmacStrCantYUnidInsu+'</td>' +
            '<td>'+inputCantSalida+'</td>' +
            '<td>'+inputPUnitSal+'</td>' +
            '<td>'+inputNodeLoteSal+'</td>' +
            '<td>'+inputVenciSal+'</td>' +
            '<td>'+inputKardexR+'</td>' +
            '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>' +
            +'</tr>');

        $('#inputCodInsumoVar').val('');
        $('#SelCodUnico').empty();
        $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
        $('#inputKardexR').val('');
        $('#inputRenglonReaj').val('');
        $('#inputCaracVa').val('');
        $('#inputCantExisEntr').val('');
        $('#inputCantSalida').val('');
        //$('#inputCantEntregada').val('');
        $('#inputPrecioUnitEntr').val('');
        $('#inputNodeLoteEntr').val('');
        $('#inputVenciEntr').val('');
        $("#btnGuardarMov").text('Guardar Movimiento').attr('disabled', false);

        //$('#inputCGCReaj').prop('disabled', true);
        $('#SelVarios').prop('disabled', true);
        $('#inputnodocument').prop('disabled', true);
        $('#inputDescri').prop('disabled', true);


        $('#inputPresentVa').val('');
        $('#inputNodeLoteSal').val('');
        $('#inputVenciSal').val('');
        $('#inputPUnitSal').val('');
        $('#inputCantExisSal').val('');

        $('#selLoteVencimiento').empty();
        $('#selLoteVencimiento').append("<option value=0>Seleccione Lote Y Fecha de Vencimiento</option>");
    }


}

/*funcion para eliminar fila*/
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});


function GuardalMovVa() {

    var SelVarios = $('#SelVarios').val();
    var inputnodocument = $('#inputnodocument').val();
    let inputDateMov = $('#inputDateMov').val();
    let inputDescri = $('#inputDescri').val();
    let inputNomRecibe = $('#inputNomRecibe').val();
    let inputNomEntrega = $('#inputNomEntrega').val();
    let inputNomAlmac = $('#inputNomAlmac').val();
    let inputDireEje = $('#inputDireEje').val();
    let inputActivosFijos = $('#inputActivosFijos').val();
    let inputNomGerenteFinan = $('#inputNomGerenteFinan').val();
    let inputObser = $('#inputObser').val();
    var validar = false;
    var ingresalida = ''
    var codigo = 0

    if(inputNomRecibe == ''){
        ingresalida = inputNomEntrega
    }
    else if(inputNomEntrega == ''){
        ingresalida = inputNomRecibe
    }



    var parametros = new FormData($("#formularioEnv")[0]);
    parametros.append("AlmacStrTipMovi", SelVarios);
    parametros.append("AlmacFecha", inputDateMov);
    parametros.append("AlmacNoDocumento", inputnodocument);
    parametros.append("AlmacStrDescrip", inputDescri);
    parametros.append("AlmacStrEncargado", inputNomAlmac);
    parametros.append("AlmacStrIngreEgre", ingresalida);
    parametros.append("AlmacStrDireccion", inputDireEje);
    parametros.append("AlmacStrGAF", inputNomGerenteFinan);
    parametros.append("AlmacStrActiFijos", inputActivosFijos);
    parametros.append("AlmacStrOb", inputObser);

/*
    let datos = {
        AlmacStrTipMovi: inputCGCReaj,
        AlmacFecha: inputDateMov,
        AlmacNoDocumento: SelVarios,
        AlmacStrDescrip: inputUnidSolReaj,
        AlmacStrEncargado: inputUnidEntrReaj,
        AlmacStrIngreEgre: inputNomSolicitante,
        AlmacStrDireccion: inputCargoSolitane,
        AlmacStrGAF: inputNomEntrega,
        AlmacStrActiFijos: inputCargoEntrega,
        AlmacStrOb: inputNomGerenteFinan,
    };
*/
    console.log(7);
    var insertMov = $.ajax({
        url: './api/v1/AlmacRegistroVarios.php',
        type: 'POST',
        data: parametros,
        contentType: false,
        processData: false,
        beforeSend: function () {
            $("#btnGuardarMov").text('GUARDANDO...').prop('disabled', true);
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
            console.log(response.state.strstate)
            console.log('Texto')
            console.log(response.state.codstate)
            console.log('numero')

            var identiti = response.state.strstate.split(": ");
            console.log(identiti)
            codigo = identiti[1]

            $("#btnGuardarMov").text('GUARDAR').attr('disabled', true);

            if (swichSuccessWarning(response.state.codstate)=='success'){

                validar = true;
                console.log(codigo)
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
            $("#btnGuardarMov").text('GUARDAR').attr('disabled', false);
        }
    });

    $.when(insertMov).done(function() {
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



                if (tableInfo[j][8] == 'No Aplica'){
                    tableInfo[j][8] = '1900-01-01'
                }
                else{
                    tableInfo[j][8] = tableInfo[j][8]
                }


                let datosDetalle = {
                    AlmacNumIdVarios: codigo,
                    AlmacNumIdKardex: tableInfo[j][9],
                    AlmacNumCodPresentInsu: tableInfo[j][0],
                    AlmacNumCantidad: tableInfo[j][5],
                    AlmacNumPrecUni: tableInfo[j][6],
                    AlmacStrNoLote: tableInfo[j][7],
                    AlmacDateVencimiento: tableInfo[j][8],
                };
                console.log("cada datosDetalle enviado");
                console.log(datosDetalle);
                $.ajax({
                    url: './api/v1/AlmacRegistroVarios.php',
                    type: 'POST',
                    data: datosDetalle,
                    beforeSend: function () {
                        $("#btnGuardarMov").text('GUARDANDO...').prop('disabled', true);
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
                        $("#btnGuardarMov").text('GUARDAR').attr('disabled', false);
                        fnOpenForm(event, 'RegistrosVarios');
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
                        $("#btnGuardarMov").text('GUARDAR').attr('disabled', false);
                    }
                });
            }
        } else {
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: 'Contactar a Sistemas',
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