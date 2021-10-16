$(document).ready(function () {
    cargarAbreviatura();
});

function EntradaSalidaTb(){

    var codigoInsumo = $('#SelCodUnico').val();
    console.log(codigoInsumo);

    $('#TbEntradaSalida').removeAttr('hidden');
    $('#tbodyKardex').empty(); //limpia la tabla

$.ajax({
    url: './api/v1/Kardex.php?AlmacNumCodInsumo=' + codigoInsumo ,
    type: "GET",
    dataType: "json",
    contentType: "application/json; charset=utf-8",

    success: function (data) {
        var json = data.data;
        $(json).each(function (index, item) {
                AlmacNumIdDeltKard= json[index].AlmacNumIdDeltKard;
                AlmacDateFecha= json[index].AlmacDateFecha;
                AlmacStrNoReferen= json[index].AlmacStrNoReferen;
                AlmacStrDescripci= json[index].AlmacStrDescripci;
                AlmacStrUnidMedida= json[index].AlmacStrUnidMedida;
                AlmacNumEntrCantid= json[index].AlmacNumEntrCantid;
                AlmacNumEntrPUnit= json[index].AlmacNumEntrPUnit;
                AlmacNumEntrVaTotal= json[index].AlmacNumEntrVaTotal;
                AlmacNumReajCanti= json[index].AlmacNumReajCanti;
                AlmacNumReajPUnit= json[index].AlmacNumReajPUnit;
                AlmacNumReajVTotal= json[index].AlmacNumReajVTotal;
                AlmacNumReqCantid= json[index].AlmacNumReqCantid;
                AlmacNumReqPUnit= json[index].AlmacNumReqPUnit;
                AlmacNumReqVaTotal= json[index].AlmacNumReqVaTotal;
                AlmacNumExisCantid= json[index].AlmacNumExisCantid;
                AlmacNumExisPUnit= json[index].AlmacNumExisPUnit;
                AlmacNumExisVaTotal= json[index].AlmacNumExisVaTotal;
                AlmacStrNoLote= json[index].AlmacStrNoLote;
                AlmacDateVencimi= json[index].AlmacDateVencimi;
                AlmacNumIdKardex= json[index].AlmacNumIdKardex;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                AlmacNumRenglon= json[index].AlmacNumRenglon;
                NoFila= json[index].NoFila;

            console.log(AlmacDateFecha)
            console.log(AlmacStrNoReferen)

            $('#tblKardex').append('<tr></tr>' +
                '<td scope="col" hidden>'+AlmacNumIdDeltKard+'</td>' +
                '<td scope="col">'+NoFila+'</td>' +
                '<td scope="col">'+AlmacDateFecha+'</td>' +
                '<td scope="col">'+AlmacStrNoReferen+'</td>' +
                '<td scope="col">'+AlmacStrDescripci+'</td>' +
                '<td scope="col">'+AlmacStrUnidMedida+'</td>' +
                '<td scope="col table-active">'+AlmacNumEntrCantid+'</td>' +
                '<td scope="col table-active">'+AlmacNumEntrPUnit+'</td>' +
                '<td scope="col table-active">'+AlmacNumEntrVaTotal+'</td>' +
                '<td scope="col">'+AlmacNumReajCanti+'</td>' +
                '<td scope="col">'+AlmacNumReajPUnit+'</td>' +
                '<td scope="col">'+AlmacNumReajVTotal+'</td>' +
                '<td scope="col table-active">'+AlmacNumReqCantid+'</td>' +
                '<td scope="col table-active">'+AlmacNumReqPUnit+'</td>' +
                '<td scope="col table-active">'+AlmacNumReqVaTotal+'</td>' +
                '<td scope="col">'+AlmacNumExisCantid+'</td>' +
                '<td scope="col">'+AlmacNumExisPUnit+'</td>' +
                '<td scope="col">'+AlmacNumExisVaTotal+'</td>' +
                '<td scope="col table-active">'+AlmacStrNoLote+'</td>' +
                '<td scope="col table-active">'+AlmacDateVencimi+'</td>' +
                '<td scope="col table-active"><button class="btn btn-circle btn-success" onclick="abrirModCerrar('+AlmacNumIdDeltKard+')"><i class="far fa-times-circle"></i></button></td></tr>');
        });
    },
    error: function (data) {
        alert("No se lograron cargar los datos(EntradaKardex)" + data.responseText);
    }
});

}//fin function TbEntradaSalida

