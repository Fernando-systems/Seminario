$(document).ready(function () {
    Servicios();
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

function Servicios(){
    $('#SelectEnc').empty();
    $.ajax({
        url: './api/v1/EncServiciosEncamamiento.php',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                ServicioId = json[index].EncNumIdServEncam;
                EncStrNombre= json[index].EncStrNombre;
                EncEstado= json[index].EncEstado;
                NoCamas = json[index].EncCantidadCamas;
                $('#selServicio').append('<option value="'+ServicioId+'">'+EncStrNombre+'</option>')
            });
        },
        error: function (data) {

            alert("No se logro cargar los datos" + data.responseText);
        }
    });

    $('#selServicio').select2({
        theme: 'bootstrap4',
    });
}

function MostrarDatos() {

    let EncNumIdServEncam =$('#selServicio').val();
    $('#contenedorUnidosis').empty();
    $.ajax({
        url: './api/v1/FarmUnidosis.php?Encabezado=true&EncNumIdServEncam='+EncNumIdServEncam,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            if(json.length == 0){
                $('#contenedorUnidosis').append('<div id="" class="card">' +
                    '    <div class="card" id="Modal">' +
                    '        <div class="modal-header text-center bg-warning">' +
                    '            <h4 class="modal-title w-100 font-weight-bold"">NO HAY UNIDOSIS</h4>' +
                    '            <button type="button" class="close" data-dismiss="modal" aria-label="Close"' +
                    '                    onclick="$(\'#Modal\').fadeOut();">' +
                    '                <span aria-hidden="true">&times;</span>' +
                    '            </button>' +
                    '        </div>' +
                    '        <br>' +
                    '        <div class="input-group mb-sm-4 col-sm-4 ">' +
                    '            <div class="input-group-prepend">' +
                    '            </div>' +
                    '        </div>' +
                    '        <div class="card-body text-center">' +
                    '            <h3>No hay unidosis en el servicio seleccionado</h3>' +
                    '        </div>' +
                    '    </div>' +
                    '</div>');
            }else{
                $(json).each(function (index, item) {
                    FarmNumEncUnidosis = json[index].FarmNumEncUnidosis;
                    CitNumIngresoEmer = json[index].CitNumIngresoEmer;
                    EncNumIdServEncam = json[index].EncNumIdServEncam;
                    EncNumCama = json[index].EncNumCama;
                    CitStrRegMedico = json[index].CitStrRegMedico;
                    Nombre = json[index].Nombre;
                    EncStrNombre = json[index].EncStrNombre;

                    $('#contenedorUnidosis').append('<table class="table table-bordered">' +
                        '        <tbody>' +
                        '        <tr class="table-primary">' +
                        '            <th scope="row">Id:</th>' +
                        '            <td>' +
                        '                <input style="border-width:0;color: black; background-color: #b8daff; " id="numUnidosis" value="'+FarmNumEncUnidosis+'" type="text " readonly="">' +
                        '            </td>' +
                        '        </tr>' +
                        '        <tr>' +
                        '            <th scope="row">Nombre:</th>' +
                        '            <td>'+Nombre+'</td>' +
                        '        </tr>' +
                        '        <tr>' +
                        '            <th scope="row">HC:</th>' +
                        '            <td>'+CitStrRegMedico+'</td>' +
                        '        </tr>' +
                        '        <tr>' +
                        '            <th scope="row">Servicio:</th>' +
                        '            <td>'+EncStrNombre+'</td>' +
                        '        <tr>' +
                        '            <th scope="row">No. Cama / No. Clinica:</th>' +
                        '            <td>'+EncNumCama+'</td>' +
                        '        </tbody>' +
                        '        <!-- Botones-------------------------------------------------------------------->' +
                        '        <tbody><tr>' +
                        '            <td class="col-sm-12 " colspan="2">' +
                        '                <div class="col-sm-12 offset-sm row">' +
                        '                    <table class="table table-bordered" id="'+FarmNumEncUnidosis+'">' +
                        '                            <thead>' +
                        '                            <tr>' +
                        '                                <th scope="col">Medicamento</th>' +
                        '                                <th scope="col">Cod. Insumo</th>' +
                        '                                <th scope="col">Dosis</th>' +
                        '                                <th scope="col">Medida</th>' +
                        '                                <th scope="col">Via</th>' +
                        '                                <th scope="col">Frecuencia</th>' +
                        '                                <th scope="col">Lapso T.</th>' +
                        '                                <th scope="col">Dia</th>' +
                        '                                <th scope="col">Cantidad Medicamentos</th>' +
                        '                            </tr>' +
                        '                            </thead>' +
                        '                            <tbody id="tbodyMedicamentos">' +
                        '                            </tbody>' +
                        '                        </table>'+
                        '                </div>' +
                        '            </td>' +
                        '        </tr><tr>' +
                        '            <!-- Botones-------------------------------------------------------------------->' +
                        '        </tr></tbody>' +'' +
                        '        <!-- Botones-------------------------------------------------------------------->' +
                        '        <tbody><tr>' +
                        '            <td class="col-sm-12 " colspan="2">' +
                        '                <div class="col-sm-12 offset-sm row">' +
                        '                    <button class="btn btn-block btn-success" onclick="ingresadoAConsolidado('+FarmNumEncUnidosis+')" n>Ingresado</button>' +
                        '                </div>' +
                        '            </td>' +
                        '        </tr><tr>' +
                        '            <!-- Botones-------------------------------------------------------------------->' +
                        '        </tr></tbody>' +
                        '</table>');

                    martarDetalle(FarmNumEncUnidosis);
                });
            }

        },
        error: function (data) {
            alert("No se lograron cargar los datos(Clinica)" + data.responseText);
        }
    });
}

