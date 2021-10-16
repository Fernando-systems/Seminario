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

function mostrarcontrasenanueva(){
    var tipo = document.getElementById("InputnewPassword");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}

function mostrarcontrasenanuevaset(){
    var tipo = document.getElementById("InputsetnewPassword");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}

function change_Password() {
    let InputUsuario = $('#InputUsuario').val();
    let Inputoldpassword = $('#Inputoldpassword').val();
    let InputnewPassword = $('#InputnewPassword').val();
    let InputsetnewPassword = $('#InputsetnewPassword').val();
    var validar = false;


    if(InputUsuario == '' ||InputUsuario == null ||InputUsuario == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Usuario no puede ir vacío',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(Inputoldpassword == '' ||Inputoldpassword == null ||Inputoldpassword == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Contraseña Antigua Vacía',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(InputnewPassword == '' ||InputnewPassword == null ||InputnewPassword == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Nueva Contraseña Vacía',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(InputsetnewPassword == '' ||InputsetnewPassword == null ||InputsetnewPassword == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Confirmar Contraseña Vacía',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }
    if(InputnewPassword == InputsetnewPassword){
        let datos = {
            Usuario: InputUsuario,
            AntiguaContraseña: Inputoldpassword,
            NuevaContraseña: InputsetnewPassword,
        };

        console.log(datos);
        $.ajax({
            url: './api/v1/CambioPass.php',
            type: 'POST',
            data: datos,
            beforeSend: function () {
                $("#btnchangePassword").text('GUARDANDO...').prop('disabled', true);
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
                $("#btnchangePassword").text('GUARDAR').attr('disabled', true);

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
                $("#btnchangePassword").text('GUARDAR').attr('disabled', false);
            }
        });
    }
    else{
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Nuevas Contraseñas No Son Iguales',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
    }

}

(function Usuarioactivo() {
    $.ajax({
        url: './api/v1/CambioPass.php?Usuario',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                Usuario = json[index].Usuario;

                $('#InputUsuario').val(Usuario);
                console.log(Usuario)
            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
})();


