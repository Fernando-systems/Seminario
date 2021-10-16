function Buscar1H(){
    let NumeroAnular = $('#inputNoAnular').val();

    $.ajax({
        url: './api/v1/AlmacTestado.php?Form1HAnular=true' + '&IDAnularFomr1H=' + NumeroAnular,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            if(json.length == 0){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El formulario a Anular no existe',
                    showConfirmButton: true,
                });
                $('#inputNoAnular').val('');
                $('#inputFechaAnul').val('');
                $('#inputProveedor').val('');
                $('#inputFechaNueva').val('');
            }
            else {
                $(json).each(function (index, item) {
                    AlmacDateFecha = json[index].AlmacDateFecha;
                    AlmacStrNomProveedor = json[index].AlmacStrNomProveedor;

                    $('#inputFechaAnul').val(AlmacDateFecha);
                    $('#inputProveedor').val(AlmacStrNomProveedor);
                    $('#inputFechaNueva').val(AlmacDateFecha);
                });
            }

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}

function GuardarAnulacion(){
    let inputNoAnular = $('#inputNoAnular').val();
    let inputNoNuevo = $('#inputNoNuevo').val();
    let inputFechaAnul = $('#inputFechaAnul').val();
    let inputFechaNueva = $('#inputFechaNueva').val();

    let datosanul = {
        AlmacNumIdForm1HAnular: inputNoAnular,
        AlmacNumIdForm1HNuevo: inputNoNuevo,
        DateFechaform: inputFechaAnul,
        DateFechaNueva: inputFechaNueva
    };
console.log(datosanul)
    $.ajax({
       url: './api/v1/AlmacTestado.php?AlmacAnular=true',
        type: 'POST',
        data: datosanul,
        beforeSend: function (){
           $('#btnGuardarAnul').text('GUARDAR').prop('disabled', true);
        },

        success: function (response){
           console.log(response.state.codstate)
           console.log(response.state.strstate)
            if (response.state.codstate==1){
                swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Anulación Exitosa',
                    text:response.state.strstate,
                    type: 'success',
                    pause_on_hover: true,
                    delay: 5000
                });
                $('#btnGuardarAnul').prop('disabled', true);
                $('#btnImprAnu').prop('disabled', false);


            }else {
                swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Ups! Hubo un error',
                    text:response.state.strstate,
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
                $('#btnGuardarAnul').prop('disabled', false);
                $('#btnImprAnu').prop('disabled', true);
            }

        }, //termina el suscces
        error: function (request, status, error) {
            //console.log(request);
            swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $('#btnGuardarAnul').text('GUARDAR').prop('disabled', false)
        }//termina el error
    });
}

function ejecutarRep(){
    let NumeroNuevo = $('#inputNoNuevo').val();
    window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/Rep1-H.php?AlmacNumIdForm1H=' + NumeroNuevo);
    fnOpenForm(event, 'AlmacAnulados')
}