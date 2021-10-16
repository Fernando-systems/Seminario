<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="InsumoEnt" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">ENTRADA DE INSUMO</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFecha">Fecha de ingreso</label>
                    </div>
                    <input type="text" class="form-control" id="inputFecha" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFechaVen">Fecha vencimiento</label>
                    </div>
                    <input type="text" class="form-control" id="inputFechaVen">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputKardex">Kardex</label>
                    </div>
                    <input type="text" class="form-control" id="inputKardex">
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoRef">Número de referencia</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoRef">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputUMedida">Unidad de medida</label>
                    </div>
                    <input type="text" class="form-control" id="inputUMedida">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoLote">Número de lote</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoLote">
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRemitente">Remitente</label>
                    </div>
                    <input type="text" class="form-control" id="inputRemitente">
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPrecioUnitario">Precio unitario</label>
                    </div>
                    <input type="text" class="form-control" id="inputPrecioUnitario">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantidad">Cantidad</label>
                    </div>
                    <input type="text" class="form-control" id="inputCantidad">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPrecioTotal">Precio total</label>
                    </div>
                    <input type="text" class="form-control" id="inputPrecioTotal">
                </div>
            </div>

            <div class="modal-footer" style="text-align: right">
                <button class="btn btn-success btn-sm"  id="btnGuardarEntrada"> GUARDAR </button>
            </div>
        </div>
    </div>
</div>
