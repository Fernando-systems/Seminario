<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 12/03/2019
 * Time: 09:43 AM
 */
?>


<!-- IMAGEN DE CARGA -->
<div class="d-flex justify-content-center">
    <div id="xload" class="spinner-grow text-primary" role="status" style="width: 45rem; height: 45rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- FIN IMGAGEN CARGA -->

<div id="vcontent" style="display: none;">
    <div class="card">
        <div class="modal-header text-center text-white blue-gradient">
            <button id="btnUpdate" class="btn primary-color-dark waves-effect btn-circle float-left "
                    onclick="btnUpdate()">
                <i class="fas fa-sync"></i></button>
            <h3 class="modal-title w-100 font-weight-bold">ACTUALIZACION DEL SISTEMA</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#vcontent').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="input-group input-group-lg mb-sm-5 col-sm-11 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text">Versión</label>
                    </div>
                    <input readonly type="text" class="form-control" id="mensajeServidor">
                </div>
                <div class="input-group mb-sm-5 col-sm-1">
                    <div class="spinner-border text-primary" role="status" id="load" style="display: none">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#xload').fadeOut();
        $('#vcontent').fadeIn();
    });

    function btnUpdate() {
        $.ajax({
            data: null,
            url: './api/utlUpdate.php',
            type: 'POST',
            beforeSend: function () {
                $('#load').show();
                $('#mensajeServidor').val('Procesando por favor espere');
                $('#btnUpdate').prop('disabled', true);
            },
            success: function (response) {
                $('#mensajeServidor').val(response.data);
                $('#btnUpdate').prop('disabled', false);
                $('#load').hide();
            }
        });
    };

</script>