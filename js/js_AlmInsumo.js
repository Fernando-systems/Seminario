$(document).ready(function () {
    cargarAbreviatura();
});

function cargarAbreviatura(){
    $('#TipoKardex').empty();
    $('#TipoKardex').append("<option>Seleccione Tipo Kardex</option>");
    $.ajax({
        url: './api/v1/Insumo.php?abreviatura=true', //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
                $(json).each(function (index, item) {
                    Almacabreviatura = json[index].Almacabreviatura;
                    AlmacStrNom = json[index].AlmacStrNom;

                    //$('#inputAbreviatura').val(Almacabreviatura);
                    $('#TipoKardex').append('<option value="'+Almacabreviatura+'">'+AlmacStrNom+'</option>')

                });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(abreviatura)" + data.responseText);
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
                $('#inputCodPresentacion').prop('disabled', false);
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
                $('#inputCodPresentacion').prop('disabled', false);
                $('#SelCodUnico').empty();
                $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
            }else {


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
                $('#inputCodPresentacion').prop('disabled', true);
                
            });
            }
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
    }

function CrearInsumo() {
    let codInsumo = $('#inputCodInsumoGeneral').val();
    var Renglon = $('#inputRenglon').val();
    var CodInsumo = $('#inputCodInsumo').val();
    var NomInsumo = $('#inputInsumo').val();
    var CaractInsumo = $('#inputCaracteristica').val();
    var PresentInsumo= $('#inputPresentacion').val();
    var CantYunidad = $('#inputCantidadyUnidad').val();
    var CodPresentacion = $('#inputCodPresentacion').val();
    var validarinsumo = true;
    var TipoKardex = $('#TipoKardex').val();
    var inputKardex = $('#inputKardex').val();
    var SelFD = $('#SelFD').val();

    if(CodInsumo == '' || CodInsumo == null || CodInsumo == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(inputKardex == '' || inputKardex == null || inputKardex == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese un número de Kardex',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(TipoKardex == 'Seleccione Tipo Kardex'){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione un tipo de Almacén',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }
    if(SelFD == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Kardex',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    let datos = {
        AlmacNumCodInsumo: CodInsumo,
        AlmacNumRenglon: Renglon,
        AlmacStrNomInsumo: NomInsumo,
        AlmacStrCaractInsu: CaractInsumo,
        AlmacStrPresentInsu: PresentInsumo,
        AlmacStrCantYUnidInsu: CantYunidad,
        AlmacNumCodPresentInsu: CodPresentacion
    };
   // console.log("Datos enviados");
  //  console.log(datos);

 console.log(codInsumo)
    if (codInsumo){
        console.log("el insumo esta en bd")

    }else {
        console.log("el insumo no esta en la bd")
    }
    var guardarInsumo = $.ajax({
        url: "./api/v1/Insumo.php",
        type: 'POST',
        data: datos,
        beforeSend: function () {
            $("#btnAgregarInsumo").text('GUARDANDO...').prop('disabled', true);
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
            $("#btnAgregarInsumo").text('AGREGAR').attr('disabled', false);
          
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
            $("#btnAgregarInsumo").text('AGREGAR').attr('error', false);
            
        }
    });


    $.when(guardarInsumo).done(function () {
console.log('entro ')
        let esperarkardex =  $.ajax({
        url: './api/v1/Kardex.php?codigoUnico=' + CodPresentacion,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                 AlmacBinEstado= json[index].AlmacBinEstado;
                
                if(AlmacBinEstado==1){
                    $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: 'Insumo tiene kardex activo ',
                type: 'error',
                pause_on_hover: true,
                delay: 5000
                });
                    
                    validarinsumo = false;
                }


            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });


    $.when(esperarkardex).done(function(){
        if (validarinsumo == false) {
            return false;
        }else{
        let Abreviatura = $('#TipoKardex').val();
        let IntIdKardex =$('#inputKardex').val().replace(/^0+/, '');
        let SelFD = $('#SelFD').val();
        let IntNivelMinimo =$('#inputMin').val();
        let IntNivelMaximo =$('#inputMax').val();
        let NuevoKardexId = IntIdKardex+'-'+Abreviatura + SelFD; //Aqui se concatenan las variables

        console.log("Nuevo Kardex Id"+ NuevoKardexId);

        let datosKardex = {
            IntIdKardex:NuevoKardexId,
            IntNivelMinimo:IntNivelMinimo,
            IntNivelMaximo:IntNivelMaximo,
            IntCodPresentInsu:CodPresentacion,
            AlmacStrTipo:SelFD
        };

        $.ajax({
            url: "./api/v1/Kardex.php",
            type: 'POST',
            data: datosKardex,
            beforeSend: function () {
                $("#btnAgregarInsumo").text('GUARDANDO...').prop('disabled', true);
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
                $("#btnAgregarInsumo").text('AGREGAR').attr('disabled', false);
                fnOpenForm(event, 'AlmInsumo')
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
                $("#btnAgregarInsumo").text('AGREGAR').attr('disabled', false);

            }
        });
    }
        
    }); //termina when (guardar insumo)

 });

        

}//Termina la funcion ingresar ingresar insumo
