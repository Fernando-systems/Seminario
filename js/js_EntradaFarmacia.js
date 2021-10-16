/**
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  20/01/2021
 * @Time: 7:20 AM
 * @Version: 1.0
 */

function swichSuccessWarning(codstate) {
    /*Función utilizada para indicarle al Toast que Tipo de Alerta debe mostrar, si Satisfactorio o error
     */
    if (codstate === '0' || codstate === 0) {
        return 'error'
    } else {
        return 'success'
    }
}

$(document).ready(function () {
    var f = new Date();
    if(f.getDate() +1 <=9 && f.getMonth() +1 <=9){
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-0" + f.getDate());
        $('#inputFechaIngreso').val(fecha);
        console.log(fecha + 'Dia y mes menores a 10');
    }else if(f.getDate() +1 >=10 && f.getMonth() +1 <=9) {
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() + 1) + "-" + f.getDate());
        $('#inputFechaIngreso').val(fecha);
        console.log(fecha + 'dia mayor a 10 y mes menor a 9 ');
    }else if(f.getDate() +1 <=9 && f.getMonth() +1 >=10) {
        let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-0" + f.getDate());
        $('#inputFechaIngreso').val(fecha);
        console.log(fecha + 'dia menor a 9 y mes mayor a 10 ');
    }
});

