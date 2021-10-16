<div class="container-fluid" style="margin-top: 50px">
    <div id="FarmEntradaFarmacia" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">ENTRADA FARMACIA</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#FarmEntradaFarmacia').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFechaIngreso">Fecha Ingreso</label>
                    </div>
                    <input type="date" class="form-control" id="inputFechaIngreso">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputDodRespaldo">Documento de Respaldo</label>
                    </div>
                    <input type="number" class="form-control" id="inputDocRespaldo">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="TipAlmac">Almacén</label>
                    </div>
                    <select class="form-control" id="TipAlmac">
                        <option value="0">Seleccione Unidad</option>
                        <option value="-MQ">Médico Qirúrgico</option>
                        <option value="-MP">Medicamentos</option>
                        <option value="-AS">Suministros</option>
                    </select>

                </div>


                <button class="btn btn-success btn-sm" id="btnGuardarRequisicion" onclick="llenarTablaDetalle()"><i
                            class="far fa-share-square"></i> Buscar
                </button>

                </button>

                <!-- <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputAlmCodigo">Código</label>
                     </div>
                     <input type="text" class="form-control" id="inputCodProducto" onchange="buscarInsumoGeneral();">
                 </div>

                 <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputRenglon">Presentacion</label>
                     </div>
                     <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value);" disabled>
                         <option value="0">Seleccione presentacion</option>
                     </select>

                 </div>

                 <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputNomInsumo">Nombre del Insumo</label>
                     </div>
                     <input type="text" class="form-control" id="inputNomInsumo">
                 </div>




                 <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputDespInsumo">Descripcion del Insumo</label>
                     </div>
                     <input type="text" class="form-control" id="inputDespInsumo">
                 </div>

                 <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputPresentacion">Presentacion</label>
                     </div>
                     <input type="text" class="form-control" id="inputPresentacion">
                 </div>

                 <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputKarFarmacia">Kardex Farmacia</label>
                     </div>
                     <input type="text" class="form-control" id="inputKarFarmacia" disabled>
                 </div>

                 <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputFecVencimiento">Fecha de Vencimiento</label>
                     </div>
                     <input type="text" class="form-control" id="inputFecVencimiento">
                 </div>

                 <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputLote">No. de Lote</label>
                     </div>
                     <input type="text" class="form-control" id="inputLote">
                 </div>

             </div>
             <div class="row">
                 <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputCantidad">Cantidad</label>
                     </div>
                     <input type="text" class="form-control" id="inputCantidad">
                 </div>

                 <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputPrecUnitario">Precio Unitario</label>
                     </div>
                     <input type="text" class="form-control" id="inputPrecUnitario">
                 </div>

                 <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                     <div class="input-group-prepend">
                         <label class="input-group-text" for="inputTotal">Total</label>
                     </div>
                     <input type="text" class="form-control" id="inputTotal">
                 </div>-->

            </div>

            <table class="table table-striped  table-responsive table-dark" id="tblDetalleEntrada">
                <thead>
                <tr align="center">
                    <th width="300">Fecha</th>
                    <th width="200">Documento de Respaldo</th>
                    <th width="500">Descripcion</th>
                    <th width="480">Presentación</th>
                    <th width="480">Cantidad y Unidad</th>
                    <th width="480">Cantidad</th>
                    <th width="480">Precio Unitario</th>
                    <th width="480">Total</th>
                    <th width="480">No. Lote</th>
                    <th width="480">Vencimiento</th>
                    <th width="480">Unidades</th>
                    <th width="480">Nueva Cantidad</th>
                    <th width="480">Precio Unitario</th>
                    <th width="480">Insumo</th>
                    <th width="480">Presentación</th>
                    <th width="480">Unidad</th>
                </tr>
                </thead>
                <tbody id="tbodyDetalleEntrada">

                </tbody>


            </table>
            <div class="modal-footer" style="text-align: left">

                <button class="btn btn-success btn-sm" id="btnGuardarEntrada" onclick="InsetEntrada()" disabled> Guardar
                    <i class="fas fa-plus-circle"></i>
                </button>

            </div>


            <h1 class="text-center">
                Insumos Pendientes de Asignar Kardex
            </h1>
            <div class="row">

                <table class="table table-striped text-center table-responsive table-dark" id="tblaggkardexentrada">
                    <thead>
                    <tr align="center">
                        <th width="100">Renglón</th>
                        <th width="100">Código</th>
                        <th width="250">Nombre</th>
                        <th width="800">Características</th>
                        <th width="250">Presentación</th>
                        <th width="300">Unidad</th>
                        <th width="200">No. Requi</th>
                        <th width="200">Lote</th>
                        <th width="200">Vencimiento</th>
                        <th width="200">Cantidad</th>
                        <th width="200">Prec. Unitario</th>
                        <th width="200">Total</th>
                        <th width="200">Kardex Nuevo</th>
                        <th width="200">Unir Kardex</th>
                        <th width="200">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody id="tbodyaggkardexentrada">

                    </tbody>


                </table>
            </div>
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

            <!--  <div class="col-sm" style="text-align: right">
                  <button class="btn btn-success btn-sm"  id="btnGuardarRequisicion" onclick="insertarEncabezado()"><i class="far fa-share-square"></i> Guardar</button>
              </div>-->

        </div>
    </div>
