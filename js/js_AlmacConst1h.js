$(document).ready(function (){
    datos();
});

function datos(){

$.ajax({
        url: './api/v1/AlmacEncargados.php?mostAlmacen=true', //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);


            $(json).each(function (index, item) {
                IdUsuarioAlmacen = json[index].IdUsuarioAlmacen;
                LoginAlmacen = json[index].LoginAlmacen;
                AlmacNumIdTipo = json[index].AlmacNumIdTipo;
                StrNombreEncargado = json[index].StrNombreEncargado;
                //$('#Inputstrresponsable').val(TipoAlmacen);

                if (AlmacNumIdTipo == 1 && LoginAlmacen == 'fcardona'){

                    $('#inputNomEncAlmac').val(StrNombreEncargado);
                    $('#inputNombAlmac').val("Almacén de Suministros");
                    //$("#btnAlmacSumi").text('GUARDAR').attr('disabled', false).val(1);

                }
                else if (AlmacNumIdTipo == 2 && LoginAlmacen == 'eramirez'){
                    $('#inputNomEncAlmac').val(StrNombreEncargado);
                    $('#inputNombAlmac').val("Almacén de Medicamentos y Productos Afines");
                    //$("#btnAlmacMedi").text('GUARDAR').attr('disabled', false).val(2);

                }
                else if (AlmacNumIdTipo ==3 && LoginAlmacen == 'oespinoza'){
                    $('#inputNomEncAlmac').val(StrNombreEncargado);
                    $('#inputNombAlmac').val("Almacén de Material Médico Quirúrgico y Productos Afines");
                    //$("#btnAlmacMMQ").text('GUARDAR').attr('disabled', false).val(3);

                }
                else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'El Usuario actual solo puede ver los encargados',
                    });
                }
                //$('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+AlmacStrPresentInsu+' '+ AlmacStrCantYUnidInsu+'</option>')
            });


        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}