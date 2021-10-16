function buscarServicio(){
    let numServicio = $('#inputNomservicio').val();

    $.ajax({
        url: './api/v1/EncServiciosEncamamiento.php?EncNumIdServEncam=' + numServicio,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                EncNumIdServEncam = json[index].EncNumIdServEncam;
                EncStrNombre = json[index].EncStrNombre;
                EncEstado = json[index].EncEstado;
                EncCantidadCamas = json[index].EncCantidadCamas;
                

                $('#inputCantCamas').val(EncCantidadCamas);
  


            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    //bucarKardexFarmacia(codigreq)
}



function llenarTablaDetalle() {

    let fecha = $('#inputFechaIngreso').val();
    let codigoRequi = $('#inputDocRespaldo').val();
    $('#tbodyDetalleEntrada').empty();
   $.ajax({
        url: './api/v1/EntradaFarmacia.php?vistaEntrada=true'+'&codigoRequi='+codigoRequi,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                    AlmacNumIdRequi= json[index].AlmacNumIdRequi;
                    AlmacStrCaractInsu= json[index].AlmacStrCaractInsu;
                    AlmacStrPresentInsu= json[index].AlmacStrPresentInsu;
                    AlmacNumCantDespachada= json[index].AlmacNumCantDespachada;
                    AlmacNumPreUnExist= json[index].AlmacNumPreUnExist;
                    Valor= json[index].Valor;
                    AlmacStrNoLote= json[index].AlmacStrNoLote;
                    AlmacDateFechaVenciReq= json[index].AlmacDateFechaVenciReq;
                    FarmNumIdKardexFarm= json[index].FarmNumIdKardexFarm;

                    $('#tbodyDetalleEntrada').append('<tr>' +
                        '<td>'+fecha+'</td>' +
                        '<td>'+AlmacNumIdRequi+'</td>' +
                        '<td>'+AlmacStrCaractInsu+'</td>' +
                        '<td>'+AlmacStrPresentInsu+'</td>' +
                        '<td id="CA-'+index+'">'+AlmacNumCantDespachada+'</td>' +
                        '<td id="PU-'+index+'">'+AlmacNumPreUnExist+'</td>' +
                        '<td>'+Valor+'</td>' +
                        '<td>'+AlmacStrNoLote+'</td>' +
                        '<td>'+AlmacDateFechaVenciReq+'</td>' +
                        '<td hidden>'+FarmNumIdKardexFarm+'</td>' +
                        '<td> <input type="text" class="form-control" id="Uni-'+index+'" onchange="sumaNC(this.id)"></td>' +
                        '<td id="NC-'+index+'"> </td>' +
                        '<td id="NPU-'+index+'"> </td>' +
                        '</tr>')
                    if(codigoRequi == AlmacNumIdRequi){
            }});

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

   $('#btnGuardarEntrada').prop('disabled', false);
}

function InsetEntrada() {
    var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyDetalleEntrada tr'), function(tr){
        return Array.prototype.map.call(tr.querySelectorAll('td'), function(td){
            return td.innerHTML;
        });
    });

    console.log(tableInfo);

    for (let j = 0; j<tableInfo.length ; j++){


        let datosDetalle = {
            FarmDateFechaIngreso: tableInfo[j][0],
            FarmNumIdRequiEntrada:tableInfo[j][1],
            FarmStrDescrip:tableInfo[j][2],
            FarmNumIdKardexFarm:tableInfo[j][9],
            FarmDateVenci:tableInfo[j][8],
            FarmStrNolote:tableInfo[j][7],
            FarmNumCant:tableInfo[j][11],
            FarmNumPreUnit:tableInfo[j][12],
            FarmNumPreTotal:tableInfo[j][6]
        };
        console.log("cada datosDetalle enviado");
        console.log(datosDetalle);
        $.ajax({
            url: './api/v1/EntradaFarmacia.php',
            type: 'POST',
            data: datosDetalle,
            beforeSend: function () {
                $("#btnGuardarRequisicion").text('GUARDANDO...').prop('disabled', true);
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
                $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
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
                $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
            }
        });
    }


    $('#btnGuardarEntrada').prop('disabled', true);
}


function sumaNC(id){

    let soloNum = id.split("-");
    let Unidad = $('#Uni-'+soloNum[1]).val();
    let CantidadAntigua = $('#CA-'+soloNum[1]).text();
    let precioUnitario = $('#PU-'+soloNum[1]).text();
    console.log(Unidad + ' '+ CantidadAntigua);
    var multiplicacion = 0;
    multiplicacion = parseInt(Unidad) * parseInt(CantidadAntigua);

    $('#NC-'+soloNum[1]).text(multiplicacion);

    let division = 0;

    division = parseFloat(precioUnitario) / parseInt(Unidad) ;

    $('#NPU-'+soloNum[1]).text(division);
}