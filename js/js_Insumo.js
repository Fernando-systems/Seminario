$(document).ready(function () {
// Prueba de modificaicon desde Otro Equipo
    var table = $('#tbInsumo').DataTable({


        "oSearch": {
            "bSmart": false,
            "bRegex": true,
            "sSearch": ""
        },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
            'print', 'pdf'
        ],
        "ajax": ".api/V1/Insumo.php",
        "columns": [
            {"data": "IntCodInsumo"},
            {"data": "IntRenglon"},
            {"data": "StrNomInsumo"},
            {"data": "StrCaractInsu"},
            {"data": "StrPresentInsu"},
            {"data": "StrCantYUnidInsu"},
            {"data": "IntCodPresentInsu"}


        ]
    });
    setInterval(function () {
        table.ajax.reload(null, false);
    }, 10000);
    $('#tbInsumo tbody').on('dblclick', 'td', function () {

        var data = table.row($(this).parents('tr')).data();
        //$("#IngresoDatos").modal("show");
        $('#IngresoDatos').fadeIn();
        $('#inputCodInsumo').val(data['IntCodInsumo']);
        $('#inputRenglon').val(data['IntRenglon']);
        $('#inputInsumo').val(data['StrNomInsumo']);
        $('#inputCaracteristica').val(data['StrPresentInsu']);
        $('#inputPresentacion').val(data['RHDep']);
        $('#inputCantidadyUnidad').val(data['StrCantYUnidInsu']);
        $('#inputCodPresentacion').val(data['inputCodPresentacion']);


        // $("#btnGuardarPersonal").show();
        // $("#Cerrar").show();


        //alert('click' +data[0]+'\'s row');
    });


});

var EventoHorario;

function btnEnviarInfoHorario() {
    RecolectarHorario();
    // let txHoraE =$('#txtHoraE').val();
    let IntCodInsumo = $('#inputCodInsumo').val();
    let IntRenglon = $('#inputRenglon').val();
    let StrNomInsumo = $('#inputInsumo').val();
    let StrCaractInsu = $('#inputCaracteristica').val();
    let StrPresentInsu = $('#inputPresentacion').val();
    let StrCantYUnidInsu = $('#inputCantidadyUnidad').val();
    let IntCodPresentInsu = $('#inputCodPresentacion').val();
    EnviarInfoHorario(IntCodInsumo, IntRenglon, StrNomInsumo, StrCaractInsu, StrPresentInsu, StrCantYUnidInsu, IntCodPresentInsu);

    /*
    RhHoraEntrada: $('#txtHoraE').val1('')
    RhHoraSalida:  $('#txtHoraS').val('')
    RhMinDescanso:  $('#txtMinDesc').val('')
    RhIdTurno:  $('#txtCodigoTurno').val('')*/


    console.log(IntCodInsumo, IntRenglon, StrNomInsumo, StrCaractInsu, StrPresentInsu, StrCantYUnidInsu, IntCodPresentInsu);
}

debugger;


// Prueba dd
function EnviarInfoHorario(consumoInt, IntRenglon, StrNomInsumo, StrCaractInsu, StrPresentInsu, StrCantYUnidInsu, IntCodPresentInsu) {
    let HorariosObjeto = {
        IntCodInsumo: consumoInt,
        IntRenglon: IntRenglon,
        StrNomInsumo: StrNomInsumo,
        StrCaractInsu: StrCaractInsu,
        StrPresentInsu: StrPresentInsu,
        StrCantYUnidInsu: StrCantYUnidInsu,
        IntCodPresentInsu: IntCodPresentInsu,
    };
    console.log(HorariosObjeto);
    $.ajax({
        type: 'POST',
        url: './api/v1/Insumo.php?IntCodInsumo=' + consumoInt,
        data: HorariosObjeto,

        success: function (msg) {
            if (msg) {
                alert(
                    "Listo!"
                );
                $('#IngresoDatos').fadeOut();

            }
        },
        error: function () {
            alert("Hay un error");
        }

    });
    console.log("cualquier cosa");
    console.log(HorariosObjeto);
    $('#IngresoDatos').fadeOut();
    $("#IngresoHorario").modal('toggle');
    console.log("si llega");

}

debugger;


function RecolectarHorario() {
    EventoHorario =
        {
            IntCodInsumo: $('#inputCodInsumo').val(),
            IntRenglon: $('#inputRenglon').val(),
            StrNomInsumo: $('#inputInsumo').val(),
            StrCaractInsu: $('#inputCaracteristica').val(),
            StrPresentInsu: $('#inputPresentacion').val(),
            StrCantYUnidInsu: $('#inputCantidadyUnidad').val(),
            IntCodPresentInsu: $('#inputCodPresentacion').val(),


        }
    ;
}

