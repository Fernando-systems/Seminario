$(document).ready(function () {
    var f = new Date();

    if(f.getDate() +1 <=9 && f.getMonth() +1 <=9){
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-0" + f.getDate());
        $('#inputFechaVale').val(fecha);
        $('#inputFecha').val(fecha);
        console.log(fecha + 'Dia y mes menores a 10');
    }else if(f.getDate() +1 >=10 && f.getMonth() +1 <=9) {
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() + 1) + "-" + f.getDate());
        $('#inputFechaVale').val(fecha);
        $('#inputFecha').val(fecha);
        console.log(fecha + 'dia mayor a 10 y mes menor a 9 ');
    }else if(f.getDate() +1 <=9 && f.getMonth() +1 >=10) {
        let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-0" + f.getDate());
        $('#inputFechaVale').val(fecha);
        $('#inputFecha').val(fecha);
        console.log(fecha + 'dia menor a 9 y mes mayor a 10 ');
    }

    var TipoFormato = '1H';
    $('#inputNumero').val('U.E 285');
    $('#inputDependecia').val('HOSPITAL NACIONAL ESPECIALIDAD DE VILLA NUEVA');
    $('#inputTipoFormato').val(TipoFormato);

    BuscarAlmacen();
    $('#txttotalletras').empty();
    $('#textObservacionesInsumo').empty();
    $('#textObservaciones').empty();

});

var contador = 0; //variable para suma total
var mostrarInventariohidde = false;

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
$("#btnGuardarEncabezado").text('GUARDAR').attr('disabled', true);


//Funcion solo para buscar un insumo con el codigo de la llave
/*function buscarInsumo() {
    let codInsumo = $('#inputCodInsumo').val();

    $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodPresentInsu=' + codInsumo, //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log("que recibo");
            console.log(json);
            $(json).each(function (index, item) {
               AlmacNumCodInsumo= json[index].AlmacNumCodInsumo;
               AlmacNumRenglon= json[index].AlmacNumRenglon;
               AlmacStrNomInsumo= json[index].AlmacStrNomInsumo;
               AlmacStrCaractInsu= json[index].AlmacStrCaractInsu;
               AlmacStrPresentInsu= json[index].AlmacStrPresentInsu;
               AlmacStrCantYUnidInsu= json[index].AlmacStrCantYUnidInsu;
               AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;

                $('#inputNombreInsumo').val(AlmacStrNomInsumo);
                $('#inputCaracteristicasInsumo').val(AlmacStrCaractInsu);
                $('#inputPresentacionInsumo').val(AlmacStrPresentInsu);
                $('#inputDescArt').val(AlmacNumRenglon);
            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}
-----------------------*/
function buscarInsumoGeneral(codInsumo){

    //let codInsumo = $('#inputCodInsumo').val();
    console.log(codInsumo);
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

                $('#inputNombreInsumo').val(AlmacStrNomInsumo);
                $('#inputCaracteristicasInsumo').val(AlmacStrCaractInsu);
                $('#inputPresent').val(AlmacStrPresentInsu + ' - ' + AlmacStrCantYUnidInsu);
                $('#inputCodreng').val(AlmacNumRenglon);
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    bucarKardexAlmacen(codigoUnico);
    }

function bucarKardexAlmacen(codigoUnico) {
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

            $('#inputKardexAlm').val(AlmacNumIdKardex);

            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}

/*function guradarEncamezado1h() {
    let inputDependecia = $('#inputDependecia').val();
    let inputNumero = $('#inputNumero').val();
    let inputPrograma = $('#inputPrograma').val();
    let inputFecha = $('#inputFecha').val();
    let inputOrdencyp = $('#inputOrdencyp').val();
    let inputAlmCGC = $('#inputAlmCGC').val();
    let inputProveedor = $('#inputProveedor').val();
    let inputNitProveedor = $('#inputNitProveedor').val();
    let inputNoFactura = $('#inputNoFactura').val();

    let datos = {
        AlmacNumIdForm1H: inputAlmCGC,
        AlmacStrDependencia: inputDependecia,
        AlmacStrNitProveedor: inputNitProveedor,
        AlmacDateFecha: inputFecha,
        AlmacStrUnidEjec:inputNumero,
        AlmacStrOrdCYPNo: inputOrdencyp,
        AlmacStrDatosFactura:inputNoFactura,
        AlmacStrNomProveedor: inputProveedor,
        AlmacNumIdPrograma: inputPrograma
    };

    console.log(datos);
    $.ajax({
        url: './api/v1/1-h.php',
        type: 'POST',
        data: datos,
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardarEncabezado").text('GUARDAR').attr('disabled', false);
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
            $("#btnGuardarEncabezado").text('GUARDAR').attr('disabled', false);
        }
    });
    guardarDetalle1h();

    $('#inputDependecia').prop('disabled', true);
    $('#inputNumero').prop('disabled', true);
    $('#inputPrograma').prop('disabled', true);
    $('#inputFecha').prop('disabled', true);
    $('#inputOrdencyp').prop('disabled', true);
    $('#inputAlmCGC').prop('disabled', true);
    $('#inputProveedor').prop('disabled', true);
    $('#inputNitProveedor').prop('disabled', true);
    $('#inputNoFactura').prop('disabled', true);
}*/

