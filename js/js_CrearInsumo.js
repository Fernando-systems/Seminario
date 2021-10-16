$(document).ready(function () {
    ListarInsumo();
});

function ListarInsumo() {
    var table = $('#tbMedicos').DataTable({
        "ajax": {
            "method": "GET",
            "url": "./api/v1/Insumo.php"
        },
        "columns": [
            {"data": "IntRenglon"},
            {"data": "IntCodInsumo"},
            {"data": "StrNomInsumo"},
            {"data": "StrCaraTcInsu"},
            {"data": "StrPresentInsu"},
            {"data": "StrCantYUnidInsu"},
            {"data": "IntCodPresentInsu"}
        ]
    });

    setInterval(function () {
        table.ajax.reload(null, false);

    }, 10000);

    $('#tbMedicos tbody').on('dblclick', 'td', function () {
        var data = table.row($(this).parents('tr')).data();
        $('#modalMedico').fadeIn();
        $('#inputRenglon').val(data['IntRenglon']);
        $('#inputCodInsumo').val(data['IntCodInsumo']);
        $('#inputInsumo').val(data['StrNomInsumo']);
        $('#inputCaracteristica').val(data['StrCaraTcInsu'])
        $('#inputPresentacion').val(data['StrPresentInsu']);
        $('#inputCantidadyUnidad').val(data['StrCantYUnidInsu']);
        $('#Código de presentaciónd').val(data['IntCodPresentInsu']);
       


        $('#btnGuardar').hide();
        $('#btnModificarMedico').show();
        $('#btnEliminarMedico').show();

    });
}

function fn_abrirModal() {
    $('#modalMedico').fadeIn();
    $('#frmMedico')[0].reset();
    $('#btnModificarMedico').hide();
    $('#btnEliminarMedico').hide();
    $('#btnGuardar').show();
}


function CrearInsumo() {
    var Renglon = $('#inputRenglon').val();
    var CodInsumo = $('#inputCodInsumo').val();
    var NomInsumo = $('#inputInsumo').val();
    var CaractInsumo = $('#inputCaracteristica').val();
    var PresentInsumo= $('#inputPresentacion').val();
    var CantYunidad = $('#inputCantidadyUnidad').val();
    var CodPresentacion = $('#inputCodPresentacion').val();



    let datos = {
        IntCodInsumo: CodInsumo,
        IntRenglon: Renglon,
        
        StrNomInsumo: NomInsumo,
        StrCaraTcInsu: CaractInsumo,
        StrPresentInsu: PresentInsumo,
        StrCantYUnidInsu: CantYunidad,
        IntCodPresentInsu: CodPresentacion
    };debugger;
    console.log("Datos enviados");
    console.log(datos);
    $.ajax({
        url: "./api/v1/Insumo.php",
        type: 'POST',
        data: datos,
        beforeSend: function () {
            $('.toast').toast('show');
            $('#idMensaje').html("Procesando por favor espere...");

        },
        success: function (response) {
            console.log(response);
            $('#idMensaje').html(response.state.strstate);
            $('.toast').toast('show');

        },
        error: function (request, status, error) {
            console.log(request);
            $('#idMensaje').html(request.responseText + " - " + error);
            $('.toast').toast('show');

        }
    });

    $("#btnGuardar").hide();
    //$("#frmMedico")[0].reset(); //Limpia el formulario
    //$('#modalMedico').fadeOut();


}

/*
function modificarMedico(idMedico) {
    var idMedico = $('#inputIdMedico').val();
    var nombre = $('#inputNombres').val();
    var apellido = $('#inputApellidos').val();
    var direccion = $('#inputDireccion').val();
    var telefono = $('#inputTelefono').val();
    var Correo = $('#inputCorreoElectronico').val();

    $.ajax({
        url: './api/v1/Medico.php?CitNumMedico=' + idMedico + '&CitStrNombre=' + nombre + '&CitStrApellido=' + apellido +
            '&CitStrDireccion=' + direccion + '&CitStrTelefono=' + telefono + '&CitStrCorreoElec=' + Correo,
        type: 'PUT',
        success: function (response) {
            console.log(response);
            $('#idMensaje').html(response.state.strstate);
            $('.toast').toast('show');
        }, error: function (data) {
            console.log(data);
        }
    });

    $('#modalMedico').fadeOut();

}

function eliminarMedico(idMedico) {
    $.ajax({

        url: './api/v1/Medico.php?CitNumMedico=' + idMedico,
        type: 'DELETE',
        success: function (response) {
            console.log(response);
            $('#idMensaje').html(response.state.strstate);
            $('.toast').toast('show');
        },
        error: function (data) {
            console.log(data);
        }
    });

    $('#modalMedico').fadeOut();

}*/