</div>

<div class="container-fluid">
    <div id="asignarkardex" class="card modal container-fluid">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">AGREGAR KARDEX</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#asignarkardex').fadeOut();">
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
                    <input type="text" class="form-control" id="inputPresent">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPres">Presentación</label>
                    </div>
                    <input type="text" class="form-control" id="inputPres">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputUniMed">Unidad De Medidas</label>
                    </div>
                    <select type="text" class="form-control" id="inputUniMed">
                        <option>SELECCIONE</option>
                        <option></option>
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
                    <button class="btn btn-success btn-sm" id="btnGuardarKardex" onclick="insertarKardex()"> Guardar
                        Kardex
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
                            <input type="text" class="form-control" id="inputCantExis"
                                   onchange="valorTotalprimerRegistro1()">
                        </div>


                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputPrecUnitario">Precio Unitario</label>
                            </div>
                            <input type="text" class="form-control" id="inputPrecUnitario"
                                   onchange="valorTotalprimerRegistro2()">
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
                            <button class="btn btn-success btn-sm" id="btnGuardarRegistro"
                                    onclick="Insertarprimerregistro()"> Guardar Primer Registro
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
                            <input type="text" class="form-control" id="inputCantExisReaj"
                                   onchange="valorTotalprimerReajuste1()">
                        </div>


                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputPrecUnitarioReaj">Precio Unitario</label>
                            </div>
                            <input type="text" class="form-control" id="inputPrecUnitarioReaj"
                                   onchange="valorTotalprimerReajuste2()">
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
                                <label class="input-group-text" for="inputFecVencimientoReaj">Fecha de
                                    Vencimiento</label>
                            </div>
                            <input type="date" class="form-control" id="inputFecVencimientoReaj">
                        </div>

                        <div class="col-sm" style="text-align: right">
                            <button class="btn btn-success btn-sm" id="btnGuardarRegistro" onclick="()"> Guardar Primer
                                Reajuste
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div id="unirKardex" class="card modal" style="overflow-y: scroll;">
            <div class="modal-header text-center white-text green-grad">
                <h3 class="modal-title w-100 font-weight-bold">UNIR KARDEX</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#unirKardex').fadeOut();">
                    <span aria-hidden="true" class="text-black-50">&times;</span>
                </button>
            </div>


            <div class="card-body">
                <form class="form-inline active-cyan-3 active-cyan-4">

                    <table id="tbBuscarK" class="table table-sm table-hover w3-border" width="99%">

                        <thead class="primary-color text-white">
                        <tr>
                            <th class="">Código de Insumo</th>
                            <th class="">Nombre</th>
                            <th class="">Caracteristicas</th>
                            <th class="">Renglon</th>
                            <th class="">Kardex</th>
                            <th class="">Cantidad Existente</th>
                            <th class="">Presentación</th>
                            <th class="">Unidad</th>
                        </tr>

                        </thead>
                        <tbody></tbody>
                </table>
                <div class="row" id="ultimaSeccion">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="input">Kardex Seleccionado</label>
                        </div>
                        <input type="text" class="form-control" id="inputKardexSelec">
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-primary" id="btnUnirKardex">Unir Kardex</button>
                    </div>
                </div>

            </div>
        </div>

</div>


<script src="./js/js_FarmKardex.js"></script>
<script src="./js/js_EntradaFarmacia.js"></script>