function guradarEncamezado1h(validaVale) {
    let inputDependecia = $('#inputDependecia').val();
    let inputNumero = $('#inputNumero').val();
    let inputPrograma = $('#inputPrograma').val();
    let inputFecha = $('#inputFecha').val();
    let inputOrdencyp = $('#inputOrdencyp').val();
    let inputSolPedido=  $('#inputSolPedido').val();

    if (inputOrdencyp == '' || inputOrdencyp == null || inputOrdencyp == undefined){
        inputOrdencyp = 0 //$('#inputSolPedido').val();
    }
    else if (inputOrdencyp == 'Donativo'){
        inputOrdencyp = 1;
        inputSolPedido = null

    }

    let inputAlmCGC = $('#inputAlmCGC').val();
    let inputProveedor = $('#inputProveedor').val();
    let inputNitProveedor = $('#inputNitProveedor').val();
    let inputNoFactura = $('#inputNoFactura').val();
    let inputObservaciones = $('#inputObservaciones').val();
    let inputSerieFactura = $('#inputSerieFactura').val();
    let Inputstrresponsable = $('#Inputstrresponsable').val();
    let Inputstrresponsableinven = $('#Inputstrresponsableinven').val();
    let txttotalletras = $('#txttotalletras').val();
    let InputstrTipAlm = $('#InputstrTipAlm').val();
    var validar = false;
    var datos = {};

    if(validaVale == 1){ //si hay vale
         datos = {
            AlmacNumIdForm1H: inputAlmCGC,
            AlmacStrDependencia: inputDependecia,
            AlmacStrNitProveedor: inputNitProveedor,
            AlmacDateFecha: inputFecha,
            AlmacStrUnidEjec:inputNumero,
            AlmacStrOrdCYPNo: inputOrdencyp,
            AlmacStrDatosFactura:inputNoFactura,
            AlmacStrNomProveedor: inputProveedor,
            AlmacStrObservacionesForm1H: inputObservaciones,
            AlmacNumIdPrograma: inputPrograma,
            AlmacStrSerieFactura : inputSerieFactura,
             AlmacStrResponsable : Inputstrresponsable,
             AlmacStrRespInventario : Inputstrresponsableinven,
             AlmacStrTotalLetras : txttotalletras,
             AlmacSolPedido:inputSolPedido,
             AlmacStrAlmacen:InputstrTipAlm
            //NumCGCOficial:null
        };
    }else{
         datos = {
            AlmacNumIdForm1H: inputAlmCGC,
            AlmacStrDependencia: inputDependecia,
            AlmacStrNitProveedor: inputNitProveedor,
            AlmacDateFecha: inputFecha,
            AlmacStrUnidEjec:inputNumero,
            AlmacStrOrdCYPNo: inputOrdencyp,
            AlmacStrDatosFactura:inputNoFactura,
            AlmacStrNomProveedor: inputProveedor,
            AlmacStrObservacionesForm1H: inputObservaciones,
            AlmacNumIdPrograma: inputPrograma,
            AlmacStrSerieFactura : inputSerieFactura,
            AlmacStrResponsable : Inputstrresponsable,
            AlmacStrRespInventario : Inputstrresponsableinven,
            AlmacStrTotalLetras : txttotalletras,
            NumCGCOficial:inputAlmCGC,
            AlmacSolPedido:inputSolPedido,
             AlmacStrAlmacen:InputstrTipAlm
        };
    }

    console.log(datos + 'prueba de letras')
    if (Inputstrresponsable == '' || Inputstrresponsable == null || Inputstrresponsable == undefined) {
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Nombre De Responsable',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
        return false;
    }
    console.log(datos);
    var insertEncabezadoH1=$.ajax({
        url: './api/v1/1-h.php',
        type: 'POST',
        data: datos,
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardarEncabezado").text('GUARDAR').attr('disabled', false);
            if (swichSuccessWarning(response.state.codstate)=='success'){
                validar = true;
            }
            else {
                validar = false;
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
            $("#btnGuardarEncabezado").text('GUARDAR').attr('disabled', false);
        }
    });
    $.when(insertEncabezadoH1).done(function(){
        console.log("entreaa?");
  
        var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbody1h tr'), function(tr){
          return Array.prototype.map.call(tr.querySelectorAll('td'), function(td){
              return td.innerHTML;
          });
      });
      console.log(tableInfo)
        console.log (validar);
      if (validar == true) {
        $('#btnGuardarEncabezado').attr('onclick', 'guradarEncamezado1h()');  //no es necesaria este procedimiento
        console.log(tableInfo);
        var validad_detalle = false;
        for (let j = 0; j<tableInfo.length ; j++){
          console.log("solo nombre: " + tableInfo[j][1]);
  
          let datosTablaH1 = {
            AlmacNumIdForm1H:inputAlmCGC,
            AlmacNumCantidad: tableInfo[j][0],
            AlmacNumFolioLibAlmac: tableInfo[j][3],
            AlmacNumPrecUnidad: tableInfo[j][4],
            AlmacNumPrecValTotal: tableInfo[j][5],
            AlmacNumFolioLibInven: tableInfo[j][6],
            AlmacNumIdNomen: tableInfo[j][7],
            AlmacNumCodPresentInsu: tableInfo[j][9],
            AlmacStrNoLote:tableInfo[j][10],
            AlmacDateFechaVenci1H:tableInfo[j][11],
            AlmacNumTotal: contador,
            inputObservaciones: inputObservaciones,
            AlmacStrSerieFactura: inputSerieFactura,
            AlmacStrObservacioensDetall: tableInfo[j][13],
          };
          console.log("cada datosTabla enviado");
          console.log(datosTablaH1);

            $.ajax({
            url: './api/v1/1-hDetalle.php',
            type: 'POST',
            data: datosTablaH1,
            beforeSend: function () {
                $("#btnGuardar1h").text('GUARDANDO...').prop('disabled', true);
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
                $("#btnGuardar1h").text('GUARDAR').attr('disabled', false);
                limpiarTablayCampos(); 
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
                $("#btnGuardar1h").text('GUARDAR').attr('disabled', false);
            }
          }); //Termina el Ajax

          } //termina el for

      } //termina el if 
      else {
          swal.fire({
              position: 'center',
              icon: 'warning',
              title: 'No. de formulario ya existe',
          });
          $('#inputAlmCGC').prop('disabled', false);

      }
  }); 
}

