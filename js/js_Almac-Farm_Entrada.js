$(document).ready(function () {
    var f = new Date();
    let fecha = (f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
    $('#inputAlmFechaAlmacFarm').val(fecha);
    $('#inputdescripAlmacFarm').val('Ingresa de almacen según Requisición');
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
    let codInsumo = $('#inputAlmCodigoAlmacFarm').val();
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
                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu = json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                $('#inputNombreProductoAlmacFarm').val(AlmacStrNomInsumo);
                $('#inputnoUnidadAlmacFarm').val(FarmStrPresentInusmo+','+FarmStrUniInsumo);


            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

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
                FarmNumCantExist= json[index].FarmNumCantExist;
                //FarmNumPreUnExist= json[index].FarmNumPreUnExist;
                //FarmNumPreTotExist= json[index].FarmNumPreTotExist;

                $('#inputKardexAlmacFarm').val(FarmNumIdKardexFarm);
                $('#inputCantExis').val(FarmNumCantExist);


                

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    //$.when(esperarKFamrmacia).done(function () {
    //   buscarKardexFarmacia(codigoUnico);
   //});

}


function añadirTabla() {
    let inputAlmFechaAlmacFarm = $('#inputAlmFechaAlmacFarm').val();
    let inputdescripAlmacFarm = $('#inputdescripAlmacFarm').val();
    let inputCorrelativoCGCAlmacFarm = $('#inputCorrelativoCGCAlmacFarm').val();
    let inputAlmCodigoAlmacFarm = $('#inputAlmCodigoAlmacFarm').val();
    let inputNombreProductoAlmacFarm = $('#inputNombreProductoAlmacFarm').val();
    let inputnoUnidadAlmacFarm = $('#inputnoUnidadAlmacFarm').val();
    let SelCodUnico = $('#SelCodUnico').val();
    let inputKardexAlmacFarm = $('#inputKardexAlmacFarm').val();
    let inputCantExis = $('#inputCantExis').val();
    let inputcantingresaAlmacFarm = $('#inputcantingresaAlmacFarm').val();
    let inputPrecio = $('#inputPrecio').val();
    let inputfechavenciAlmacFarm = $('#inputfechavenciAlmacFarm').val();
    let inputnoloteAlmacFarm = $('#inputnoloteAlmacFarm').val();
    var preciototal = $('#inputcantingresaAlmacFarm').val() * $('#inputPrecio').val();
    
    if(inputCorrelativoCGCAlmacFarm == '' ||inputCorrelativoCGCAlmacFarm == null ||inputCorrelativoCGCAlmacFarm == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'No. De Correlativo No Puede Ir Vacío',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(inputAlmCodigoAlmacFarm == '' ||inputAlmCodigoAlmacFarm == null ||inputAlmCodigoAlmacFarm == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Código De Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(inputcantingresaAlmacFarm == '' ||inputcantingresaAlmacFarm == null ||inputcantingresaAlmacFarm == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Cantidad A Ingresar No Puede Ir Vacío',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }


    if(inputPrecio == '' ||inputPrecio == null ||inputPrecio == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Precio No Puede Ir Vacío',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    

    $('#tbodyAlmacFarm').append('<tr>' +
        '<td scope="row" >'+inputAlmFechaAlmacFarm+'</td>' +
        '<td>'+inputAlmCodigoAlmacFarm+'</td>' +
        '<td>'+inputdescripAlmacFarm+'</td>' +
        '<td>'+inputCorrelativoCGCAlmacFarm+'</td>' +
        '<td>'+inputNombreProductoAlmacFarm+'</td>' +
        '<td>'+inputnoUnidadAlmacFarm+'</td>' +
        '<td>'+inputcantingresaAlmacFarm+'</td>' +
        '<td>'+inputPrecio+'</td>' +
        '<td>'+preciototal+'</td>' +
        '<td>'+inputfechavenciAlmacFarm+'</td>' +
        '<td>'+inputnoloteAlmacFarm+'</td>' +
        '<td>'+inputKardexAlmacFarm+'</td>' +
        '<td>'+SelCodUnico+'</td>' +
        '</tr>');

    $('#inputAlmCodigoAlmacFarm').val('');
    $('#inputNombreProductoAlmacFarm').val('');
    $('#inputnoUnidadAlmacFarm').val('');
    $('#inputcantingresaAlmacFarm').val('');
    $('#inputPrecio').val('');
    $('#inputfechavenciAlmacFarm').val('');
    $('#inputnoloteAlmacFarm').val('');
    $('#inputKardexAlmacFarm').val('');
    $('#SelCodUnico').val('');
    $('#inputCantExis').val('');
    //$('#inputCantActual').val('');  
}

function InsertEntrada() {

    var inputCorrelativoCGCAlmacFarm = $('#inputCorrelativoCGCAlmacFarm').val();
    let AlmacStrLugarRequitxt = ('Villa Nueva');
    let inputAlmFechaAlmacFarm = $('#inputAlmFechaAlmacFarm').val();
    let inputdeptoAlmacFarm = $('#inputdeptoAlmacFarm').val();
    var validar = false;

    let datos = {
        AlmacNumIdRequi: inputCorrelativoCGCAlmacFarm,
        AlmacStrLugarRequi: AlmacStrLugarRequitxt,
        AlmacDateFechaRequi: inputAlmFechaAlmacFarm,
        AlmacNumIdUnidadSoli: inputdeptoAlmacFarm,
        };

    console.log(datos);
    var guardardencabezado = $.ajax({
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


    $.when(guardardencabezado).done(function(){
      console.log("entreaa?");

      var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyAlmacFarm tr'), function(tr){
        return Array.prototype.map.call(tr.querySelectorAll('td'), function(td){
            return td.innerHTML;
        });
    });
      console.log (validar);
      console.log(tableInfo);

      
    if (validar == true) {
      console.log(tableInfo);

    for (let j = 0; j<tableInfo.length ; j++){
console.log("solo nombre: " + tableInfo[j][1]);

        let datosDetalle = {
            FarmDateFechaIngreso: tableInfo[j][0],
            FarmNumIdRequiEntrada:inputCorrelativoCGCAlmacFarm,
            FarmStrDescrip:tableInfo[j][2],
            FarmNumIdKardexFarm:tableInfo[j][11],
            FarmDateVenci:tableInfo[j][9],
            FarmStrNolote:tableInfo[j][10],
            FarmNumCant:tableInfo[j][6],     
            FarmNumPreUnit:tableInfo[j][7],
            FarmNumPreTotal:tableInfo[j][8]
        };
        console.log("cada datosDetalle enviado");
        console.log(datosDetalle);
        $.ajax({
            url: './api/v1/EntradaFarmacia.php',
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
                $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
                $('#tbodyAlmacFarm').empty();
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
    //$('#btnGuardarEntrada').prop('disabled', true);
    $('#btnGuardarRequisicion').prop('disabled', true);
}
else {
        $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: ' Requisición ya existe ',
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
$('#inputCorrelativoCGCAlmacFarm').val('');
}
});
$('#inputCorrelativoCGCAlmacFarm').val('');
$('#tbodyAlmacFarm').val('');
$('#inputAlmCodigoAlmacFarm').val('');
$('#inputNombreProductoAlmacFarm').val('');
$('#SelCodUnico').val('');
$('#inputKardexAlmacFarm').val('');
$('#inputCantExis').val('');
$('#inputcantingresaAlmacFarm').val('');
$('#inputPrecio').val('');
$('#inputnoloteAlmacFarm').val('');
$('#inputnoUnidadAlmacFarm').val('');
}



//function sumaNC(id){
//
//    let soloNum = id.split("-");
//    let Unidad = $('#Total-'+soloNum[1]).val();
//    let CantidadAntigua = $('#CanIn'+soloNum[1]).text();
//    let precioUnitario = $('#Pre'+soloNum[1]).text();
//    console.log(Unidad + ' '+ CantidadAntigua);
//    var multiplicacion = 0;
//    multiplicacion = parseInt(Unidad) * parseInt(CantidadAntigua);
//
//    $('#NC-'+soloNum[1]).text(multiplicacion);
//
//    let division = 0;
//
//    division = parseFloat(precioUnitario) / parseInt(Unidad) ;
//
//    $('#NPU-'+soloNum[1]).text(division);
//}