function martarDetalle(idtbl) {
    $.ajax({
        url: './api/v1/FarmUnidosis.php?Detalle=true&FarmNumEncUnidosis='+idtbl,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                FarmNumDetUnidosis= json[index].FarmNumDetUnidosis;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                FarmNumCantDosis= json[index].FarmNumCantDosis;
                FarmStrDosisMedida= json[index].FarmStrDosisMedida;
                FarmStrVia= json[index].FarmStrVia;
                FarmNumFrecuencia= json[index].FarmNumFrecuencia;
                FarmNumDiasSolicitados= json[index].FarmNumDiasSolicitados;
                FarmStrUnidadTiempo= json[index].FarmStrUnidadTiempo;
                FarmDateDiaDar= json[index].FarmDateDiaDar;
                FarmStrOmitido= json[index].FarmStrOmitido;
                FarmNumCantidadMedicamento= json[index].FarmNumCantidadMedicamento;
                FarmDateFechHorSoliditud= json[index].FarmDateFechHorSoliditud;
                SegLoginSolicitante= json[index].SegLoginSolicitante;
                SegLoginOmitido= json[index].SegLoginOmitido;
                FarmNumEncUnidosis= json[index].FarmNumEncUnidosis;
                FarmDateFechHorOmitido= json[index].FarmDateFechHorOmitido;
                AlmcNumCodInsumo= json[index].AlmcNumCodInsumo;
                AlmacStrNomInsumo= json[index].AlmacStrNomInsumo;

                $('#'+idtbl).append('<tr>\n' +
                    '        <td>'+AlmacStrNomInsumo+'</td>' +
                    '        <td>'+AlmcNumCodInsumo+'</td>' +
                    '        <td>'+FarmNumCantDosis+'</td>' +
                    '        <td>'+FarmStrDosisMedida+'</td>' +
                    '        <td>'+FarmStrVia+'</td>' +
                    '        <td>'+FarmNumFrecuencia+'</td>' +
                    '        <td>'+FarmStrUnidadTiempo+'</td>' +
                    '        <td>'+FarmDateDiaDar+'</td>' +
                    '        <td>'+FarmNumCantidadMedicamento+'</td>' +
                    '    </tr>');
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(Clinica)" + data.responseText);
        }
    });
}

function ingresadoAConsolidado(id) {
     let esperaUpdate = $.ajax({
        url: './api/v1/FarmUnidosis.php?FarmNumEncUnidosis='+id,
        type: "PUT",
        beforeSend: function () {

        },
        success: function (response) {
            $.toast({
                title: 'Actualizado',
                subtitle: '1 segundo',
                content: 'UNIDOSIS INGRESADA',
               // type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });
        },
        error: function (request, status, error) {
            console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: 'Ocurrio un error ',
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
        }
    });

     $.when(esperaUpdate).done(function () {
         MostrarDatos();
     });
}