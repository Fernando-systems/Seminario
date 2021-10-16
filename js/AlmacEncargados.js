$(document).ready(function () {
    mostrarEncargados();
});

function mostrarEncargados(){

    var almacenes = $.ajax({
        url: './api/v1/AlmacEncargados.php?mostEnc=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                AlmacNumIdEnc= json[index].AlmacNumIdEnc
                StrNombreEncargado= json[index].StrNombreEncargado
                StrAlmacen= json[index].StrAlmacen
                console.log(AlmacNumIdEnc);
                if(AlmacNumIdEnc == 1 ){

                    $('#inputAlmSumi').val(StrNombreEncargado)
                    $('#inputAlmSumiP').val(StrAlmacen)
                }
                else if(AlmacNumIdEnc == 2){

                    $('#inputAlmMedi').val(StrNombreEncargado)
                    $('#inputAlmMediP').val(StrAlmacen)
                }
                else if (AlmacNumIdEnc == 3){

                    $('#inputAlmMMQ').val(StrNombreEncargado)
                    $('#inputAlmMMQP').val(StrAlmacen)
                }
                else if (AlmacNumIdEnc == 5){
                    $('#inputAuto1').val(StrNombreEncargado)
                    $('#inputAutoP1').val(StrAlmacen)
                }
                else if (AlmacNumIdEnc == 6){
                    $('#inputAuto2').val(StrNombreEncargado)
                    $('#inputAutoP2').val(StrAlmacen)
                }
                else if (AlmacNumIdEnc == 7){
                    $('#inputAuto3').val(StrNombreEncargado)
                    $('#inputAutoP3').val(StrAlmacen)
                }

            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
        $.when(almacenes).done(function (){
            $.ajax({
                url: './api/v1/AlmacEncargados.php?mostAlmacen=true', //
                type: "GET",
                dataType: "json",
                contentType: "application/json; charset=utf-8",

                success: function (data) {
                    var json = data.data;
                    console.log(json);


                        $(json).each(function (index, item) {
                            IdUsuarioAlmacen = json[index].IdUsuarioAlmacen;
                            LoginAlmacen = json[index].LoginAlmacen;
                            AlmacNumIdTipo = json[index].AlmacNumIdTipo;
                            //$('#Inputstrresponsable').val(TipoAlmacen);

                            if (AlmacNumIdTipo == 1 && LoginAlmacen == 'aalvarez'){
                                $('#inputAlmSumi').prop('disabled', false);
                                $('#inputAlmSumiP').prop('disabled', false);
                                $('#inputAuto1').prop('disabled', false);
                                $('#inputAuto2').prop('disabled', false);
                                $('#inputAuto3').prop('disabled', false);
                                $('#inputAutoP1').prop('disabled', false);
                                $('#inputAutoP2').prop('disabled', false);
                                $('#inputAutoP3').prop('disabled', false);
                                $("#btnAlmacSumi").text('GUARDAR').attr('disabled', false).val(1);

                            }
                            else if (AlmacNumIdTipo == 2 && LoginAlmacen == 'eramirez'){
                                $('#inputAlmMedi').prop('disabled', false);
                                $('#inputAlmMediP').prop('disabled', false);
                                $('#inputAuto1').prop('disabled', false);
                                $('#inputAuto2').prop('disabled', false);
                                $('#inputAuto3').prop('disabled', false);
                                $('#inputAutoP1').prop('disabled', false);
                                $('#inputAutoP2').prop('disabled', false);
                                $('#inputAutoP3').prop('disabled', false);
                                $("#btnAlmacMedi").text('GUARDAR').attr('disabled', false).val(2);

                            }
                            else if (AlmacNumIdTipo ==3 && LoginAlmacen == 'oespinoza'){
                                $('#inputAlmMMQ').prop('disabled', false);
                                $('#inputAlmMMQP').prop('disabled', false);
                                $('#inputAuto1').prop('disabled', false);
                                $('#inputAuto2').prop('disabled', false);
                                $('#inputAuto3').prop('disabled', false);
                                $('#inputAutoP1').prop('disabled', false);
                                $('#inputAutoP2').prop('disabled', false);
                                $('#inputAutoP3').prop('disabled', false);
                                $("#btnAlmacMMQ").text('GUARDAR').attr('disabled', false).val(3);

                            }
                            else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oops...',
                                    text: 'El Usuario actual solo puede ver los encargados',
                                });
                            }
                            //$('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+AlmacStrPresentInsu+' '+ AlmacStrCantYUnidInsu+'</option>')
                        });


                },
                error: function (data) {
                    alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
                }
            });
        })
}