function llenarTablaDetalle(){
    let fecha = $('#inputFechaIngreso').val();
    let codigoRequi = $('#inputDocRespaldo').val() + $('#TipAlmac').val();

    if($('#inputDocRespaldo').val() == '' || $('#inputDocRespaldo').val() == undefined || $('#inputDocRespaldo').val() == null){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Ingrese No. de Requisición',
        });

        return false;
    }

    if($('#TipAlmac').val() == '' || $('#TipAlmac').val() == undefined || $('#TipAlmac').val() == null || $('#TipAlmac').val() == 0){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Seleccion un Almacén',
        });

        return false;
    }


    $('#tbodyDetalleEntrada').empty();
    $('#tbodyaggkardexentrada').empty();

    var ks = $.ajax({
        url: './api/v1/EntradaFarmacia.php?vistaEntrada=true' + '&codigoRequi=' + codigoRequi,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log("Insumos que si tienen kardex");
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumIdRequi = json[index].AlmacNumIdRequi;
                RequiFarm = json[index].RequiFarm;
                DocRespaldo = json[index].DocRespaldo;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCantDespachada = json[index].AlmacNumCantDespachada;
                AlmacNumPreUnExist = json[index].AlmacNumPreUnExist;
                FarmNumPrecTotal = json[index].FarmNumPrecTotal;
                AlmacStrNoLote = json[index].AlmacStrNoLote;
                AlmacDateFechaVenciReq = json[index].AlmacDateFechaVenciReq;
                FarmNumIdKardexFarm = json[index].FarmNumIdKardexFarm;
                StrNombreInsumo = json[index].StrNombreInsumo;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                $('#tbodyDetalleEntrada').append('<tr class="text-center">' +
                    '<td>' + fecha + '</td>' +
                    '<td>' + RequiFarm + '</td>' +
                    '<td>' + DocRespaldo + '</td>' +
                    '<td>' + DocRespaldo + '</td>' +
                    '<td>' + AlmacStrPresentInsu + '</td>' +
                    '<td>' + AlmacStrCantYUnidInsu + '</td>' +
                    '<td id="CA-' + index + '">' + AlmacNumCantDespachada + '</td>' +
                    '<td id="PU-' + index + '">' + AlmacNumPreUnExist + '</td>' +
                    '<td>' + FarmNumPrecTotal + '</td>' +
                    '<td>' + AlmacStrNoLote + '</td>' +
                    '<td>' + AlmacDateFechaVenciReq + '</td>' +
                    '<td hidden>' + FarmNumIdKardexFarm + '</td>' +
                    '<td> <input type="text" class="form-control" id="Uni-' + index + '" onchange="sumaNC(this.id)"></td>' +
                    '<td id="NC-' + index + '"> </td>' +
                    '<td id="NPU-' + index + '"> </td>' +
                    '<td>' + StrNombreInsumo + '</td>' +
                    '<td>' + FarmStrPresentInusmo + '</td>' +
                    '<td>' + FarmStrUniInsumo + '</td>' +
                    '</tr>')
            });


        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
    console.log('---------------')
    console.log(ks)

    var kn = $.ajax({
        url: './api/v1/EntradaFarmacia.php?datosfaltantes=true' + '&codigoRequi=' + codigoRequi,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log("Insumos que no tienen kardex");
            console.log(json);

             $(json).each(function (index, item) {
                AlmacNumRenglon= json[index].AlmacNumRenglon;
                AlmacNumCodInsumo= json[index].AlmacNumCodInsumo;
                AlmacStrNomInsumo= json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu= json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu= json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu= json[index].AlmacStrCantYUnidInsu;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                AlmacNumIdRequi= json[index].AlmacNumIdRequi;
                FarmNumIdKardexFarm= json[index].FarmNumIdKardexFarm;
                AlmacStrNoLote= json[index].AlmacStrNoLote;
                AlmacDateFechaVenciReq= json[index].AlmacDateFechaVenciReq;
                AlmacNumCantDespachada= json[index].AlmacNumCantDespachada;
                AlmacNumPreUnExist= json[index].AlmacNumPreUnExist;
                Total= json[index].Total;
                DocRespaldo= json[index].DocRespaldo;

                let IdREqui = AlmacNumIdRequi= json[index].AlmacNumIdRequi;
                let IdRequiSplit = IdREqui.split("-");

                $('#tbodyaggkardexentrada').append('<tr class="text-center" id="tr-'+AlmacNumCodPresentInsu+'">' +
                    '<td>' + AlmacNumRenglon + '</td>' +
                    '<td>' + AlmacNumCodInsumo + '</td>' +
                    '<td>' + AlmacStrNomInsumo + '</td>' +
                    '<td>' + DocRespaldo + '</td>' +
                    '<td>' + AlmacStrPresentInsu + '</td>' +
                    '<td>' + AlmacStrCantYUnidInsu + '</td>' +
                    '<td>' + IdRequiSplit[0] + '</td>' +
                    '<td>' + AlmacStrNoLote + '</td>' +
                    '<td>' + AlmacDateFechaVenciReq + '</td>' +
                    '<td hidden>' + AlmacNumCodPresentInsu + '</td>' +
                    '<td>' + AlmacNumCantDespachada + '</td>' +
                    '<td>' + AlmacNumPreUnExist + '</td>' +
                    '<td>' + Total + '</td>' +
                    '<td hidden>' + AlmacNumIdRequi + '</td>' +
                    '<td><button class="btn btn-info editar" id=' + AlmacNumCodPresentInsu + '><i class="fas fa-edit"></i></button></td>' +
                    '<td><button class="btn btn-info unirKardex" id=' + AlmacNumCodPresentInsu + '><i class="fas fa-sync"></i></button></td>' +
                    '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>' +
                    '</tr>')


            });
            console.log('---------------------------------------')
            if (json.length == 0) {
                console.log("Todos los insumos tienen kardex asignados")
                $('#btnGuardarEntrada').prop('disabled', false);
            } else {
                console.log("Falta Asignar kardex a insumos")
                $('#btnGuardarEntrada').prop('disabled', true);
            }
        },

        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }


    });
    console.log('---------------')
    console.log(kn)
/*
    if( ks == 0 && kn == 0){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Requisición no ingresada al sistema',
        });

        return false;
    }
*/

}//Termina Funcion llenarTablaDetalle


$(document).on('click', '.editar', function (event) {
    event.preventDefault();
    //$(this).closest('tr').remove();
    $('#asignarkardex').fadeIn();
    //$('#inputCodInsumo)
});






<!--____________________________________Revisarrrrrrrrrrrrrrrrrrrrrrrrrr___________________________________________-->

