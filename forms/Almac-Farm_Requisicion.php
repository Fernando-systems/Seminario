<div class="container-fluid" style="margin-top: 50px">
    <div id="AlmacenRequi" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">REQUISICIÓN</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#AlmacenRequi').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCorrelativoCGCAlmacFarm">Correlativo CGC</label>
                    </div>
                    <input type="text" class="form-control" id="inputCorrelativoCGCAlmacFarm">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmFechaAlmacFarm">Fecha</label>
                    </div>
                    <input type="text" class="form-control" id="inputAlmFechaAlmacFarm" >
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputdescripAlmacFarm">Descripción</label>
                    </div>
                    <input type="text" class="form-control" id="inputdescripAlmacFarm" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputdeptoAlmacFarm">Depto:</label>
                    </div>
                    <select id="inputdeptoAlmacFarm" class="form-control" disabled="">
                        <option value="593">Farmacia Interna</option>
                    </select>
                </div>



                <!--<div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputcodigo">Unidad Solicitante</label>
                    </div>
                    <select id="selUniSolicitante" class="form-control" >
                        <option value="230">230 CONSULTA NUTRICIÓN</option>
                        <option value="235">235 CONSULTA PSICOLOGIA</option>
                        <option value="273">273 CONSULTA MEDICINA INTERNA </option>
                        <option value="289">289 CONSULTA FISIATRÍA</option>
                        <option value="299">299 CONSULTA MEDICA GENERAL</option>
                        <option value="309">309 CONSULTA CIRUGÍA GENERAL</option>
                        <option value="321">321 CONSULTA CIRUGIA PROCTOLOGIA</option>
                        <option value="328">328 CONSULTA PEDIATRIA GENERAL</option>
                        <option value="353">353 CONSULTA GINECOLOGIA</option>
                        <option value="354">354 CONSULTA OBTETRICA</option>
                        <option value="356">356 CONSULTA ODONTOLOGIA</option>
                        <option value="518">518 LABORATORIO CLINICO</option>
                        <option value="562">562 TERAPIA FISICA</option>
                        <option value="564">564 TERAPIA DEL LENGUAJE</option>
                        <option value="571">571 TERAPIA OCUPACIONAL</option>
                        <option value="593">593 SERVICIO FARMACEUTICO</option>
                        <option value="661">661 COSTURERIA</option>
                        <option value="665">665 MANTENIMIENTO</option>
                        <option value="670">670 ADMINISTRACION</option>
                        <option value="866">866 CONSULTA TRAUMATOLOGÍA Y ORTOPEDIA</option>
                        <option value="884">864 CONSULTA MAXILOFACIAL</option>

                    </select>
                </div>-->


            </div>

            <div class="row" style="align-content: center">

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmCodigoAlmacFarm">Código</label>
                    </div>
                    <input type="text" class="form-control" id="inputAlmCodigoAlmacFarm" onchange="buscarInsumoGeneral();">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNombreProductoAlmacFarm">Nombre del producto</label>
                    </div>
                    <input type="text" class="form-control" id="inputNombreProductoAlmacFarm" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPresentacionInsumoAlmacFarm">Cant. Y Unidad</label>
                    </div>
                    
                    <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)">
                        <option value="0">Seleccione Unidad</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputKardexAlmacFarm">Kardex</label>
                    </div>
                    <input type="text" class="form-control" id="inputKardexAlmacFarm" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPrecio">Cant. Existente</label>
                    </div>
                    <input type="text" class="form-control" id="inputCantExis" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputcantingresaAlmacFarm">Cantidad A Ingresar</label>
                    </div>
                    <input type="text" class="form-control" id="inputcantingresaAlmacFarm">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPrecio">Precio unitario</label>
                    </div>
                    <input type="text" class="form-control" id="inputPrecio">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputfechavenciAlmacFarm">Vencimiento</label>
                    </div>
                    <input type="date" class="form-control" id="inputfechavenciAlmacFarm" >
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputnoloteAlmacFarm">Lote</label>
                    </div>
                    <input type="text" class="form-control" id="inputnoloteAlmacFarm" >
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputnoUnidadAlmacFarm">Unidad</label>
                    </div>
                    <input type="text" class="form-control" id="inputnoUnidadAlmacFarm" >
                </div>


            </div>
            <!--<div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputSolicitada">Lote y Vencimiento</label>
                    </div>
                    <select class="form-control" id="selLoteVencimiento" onchange="cargarFormsVencimiento(this.value)" disabled>
                        <option value="0">Seleccione lote o fecha de vencimiento</option>
                    </select>
                </div>

            </div>
            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantidadAutorizada">Cantidad autorizada</label>
                    </div>
                    <input type="text" class="form-control" id="inputCantidadAutorizada">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantidadDespachada">Cantidad despachada</label>
                    </div>
                    <input type="text" class="form-control" id="inputCantidadDespachada">
                </div>

            </div>-->



            <div class="modal-footer" style="text-align: right">

                <button class="btn btn-success btn-sm"  id="btnGuardarEntrada" onclick="añadirTabla()"> Añadir
                    <i class="fas fa-plus-circle"></i>
                </button>

            </div>

            <table class="table table-striped  table-responsive table-dark" style="text-align: center;">
                <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th width="col">Codigo</th>
                    <th width="380">Descripción</th>
                    <th width="col">Doc. Respaldo</th>
                    <th width="380">Nombre del producto</th>
                    <th scope="col">Unidad de Medida</th>
                    <th scope="col">Cantidad Ingresada</th>
                    <th scope="col">Precio Unitario</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha De Vencimiento</th>
                    <th scope="col">No. Lote</th>
                    <th scope="col">No. Kardex</th>
                </tr>
                </thead>
                <tbody id="tbodyAlmacFarm">

                </tbody>
            </table>

            <!--<div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmSolicitante">Solicitante</label>
                    </div>
                    <input type="text" class="form-control" id="inputAlmSolicitante" placeholder="Nombre solicitante">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmCargo">Cargo</label>
                    </div>
                    <input type="text" class="form-control" id="inputAlmCargo" placeholder="Cargo solicitante">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmJefeIn">Jefe Inmediato</label>
                    </div>
                    <input type="text" class="form-control" id="inputAlmJefeIn" placeholder="Nombre Jefe Inmediato">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCargoJefeIn">Cargo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCargoJefeIn" placeholder="Cargo Jefe Inmediato">
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmRecibe">Quien recibe</label>
                    </div>
                    <input type="text" class="form-control" id="inputAlmSolicitante" placeholder="Nombre Recibe">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCargoRecibe">Cargo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCargoRecibe" placeholder="Cargo Recibe">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmEntrega">Entrega</label>
                    </div>
                    <input type="text" class="form-control" id="inputAlmEntrega" placeholder="Nombre Entrega" disabled>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCargoEntrega">Cargo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCargoEntrega" placeholder="Cargo Recibe" disabled>
                </div>
            </div>-->

            <div class="col-sm" style="text-align: right">
                <button class="btn btn-success btn-sm"  id="btnGuardarRequisicion" onclick="InsertEntrada()"><i class="far fa-share-square"></i> Guardar</button>
            </div>

        </div>
    </div>
</div>

<script src="./js/js_Almac-Farm_Entrada.js"></script>


