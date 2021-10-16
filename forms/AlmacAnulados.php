<!-- Loading
<div class="d-flex justify-content-center">
    <div class="spinner-border text-success m-10" role="status" style="width: 15rem; height: 15rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>-->

<!-- Contenido-->
<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="AlmAnulados" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">Anular Formulario 1H</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#AlmAnulados').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoAnular">No. Anular</label>
                    </div>
                    <input type="number" class="form-control" id="inputNoAnular" onchange="Buscar1H()">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFechaAnul">Fecha Actual</label>
                    </div>
                    <input type="date" class="form-control" id="inputFechaAnul" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputProveedor">Proveedor</label>
                    </div>
                    <input type="text" class="form-control" id="inputProveedor" disabled>
                </div>

            </div>
            <!--<div class="modal-footer" style="text-align: right" id="btnGuardarEnc">
                <button class="btn btn-success btn-sm"  id="btnGuardarEnc"><i class="fas fa-plus-circle"></i>Buscar</button>
            </div>-->

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoNuevo">Nuevo No. 1H</label>
                    </div>
                    <input type="number" class="form-control" id="inputNoNuevo">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFechaNueva">Nueva Fecha</label>
                    </div>
                    <input type="date" class="form-control" id="inputFechaNueva">
                </div>
            </div>

            <div class="modal-footer" style="text-align: center">
                <button class="btn btn-success btn-sm"  id="btnGuardarAnul" onclick="GuardarAnulacion()"><i class="fas fa-plus-circle"></i> Guardar </button>
                <button class="btn btn-success btn-sm"  id="btnImprAnu" onclick="ejecutarRep()" disabled><i class="fas fa-plus-circle"></i> Imprimir </button>
            </div>
        </div>
    </div>



    <script src="./js/js_AlmacAnul.js"></script>