function buscarrequi(codigreq) {

    $.ajax({
        url: './api/v1/EntradaFarmacia.php?FarmNumIdRequiEntrada=' + codigreq,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu = json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;

                $('#inputNomInsumo').val(AlmacStrNomInsumo);
                $('#inputDespInsumo').val(AlmacStrCaractInsu);


            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    bucarKardexFarmacia(codigreq)
}


function llenarTablaDetalle() {
    let fecha = $('#inputFechaIngreso').val();
    let codigoRequi = $('#inputDocRespaldo').val() + $('#TipAlmac').val();

    if($('#inputDocRespaldo').val() == '' || $('#inputDocRespaldo').val() == undefined || $('#inputDocRespaldo').val() == null){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Ingrese No. de Requisición',
        });

        return false;
    }

    if($('#TipAlmac').val() == '' || $('#TipAlmac').val() == undefined || $('#TipAlmac').val() == null || $('#TipAlmac').val() == 0){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Seleccion un Almacén',
        });

        return false;
    }



    $('#tbodyDetalleEntrada').empty();
    $('#tbodyaggkardexentrada').empty();
    $.ajax({
        url: './api/v1/EntradaFarmacia.php?vistaEntrada=true' + '&codigoRequi=' + codigoRequi,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log("Insumos que si tienen kardex");
            console.log(json);
            ks = $(json).each(function (index, item) {
                AlmacNumIdRequi = json[index].AlmacNumIdRequi;
                RequiFarm = json[index].RequiFarm;
                DocRespaldo = json[index].DocRespaldo;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCantDespachada = json[index].AlmacNumCantDespachada;
                AlmacNumPreUnExist = json[index].AlmacNumPreUnExist;
                FarmNumPrecTotal = json[index].FarmNumPrecTotal;
                AlmacStrNoLote = json[index].AlmacStrNoLote;
                AlmacDateFechaVenciReq = json[index].AlmacDateFechaVenciReq;
                FarmNumIdKardexFarm = json[index].FarmNumIdKardexFarm;
                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                $('#tbodyDetalleEntrada').append('<tr class="text-center">' +
                    '<td>' + fecha + '</td>' +
                    '<td>' + RequiFarm + '</td>' +
                    '<td>' + DocRespaldo + '</td>' +
                    '<td>' + AlmacStrPresentInsu + '</td>' +
                    '<td>' + AlmacStrCantYUnidInsu + '</td>' +
                    '<td id="CA-' + index + '">' + AlmacNumCantDespachada + '</td>' +
                    '<td id="PU-' + index + '">' + AlmacNumPreUnExist + '</td>' +
                    '<td>' + FarmNumPrecTotal + '</td>' +
                    '<td>' + AlmacStrNoLote + '</td>' +
                    '<td>' + AlmacDateFechaVenciReq + '</td>' +
                    '<td hidden>' + FarmNumIdKardexFarm + '</td>' +
                    '<td> <input type="text" class="form-control" id="Uni-' + index + '" onchange="sumaNC(this.id)"></td>' +
                    '<td id="NC-' + index + '"> </td>' +
                    '<td id="NPU-' + index + '"> </td>' +
                    '<td>' + AlmacStrNomInsumo + '</td>' +
                    '<td>' + FarmStrPresentInusmo + '</td>' +
                    '<td>' + FarmStrUniInsumo + '</td>' +
                    '</tr>')
            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    $.ajax({
        url: './api/v1/EntradaFarmacia.php?datosfaltantes=true' + '&codigoRequi=' + codigoRequi,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log("Insumos que no tienen kardex");
            console.log(json);
            kn =  $(json).each(function (index, item) {
                AlmacNumRenglon= json[index].AlmacNumRenglon;
                AlmacNumCodInsumo= json[index].AlmacNumCodInsumo;
                AlmacStrNomInsumo= json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu= json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu= json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu= json[index].AlmacStrCantYUnidInsu;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                AlmacNumIdRequi= json[index].AlmacNumIdRequi;
                FarmNumIdKardexFarm= json[index].FarmNumIdKardexFarm;
                AlmacStrNoLote= json[index].AlmacStrNoLote;
                AlmacDateFechaVenciReq= json[index].AlmacDateFechaVenciReq;
                AlmacNumCantDespachada= json[index].AlmacNumCantDespachada;
                AlmacNumPreUnExist= json[index].AlmacNumPreUnExist;
                Total= json[index].Total;
                DocRespaldo= json[index].DocRespaldo;

                let IdREqui = AlmacNumIdRequi= json[index].AlmacNumIdRequi;
                let IdRequiSplit = IdREqui.split("-");

                $('#tbodyaggkardexentrada').append('<tr class="text-center" id="tr-'+AlmacNumCodPresentInsu+'">' +
                    '<td>' + AlmacNumRenglon + '</td>' +
                    '<td>' + AlmacNumCodInsumo + '</td>' +
                    '<td>' + AlmacStrNomInsumo + '</td>' +
                    '<td>' + DocRespaldo + '</td>' +
                    '<td>' + AlmacStrPresentInsu + '</td>' +
                    '<td>' + AlmacStrCantYUnidInsu + '</td>' +
                    '<td>' + IdRequiSplit[0] + '</td>' +
                    '<td>' + AlmacStrNoLote + '</td>' +
                    '<td>' + AlmacDateFechaVenciReq + '</td>' +
                    '<td hidden>' + AlmacNumCodPresentInsu + '</td>' +
                    '<td>' + AlmacNumCantDespachada + '</td>' +
                    '<td>' + AlmacNumPreUnExist + '</td>' +
                    '<td>' + Total + '</td>' +
                    '<td hidden>' + AlmacNumIdRequi + '</td>' +
                    '<td><button class="btn btn-info editar" id=' + AlmacNumCodPresentInsu + '><i class="fas fa-edit"></i></button></td>' +
                    '<td><button class="btn btn-info unirKardex" id=' + AlmacNumCodPresentInsu + '><i class="fas fa-sync"></i></button></td>' +
                    '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>' +
                    '</tr>')
            });
            console.log('---------------------------------------')
            console.log(ks.length == 0);
            console.log(kn.length == 0);

            if(ks.length == 0 && kn.length == 0){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Requisición no ingresada al sistema',
                });

                return false;
            }
            console.log('---------------------------------------')
            if (json.length == 0) {
                console.log("Todos los insumos tienen kardex asignados")
                $('#btnGuardarEntrada').prop('disabled', false);
            } else {
                console.log("Falta Asignar kardex a insumos")
                $('#btnGuardarEntrada').prop('disabled', true);
            }
        },

        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}//Termina llenar

/*funcion para editar fila*/
$(document).on('click', '.editar', function (event) {
    event.preventDefault();
    //$(this).closest('tr').remove();
    $('#asignarkardex').fadeIn();
    //$('#inputCodInsumo)
});

//<a className="dropdown-item" onClick="fnOpenForm(event, 'FarmEntradaFarmacia')">Entrada Farmacia</a>


/*funcion para eliminar fila*/
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});


