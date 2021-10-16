<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="Testado" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">Testado</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#Testado').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">

            <div class="row" id="formDatos">
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputTestadoNo">No. CGC</label>
                    </div>
                    <input type="number" class="form-control" id="inputTestadoNo">
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-7">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputTestado">Testado</label>
                    </div>
                    <textarea rows="4" type="text" class="form-control" id="inputTestado" name="inputNoCGC"></textarea>
                </div>
            </div>

            <div class="modal-footer" style="text-align: right" id="btnGuardarTest">
                <button class="btn btn-success btn-block"  id="btnTest"><i class="fas fa-plus-circle"></i>Agregar Testado</button>
                <button class="btn btn-success btn-block"  id="btnTestImprimir" onclick="ejecutarRepTest()"><i class="fas fa-plus-circle"></i>Imprimir</button>

            </div>
        </div>
    </div>

    <script src="./js/js_AlmTestado.js"></script>