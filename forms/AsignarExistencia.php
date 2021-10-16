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
            <h3 class="modal-title w-100 font-weight-bold">INGRESAR EXISTENCIA MEDICAMENTOS</h3>
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
                    <input type="number" class="form-control" id="inputCodInsumoGeneral" onchange="buscarInsumoGeneral()">
                </div>
                
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="SelCodUnico">Presentación</label>
                    </div>
                    
                    <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)">
                        <option value="0">Seleccione Unidad</option>
                        inputAbreviatura
                    </select>
                </div>

            </div>
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRenglon">Renglón</label>
                    </div>
                    <input type="text" class="form-control" id="inputRenglon" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodInsumo">Código de insumo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodInsumo" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputInsumo">Insumo</label>
                    </div>
                    <input type="text" class="form-control" id="inputInsumo" disabled>
                </div>
            </div>


            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCaracteristica">Características</label>
                    </div>
                    <textarea rows="3"  class="form-control" id="inputCaracteristica" disabled> </textarea>
                </div>
            </div>


            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPresentacion">Presentación</label>
                    </div>
                    <input type="text" class="form-control" id="inputPresentacion" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantidadyUnidad">Cantidad y Unidad</label>
                    </div>
                    <input type="text" class="form-control" id="inputCantidadyUnidad" disabled>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodPresentacion">Código de presentación</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodPresentacion" disabled>
                </div>

            </div>


            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputKardex">No. de Kardex</label>
                    </div>
                    <input type="number" class="form-control" id="inputKardex">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputtipoalmac">Tipo Almacén</label>
                    </div>
                    <select class="form-control" id="inputtipoalmac">
                        <option value="0">Seleccione Tipo de Almacén</option>
                        <option value="-MP">Almacén de Medicamentos</option>
                        <option value="-MMQ">Almacén Médico Quirúrgico</option>
                        <option value="-AS">Almacén de Suministros</option>
                        <option value="-AL">Almacén de Alimentos</option>

                    </select>
                </div>
                <!--<div class="input-group input-group-sm mb-sm-3 col-sm-1">
                    <input type="text" class="form-control" id="inputAbreviatura" disabled>
                </div>-->
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputcantidad">Cantidad Existente</label>
                    </div>
                    <input type="number" class="form-control" id="inputcantidad">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputprecio">Precio Unitario</label>
                    </div>
                    <input type="number" class="form-control" id="inputprecio">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputLote">Lote</label>
                    </div>
                    <input type="text" class="form-control" id="inputLote">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputVencimiento">Vencimiento</label>
                    </div>
                    <input type="date" class="form-control" id="inputVencimiento">
                </div>
            </div>

        </div>

        <div class="modal-footer" style="text-align: right" id="btnGuardarExistencia">
            <button class="btn btn-success btn-sm"  id="btnGuardarExistencia" onclick="CrearExistencia()"><i class="fas fa-plus-circle"></i> AGREGAR </button>
        </div>
    </div>
</div>



<script src="./js/js_IngresarExistenciasMedi.js"></script>

