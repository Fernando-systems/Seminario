$(document).ready(function () {
    //cargarAbreviatura();
});

//function cargarAbreviatura(){
//    $.ajax({
//        url: './api/v1/Insumo.php?abreviatura=true', //
//        type: "GET",
//        dataType: "json",
//        contentType: "application/json; charset=utf-8",
//
//        success: function (data) {
//            var json = data.data;
//            console.log(json);
//                $(json).each(function (index, item) {
//                    Almacabreviatura = json[index].Almacabreviatura;
//
//                    $('#inputAbreviatura').val(Almacabreviatura);
//                });
//        },
//        error: function (data) {
//            console.log("No se lograron cargar los datos(abreviatura)" + data.responseText);
//        }
//    });
//
//}

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
    let codInsumo = $('#inputCodInsumoGeneral').val();
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
    let esperaInsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodInsumoCrearK=' + codInsumo, //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            if(json.length ==0 ){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El Insumo no se encuentra ingresado, favor ingresarlo desde catálogo MAGA Insumo No.: '+codInsumo,
                });
                $('#inputCodInsumoGeneral').val('');
                $('#inputRenglon').val('');
                $('#inputCodInsumo').val('');
                $('#inputInsumo').val('');
                $('#inputCaracteristica').val('');
                $('#inputPresentacion').val('');
                $('#inputCantidadyUnidad').val('');
                $('#inputCodPresentacion').val('');
                $('#inputKardex').val('');

                 }
            else{
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
    let esperarinsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodPresentInsu=' + codigoUnico,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            if (json == null){
                $('#inputCodInsumoGeneral').val('');
                $('#inputRenglon').val('');
                $('#inputCodInsumo').val('');
                $('#inputInsumo').val('');
                $('#inputCaracteristica').val('');
                $('#inputPresentacion').val('');
                $('#inputCantidadyUnidad').val('');
                $('#inputCodPresentacion').val('');
                $('#inputKardex').val('');
                $('#SelCodUnico').empty();
                $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
            }
            else {


                $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu = json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;

                $('#inputRenglon').val(AlmacNumRenglon);
                $('#inputCodInsumo').val(AlmacNumCodInsumo);
                $('#inputInsumo').val(AlmacStrNomInsumo);
                $('#inputCaracteristica').val(AlmacStrCaractInsu);
                $('#inputPresentacion').val(AlmacStrPresentInsu);
                $('#inputCantidadyUnidad').val(AlmacStrCantYUnidInsu);
                $('#inputCodPresentacion').val(AlmacNumCodPresentInsu);


            });
            }
        },

        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    }

function CrearExistencia() {

   let inputKardex = $('#inputKardex').val() + $('#inputtipoalmac').val();
   var inputCodPresentacion = $('#inputCodPresentacion').val();
   var inputcantidad = $('#inputcantidad').val();
   var inputprecio = $('#inputprecio').val();
   var inputPresentacion = $('#inputPresentacion').val();
   var inputLote= $('#inputLote').val();
   var inputVencimiento = $('#inputVencimiento').val();

    if($('#inputCodPresentacion').val() == '' ||$('#inputCodPresentacion').val() == null ||$('#inputCodPresentacion').val() == undefined || $('#inputCodPresentacion').val() == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccion Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if($('#inputKardex').val() == '' ||$('#inputKardex').val() == null ||$('#inputKardex').val() == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Número de Kardex No Puede Ir Vacío',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }
    if($('#inputtipoalmac').val() == '' ||$('#inputtipoalmac').val() == null ||$('#inputtipoalmac').val() == undefined || $('#inputtipoalmac').val() == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccion un tipo de Almacén',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if($('#inputcantidad').val() == '' ||$('#inputcantidad').val() == null ||$('#inputcantidad').val() == undefined || $('#inputtipoalmac').val() == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Cantidad existente no puede ir vacío',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }
    if($('#inputprecio').val() == '' ||$('#inputprecio').val() == null ||$('#inputprecio').val() == undefined || $('#inputtipoalmac').val() == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Precio no puede ir vacío',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }


    let datos = {

        AlmacNumIdKardex: inputKardex,
        AlmacNumCodPresentInsu: inputCodPresentacion,
        AlmacNumCantExist: inputcantidad,
        AlmacNumPreUnExist: inputprecio,
        AlmacStrUnidMedida: inputPresentacion,
        AlmacStrNoLote: inputLote,
        AlmacDateVencimi: inputVencimiento
   };
    console.log("Datos enviados");
  console.log(datos);

   $.ajax({
       url: "./api/v1/ExistenciaMedicamentos.php",
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
           $("#btnGuardarExistencia").text('AGREGAR').attr('disabled', true);
           limpiarcampos()

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
           $("#btnGuardarExistencia").text('AGREGAR').attr('error', false);

       }
   });

}//Termina la funcion ingresar ingresar insumo



function limpiarcampos(){
    $('#inputCodInsumoGeneral').val('')
    //$('#SelCodUnico').val('')
    $('#inputKardex').val('')
    $('#inputtipoalmac').val('')
    $('#inputcantidad').val('')
    $('#inputprecio').val('')
    $('#inputLote').val('')
    $('#inputVencimiento').val('')
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
    $('#inputtipoalmac').empty();
    $('#inputtipoalmac').append("<option value='0'>Seleccione Tipo de Almacén</option>");


}