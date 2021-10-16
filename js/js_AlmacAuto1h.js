$(document).ready(function (){
    var f = new Date();
    if(f.getDate() +1 <=9 && f.getMonth() +1 <=9){
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-0" + f.getDate());
        $('#inputFecha').val(fecha);
       console.log(fecha + 'Dia y mes menores a 10');
    }else if(f.getDate() +1 >=10 && f.getMonth() +1 <=9) {
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() + 1) + "-" + f.getDate());
        $('#inputFecha').val(fecha);
        console.log(fecha + 'dia mayor a 10 y mes menor a 9 ');
    }else if(f.getDate() +1 <=9 && f.getMonth() +1 >=10) {
        let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-0" + f.getDate());
        $('#inputFecha').val(fecha);
        console.log(fecha + 'dia menor a 9 y mes mayor a 10 ');
    }

    MostAuto();

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

function Contar1H1(){
    let iCorrelative1 = $('#inputIniCorrelativo').val();
    let FinCorrelative1 = $('#inputFinCorrelativo').val();
    let Formularies1 =0;


    if (iCorrelative1 < 0){
        alert("Cantidad Inicio no puede ser negativa")
        $('#inputIniCorrelativo').val('');

    }
    else{
        iCorrelative1 = $('#inputIniCorrelativo').val();
        FinCorrelative1 = $('#inputFinCorrelativo').val();
        Formularies1 = parseInt(FinCorrelative1) - parseFloat(iCorrelative1) + 1;
        if(Formularies1 <=0){
            alert("Ha ingresado parámetros erróneos")
            fnOpenForm(event,'AlmacAuto1h')
        }
        else{
            $('#inputtotformularios').val(Formularies1);

        }
        console.log("ValorTotal1" + Formularies1)
    }
}

function Contar1H2(){
    let iCorrelativo = $('#inputIniCorrelativo').val();
    let FinCorrelativo = $('#inputFinCorrelativo').val();
    let Totformularios =0;


    if (iCorrelativo < 0){
        alert("Cantidad Final no puede ser negativa")
        $('#inputIniCorrelativo').val('');

    }
    else{
        iCorrelativo = $('#inputIniCorrelativo').val();
        FinCorrelativo = $('#inputFinCorrelativo').val();
        Totformularios = parseInt(FinCorrelativo) - parseFloat(iCorrelativo) + 1;

        if(Totformularios <=0){
            alert("Ha ingresado parámetros erróneos")
            fnOpenForm(event,'AlmacAuto1h')
        }
        else{
            $('#inputtotformularios').val(Totformularios);
        }

        console.log("ValorTotal1" + Totformularios)
    }
}

/*Funcion para guardar*/
function GuardarCons1h() {
    let Fecha = $('#inputFecha').val();
    let iCorrelativo = $('#inputIniCorrelativo').val();
    let FinCorrelativo = $('#inputFinCorrelativo').val();
    let Totformularios = $('#inputtotformularios').val();



    if (iCorrelativo <=0 || iCorrelativo == '' || FinCorrelativo <=0 || FinCorrelativo == ''){
        swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Ups! Hubo un error',
            text: 'Debe de ingresar valores',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
        return false;
    }
        let datos = {
            AlmacDateFecha: Fecha,
            AlmacNumIniForm: iCorrelativo,
            AlmacNumFinForm: FinCorrelativo,
            AlmacNumtotForm: Totformularios,

        };
    console.log(datos);
    $.ajax({
        url: './api/v1/AlmacAuto1h.php',
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
            $("#GuardarCons1h").text('GUARDAR').attr('disabled', true);
            fnOpenForm(event, 'AlmacAuto1h')
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
            $("#GuardarCons1h").text('GUARDAR').attr('disabled', false);

        }
    });
}

function MostAuto(){

    $.ajax({
        url: './api/v1/AlmacAuto1h.php?',
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
                    text: 'No se encuentran datos',
                    showConfirmButton: true,
                });

            }
            else {
                $(json).each(function (index, item) {
                    AlmacDateFecha = json[index].AlmacDateFecha;
                    AlmacNumIniForm = json[index].AlmacNumIniForm;
                    AlmacNumFinForm = json[index].AlmacNumFinForm;
                    AlmacNumtotForm = json[index].AlmacNumtotForm;
                    AlmacNumIdTipo = json[index].AlmacNumIdTipo;
                    Estado = json[index].Estado;



                    $('#tbodyAlmacAnul' ).append('<tr>' +
                        '<th scope="row">'+AlmacDateFecha+'</th>' +
                        '<td>'+AlmacNumIniForm+'</td>' +
                        '<td>'+AlmacNumFinForm+'</td>' +
                        '<td>'+AlmacNumtotForm+'</td>' +
                        '<td>'+Estado+'</td>' +
                        '</tr>');
                });
            }

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}