function fnOpenForm(evt, formname) {
    var Count = 0;
    $("#content").hide();


    var permisos = $.getJSON("./api/v1/Permisos.php?SegStrNomPermiso=" + formname, function (data) {
        Count = data.data.length;

    });

    $.when(permisos).done(function () {
        $("#content").empty();
        if (Count > 0) {
            $("#content").load('./forms/' + formname + '.php');
        } else {
            $("#content").load('./forms/CitFrmDenegado.php');
        }
        $("#content").show();
    }).fail(function () {
        if (permisos.status === 403) {
            location.reload();
        }
    });
}



function myDropFunc(elemento) {
    var x = document.getElementById(elemento);

    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-indigo";

    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-indigo", "");
    }
}

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})


function btnCrearInsumo() {
    $('#modalInsumo').fadeOut();//Cerrar modal
    $("#modalInsumo").modal('toggle');
}



function buscarInsumo() {
    let codInsumo = $('#inputInsumoBus').val();
    $('#bodyModal').empty();
    $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodPresentInsu=' + codInsumo, //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            if(json.length != 0){

                $(json).each(function (index, item) {
                    AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                    AlmacNumRenglon = json[index].AlmacNumRenglon;
                    AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                    AlmacStrCaractInsu = json[index].AlmacStrCaractInsu;
                    AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                    AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                    AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;

                    $('#bodyModal').append('<p> Cod. Insumo' +AlmacNumCodInsumo+'</p>');
                    $('#bodyModal').append('<p></p>');
                    $('#bodyModal').append('<p></p>');
                    $('#bodyModal').append('<p></p>');
                    $('#bodyModal').append('<p></p>');
                    $('#bodyModal').append('<p></p>');


                    $("#modalInsumo").modal('toggle');
                    $('#crearInsumo').prop('disabled', true);
                });

            }else{
                $('#bodyModal').append('<p>Insumo no encontrado</p>');
                $("#modalInsumo").modal('toggle');
                $('#crearInsumo').prop('disabled', false);
            }
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}


$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
    });


    return false;
});