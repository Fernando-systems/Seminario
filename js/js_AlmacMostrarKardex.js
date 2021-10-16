//alertar toast
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

function buscarInsumoGeneral(){
let codInsumo = $('#inputCodProducto').val();
$('#SelCodUnico').empty();
$('#SelCodUnico').append("<option>Seleccione presentacion</option>");
let esperaInsumo = $.ajax({
    url: './api/v1/Insumo.php?AlmacNumCodInsumo=' + codInsumo, //
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

$.ajax({
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
var IdKardexFarmacia;
let esperarKFamrmacia =  $.ajax({
    url: './api/v1/Kardex.php?AlmacNumCodPresentInsu=' + codigoUnico,
    type: "GET",
    dataType: "json",
    contentType: "application/json; charset=utf-8",

    success: function (data) {
        var json = data.data;
        console.log(json);
        $(json).each(function (index, item) {

            IntIdKardex=  FarmNumIdKardexFarm= json[index].FarmNumIdKardexFarm;
            IntNivelMinimo= json[index].FarmNumNivelMinimo;
            IntNivelMaximo= json[index].FarmNumNivelMaximo;
            IntCodPresentInsu= json[index].IntCodPresentInsu;

            $('#inputKardexFarm').val(FarmNumIdKardexFarm);
            $('#inputMinima').val(FarmNumNivelMinimo);
            $('#inputMaximo').val(FarmNumNivelMaximo);

        });

    },
    error: function (data) {
        alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
    }
});

$.when(esperarKFamrmacia).done(function () {
   buscarKardexAlmacen(codigoUnico);
});

}





/*







function EntradaSalidaTb(){

var codigoInsumo = $('#inputCodProducto').val();
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

        $('#tblKardex').append('<tr></tr><td scope="col">'+AlmacDateFecha+'</td>' +
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
            '<td scope="col table-active">'+AlmacDateVencimi+'</td></tr>');
    });




},
error: function (data) {
    alert("No se lograron cargar los datos(EntradaKardex)" + data.responseText);
}
});

}//fin function TbEntradaSalida


*/