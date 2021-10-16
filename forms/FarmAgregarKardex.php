<div id="vcontent" class="container-fluid" style="margin-top: 50px">

    <div id="InsumoEnt" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">AGREGAR KARDEX</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodInsumo">Codigo de Insumo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodInsumo" onchange="buscarInsumoGeneral();">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="SelCodUnico">Cant. Y Unidad</label>
                    </div>

                    <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)">
                        <option value="0">Seleccione Unidad</option>

                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomProducto">Nombre del Producto</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomProducto">
                </div>


                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCaracteristicas">Caracteristicas</label>
                    </div>
                    <input type="text" class="form-control" id="inputCaracteristicas">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPresent">Despachar</label>
                    </div>
                    <input type="text" class="form-control" id="inputPresent" >
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPres">Presentación</label>
                    </div>
                    <input type="text" class="form-control" id="inputPres" >
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputUniMed">Unidad De Medidas</label>
                    </div>
                    <select type="text" class="form-control" id="inputUniMed">
                        <option>SELECCIONE</option>
                        <option> </option>
                        <option>ml</option>
                        <option>mg</option>
                        <option>gramo</option>
                        <option>Litro</option>
                        <option>Galón</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRenPresupuestario">Reglón Presupuestario</label>
                    </div>
                    <input type="text" class="form-control" id="inputRenPresupuestario" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoKardexF">Número de Kardex</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoKardexF">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-1">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputMinimo">Mínimo</label>
                    </div>
                    <input type="text" class="form-control" id="inputMinimo">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-1">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputMaxinoF">Máximo</label>
                    </div>
                    <input type="text" class="form-control" id="inputMaximoF">
                       </div>
                       

                    <div class="col-sm" style="text-align: right">
                    <button class="btn btn-success btn-sm"  id="btnGuardarKardex" onclick="insertarKardex()"> Guardar Kardex
                        <i class="fas fa-plus-circle"></i>
                    </button>
<div class="input-group input-group-sm mb-sm-3 col-sm-4">
    <div class="input-group-prepend">
        <label class="input-group-text" for="SelRegisReajus">Tipo Entrada</label>
    </div>
        <select class="form-control" id="SelRegisReajus" onchange="Mostrartipoentrada()">
            <option value="Selec"> SELECCIONE</option>
            <option value="PrimerReg">Primer Registro Kardex</option>
            <option value="PrimerReaj">Primer Registro Reajuste</option>
            </select>
</div>


<div class="row" id="PrimerRegistro" hidden="">
    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputFechaActual">Fecha</label>
        </div>
            <input type="date" class="form-control" id="inputFechaActual">
    </div>
           
    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputNoReferencia">No. de Referencia</label>
        </div>
            <input type="text" class="form-control" id="inputNoReferencia">
    </div>

    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputDescripcion">Descripcion</label>
        </div>
            <input type="text" class="form-control" id="inputDescripcion">
    </div>

    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputCantExis">Cantidad Existente</label>
        </div>
            <input type="text" class="form-control" id="inputCantExis" onchange="valorTotalprimerRegistro1()">
    </div>
                    
                    
    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputPrecUnitario">Precio Unitario</label>
        </div>
            <input type="text" class="form-control" id="inputPrecUnitario" onchange="valorTotalprimerRegistro2()">
    </div>

    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputValorTotal">Valor Total</label>
        </div>
            <input type="text" class="form-control" id="inputValorTotal" disabled="">
    </div>
                    
    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputNoLote">No. de Lote</label>
        </div>
            <input type="text" class="form-control" id="inputNoLote">
    </div>

    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputFecVencimiento">Fecha de Vencimiento</label>
        </div>
            <input type="date" class="form-control" id="inputFecVencimiento">
    </div>

    <div class="col-sm" style="text-align: right">
        <button class="btn btn-success btn-sm"  id="btnGuardarRegistro" onclick="Insertarprimerregistro()"> Guardar Primer Registro
            <i class="fas fa-plus-circle"></i>
        </button>
    </div>  
</div>

<div class="row" id="PrimerReajuste" hidden="">
    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputFechaActualReaj">Fecha</label>
        </div>
            <input type="date" class="form-control" id="inputFechaActualReaj">
    </div>
           
    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputNoReferenciaReaj">No. de Referencia</label>
        </div>
            <input type="text" class="form-control" id="inputNoReferenciaReaj">
    </div>

    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputDescripcionReaj">Descripcion</label>
        </div>
            <input type="text" class="form-control" id="inputDescripcionReaj">
    </div>

    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputCantExisReaj">Cantidad Nueva</label>
        </div>
            <input type="text" class="form-control" id="inputCantExisReaj" onchange="valorTotalprimerReajuste1()">
    </div>
                    
                    
    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputPrecUnitarioReaj">Precio Unitario</label>
        </div>
            <input type="text" class="form-control" id="inputPrecUnitarioReaj" onchange="valorTotalprimerReajuste2()">
    </div>

    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputValorTotalReaj">Valor Total</label>
        </div>
            <input type="text" class="form-control" id="inputValorTotalReaj" disabled="">
    </div>
                    
    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputNoLoteReaj">No. de Lote</label>
        </div>
            <input type="text" class="form-control" id="inputNoLoteReaj">
    </div>

    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputFecVencimientoReaj">Fecha de Vencimiento</label>
        </div>
            <input type="date" class="form-control" id="inputFecVencimientoReaj">
    </div>

    <div class="col-sm" style="text-align: right">
        <button class="btn btn-success btn-sm"  id="btnGuardarRegistro" onclick="()"> Guardar Primer Reajuste
            <i class="fas fa-plus-circle"></i>
        </button>
    </div>  
</div>

</div>
</div>

<script src="./js/js_FarmKardex.js"></script>