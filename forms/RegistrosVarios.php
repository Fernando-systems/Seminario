<div id="vcontent" class="container container-fluid" style="margin-top: 50px">
    <div id="InsumoEnt" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">INGRESOS VARIOS</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="card-body">
                    <div class="row">

                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="SelVarios">Tipo de Movimiento</label>
                            </div>
                            <select class="form-control" id="SelVarios" onchange="MostrarDatosVarios()">
                                <option Value="0"> SELECCIONE</option>
                                <option value="CPS">Cambio Proveedor Salida</option>
                                <option value="CPE">Cambio Proveedor Entrada</option>
                                <option value="SA">Salida Acta-Requisición</option>
                                <option value="EA">Entrada Acta-Requisición</option>
                                <option value="ST">Salida Traslado</option>
                                <option value="ET">Entrada Traslado</option>
                            </select>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputnodocument">No. Documento</label>
                            </div>
                            <input type="text" class="form-control" id="inputnodocument">
                        </div>


                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputDateMov">Fecha</label>
                            </div>
                            <input type="date" class="form-control" id="inputDateMov">
                        </div>


                        <!--
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputUnidSolReaj">Unidad Solicitante</label>
                            </div>
                            <input type="text" class="form-control" id="inputUnidSolReaj">
                        </div>
                        -->

                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputDescri">Descripción</label>
                            </div>
                            <input type="text" class="form-control" id="inputDescri">
                        </div>
                    </div>

                    <div class="modal-footer" style="text-align: right; margin-top: 15px"></div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputCodInsumoVar">Codigo Insumo</label>
                            </div>
                            <input type="number" class="form-control" id="inputCodInsumoVar" onchange="buscarInsumoGeneral()">
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="SelCodUnico">Cantidad y unidad</label>
                            </div>

                            <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)">
                                <option value="0">Seleccione Unidad</option>
                            </select>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputKardexR">Kardex</label>
                            </div>
                            <input type="text" class="form-control" id="inputKardexR" disabled>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputRenglonReaj">Renglón</label>
                            </div>
                            <input type="text" class="form-control" id="inputRenglonReaj" disabled>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputCaracVa">Características</label>
                            </div>
                            <input type="text" class="form-control" id="inputCaracVa" disabled>
                        </div>


                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputPresentVa">Presentación</label>
                            </div>
                            <input type="text" class="form-control" id="inputPresentVa" disabled>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-5" id="LoteVencimientoSalida" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selLoteVencimiento" id="LotVenc">Lote y Vencimiento</label>
                            </div>
                            <select class="form-control" id="selLoteVencimiento" onchange="cargarFormsVencimiento(this.value)" >
                                <option value="0">Seleccione lote o fecha de vencimiento</option>
                            </select>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="NodeLoteSal" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNodeLoteSal">No. de Lote</label>
                            </div>
                            <input type="text" class="form-control" id="inputNodeLoteSal" disabled>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-4" id="VenciSal" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputVenciSal">Fecha de Vencimiento</label>
                            </div>
                            <input type="text" class="form-control" id="inputVenciSal" disabled>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="PUnitSal" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputPUnitSal">Precio Unitario</label>
                            </div>
                            <input type="text" class="form-control" id="inputPUnitSal" disabled>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="CantExisEntr" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputCantExisEntr">Cantidad Existente</label>
                            </div>
                            <input type="int" class="form-control" id="inputCantExisEntr" disabled>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="CantExisSal" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputCantExisSal">Cantidad Existente</label>
                            </div>
                            <input type="int" class="form-control" id="inputCantExisSal" disabled>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="CantSalida" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputCantSalida">Cantidad de Salida</label>
                            </div>
                            <input type="number" class="form-control" id="inputCantSalida">
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="CanEntrada" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputCantEntregada">Cantidad de Entrada</label>
                            </div>
                            <input type="number" class="form-control" id="inputCantEntregada">
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="PrecioUnitEntr" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputPrecioUnitEntr">Precio Unitario</label>
                            </div>
                            <input type="number" class="form-control" id="inputPrecioUnitEntr">
                        </div>



                        <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="NodeLoteEntr" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNodeLoteEntr">No. Lote</label>
                            </div>
                            <input type="text" class="form-control" id="inputNodeLoteEntr">
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-4" id="VenciEntr" hidden>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputVenciEntr">Fecha de vencimiento</label>
                            </div>
                            <input type="date" class="form-control" id="inputVenciEntr">
                        </div>

                    </div>

                </div>
            </div>

            <!--<input type="text" class="form-control" id="inputcantidadUnidad" >
            <input type="text" class="form-control" id="inputNombreInsumo" >-->

            <div class="modal-footer" style="text-align: right">

                <button class="btn btn-success btn-sm"  id="btnAñadirMov" onclick="añadirTabla()"> Añadir
                    <i class="fas fa-plus-circle" style="margin-left: 10px"></i>
                </button>


            </div>


            <table class="table table-striped  table-responsive table-dark" class="table table-condensed table-bordered table-hover" bgcolor="#D3D3D3" id="tblAlmReajuste">
                <thead class="stylish-color-dark text-white">
                <tr align="center" class="active">
                    <td width="300" >Código</td>
                    <td width="425" >Insumo</td>
                    <td width="300">Presentacion</td>
                    <td width="300">Unidad</td>
                    <td width="156">Cantidad</td>
                    <td width="156">Precio Unitario</td>
                    <td width="156">No. Lote</td>
                    <td width="156">Vencimiento</td>
                    <td width="156">Kardex</td>
                    <td width="156">Eliminar</td>
                </tr>
                </thead>
                <tbody id="tbodyAlmReajuste" align="center">
                </tbody>
                <tfoot>
                </tfoot>
            </table>


            <div class="modal-footer" style="text-align: right">

            </div>

            <form name="formulario-envia" id="formularioEnv" enctype="multipart/form-data" method="POST">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputImagen">Adjuntar Documento de Respaldo</label>
                        </div>
                        <input type="file" class="form-control" id="adjuntoDocRespaldo" name="adjuntoDocRespaldo">
                    </div>
                </div>

            </form>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-6" id="inputRecibe" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomRecibe">Nombre Recibe</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomRecibe">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6" id="inputEntrega" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomEntrega">Nombre Entrega</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomEntrega">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6" id="EncAlmacen" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomAlmac">Encargado Almacén</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomAlmac">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6" id="DireccionEje"hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputDireEje">Directora Ejectutiva</label>
                    </div>
                    <input type="text" class="form-control" id="inputDireEje">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6" id="EncActivos" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputActivosFijos">Encargada de Activos Fijos</label>
                    </div>
                    <input type="text" class="form-control" id="inputActivosFijos">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-6" id="GAF" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomGerenteFinan">Gerente Financiero Solicitante</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomGerenteFinan">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputObser">Observaciones</label>
                    </div>
                    <input type="text" class="form-control" id="inputObser">
                </div>
<!--
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNombAdminiFin">Nombre Gerente Administrativo Financiero Entrega</label>
                    </div>
                    <input type="text" class="form-control" id="inputNombAdminiFin">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomDirEjecSol">Nombre Direccion Ejecutiva Solicitante</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomDirEjec">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomDirEjeEntrega">Nombre Direccion Ejecutiva Entrega</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomDirEjeEntrega">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputObservaciones">Obervaciones</label>
                    </div>
                    <input type="text" class="form-control" id="inputObservaciones" >
                </div>
            </div>
-->



        </div>

            <div class="modal-footer" style="text-align: right">

                <button class="btn btn-success btn-sm"  id="btnGuardarMov" onclick="GuardalMovVa();">Guardar Movimiento
                    <i class="fas fa-share-square"></i>
                </button>

                <button class="btn btn-primary btn-sm"  id="btnImprimirReajuste" onclick="imprimirReajuste()"> Impresión
                    <i class="fas fa-print" style="margin-left: 10px"></i>
                </button>

            </div>

    </div>

</div>
</div>



<script type="text/javascript" src="./js/js_RegistroVarios.js"></script>