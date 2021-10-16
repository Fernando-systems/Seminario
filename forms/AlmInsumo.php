<!-- Loading
<div class="d-flex justify-content-center">
    <div class="spinner-border text-success m-10" role="status" style="width: 15rem; height: 15rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>-->

<!-- Contenido-->
<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="InsumoEnt" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">AGREGAR INSUMO NUEVO</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">
            <div class="row">
                 <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodInsumoGeneral">Código General</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodInsumoGeneral" onchange="buscarInsumoGeneral()">
                </div>
                
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="SelCodUnico">Presentación</label>
                    </div>
                    
                    <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)">
                        <option value="0">Seleccione Unidad</option>

                    </select>
                </div>

            </div>
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRenglon">Renglón</label>
                    </div>
                    <input type="text" class="form-control" id="inputRenglon">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodInsumo">Código de insumo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodInsumo">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputInsumo">Insumo</label>
                    </div>
                    <input type="text" class="form-control" id="inputInsumo">
                </div>
            </div>


            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCaracteristica">Características</label>
                    </div>
                    <textarea rows="3"  class="form-control" id="inputCaracteristica"> </textarea>
                </div>
            </div>


            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPresentacion">Presentación</label>
                    </div>
                    <input type="text" class="form-control" id="inputPresentacion">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantidadyUnidad">Cantidad y Unidad</label>
                    </div>
                    <input type="text" class="form-control" id="inputCantidadyUnidad">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodPresentacion">Código de presentación</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodPresentacion">
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputKardex">No. Kardex</label>
                    </div>
                    <input type="number" class="form-control" id="inputKardex">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="TipoKardex">Tipo Kardex</label>
                    </div>
                    <select class="form-control" id="TipoKardex">
                        <option value="0">Seleccione Tipo Kardex</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="SelFD">Kardex</label>
                    </div>
                    <select id="SelFD" class="form-control ">
                        <option value="0"> Seleccione</option>
                        <option value="D">DIGITAL</option>
                        <option value="F">FISICO</option>

                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputMin">Mínimo</label>
                    </div>
                    <input type="text" class="form-control" id="inputMin">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputMax">Máximo</label>
                    </div>
                    <input type="text" class="form-control" id="inputMax">
                </div>
            </div>

        </div>

        <div class="modal-footer" style="text-align: right" id="btnGuardar">
            <button class="btn btn-success btn-sm"  id="btnAgregarInsumo" onclick="CrearInsumo();"><i class="fas fa-plus-circle"></i> AGREGAR </button>
        </div>
    </div>
</div>



<script src="./js/js_AlmInsumo.js"></script>