function InsetEntrada(){
    var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyDetalleEntrada tr'), function (tr) {
        return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
            return td.innerHTML;
        });
    });

    console.log(tableInfo);

    for (let j = 0; j < tableInfo.length; j++) {


        let datosDetalle = {
            FarmDateFechaIngreso: tableInfo[j][0],
            FarmNumIdRequiEntrada: AlmacNumIdRequi,
            FarmStrDescrip: tableInfo[j][2],
            FarmNumPreTotal: tableInfo[j][7],
            FarmStrNolote: tableInfo[j][8],
            FarmDateVenci: tableInfo[j][9],
            FarmNumIdKardexFarm: tableInfo[j][10],
            FarmNumCant: tableInfo[j][12],
            FarmNumPreUnit: tableInfo[j][13]

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


function sumaNC(id) {

    let soloNum = id.split("-");
    let Unidad = $('#Uni-' + soloNum[1]).val();
    let CantidadAntigua = $('#CA-' + soloNum[1]).text();
    let precioUnitario = $('#PU-' + soloNum[1]).text();
    console.log(Unidad + ' ' + CantidadAntigua);
    var multiplicacion = 0;
    multiplicacion = parseInt(Unidad) * parseInt(CantidadAntigua);

    $('#NC-' + soloNum[1]).text(multiplicacion);

    let division = 0;

    division = parseFloat(precioUnitario) / parseInt(Unidad);

    $('#NPU-' + soloNum[1]).text(division);
}

var objDatosAbajo = {};

$(document).on('click', '.unirKardex', function (event) {
    $('#tbodySelAgKardex').empty();
    event.preventDefault();
    let data = $(this).closest('tr');
    let renglon = (data.find("td:eq(0)").text());
    let codigo = (data.find("td:eq(1)").text());
    let nombre = (data.find("td:eq(2)").text());
    let caracteristicas = (data.find("td:eq(3)").text());
    let strPresentacion = (data.find("td:eq(4)").text());
    let strUnidad = (data.find("td:eq(5)").text());
    let docRespaldo = (data.find("td:eq(6)").text());
    let lote = (data.find("td:eq(7)").text());
    let fechaVencimiento = (data.find("td:eq(8)").text());
    let codPresentacionAux = (data.find("td:eq(9)").text());
    let AlmacNumCantDespachada = (data.find("td:eq(10)").text());
    let AlmacNumPreUnExist = (data.find("td:eq(11)").text());
    let Total = (data.find("td:eq(12)").text());
    let codigoRequi = (data.find("td:eq(13)").text());

    objDatosAbajo = {
        renglon:renglon,
        codigo:codigo,
        nombre:nombre,
        caracteristicas:caracteristicas,
        strPresentacion:strPresentacion,
        strUnidad:strUnidad,
        docRespaldo:docRespaldo,
        lote:lote,
        fechaVencimient:fechaVencimiento,
        codPresentacionAu:codPresentacionAux,
        AlmacNumCantDespachada:AlmacNumCantDespachada,
        AlmacNumPreUnExist:AlmacNumPreUnExist,
        Total:Total,
        codigoRequi:codigoRequi,
        data:data,
        kardex: null,
        presFarm: null,
        uniFarm: null
    };

    console.log("---------------");
    console.log(objDatosAbajo);
    console.log("---------------");

    $('#tbBuscarK').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
            'print', 'pdf'
        ],
        "ajax": "./api/v1/FarmRequisicion.php",
        "columns": [
            { "data": "AlmacNumCodInsumo" },
            { "data": "AlmacStrNomInsumo" },
            { "data": "AlmacStrCaractInsu" },
            { "data": "AlmacNumRenglon" },
            { "data": "FarmNumIdKardexFarm" },
            { "data": "FarmNumCantExist" },
            { "data": "FarmStrPresentInusmo" },
            { "data": "FarmStrUniInsumo" }
        ], destroy: true
    } );

    /*Llena tabla auxiliar para seleccionar kardex a unir*/
    /*
    $.ajax({
        url: './api/v1/EntradaFarmacia.php?vistaEntrada=true' + '&codigoRequi=' + codigoRequi,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log("Insumos que si tienen kardex");
            console.log(json);
            $(json).each(function (index, item) {
                RequiFarm = json[index].RequiFarm;
                DocRespaldo = json[index].DocRespaldo;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCantDespachada = json[index].AlmacNumCantDespachada;
                AlmacNumPreUnExist = json[index].AlmacNumPreUnExist;
                FarmNumPrecTotal = json[index].FarmNumPrecTotal;
                AlmacStrNoLote = json[index].AlmacStrNoLote;
                AlmacDateFechaVenciReq = json[index].AlmacDateFechaVenciReq;
                FarmNumIdKardexFarm = json[index].FarmNumIdKardexFarm;
                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                $('#tbodySelAgKardex').append('<tr class="text-center">' +
                    '<td>' + DocRespaldo + '</td>' +
                    '<td>' + AlmacStrPresentInsu + '</td>' +
                    '<td>' + AlmacStrCantYUnidInsu + '</td>' +
                    '<td id="CA-' + index + '">' + AlmacNumCantDespachada + '</td>' +
                    '<td id="PU-' + index + '">' + AlmacNumPreUnExist + '</td>' +
                    '<td>' + FarmNumPrecTotal + '</td>' +
                    '<td>' + AlmacStrNoLote + '</td>' +
                    '<td>' + AlmacDateFechaVenciReq + '</td>' +
                    '<td>' + FarmNumIdKardexFarm + '</td>' +
                    '<td>' + AlmacStrNomInsumo + '</td>' +
                    '<td>' + FarmStrPresentInusmo + '</td>' +
                    '<td>' + FarmStrUniInsumo + '</td>' +
                    '</tr>')
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });*/


    $('#unirKardex').fadeIn();
});

