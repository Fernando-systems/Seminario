$(document).ready(function () {
});
/*
function mostrarVales(){
    $.ajax({
        url: './api/v1/1-h.php?mostVale=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                AlmacNumIdForm1H= json[index].AlmacNumIdForm1H
                NumCGCOficial= json[index].NumCGCOficial
                AlmacStrDependencia= json[index].AlmacStrDependencia
                AlmacStrNitProveedor= json[index].AlmacStrNitProveedor
                AlmacDateFecha= json[index].AlmacDateFecha
                AlmacStrUnidEjec= json[index].AlmacStrUnidEjec
                AlmacStrOrdCYPNo= json[index].AlmacStrOrdCYPNo
                AlmacStrDatosFactura= json[index].AlmacStrDatosFactura
                AlmacStrNomProveedor= json[index].AlmacStrNomProveedor
                AlmacStrObservacionesForm1H= json[index].AlmacStrObservacionesForm1H
                AlmacNumIdTipo= json[index].AlmacNumIdTipo
                AlmacNumIdPrograma= json[index].AlmacNumIdPrograma
                AlmacStrSerieFactura= json[index].AlmacStrSerieFactura

                $('#tbodyVales').append('<tr>' +
                    '<td>'+AlmacDateFecha+'</td>' +
                    '<td>'+AlmacNumIdForm1H+'</td>\n' +
                    '<td>'+AlmacStrNitProveedor+'</td>\n' +
                    '<td>'+AlmacStrOrdCYPNo+'</td>' +
                    '</tr>');
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}

$('#tblVales tbody').on('dblclick', 'td', function () {
    var dataTabla = $(this).closest('tr');
    let Fecha = (dataTabla.find("td:eq(0)").text());
    let NoVale = (dataTabla.find("td:eq(1)").text());
    let NitPreveedor = (dataTabla.find("td:eq(2)").text());
    let AlmacStrOrdCYPNo = (dataTabla.find("td:eq(3)").text());

    $('#inputNoVale').val(NoVale);

    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Datos Cargados',
        showConfirmButton: false,
        timer: 1500
    });

    $('body, html').animate({
        scrollTop: $(document).height(),
    }, 1400);

});*/

$('#btnTest').click(function () {
    let AlmacNumIdForm1H = $('#inputTestadoNo').val();
    let AlmacStrTestadp = $('#inputTestado').val();
    $.ajax({
        url: './api/v1/AlmacTestado.php?AlmacNumIdForm1H='+AlmacNumIdForm1H+'&AlmacStrTestado='+AlmacStrTestadp,
        type: "POST",
        //data: datos,
        beforeSend: function () {
            $("#btnActNoCGC").prop('disabled', true);
        },
        success: function (response) {
            Swal.fire({
                icon: 'success',
                title: 'Exito',
                text: ' '+response.state.strstate,
            });

            $("#btnTest").attr('disabled', true);


        },
        error: function (request, status, error) {
            console.log(request);

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: ' '+response.state.strstate,
            });

            $("#btnTest").text('Testar').attr('disabled', false);

        }
    });
});

function ejecutarRepTest() {
    let Numform1H = $('#inputTestadoNo').val()
    window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/Testado.php?AlmacNumIdForm1H=' + Numform1H);
    fnOpenForm(event, 'AlmacTestado')
}