function buscarInsumoGeneral(){
    let codInsumo = $('#inputCodProducto').val();
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
    let esperaInsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodInsumo1h=' + codInsumo, //
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

                $('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+AlmacStrPresentInsu+' '+ AlmacStrCantYUnidInsu+'</option>')
            });
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
            $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu = json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;

                $('#inputNomProducto').val(AlmacStrNomInsumo);
                //$('#inputCaracteristicasInsumo').val(AlmacStrCaractInsu);
                $('#inputPresen').val(AlmacStrPresentInsu);
                $('#inputRenPresupuestario').val(AlmacNumRenglon);
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    bucarKardexAlmacen(codigoUnico);
}

function bucarKardexAlmacen(codigoUnico) {

    console.log("Entra a buscar kardex")

    let esperarKAlmacen =  $.ajax({
        url: './api/v1/Kardex.php?AlmacNumCodPresentInsu=' + codigoUnico,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                AlmacNumIdKardex = json[index].AlmacNumIdKardex;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;

                $('#inputKardexAlm').val(AlmacNumIdKardex);
                $('#Inputcodpresendetalle').val(AlmacNumCodPresentInsu);

            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}


function abrirModCerrar(idDetalle) {
    $('#tbodyCerrarKardex').empty()
    $('#contenidoFila').fadeIn();

    let kardexNum = $('#inputKardexAlm').val();
    let CodPresent = $('#Inputcodpresendetalle').val();
    $('#inputKarCer').val(kardexNum);
    $('#InputCodPres').val(CodPresent);
    $('#inputDetKard').val(idDetalle);

    let numeroKardex =   $('#inputKarCer').val();
    let detalleKardex =    $('#inputDetKard').val();

    console.log(numeroKardex + 'numero kardex');
    console.log(detalleKardex + 'numero detalle');

    let infoCerrKardex =  $.ajax({
        url: './api/v1/Kardex.php?AlmacDetCerrarKardex=true&detKardAlmac=' + detalleKardex + '&numKardex=' + numeroKardex,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumIdKardex = json[index].AlmacNumIdKardex;
                AlmacNumNivelMinimo= json[index].AlmacNumNivelMinimo;
                AlmacNumNivelMaximo= json[index].AlmacNumNivelMaximo;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                AlmacBinEstado= json[index].AlmacBinEstado;
                AlmacNumCantExist= json[index].AlmacNumCantExist;
                AlmacNumPreUnExist= json[index].AlmacNumPreUnExist;
                AlmacNumPreTotExist= json[index].AlmacNumPreTotExist;
                AlmacNumIdDeltKard= json[index].AlmacNumIdDeltKard;
                AlmacDateFecha = json[index].AlmacDateFecha;
                AlmacStrNoReferen = json[index].AlmacStrNoReferen;
                AlmacStrDescripci = json[index].AlmacStrDescripci;
                AlmacStrUnidMedida = json[index].AlmacStrUnidMedida;
                AlmacNumEntrCantid = json[index].AlmacNumEntrCantid;
                AlmacNumEntrPUnit = json[index].AlmacNumEntrPUnit;
                AlmacNumEntrVaTotal = json[index].AlmacNumEntrVaTotal;
                AlmacNumReajCanti = json[index].AlmacNumEntrCantid;
                AlmacNumReajPUnit = json[index].AlmacNumReajPUnit;
                AlmacNumReajVTotal = json[index].AlmacNumReajVTotal;
                AlmacNumReqCantid = json[index].AlmacNumReqCantid;
                AlmacNumReqPUnit = json[index].AlmacNumReqPUnit;
                AlmacNumReqVaTotal = json[index].AlmacNumReqVaTotal;
                AlmacNumExisCantid = json[index].AlmacNumExisCantid;
                AlmacNumExisPUnit = json[index].AlmacNumExisPUnit;
                AlmacNumExisVaTotal = json[index].AlmacNumExisVaTotal;
                AlmacStrNoLote = json[index].AlmacStrNoLote;
                AlmacDateVenci = json[index].AlmacDateVenci;
                AlmacDateVencimi = json[index].AlmacDateVencimi;
                AlmacNumIdKardex = json[index].AlmacNumIdKardex;

                $('#tbodyCerrarKardex').append('<tr></tr>' +
                    '<td scope="col">'+AlmacNumIdDeltKard+'</td>' +
                    '<td scope="col">'+AlmacDateFecha+'</td>' +
                    '<td scope="col">'+AlmacStrNoReferen+'</td>' +
                    '<td scope="col">'+AlmacStrDescripci+'</td>' +
                    '<td scope="col">'+AlmacStrUnidMedida+'</td>' +
                    '<td scope="col table-active">'+AlmacNumEntrCantid+'</td>' +
                    '<td scope="col table-active">'+AlmacNumEntrPUnit+'</td>' +
                    '<td scope="col table-active">'+AlmacNumEntrVaTotal+'</td>' +
                    '<td scope="col">'+AlmacNumReajCanti+'</td>' +
                    '<td scope="col">'+AlmacNumReajPUnit+'</td>' +
                    '<td scope="col">'+AlmacNumReajVTotal+'</td>' +
                    '<td scope="col table-active">'+AlmacNumReqCantid+'</td>' +
                    '<td scope="col table-active">'+AlmacNumReqPUnit+'</td>' +
                    '<td scope="col table-active">'+AlmacNumReqVaTotal+'</td>' +
                    '<td scope="col">'+AlmacNumExisCantid+'</td>' +
                    '<td scope="col">'+AlmacNumExisPUnit+'</td>' +
                    '<td scope="col">'+AlmacNumExisVaTotal+'</td>' +
                    '<td scope="col table-active">'+AlmacStrNoLote+'</td>' +
                    '<td scope="col table-active">'+AlmacDateVencimi+'</td>' +
                    '</tr>');
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
//Consulta para modificar la fila que diga VAN


    let ultimafila =  $.ajax({
        url: './api/v1/Kardex.php?AlmacDetVanKardex=true&filakardexalmac=' + detalleKardex + '&numKardexalmac=' + numeroKardex,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumIdKardex = json[index].AlmacNumIdKardex;
                AlmacBinEstado= json[index].AlmacBinEstado;
                AlmacNumExisCantid = json[index].AlmacNumExisCantid;
                AlmacNumExisPUnit = json[index].AlmacNumExisPUnit;
                AlmacNumExisVaTotal = json[index].AlmacNumExisVaTotal;
                AlmacNumIdDeltKard = json[index].AlmacNumIdDeltKard;
            });
            $('#inputExistenciaVan').val(AlmacNumExisCantid);
            $('#inputPrecUniVan').val(AlmacNumExisPUnit);
            $('#inputPreTotalVan').val(AlmacNumExisVaTotal);
            $('#inputExistenciaVie').val(AlmacNumExisCantid);
            $('#inputPrecUniVie').val(AlmacNumExisPUnit);
            $('#inputPreTotalVie').val(AlmacNumExisVaTotal);
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}



function movkardex(){
    $('#inputUltFila').val('VAN A KARDEX No. ' + $('#inputKardNuev').val());
    $('#inputPritFila').val('VIENEN DE KARDEX No. ' + $('#inputKarCer').val());
}

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


function cambiokardex(){
    var kardexbien = false;
    var TipoKardex = $('#TipoKardex').val();
    var inputKardNuev = $('#inputKardNuev').val().replace(/^0+/, '');
    var SelFD = $('#SelFD').val();
    let inputMin =$('#inputMin').val();
    let inputMax =$('#inputMax').val();
    let inputKarCer =$('#inputKarCer').val();
    let NuevoKardexId = inputKardNuev+'-'+TipoKardex + SelFD; //Aqui se concatenan las variables
    let inputExistenciaVan =$('#inputExistenciaVan').val();
    let inputPrecUniVan =$('#inputPrecUniVan').val();
    let CodPresentacion =$('#InputCodPres').val();
    let inputDetKard =$('#inputDetKard').val();
    let inputUltFila =$('#inputUltFila').val();
    let inputPritFila =$('#inputPritFila').val();

    if(inputKardNuev === '' || inputKardNuev === null || inputKardNuev === undefined){
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

    if(TipoKardex === 'Seleccione Tipo Kardex'){
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


    console.log("-------Camposmodificar--------")
    console.log(inputKarCer)
    console.log(NuevoKardexId)
    console.log(SelFD)
    console.log(inputMin)
    console.log(inputMax)
    console.log(CodPresentacion)
    console.log("-------Termina Campos Modifca-------")


    var cambiarkardexencab = $.ajax({
        url: './api/v1/Kardex.php?ModCambioKardex=true&AlmacNumIdKardexCerrar='+inputKarCer+'&AlmacNumIdKardexNuevo='+NuevoKardexId+'&AlmacStrTipo='+SelFD+'&AlmacNumNivelMinimo='+inputMin+'&AlmacNumNivelMaximo='+inputMax+'&AlmacNumCodPresentInsu='+CodPresentacion,
        type: 'PUT',

        success: function (response) {
            if (response.state.codstate==1){
                kardexbien = true;
                console.log(kardexbien + 'succes')
                swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Cambio Kardex',
                    text:response.state.strstate,
                    type: 'success',
                    pause_on_hover: true,
                    delay: 5000
                });
                }
            else {
                swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Ups! Hubo un error',
                    text:response.state.strstate,
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
            }
        },

        error: function (request, status, error) {
            swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Ups!',
                text:'Se produjo un error al inicio',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });

        }
    });//fin ajax PUT


console.log(kardexbien + 'antes del wen')

    $.when(cambiarkardexencab).done(function(){
        console.log(kardexbien + 'Después del when')
        if (kardexbien == true){
            console.log('Entra a detalle del kardex')
            let datosdetallekardex = {
                AlmacNumIdKardexCerrar: inputKarCer,
                AlmacNumIdKardexNuevo: NuevoKardexId,
                FilaSeleccionada: inputDetKard,
                UltimaFila: inputUltFila,
                PrimeraFila: inputPritFila
            };

            console.log('Iniciadetalle')
            console.log(datosdetallekardex)
            console.log('TerminaDetalle')
            $.ajax({
                url: "./api/v1/Kardex.php?ModCambioKardexDetalle=true",
                type: 'POST',
                data: datosdetallekardex,
                beforeSend: function () {
                    $('#btnCambiarKardex').text('APLICAR CAMBIOS').prop('disabled', true)
                },
                success: function (response) {
                    $.toast({
                        title: 'Informativo',
                        subtitle: '1 segundo',
                        content: response.state.strstate,
                        type: 'success',
                        pause_on_hover: true,
                        delay: 5000
                    });
                    $('#btnCambiarKardex').text('APLICAR CAMBIOS').prop('disabled', true)
                    fnOpenForm(event, 'AlmKardex')


                },
                error: function (request, status, error) {
                    console.log(request);
                    $.toast({
                        title: 'Ups!',
                        subtitle: '1 segundo',
                        content: response.state.strstate,
                        type: 'error',
                        pause_on_hover: true,
                        delay: 5000
                    });
                    $('#btnCambiarKardex').text('APLICAR CAMBIOS').prop('disabled', false)

                }
            });//Termina Post
        }
        else{
            swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Ups!',
                text:'Se produjo un error en el detalle',
                subtitle: '1 segundo',
                content: 'Revisar el detalle de los kadex',
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
        }
    });
}




























function ejecutarRep(){
    let NumKardex = $('#inputKardexAlm').val()
    let NumCodPres = $('#SelCodUnico').val()
    // window.open('http://' + window.location.hostname + '/Almacen/runreports/RepKardex.php?FarmNumIdKardexFarm=' + FarmNumIdKardexFarm+'&AlmacNumCodPresentInsu='+codigopresenta);
    window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/RepAlmacKardexGn.php?AlmacNumIdKardex=' + NumKardex);
    $('#inputAlmCGC').val('');
    fnOpenForm(event, 'AlmKardex')
}