$('#tbBuscarK tbody').on('dblclick', 'td', function () {
    console.log("esto");
    let data = $(this).closest('tr');
    let kardex = (data.find("td:eq(4)").text());
    let presFarm = (data.find("td:eq(6)").text());
    let uniFarm = (data.find("td:eq(7)").text());
    console.log(presFarm);
    console.log(uniFarm);
    objDatosAbajo.kardex = kardex; //asigna kardex a objeto
    objDatosAbajo.presFarm = presFarm;
    objDatosAbajo.uniFarm = uniFarm;
    $('#inputKardexSelec').val(kardex).prop('disabled', true); //Llenar input de los datos de la tabla

    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'KARDEX No. '+kardex+' seleccionado correctamente',
        showConfirmButton: false,
        timer: 2500
    });

    console.log(objDatosAbajo);
});



$('#btnUnirKardex').click(function (){
    $('#tbodyDetalleEntrada').append('<tr class="text-center">' +
        '<td>'+$('#inputFechaIngreso').val()+'</td>' +
        '<td>' + objDatosAbajo.docRespaldo + '</td>' +
        '<td>' + objDatosAbajo.caracteristicas + '</td>' +
        '<td>' + objDatosAbajo.strPresentacion + '</td>' +
        '<td>' + objDatosAbajo.strUnidad + '</td>' +
        '<td id="CA-' + objDatosAbajo.kardex + '">' + objDatosAbajo.AlmacNumCantDespachada + '</td>' +
        '<td id="PU-' + objDatosAbajo.kardex + '">' + objDatosAbajo.AlmacNumPreUnExist + '</td>' +
        '<td>' + objDatosAbajo.Total + '</td>' +
        '<td>' + objDatosAbajo.lote + '</td>' +
        '<td>' + objDatosAbajo.fechaVencimient + '</td>' +
        '<td hidden>' + objDatosAbajo.kardex + '</td>' +
        '<td> <input type="text" class="form-control" id="Uni-' + objDatosAbajo.kardex + '" onchange="sumaNC(this.id)"></td>' +
        '<td id="NC-' + objDatosAbajo.kardex + '"> </td>' +
        '<td id="NPU-' + objDatosAbajo.kardex + '"> </td>' +
        '<td>' + objDatosAbajo.nombre + '</td>' +
        '<td>' + objDatosAbajo.presFarm+ '</td>' +
        '<td>' + objDatosAbajo.uniFarm + '</td>' +
        '</tr>');

    objDatosAbajo.data.remove();
    $('#unirKardex').fadeOut();
    validarTblVacia();
});

function validarTblVacia(){
    var tableVal= Array.prototype.map.call(document.querySelectorAll('#tbodyaggkardexentrada tr'), function (tr) {
        return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
            return td.innerHTML;
        });
    });

    if(tableVal.length == 0){
        $('#btnGuardarEntrada').prop('disabled', false);
    }
}