function insertarLostes(kardex){

}

function añadirlotes(){
    let selCodInsumo = $('#selCodInsumo').val();
    let inputcantlote = $('#inputcantlote').val();
    let inputLote = $('#inputLote').val();
    let inputFecVencimiento = $('#inputFecVencimiento').val();

if($('#selCodInsumo').val() == 0 ||$('#selCodInsumo').val() == '' || $('#selCodInsumo').val() == null || $('#selCodInsumo').val() == undefined){
    $.toast({
        title: 'Ups!',
        subtitle: '1 segundo',
        content: 'Seleccione un código de insumo antes de ingresar un nuevo Lote',
        type: 'error',
        pause_on_hover: true,
        delay: 5000
    });

    return false;
}

    if(inputcantlote == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Para agregar un nuevo lote tiene que agregar una cantidad parcial',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }


    if(inputcantlote > 0 && $('#inputLote').val() == '' && $('#inputFecVencimiento').val() == ''){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Para agregar un nuevo lote tiene que existir al menos un No. de Lote o Fecha De Vencimiento',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        //return false;
    }
else {

    inputcantlote = $('#inputcantlote').val();
    inputLote = $('#inputLote').val();
    inputFecVencimiento = $('#inputFecVencimiento').val();
    if (inputLote == ''){
        inputLote = 'No Aplica';
    } else {
        inputLote = $('#inputLote').val();
    }

    if (inputFecVencimiento == ''){
        inputFecVencimiento = 'No Aplica';
    } else {
        inputFecVencimiento = $('#inputFecVencimiento').val()
    }

    $('#tbodylotes').append('<tr id="Lotes">'
        +'<td>'+selCodInsumo+'</td>'
        +'<td>'+inputcantlote+'</td>'
        +'<td>'+inputLote+'</td>'
        +'<td>'+inputFecVencimiento+'</td>'
        +'<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'
        +'</tr>');
        console.log(selCodInsumo)
        console.log(inputcantlote)
        console.log(inputLote)
        console.log(inputFecVencimiento)


        $(document).on('click', '.borrar', function (event) {
            event.preventDefault();
        });

        $('#inputcantlote').val('');
        $('#inputLote').val('');
        $('#inputFecVencimiento').val('');

}
}

function añadirTabla1h() {

    let inputCodInsumo = $('#inputCodInsumo').val();
    let inputKardexAlm = $('#inputKardexAlm').val();
    let inputIdNomenclatura = $('#inputIdNomenclatura').val();
    let SelCodUnico = $('#SelCodUnico').val();
    let inputNombreInsumo = $('#inputNombreInsumo').val();
    let inputCaracteristicasInsumo = $('#inputCaracteristicasInsumo').val();
    let inputPresentacionInsumo = $('#inputPresentacionInsumo').val();
    let inputCant = $('#inputCant').val();
    let inputCodreng = $('#inputCodreng').val();
    let inputFolAlm = $('#inputFolAlm').val();
    let inputPrecioUnit = $('#inputPrecioUnit').val();
    var inputValorTotal = $('#inputValorTotal').val();
    let inputFolInvent = $('#inputFolInvent').val();
    let SelNomeclatura = $('#SelNomeclatura').val();
    let inputNumNomen = $('#inputNumNomen').val();
    let inputLote = $('#inputLote').val();
    let inputFecVencimiento = $('#inputFecVencimiento').val();
    let inputProveedor = $('#inputProveedor').val();
    let inputNitProveedor = $('#inputNitProveedor').val();
    let textObservacionesInsumo = $('#textObservacionesInsumo').val();
    let inputPresent = $('#inputPresent').val();
    let selCodInsumo = $('#selCodInsumo').val();
    let inputcantlote = $('#inputcantlote').val();


    //let inputOrdencyp = $('#inputOrdencyp').val() + '-' + $('#inputSolPedido').val();
    //console.log(inputOrdencyp + 'concat')
    //
    //if ($('#inputOrdencyp').val() == 'DONATIVO'){
    //    inputOrdencyp = $('#inputOrdencyp').val()
    //    $('#inputNumero').val('').prop('disabled', false);
    //    console.log(inputOrdencyp + 'esdonativo')
    //}
//
    //else if ($('#inputOrdencyp').val() == '' || $('#inputOrdencyp').val() == null || $('#inputOrdencyp').val() == undefined){
    //    inputOrdencyp = $('#inputSolPedido').val();
    //    console.log(inputOrdencyp + 'ordenvacia')
    //}
    //else{
    //    inputOrdencyp = $('#inputOrdencyp').val() + '-' + $('#inputSolPedido').val();
    //    console.log(inputOrdencyp + 'conorder')
    //}


    if($('#inputAlmCGC').val() == '' || $('#inputAlmCGC').val() == null || $('#inputAlmCGC').val() == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Número de 1H',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if($('#inputFecha').val() == '' || $('#inputFecha').val() == null || $('#inputFecha').val() == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Fecha Válida',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }


    if($('#inputPrograma').val() == '' || $('#inputPrograma').val() == null || $('#inputPrograma').val() == undefined || $('#inputPrograma').val() == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Programa',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }


    if(SelCodUnico == '' ||SelCodUnico == null ||SelCodUnico == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese código de insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

   /* if(inputCodInsumo == '' ||inputCodInsumo == null ||inputCodInsumo == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese código de insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }*/

        if(inputKardexAlm == '' ||inputKardexAlm == null ||inputKardexAlm == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

        if(inputPrecioUnit == '' ||inputPrecioUnit == null ||inputPrecioUnit == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Precio Unitario',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

        if(inputCant == '' ||inputCant == null ||inputCant == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Cantidad',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if (inputIdNomenclatura == '' || inputIdNomenclatura == null || inputIdNomenclatura == undefined) {
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione tipo de Nomenclatura',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
        return false;
    }

    //    if (inputNitProveedor == '' || inputNitProveedor == null || inputNitProveedor == undefined) {
    //    $.toast({
    //        title: 'Ups!',
    //        subtitle: '1 segundo',
    //        content: 'NIT Vacío',
    //        type: 'error',
    //        pause_on_hover: true,
    //        delay: 5000
    //    });
    //    return false;
    //}

        if (inputProveedor == '' || inputProveedor == null || inputProveedor == undefined) {
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: '}Ingrese Nombre Proveedor',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
        return false;
    }



    if (inputcantlote == 0 && inputLote == '' && inputFecVencimiento == '') {
        inputcantlote = inputCant;
        inputLote = 'No Aplica';
        inputFecVencimiento = 'No Aplica';
        $('#tbodylotes').append('<tr class="tr-'+SelCodUnico+'">'
            +'<td>'+selCodInsumo+'</td>'
            +'<td>'+inputCant+'</td>'
            +'<td>'+inputLote+'</td>'
            +'<td>'+inputFecVencimiento+'</td>'
            +'<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'
            +'<td>'+SelCodUnico+'</td>'
            +'</tr>');
    } else {
        inputcantlote = $('#inputcantlote').val();
        inputLote = $('#inputLote').val();
        inputFecVencimiento = $('#inputFecVencimiento').val();
        if (inputLote == ''){
            inputLote = 'No Aplica';
        } else {
            inputLote = $('#inputLote').val();
        }

        if (inputFecVencimiento == ''){
            inputFecVencimiento = 'No Aplica';
        } else {
            inputFecVencimiento = $('#inputFecVencimiento').val()
        }

        $('#tbodylotes').append('<tr>'
            +'<td>'+selCodInsumo+'</td>'
            +'<td>'+inputcantlote+'</td>'
            +'<td>'+inputLote+'</td>'
            +'<td>'+inputFecVencimiento+'</td>'
            +'<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'
            +'</tr>');
    }





$("#btnGuardarEncabezado").text('GUARDAR').attr('disabled', false);

    if (inputFecVencimiento == 'No Aplica'){
        inputFecVencimiento = '1900-01-01'
        $('#tbody1h').append('<tr>'
            + '<td scope="row">'+inputCant+'</td>'
            + '<td style="text-align: left;"> ('+selCodInsumo+') '+inputNombreInsumo+', '+inputCaracteristicasInsumo+' Unidad de Medida: '+inputPresent+'</td>'
            +'<td>'+inputCodreng+'</td>'
            +'<td>'+inputFolAlm+'</td>'
            +'<td>'+inputPrecioUnit+'</td>'
            +'<td>'+inputValorTotal+'</td>'
            +'<td>'+inputFolInvent+'</td>'
            +'<td hidden>'+SelNomeclatura+'</td>'
            +'<td>'+inputNumNomen+'</td>'
            +'<td hidden>'+SelCodUnico+'</td>'
            +'<td hidden>'+inputLote+'</td>'
            +'<td hidden>'+inputFecVencimiento+'</td>'
            +'<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'
            +'<td>'+textObservacionesInsumo+'</td>'
            +'</tr>');


        contador = parseFloat(contador) + parseFloat(inputValorTotal);
        console.log(contador);
    }
    else {
        $('#tbody1h').append('<tr>'
            + '<td scope="row">'+inputCant+'</td>'
            + '<td style="text-align: left;"> ('+selCodInsumo+') '+inputNombreInsumo+', '+inputCaracteristicasInsumo+' Unidad de Medida: '+inputPresent+'</td>'
            +'<td>'+inputCodreng+'</td>'
            +'<td>'+inputFolAlm+'</td>'
            +'<td>'+inputPrecioUnit+'</td>'
            +'<td>'+inputValorTotal+'</td>'
            +'<td>'+inputFolInvent+'</td>'
            +'<td hidden>'+SelNomeclatura+'</td>'
            +'<td>'+inputNumNomen+'</td>'
            +'<td hidden>'+SelCodUnico+'</td>'
            +'<td hidden>'+inputLote+'</td>'
            +'<td hidden>'+inputFecVencimiento+'</td>'
            +'<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'
            +'<td>'+textObservacionesInsumo+'</td>'
            +'</tr>');


        contador = parseFloat(contador) + parseFloat(inputValorTotal);
        console.log(contador);
    }



$("#montototal1h").text(contador)//obtener la suma total de todos los insumos

    //Limpiar parte de agregar
    $('#inputCodInsumo').val('');
    $('#SelCodUnico').empty();
    $('#inputNombreInsumo').val(''); 
    $('#inputCaracteristicasInsumo').val('');
    $('#inputPresentacionInsumo').val('');
    $('#inputCant').val('');
    $('#inputCodreng').val('');
    $('#inputFolAlm').val('');
    $('#inputPrecioUnit').val('');
    $('#inputValorTotal').val('');
    $('#inputFolInvent').val('');
    $('#SelNomeclatura').val('');
    $('#inputNumNomen').val('');
    $('#inputIdNomenclatura').val('');
    $('#inputLote').val('');
    $('#inputFecVencimiento').val('');
    $('#inputCodInsumo').val('');
    $('#inputKardexAlm').val('');
    $('#inputPresent').val('');
    $('#contador').val('');
    $('#textObservacionesInsumo').val('');
    $('#inputcantlote').val('');


    //Bloquear encabezado después de un insumo ingresado correctamente
    $('#inputDependecia').prop('disabled', true);
    $('#inputNumero').prop('disabled', true);
    $('#inputPrograma').prop('disabled', true);
    $('#inputFecha').prop('disabled', true);
    $('#inputOrdencyp').prop('disabled', true);
    $('#inputAlmCGC').prop('disabled', true);
    $('#inputProveedor').prop('disabled', true);
    $('#inputNitProveedor').prop('disabled', true);
    $('#inputNoFactura').prop('disabled', true);
    $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
    $('#inputSerieFactura').prop('disabled', true);
    //$('#SelNomeclatura').append("<option>Seleccione Nomenclatura</option>");
}

//funcion para eliminar fila
$(document).on('click', '.borrar', function (event) {
    /*--------------------------------*/
    event.preventDefault();

    let datosPre = $(this).closest('tr');
    $(this).closest('tr').remove();

    let eliminarfila = (datosPre.find("td:eq(9)").text());
    $('.tr-'+eliminarfila).closest('tr').remove();
    /*---------------------------------*/


    let inputValorTotal = (datosPre.find("td:eq(5)").text());
    console.log(datosPre.find("td:eq(5)").text())
    console.log(inputValorTotal);
    contador = parseFloat(contador) - parseFloat(inputValorTotal);
    console.log(contador);
    $('#montototal1h').text(contador)

});

//Funciones para la operación mult en 1H---Pasar a servidor
function valorTotal1() {
    let cantidad = $('#inputCant').val();

    if (cantidad < 0){
        alert("Cantidad no puede ser negativa")
        $('#inputCant').val('');

    }
    else{
        let precioUnidad = $('#inputPrecioUnit').val();
        let suma = parseFloat(cantidad) * parseFloat(precioUnidad);
        $('#inputValorTotal').val(suma);
        console.log("ValorTotal1" + suma)
    }

}

function valorTotal2() {

    let cantidad = $('#inputCant').val();

    if (cantidad < 0){
        alert("Cantidad no puede ser negativa")
        $('#inputCant').val('');

    }
    else {
        let precioUnidad = $('#inputPrecioUnit').val();
        let suma = parseFloat(cantidad) * parseFloat(precioUnidad);
        $('#inputValorTotal').val(suma);
        console.log("ValorTotal2" + suma)
    }


}

function Nomenclatura(){
        let CodNomenclatura = $('#SelNomeclatura').val();
    
    //$('#SelNomeclatura').append("<option>Seleccione Nomenclatura</option>");
        $.ajax({
            url: './api/v1/1-hDetalle.php?Nomenclatura=' + CodNomenclatura,
            type: "GET",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
    
            success: function (data) {
                var json = data.data;
                console.log(json);
                $(json).each(function (index, item) {
                    AlmacNumIdNomen = json[index].AlmacNumIdNomen;
                    AlmacNumNomen = json[index].AlmacNumNomen;
                    AlmacStrDescNomen = json[index].AlmacStrDescNomen;
                    //$('#SelNomeclatura').append('<option value="'+AlmacNumIdNomen+'">'+AlmacNumIdNomen+' '+ AlmacNumNomen+'</option>')
    
                    $('#inputIdNomenclatura').val(AlmacNumIdNomen);
                    $('#inputNumNomen').val(AlmacNumNomen); 
                });
            },
            error: function (data) {
                alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
            }
        });
        }

function limpiarTablayCampos(){

            $('#tbl1H').empty(); //limpia la tabla
            $("#tbody1h").html("");//limpia el body de la tabla
            $("#montototal1h").html("");//limpia total del 1H
            //$('#inputDependecia').val('');
            //$('#inputNumero').val('');
            $('#inputPrograma').val('');
            $('#inputFecha').val('');
            $('#inputOrdencyp').val('');
            $('#inputSolPedido').val('');
            //$('#inputAlmCGC').val('');
            $('#inputProveedor').val('');
            $('#inputNitProveedor').val('');
            $('#inputNoFactura').val('');
            $('#inputObservaciones').val('');
            $('#inputSerieFactura').val('');
            $('#txttotalletras').val('');
            $('#Inputstrresponsable').val('');
            $('#Inputstrresponsableinven').val('');
            //Habilitar para nuevo formulario
            $('#inputDependecia').prop('disabled', false);
            $('#inputNumero').prop('disabled', false);
            $('#inputPrograma').prop('disabled', false);
            $('#inputFecha').prop('disabled', false);
            $('#inputOrdencyp').prop('disabled', false);
            $('#inputAlmCGC').prop('disabled', false);
            $('#inputProveedor').prop('disabled', false);
            $('#inputNitProveedor').prop('disabled', false);
            $('#inputNoFactura').prop('disabled', false);
            $('#inputObservaciones').prop('disabled', false);
            $('#inputSerieFactura').prop('disabled', false);
            $('#inputOrdencyp').prop('disabled', false);
            $('#inputSolPedido').prop('disabled', true);
    $('#selCodInsumo').prop('hidden', false);
    $('#buscarinsumo').prop('hidden', true);
        }

      /*   function ejecutarRep(){
            let Numform1H = $('#inputAlmCGC').val()
            //let NumCodPres = $('#SelCodUnico').val()
            window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/Rep1-H.php?AlmacNumIdForm1H=' + Numform1H );
           // window.open('http://' + window.location.hostname + '/Almacen/runreports/RepKardex.php?FarmNumIdKardexFarm=' + FarmNumIdKardexFarm+'&AlmacNumCodPresentInsu='+codigopresenta);
            }*/




$('#abrirVale').click(function () {
    //$('#btnAgVale').prop('disabled', false); // validar bien esta accion para evitar duplicidades
    $('#modalVale').fadeIn();

});

$('#btnAgVale').click(function () {
    guardarVale()
});

function guardarVale(){
    let datFechaIngreso = $('#inputFechaVale').val();
    let strObservaciones = $('#textObservaciones').val();
    let strTipoFormato = $('#inputTipoFormato').val();

        let datosVale ={
        datFechaIngreso: datFechaIngreso,
        strObservaciones: strObservaciones,
        strTipoFormato: strTipoFormato
    };
    //console.log(datosVale);
    let esperaAgVale = $.ajax({
        url: './api/v1/AlmacVale.php',
        type: 'POST',
        data: datosVale,
        contentType: false,
        processData: false,
        beforeSend: function () {
            $("#btnAgVale").text('GUARDANDO...').prop('disabled', true);
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
            $("#btnAgVale").text('Agregar Vale').attr('disabled', true);
            cambioNumCGC(response.state.strstate);
            $('#modalVale').fadeOut();
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
            $("#btnAgVale").text('GUARDAR').attr('disabled', false);
        }
    });
}

function cambioNumCGC(mensaje) {
    //console.log(mensaje);
    let partida = mensaje.split(":");
    //console.log(partida);
    $('#inputAlmCGC').val(partida[1]).prop('disabled', true);
    $('#btnGuardarEncabezado').attr('onclick', 'guradarEncamezado1h(1)');  //no es necesaria este procedimiento
}

function BuscarAlmacen(){
    console.log("prueba almacen")
    $.ajax({
        url: './api/v1/AlmacEncargados.php?mostAlmacen=true', //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            if (json.length == 0){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El Usuario actual no tiene asignado a un Almacén',
                });
                $('#TipoIngreso').prop('disabled', true);

            }
            else{
                $(json).each(function (index, item) {
                    AlmacNumIdTipo = json[index].AlmacNumIdTipo;
                    StrNombreEncargado = json[index].StrNombreEncargado;
                    StrAlmacen = json[index].StrAlmacen;
                    //$('#Inputstrresponsable').val(TipoAlmacen);
                    console.log(AlmacNumIdTipo + 'Actual')

                    if (AlmacNumIdTipo == 1){

                        $('#InputstrTipAlm').val(StrAlmacen);
                        $('#Inputstrresponsable').val(StrNombreEncargado);
                    }
                    else if (AlmacNumIdTipo == 2){
                        $('#InputstrTipAlm').val(StrAlmacen);
                        $('#Inputstrresponsable').val(StrNombreEncargado);
                    }
                    else if (AlmacNumIdTipo ==3){
                        $('#InputstrTipAlm').val(StrAlmacen);
                        $('#Inputstrresponsable').val(StrNombreEncargado);
                    }
                    else if (AlmacNumIdTipo ==4){
                        $('#InputstrTipAlm').val(StrAlmacen);
                        $('#Inputstrresponsable').val(StrNombreEncargado);
                    }
                    //$('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+AlmacStrPresentInsu+' '+ AlmacStrCantYUnidInsu+'</option>')
                });
            }
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}

function mostrarInventario(){

    if (!mostrarInventariohidde) {
        mostrarInventariohidde = true;
        //document.getElementById("AbrirInventario").style.display = "block";
        $('#AbrirInventario').prop('hidden', false);
        $('#Inputstrinven').val('Encargada de Activos Fijos');
        return;
    }
    if (mostrarInventariohidde) {
        mostrarInventariohidde = false;
        //document.getElementById("AbrirInventario").style.display = "none";
        $('#AbrirInventario').prop('hidden', true);
        $('#Inputstrinven').val('');
        return;
    }
}

    function ejecutarRep(){
            let Numform1H = $('#inputAlmCGC').val()
            let NumCodPres = $('#SelCodUnico').val()
           // window.open('http://' + window.location.hostname + '/Almacen/runreports/RepKardex.php?FarmNumIdKardexFarm=' + FarmNumIdKardexFarm+'&AlmacNumCodPresentInsu='+codigopresenta);
              window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/Rep1-H.php?AlmacNumIdForm1H=' + Numform1H);
        $('#inputAlmCGC').val('');
        fnOpenForm(event, 'Alm1h')
            }



function TipoIngreso()
{
    let tipoIngreso = $('#TipoIngreso').val ();
    console.log(tipoIngreso + "Tipo De Ingreso Seleccionado")

    if (tipoIngreso == '0'){

        $(document.getElementById('OrdenCP')).prop('hidden', true);
        $(document.getElementById('SolicitudPedido')).prop('hidden', true);
        $('#inputSolPedido').val('');
        $('#buscarinsumo').val('');
        $('#inputNumero').val('U.E 285');
        $('#buscarinsumo').prop('hidden', true);
        $('#selCodInsumo').prop('hidden', true);
        $('#inputOrdencyp').val('');
        $('#inputProveedor').val('');
        $('#inputNitProveedor').val('');

    }

    else if (tipoIngreso == '1'){
        $('#inputSolPedido').removeAttr('onChange');
        $('#selCodInsumo').empty();
        $('#selCodInsumo').remove();
        $('#contenedorSel').append('<select class="form-control" id="selCodInsumo" onchange="buscarInsumoGeneral(this.value)">\n' +
            '                        <option value="0">Seleccione Unidad</option>\n' +
            '                    </select>');
        $(document.getElementById('OrdenCP')).prop('hidden', false);
        $(document.getElementById('SolicitudPedido')).prop('hidden', false);
        $('#inputNumero').val('U.E 285');
        $('#inputNumero').prop('disabled', true);
        $('#inputSolPedido').prop('disabled', false);
        $('#selCodInsumo').prop('hidden', false);
        $('#SelCodUnico').empty();
        $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
        $('#buscarinsumo').prop('hidden', true);
        $('#inputOrdencyp').val('');
        $('#inputOrdencyp').prop('disabled', false);
        console.log("Pruebaaa de oc")
        $('#inputOrdencyp').attr('onChange', 'busInsAdj();');


    }

    else if(tipoIngreso == '2'){
        $('#inputOrdencyp').removeAttr('onChange');
        $(document.getElementById('SolicitudPedido')).prop('hidden', false);
        $(document.getElementById('OrdenCP')).prop('hidden', false);
        $('#inputNumero').val('U.E 285');
        $('#inputNumero').prop('disabled', true);
        $('#inputSolPedido').val('');
        $('#inputSolPedido').prop('disabled', false);
        //$('#selCodInsumo').prop('hidden', false);
        $('#inputSolPedido').attr('onChange', 'busNumsolPed();');

    }

    else if (tipoIngreso == '3'){
        $(document.getElementById('OrdenCP')).prop('hidden', false);
        $(document.getElementById('SolicitudPedido')).prop('hidden', true);
        $('#inputOrdencyp').val('Donativo');
        $('#inputOrdencyp').prop('disabled', true);
        $('#inputSolPedido').val('');
        $('#inputNumero').prop('disabled', false).val('')
       // $('#selCodInsumo').prop('hidden', true);
        $('#selCodInsumo').remove();
        $('#SelCodUnico').empty();
        //$('#SelCodUnico').append("<option>Seleccione Unidad</option>");
       // $('#buscarinsumo').prop('hidden', false);
        $('#contenedorSel').append('<input type="text"  name="donat" class="form-control" id="selCodInsumo" onchange="buscarInsumoGeneral(this.value)">');
    }

    else if (tipoIngreso == '4'){
        $('#inputOrdencyp').removeAttr('onChange');
        $('#inputSolPedido').removeAttr('onChange');
        $(document.getElementById('OrdenCP')).prop('hidden', false);
        $(document.getElementById('SolicitudPedido')).prop('hidden', false);
        $('#inputOrdencyp').val('');
        $('#inputOrdencyp').prop('disabled', false);
        $('#inputSolPedido').prop('disabled',  false).val('');
        $('#inputNumero').val('U.E 285');
        $('#inputNumero').prop('disabled', true);
        $('#selCodInsumo').prop('hidden', true);
        $('#selCodInsumo').remove();
        $('#SelCodUnico').empty();
        $('#buscarinsumo').prop('hidden', false);
        $('#contenedorSel').append('<input type="text"  name="donat" class="form-control" id="selCodInsumo" onchange="buscarInsumoGeneral(this.value)">');




    }

    else {
        $('#inputOrdencyp').val('');
        $('#inputOrdencyp').prop('disabled', false);
        $('#inputSolPedido').prop('disabled', true);
        $('#selCodInsumo').prop('hidden', false);
        $('#buscarinsumo').prop('hidden', true);
    }

}



function busInsAdj() {
    //console.log(ordenComp);
    //let ordenComp = $('#inputOrdencyp').val();

    console.log($('#inputOrdencyp').val());
    $('#selCodInsumo').empty();
    $('#selCodInsumo').append("<option>Seleccione Unidad</option>");

    $.ajax({
        url: './api/v1/1-hDetalle.php?OrdenC=' + $('#inputOrdencyp').val() +'&OrdenAdj=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            if (json.length == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Departamento de Compras no a finalizado el evento, Orden de Compra No: ' + $('#inputOrdencyp').val(),
                });
                $('#inputOrdencyp').val('');
                $('#inputSolPedido').val('');
                $('#inputProveedor').val('');
                $('#inputNitProveedor').val('');
            } else {

                $(json).each(function (index, item) {
                    ComNumCodInsu = json[index].ComNumCodInsu;
                    ComNumSolPedido = json[index].ComNumSolPedido;
                    AnioSolicitud = json[index].AnioSolicitud;
                    StrNombreProv = json[index].StrNombreProv;
                    StrNitProv = json[index].StrNitProv;
                    $('#inputProveedor').val(StrNombreProv);
                    $('#inputNitProveedor').val(StrNitProv);
                    $('#inputSolPedido').val(ComNumSolPedido + '-' + AnioSolicitud);
                    $('#selCodInsumo').append('<option value="' + ComNumCodInsu + '">' + ComNumCodInsu + '</option>')
                });
            };
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
};



function busNumsolPed() {

    let Solpedido = $('#inputSolPedido').val();
    let NumsolPed = Solpedido.split('-');
    let NumenteroSol = NumsolPed[0];
    let NumanioSol = NumsolPed[1];

    console.log(Solpedido);
    console.log(NumenteroSol);
    console.log(NumanioSol);
    if (NumanioSol == null) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ingrese Año de Solicitud',
        });
        return false;
    }
    $('#selCodInsumo').empty();
    $('#selCodInsumo').remove();
    $('#contenedorSel').append('<select class="form-control" id="selCodInsumo" onchange="buscarInsumoGeneral(this.value)">\n' +
        '                        <option value="0">Seleccione Unidad</option>\n' +
        '                    </select>');
    $('#selCodInsumo').empty();
    $('#selCodInsumo').append("<option>Seleccione Unidad</option>");

    $.ajax({
        url: './api/v1/1-hDetalle.php?NumSol=' + NumenteroSol + '&AnioSolPedido=' + NumanioSol + '&NoSolPedido=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            if (json.length == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Solicitud No Encontrada en el Dpto. de Compras',
                });
                $('#inputOrdencyp').val('');
                $('#inputSolPedido').val('');
                $('#inputProveedor').val('');
                $('#inputNitProveedor').val('');
                $('#selCodInsumo').empty();
                $('#selCodInsumo').remove();
            } else {
                $(json).each(function (index, item) {
                    ComNumCodInsu = json[index].ComNumCodInsu;
                    ComNumSolPedido = json[index].ComNumSolPedido;
                    AnioSolicitud = json[index].AnioSolicitud;
                    StrNombreProv = json[index].StrNombreProv;
                    StrNitProv = json[index].StrNitProv;
                    NumOC = json[index].NumOC;
                    $('#inputOrdencyp').val(NumOC);
                    $('#inputProveedor').val(StrNombreProv);
                    $('#inputNitProveedor').val(StrNitProv);
                    $('#selCodInsumo').append('<option value="' + ComNumCodInsu + '">' + ComNumCodInsu + '</option>')

                });
            };
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

};


