function ModEncargado() {
    var IdEncAlmac = $("#btnAlmacSumi").val() || $("#btnAlmacMedi").val() || $("#btnAlmacMMQ").val()
    var IdStrEnc;
    var IdStrAlmac;
    console.log(IdEncAlmac + 'iddeleencargado')
    if (IdEncAlmac == 1){
        IdStrEnc =  $('#inputAlmSumi').val()
        IdStrAlmac = $('#inputAlmSumiP').val()
    }
    else if (IdEncAlmac == 2){
        IdStrEnc =$('#inputAlmMedi').val()
        IdStrAlmac =$('#inputAlmMediP').val()
    }
    else if (IdEncAlmac == 3){
        IdStrEnc =$('#inputAlmMMQ').val()
        IdStrAlmac =$('#inputAlmMMQP').val()
    }
    else{
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El Usuario actual no puede guardar los cambios',
        });
    }

        console.log(IdEncAlmac + 'despuesdelif')
        console.log(IdStrEnc)
        console.log(IdStrAlmac)

    var EncarAlmacen = $.ajax({
        url: './api/v1/AlmacEncargados.php?ModEncargados=true&StrNombreEncargado=' + IdStrEnc + '&StrAlmacen=' + IdStrAlmac + '&AlmacNumIdEnc=' + IdEncAlmac,
        type: "PUT",
        //data: datos,
        /*beforeSend: function () {
            IdEncAlmac('disables', true);
        },*/
        success: function (response) {
            Swal.fire({
                icon: 'success',
                title: 'Modificación Exitosa',
                text: ' '+response.state.strstate,
            });

            //fnOpenForm(event, 'AlmacEncargados')

        },
        error: function (request, status, error) {
            console.log(request);

            Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: ' '+response.state.strstate,
            });
        }
    });//termina el primer put

    $.when(EncarAlmacen).done(function () {
        IdEncAlmac = 5;
        IdStrEnc = $('#inputAuto1').val();
        IdStrAlmac = $('#inputAutoP1').val();
        $.ajax({
            url: './api/v1/AlmacEncargados.php?ModEncargados=true&StrNombreEncargado=' + IdStrEnc + '&StrAlmacen=' + IdStrAlmac + '&AlmacNumIdEnc=' + IdEncAlmac,
            type: "PUT",
            //data: datos,
            /*beforeSend: function () {
                IdEncAlmac('disables', true);
            },*/
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Modificación Exitosa',
                    text: ' ' + response.state.strstate,
                });

                //fnOpenForm(event, 'AlmacEncargados')

            },
            error: function (request, status, error) {
                console.log(request);

                Swal.fire({
                    icon: 'error',
                    title: 'Error...',
                    text: ' ' + response.state.strstate,
                });
            }
        });//termina el segundo put

    });

    $.when(EncarAlmacen).done(function () {
        IdEncAlmac = 6;
        IdStrEnc = $('#inputAuto2').val();
        IdStrAlmac = $('#inputAutoP2').val();
        $.ajax({
            url: './api/v1/AlmacEncargados.php?ModEncargados=true&StrNombreEncargado=' + IdStrEnc + '&StrAlmacen=' + IdStrAlmac + '&AlmacNumIdEnc=' + IdEncAlmac,
            type: "PUT",
            //data: datos,
            /*beforeSend: function () {
                IdEncAlmac('disables', true);
            },*/
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Modificación Exitosa',
                    text: ' ' + response.state.strstate,
                });

                //fnOpenForm(event, 'AlmacEncargados')

            },
            error: function (request, status, error) {
                console.log(request);

                Swal.fire({
                    icon: 'error',
                    title: 'Error...',
                    text: ' ' + response.state.strstate,
                });
            }
        });//termina el segundo put

    });

    $.when(EncarAlmacen).done(function () {
        IdEncAlmac = 7;
        IdStrEnc = $('#inputAuto3').val();
        IdStrAlmac = $('#inputAutoP3').val();
        $.ajax({
            url: './api/v1/AlmacEncargados.php?ModEncargados=true&StrNombreEncargado=' + IdStrEnc + '&StrAlmacen=' + IdStrAlmac + '&AlmacNumIdEnc=' + IdEncAlmac,
            type: "PUT",
            //data: datos,
            /*beforeSend: function () {
                IdEncAlmac('disables', true);
            },*/
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Modificación Exitosa',
                    text: 'Se Actualizaron Todos los Campos',// + response.state.strstate,
                });

                fnOpenForm(event, 'AlmacEncargados')

            },
            error: function (request, status, error) {
                console.log(request);

                Swal.fire({
                    icon: 'error',
                    title: 'Error...',
                    text: ' ' + response.state.strstate,
                });
            }
        });//termina el segundo put

    });

};