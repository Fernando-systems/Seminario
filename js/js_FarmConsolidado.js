$(document).ready(function () {
    let date = new Date()

    let day = date.getDate()
    let month = date.getMonth() + 1
    let year = date.getFullYear()
    console.log(day, month, year)
    if ((day + 1) <= 9 && month <= 9) {
        let fecha = (year + "-0" + month + "-0" + day);
        $('#InputFechaC').val(fecha);
        console.log(fecha + 'Dia y mes menores a 10');
    } else if ((day + 1) >= 10 && month <= 9) {
        let fecha = (year + "-0" + month + "-" + day);
        $('#InputFechaC').val(fecha);
        console.log(fecha + 'dia mayor a 10 y mes menor a 9 ');
    } else if ((day + 1) <= 9 && month >= 10) {
        let fecha = (year + "-" + month + "-0" + day);
        $('#InputFechaC').val(fecha);
        console.log(fecha + 'dia menor a 9 y mes mayor a 10 ');
    } else {
    let fecha = ( year + "-" + month + "-" + day);
    $('#InputFechaC').val(fecha);
    console.log(fecha + ' dia mayor  a 10 y mes mayor a 10 ');
    }


    hacerCuadros();
    Buscarnombre()
    //$('#InputEntregaConsol').val('Yanileth R. Jaimes');
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

                $('#InputEntregaConsol').val(SegStrNomUsuario);
                $('#InputCargoConsolEnt').val(SegStrPuesto);

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}




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

function hacerCuadros() {

    for(let j=1; j<=33; j++){
        $('#contCuadros').append('<div class="col-md-1">' +
            '<div class="input-group mb-2">' +
            '        <div class="input-group-prepend">' +
            '            <span class="input-group-text" id="CantidadInsumo">'+j+'' +
            '            </span>' +
            '        </div>' +
            '        <input type="number" class="form-control" id="'+j+'" aria-describedby="cantidadInsumo" value="0">' +
            '    </div>' +
            '</div>'
        );
    }
}

function buscarInsumoGeneral(){
    let codInsumo = $('#inputCodigo').val();
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Presentación</option>");
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
            console.log("holaaaaaaaaa")
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                StrNombreInsumo = json[index].StrNombreInsumo;
                StrCaracteristicas = json[index].StrCaracteristicas;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                $('#inputNomInsumo').val(StrNombreInsumo);
                $('#inputFarmDescrip').val(StrNombreInsumo+', '+StrCaracteristicas+', '+FarmStrPresentInusmo+','+FarmStrUniInsumo);

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    bucarKardexFarmacia(codigoUnico);
    cargarLoteVencimiento(codigoUnico);
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
                FarmNumCantExist= json[index].FarmNumCantExist;

                $('#inputKardex').val(FarmNumIdKardexFarm);


            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

}

function cargarLoteVencimiento(codigoUnico) {
    console.log("Entra en lote")
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Seleccione Lote y Vencimiento</option>");
    
    let esperaVencimiento = $.ajax({
        url: './api/v1/Insumo.php?codImsumoFarm=' + codigoUnico +'&VencimientoFarm=true', //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
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
    $('#inputFechaVencimiento').val(vencimiento);
    $('#InputPrecioUnitario').val(preunit);
    $('#InputCantidadExistente').val(cantidad);
}


$('#btnGuardarConsolidado').click(function () {
    let texto =  $('#btnGuardarConsolidado').text();

    console.log(texto + 'Aquí el estado del boton antes del if');
    if(texto == 'GUARDAR'){
        GuardarConsolidado();
    }
    else{
        console.log(texto + 'Aquí el estado del boton antes del else');
        $("#btnGuardarConsolidado").text('GUARDAR').attr('disabled', true);
        $("#btnGuardarConsolidado").removeClass("btn-warning");
        $("#btnGuardarConsolidado").addClass("btn-success");
        fnOpenForm(event, 'FarmConsolidado')
    }
});



contadorfilasConsol = 0;
function AgregarFila() {
    let inputNomInsumo = $('#inputNomInsumo').val();
    let inputFarmDescrip = $('#inputFarmDescrip').val();
    let inputCodigo = $('#inputCodigo').val();
    let SelCodUnico = $('#SelCodUnico').val();
    let selLoteVencimiento = $('#selLoteVencimiento').val();
    let inputKardex = $('#inputKardex').val();
    let inputFechaVencimiento = $('#inputFechaVencimiento').val();
    let inputNoLote = $('#inputNoLote').val();
    let InputCantidadExistente = $('#InputCantidadExistente').val();
    let InputDevInsumoLote = $('#InputDevInsumoLote').val();
    let InputDevInsumoVenci = $('#InputDevInsumoVenci').val();

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


    /*-----------------------*/

    if (inputCodigo == '' || inputCodigo == null || inputCodigo == undefined) {
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

    if (SelCodUnico == '' || SelCodUnico == null || SelCodUnico == undefined || SelCodUnico == 'Seleccione Presentación') {
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Presentación de Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if (selLoteVencimiento == '' || selLoteVencimiento == null || selLoteVencimiento == undefined || selLoteVencimiento == 'Seleccione Lote y Vencimiento') {
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

    if (contadorfilasConsol <= 23){


    let c1 = $('#1').val();
    let c2 = $('#2').val();
    let c3 = $('#3').val();
    let c4 = $('#4').val();
    let c5 = $('#5').val();
    let c6 = $('#6').val();
    let c7 = $('#7').val();
    let c8 = $('#8').val();
    let c9 = $('#9').val();
    let c10 = $('#10').val();
    let c11 = $('#11').val();
    let c12 = $('#12').val();
    let c13 = $('#13').val();
    let c14 = $('#14').val();
    let c15 = $('#15').val();
    let c16 = $('#16').val();
    let c17 = $('#17').val();
    let c18 = $('#18').val();
    let c19 = $('#19').val();
    let c20 = $('#20').val();
    let c21 = $('#21').val();
    let c22 = $('#22').val();
    let c23 = $('#23').val();
    let c24 = $('#24').val();
    let c25 = $('#25').val();
    let c26 = $('#26').val();
    let c27 = $('#27').val();
    let c28 = $('#28').val();
    let c29 = $('#29').val();
    let c30 = $('#30').val();
    let c31 = $('#31').val();
    let c32 = $('#32').val();
    let c33 = $('#33').val();
    var SubTotal = 0;
    var devolucion = $('#InputDevInsumo').val();
    let Total = 0;




   SubTotal = parseInt(c1) + parseInt(c2) + parseInt(c3) + parseInt(c4) + parseInt(c5) + parseInt(c6) + parseInt(c7) + parseInt(c8) + parseInt(c9) +
        parseInt(c10) + parseInt(c11) + parseInt(c12) + parseInt(c13) + parseInt(c14) + parseInt(c15) + parseInt(c16) + parseInt(c17) + parseInt(c18) +
        parseInt(c19) + parseInt(c20) + parseInt(c21) + parseInt(c22) + parseInt(c23) + parseInt(c24) + parseInt(c25) + parseInt(c26) + parseInt(c27) +
        parseInt(c28) + parseInt(c29) + parseInt(c30) + parseInt(c31) + parseInt(c32) + parseInt(c33);

   Total = SubTotal - parseInt(devolucion);


        console.log(("Sub: " + SubTotal));
        console.log(("Dev: " + devolucion));
        console.log(("Tot: " + Total));

         if ((SubTotal == 0) && (devolucion == 0)) {
             $.toast({
                 title: 'Ups!',
                 subtitle: '1 segundo',
                 content: 'Ingrese Valores en Casillas',
                 type: 'error',
                 pause_on_hover: true,
                 delay: 5000
             });

             return false;

         }

        if (isNaN(SubTotal) == true || isNaN(devolucion) == true || devolucion == '') {
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: 'Casillas no pueden ir en blanco',
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });

            return false;

        }


    $('#tbodyConsolidadoFarm').append
    ('<tr>' +
        //'<td width="27%" >'+AlmacNumCodInsumo+'</td>' +
        '<td width="27%" >' + StrNombreInsumo + ', ' + FarmStrPresentInusmo + ', ' + FarmStrUniInsumo + '</td>' +
        '<td >' + c1 + '</td>' +
        '<td>' + c2 + '</td>' +
        '<td>' + c3 + '</td>' +
        '<td>' + c4 + '</td>' +
        '<td>' + c5 + '</td>' +
        '<td>' + c6 + '</td>' +
        '<td>' + c7 + '</td>' +
        '<td>' + c8 + '</td>' +
        '<td>' + c9 + '</td>' +
        '<td>' + c10 + '</td>' +
        '<td>' + c11 + '</td>' +
        '<td>' + c12 + '</td>' +
        '<td>' + c13 + '</td>' +
        '<td>' + c14 + '</td>' +
        '<td>' + c15 + '</td>' +
        '<td>' + c16 + '</td>' +
        '<td>' + c17 + '</td>' +
        '<td>' + c18 + '</td>' +
        '<td>' + c19 + '</td>' +
        '<td>' + c20 + '</td>' +
        '<td>' + c21 + '</td>' +
        '<td>' + c22 + '</td>' +
        '<td>' + c23 + '</td>' +
        '<td>' + c24 + '</td>' +
        '<td>' + c25 + '</td>' +
        '<td>' + c26 + '</td>' +
        '<td>' + c27 + '</td>' +
        '<td>' + c28 + '</td>' +
        '<td>' + c29 + '</td>' +
        '<td>' + c30 + '</td>' +
        '<td>' + c31 + '</td>' +
        '<td>' + c32 + '</td>' +
        '<td>' + c33 + '</td>' +
        '<td>' + SubTotal + '</td>' +
        '<td>' + devolucion + '</td>' +
        '<td widt="5%">' + Total + '</td>' +
        '<td hidden></td>' +
        '<td hidden>' + inputKardex + '</td>' +
        '<td hidden class="nuevaClase2">' + inputFechaVencimiento + '</td>' +
        '<td hidden class="nuevaClase">' + inputNoLote + '</td>' +
        '<td hidden>' + SelCodUnico + '</td>' +
        '<td hidden> ' + $('#InputServicio').val() + '</td>' +
        '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>' +
        '<td hidden>' + inputCodigo + '</td>' +
        '<td hidden>' + InputDevInsumoLote + '</td>' +
        '<td hidden>' + InputDevInsumoVenci + '</td>'
        + '</tr>');

    $('#SubTotal').val('');
    $('#devolucion').val('');
    $('#inputCodigo').val('');
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Presentación</option>");
    $('#inputNomInsumo').val('');
    $('#inputKardex').val('');
    $('#inputFarmDescrip').val('');
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Seleccione Lote y Vencimiento</option>");
    $('#inputFechaVencimiento').val('');
    $('#inputNoLote').val('');
    $('#InputCantidadExistente').val('');
    $('#1').val('0');
    $('#2').val('0');
    $('#3').val('0');
    $('#4').val('0');
    $('#5').val('0');
    $('#6').val('0');
    $('#7').val('0');
    $('#8').val('0');
    $('#9').val('0');
    $('#10').val('0');
    $('#11').val('0');
    $('#12').val('0');
    $('#13').val('0');
    $('#14').val('0');
    $('#15').val('0');
    $('#16').val('0');
    $('#17').val('0');
    $('#18').val('0');
    $('#19').val('0');
    $('#20').val('0');
    $('#21').val('0');
    $('#22').val('0');
    $('#23').val('0');
    $('#24').val('0');
    $('#25').val('0');
    $('#26').val('0');
    $('#27').val('0');
    $('#28').val('0');
    $('#29').val('0');
    $('#30').val('0');
    $('#31').val('0');
    $('#32').val('0');
    $('#33').val('0');
    $('#InputDevInsumo').val('0');
    $('#InputDevInsumoLote').val('');
    $('#InputDevInsumoVenci').val('');
        contadorfilasConsol = contadorfilasConsol + 1;
    $("#btnGuardarConsolidado").attr('disabled', false);
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
    contadorfilasConsol = contadorfilasConsol - 1;
});


function GuardarConsolidado() {
    var InputCorrelativo = $('#InputCorrelativo').val();
    var InputServicio = $('#InputServicio').val();
    let InputFechaC = $('#InputFechaC').val();
    let InputRecibeConsol = $('#InputRecibeConsol').val();
    let InputCargoConsolReb = $('#InputCargoConsolReb').val();
    let InputEntregaConsol = $('#InputEntregaConsol').val();
    let InputCargoConsolEnt = $('#InputCargoConsolEnt').val();
    var validar = false;


    console.log(contadorfilasConsol + 'Aquí el contador de filas')
    if(contadorfilasConsol == '' ||contadorfilasConsol == null ||contadorfilasConsol == undefined ||contadorfilasConsol == 0){
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


    if(InputCorrelativo == null ||InputCorrelativo == undefined || InputCorrelativo == ''){
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

    if(InputServicio == null ||InputServicio == undefined || InputServicio == ''){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Servicio',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(InputFechaC == null ||InputFechaC == undefined || InputFechaC == ''){
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

    if(InputEntregaConsol == null ||InputEntregaConsol == undefined || InputEntregaConsol == ''){
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

    let datos = {

        FarmNumIdConsoli: InputCorrelativo,
        FarmStrServicio: InputServicio,
        FarmDateFechaConsol: InputFechaC,
        FarmStrRecibe: InputRecibeConsol,
        FarmStrEntrega: InputEntregaConsol,
        FarmStrCarRecibe: InputCargoConsolReb,
        FarmstrCarEntr: InputCargoConsolEnt,
    };
    console.log(datos);
    var insertarEncabezado = $.ajax({
        url: './api/v1/FarmConsolidado.php',
        type: 'POST',
        data: datos,
        beforeSend: function () {
            //$("#btnGuardarConsolidado").text('GUARDANDO...').prop('disabled', true);
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

            if (swichSuccessWarning(response.state.codstate)=='success'){

                validar = true;
                console.log("entreaa?");
                detalleconsol1();
                detalleconsol2();
                $("#btnGuardarConsolidado").text('OTRA REQUISICION').attr('disabled', false);

                $("#btnGuardarConsolidado").removeClass("btn-success");
                $("#btnGuardarConsolidado").addClass("btn-warning");
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
            $("#btnGuardarConsolidado").text('GUARDAR').attr('disabled', false);
        }
    });


}

function detalleconsol1() {
    let InputCorrelativo = $('#InputCorrelativo').val();
    let inputCodigo = $('#inputCodigo').val();
    let InputServicio = $('#InputServicio').val();

    console.log("entra a detalle 1")

    var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyConsolidadoFarm tr'), function (tr) {
        return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
            return td.innerHTML;
        });
    });
    for (let j = 0; j < tableInfo.length; j++) {
        console.log("solo detalles del consolodado: " + tableInfo[j][1]);

        let datosDescripcion = {
            FarmNumIdConsoli: InputCorrelativo,
            FarmNumCodigo: tableInfo[j][44],
            FarmStrNomInsumo: tableInfo[j][0],
            FarmNumUno: tableInfo[j][1],
            FarmNumDos: tableInfo[j][2],
            FarmNumtres: tableInfo[j][3],
            FarmNumCuatro: tableInfo[j][4],
            FarmNumCinco: tableInfo[j][5],
            FarmNumSeis: tableInfo[j][6],
            FarmNumSiete: tableInfo[j][7],
            FarmNumOcho: tableInfo[j][8],
            FarmNumNueve: tableInfo[j][9],
            FarmNumDiez: tableInfo[j][10],
            FarmNumOnce: tableInfo[j][11],
            FarmNumDoce: tableInfo[j][12],
            FarmNumTrece: tableInfo[j][13],
            FarmNumCatorce: tableInfo[j][14],
            FarmNumQuince: tableInfo[j][15],
            FarmNumDieciseis: tableInfo[j][16],
            FarmNumDiecisiete: tableInfo[j][17],
            FarmNumDieciocho: tableInfo[j][18],
            FarmNumDicinueve: tableInfo[j][19],
            FarmNumVeinte: tableInfo[j][20],
            FarmNumVeintiuno: tableInfo[j][21],
            FarmNumVeintidos: tableInfo[j][22],
            FarmNumVeintitres: tableInfo[j][23],
            FarmNumVeinticuatro: tableInfo[j][24],
            FarmNumVeinticinco: tableInfo[j][25],
            FarmNumVeintiseis: tableInfo[j][26],
            FarmNumVeintisiete: tableInfo[j][27],
            FarmNumVeintiocho: tableInfo[j][28],
            FarmNumVeintinueve: tableInfo[j][29],
            FarmNumTreinta: tableInfo[j][30],
            FarmNumTreintayUno: tableInfo[j][31],
            FarmNumTreintayDos: tableInfo[j][32],
            FarmNumTreintayTres: tableInfo[j][33],
            FarmNumCant: tableInfo[j][34],
            FarmNumDevCons: tableInfo[j][35],
            FarmNumTotalCons: tableInfo[j][36],
            FarmNumCodPrese: tableInfo[j][41],
            FarmStrConsolNom: InputServicio,
        };

        console.log("cada datosDescripcion enviado");
        console.log(datosDescripcion);
        $.ajax({
            url: './api/v1/DescripcionConsFam.php',
            type: 'POST',
            data: datosDescripcion,
            beforeSend: function () {
                //$("#btnGuardarConsolidado").text('GUARDANDO...').prop('disabled', true);
            },
            success: function (response) {
                $.toast({
                    title: 'Informativo',
                    subtitle: '1 segundo',
                    content: response.state.strstate,
                    type: swichSuccessWarning(1),
                    pause_on_hover: true,
                    delay: 5000
                });
                //$("#btnGuardarConsolidado").text('GUARDAR').attr('disabled', false);

            },
            error: function (request, status, error) {
                console.log(request);
                $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: 'Ocurrio un error',  /*request.responseText*/
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
                //$("#btnGuardarConsolidado").text('GUARDAR').attr('disabled', false);
            }


        });

    }
    ;
};

function detalleconsol2(){
    console.log("entra a detalle 2")

    let InputCorrelativo = $('#InputCorrelativo').val();

    var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyConsolidadoFarm tr'), function (tr) {
        return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
            return td.innerHTML;
        });
    });

    for (let j = 0; j<tableInfo.length ; j++){
        console.log("solo nombre: " + tableInfo[j][1]);

        let datosDetalle = {
            FarmNumIdConsoli:InputCorrelativo,
            FarmStrDescripcion: tableInfo[j][0],
            FarmNumIdKardexFarm: tableInfo[j][38],
            FarmNumSubtotal: tableInfo[j][34],
            FarmNumDevoluciones: tableInfo[j][35],
            FarmNumTotalEntregado: tableInfo[j][36],
            FarmDateVencimiento: tableInfo[j][39],
            FarmStrNoLote: tableInfo[j][40],
            FarmStrNoLoteDev: tableInfo[j][45],
            FarmDateVenciDev: tableInfo[j][46],
        }
        console.log("cada datosDetalle enviado");
        console.log(datosDetalle);
       $.ajax({
            url: './api/v1/FarmDetalleCosolidado.php',
            type: 'POST',
            data: datosDetalle,
            beforeSend: function () {
                //$("#btnGuardarConsolidado").text('GUARDANDO...').prop('disabled', true);
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
                //$("#btnGuardarConsolidado").text('GUARDAR').attr('disabled', false);
            }
        });


    }
}

function BuscarConsol(){
    console.log('abriendo modal')
    $('#ModalBuscarConsol').fadeIn();
}



$('#tbBuscar').DataTable( {
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
    $('#ModalBuscarConsol').fadeOut();
});

function agrCodIns(codigoInsumo){
    $('#inputCodigo').val(codigoInsumo);

    buscarInsumoGeneral();
}


function ejecutarRep(){
    let numconsol =  $('#InputCorrelativo').val()
    window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/RepConsolidado.php?FarmNumIdConsoli=' + numconsol);
    $('#InputCorrelativo').val('');
    fnOpenForm(event, 'FarmConsolidado')
    }