debugger;
/*
function EnviarInformacion() {

    var IntCodInsumo = $('#inputCodInsumo').val();
    var IntRenglon = $('#inputRenglon').val();
    var StrNomInsumo =$('#inputInsumo').val();
    var StrCaractInsu =  $('#inputCaracteristica').val();
    var StrPresentInsu =$('#inputPresentacion').val();
    var StrCantYUnidInsu = $('#inputCantidadyUnidad').val();
    var IntCodPresentInsu = $('#inputPresentacion').val();

    console.log(IntCodInsumo);
    console.log(IntRenglon);
    console.log(StrNomInsumo);
    console.log(StrCaractInsu);
    console.log(StrPresentInsu);
    console.log(StrCantYUnidInsu);
    console.log(IntCodPresentInsu);


    var data = {
        IntCodInsumo: IntCodInsumo,
        IntRenglon:IntRenglon,
        StrNomInsumo:StrNomInsumo,
        StrCaractInsu:StrCaractInsu,
        StrPresentInsu:StrPresentInsu,
        StrCantYUnidInsu:StrCantYUnidInsu,
        IntCodPresentInsu:IntCodPresentInsu,

    };debugger;

    console.log(data);
    $.ajax({
        type:'POST',
        url:'./api/v1/Insumo.php?IntCodInsumo='+ IntCodInsumo,
        data:data,
        success:function (msg){
            if (msg) {
                alert("listo");

            }
        },
        error:function(){
            alert("error");
        
            $('#IngresoDatos').fadeOut();
            //$("#IngresoDatos").modal('toggle');
        }

    });debugger;

    //table.ajax.reload(null,false);
    //table.draw(false);
    // $("#btnGuardarPersonal").hide();

  //  $("#datosUsuario")[0].reset();//limpia el formulario
   // $('#IngresoDatos').fadeOut();
   // $("#IngresoDatos").modal('toggle');

    console.log("si llega");


}debugger;*/
/*
function ModificarInformacion(RHCodEmp) {

   
    var IntRenglon = $('#inputRenglon').val();
    var StrNomInsumo =$('#inputCodInsumo').val();
    var StrCaractInsu =  $('#StrCaractInsu').val();
    var StrPresentInsu =$('#StrPresentInsu').val();
    var StrCantYUnidInsu = $('#StrCantYUnidInsu').val();
    var IntCodPresentInsu = $('#IntCodPresentInsu').val();

    var data = {
        IntRenglon:IntRenglon,
        StrNomInsumo:StrNomInsumo,
        StrCaractInsu:StrCaractInsu,
        StrPresentInsu:StrPresentInsu,
        StrCantYUnidInsu:StrCantYUnidInsu,
        IntCodPresentInsu:IntCodPresentInsu,
      

    };
    console.log(data);

    $.ajax(
        {
            type: 'PUT',

            url: './api/v1/Insumo.php=' + IntRenglon + '&IntRenglon=' + StrNomInsumo + '&StrNomInsumo=' + StrCaractInsu + '&StrCaractInsu=' + StrPresentInsu+ '&StrPresentInsu='
                + StrCantYUnidInsuRHDep + 'StrCantYUnidInsu='
                + IntCodPresentInsu= + '&IntCodPresentInsu'  ,

            success: function (msg) {
                if (msg) {
                    alert("HAY UN ERROR");
                }


            },
            error: function () {
                Swal.fire(
                    'Listo!',
                );
                //$("#IngresoDatos").modal('toggle');
                $('#IngresoDatos').fadeOut();
            }
        });

    /*
               success: function (response) {
                    console.log(response);
                },
                error: function (data) {
                    console.log(data);
                }
            });
    */

// table.draw(false);


// $("#datosUsuario")[0].reset();//limpia el formulario
//$('#IngresoDatos').fadeOut();

// $('#IngresoDatos').modal('toggle');
// console.log("si llega 2");
//}*/

function Eliminar(RHCodEmp) {
    console.log(RHCodEmp);
    $.ajax(
        {
            type: 'DELETE',
            url: './api/v1/Insumo.php=' + IntCodInsumo,
            success: function (msg) {
                if (msg) {
                    alert("HAY UN ERROR");
                }
            },
            error: function () {
                Swal.fire(
                    'Listo!',
                );
                $('#IngresoDatos').fadeOut();//cierra el modal

            }
        }
    );


}


