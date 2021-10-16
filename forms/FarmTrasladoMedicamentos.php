<div id="vcontent" class="container container-fluid" style="margin-top: 50px">
    <div id="InsumoEnt" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">TRASLADO DE MEDICAMENTOS Y PRODUCTOS AFINES</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">
            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCorrelativoCGC">Correlativo CGC</label>
                    </div>
                    <input type="number" class="form-control" id="inputCorrelativoCGC">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputSolicita">SOLICITA</label>
                    </div>
                    <select id="inputSolicita" class="form-control">
                        <option value="0">SELECCIONE</option>
                        <option value="1">AREA DE PRODUCCION</option>
                        <option value="2">AREA DE UNIDOSIS</option>
                        <option value="3">FARMACIA SÁTELITE MEDICAMENTOS</option>
                        <option value="4">FARMACIA SÁTELITE MMQM Y AFINES</option>
                        <option value="5">FARMACIA INTERNA MEDICAMENTOS</option>
                        <option value="6">FARMACIA INTERNA MMQM Y AFINES</option>
                    </select>
                </div>



                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputEntrega">ENTREGA</label>
                    </div>
                    <select id="inputEntrega" class="form-control">
                        <option value="0"> SELECCIONE</option>
                        <option value="1">BODEGA FARMACIA DE MEDICAMENTOS</option>
                        <option value="2">BODEGA FARMACIA MMQM Y AFINES</option>
                        <option value="3">FARMACIA SÁTELITE MEDICAMENTOS</option>
                        <option value="4">FARMACIA SÁTELITE MMQM Y AFINES</option>
                    </select>
                </div>
            </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputCodigo">Código</label>
                        </div>
                        <input type="text" class="form-control" id="inputCodigo" onchange="buscarInsumoGeneral()">
                    </div>

                    <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="SelCodUnico">Presentación</label>
                        </div>
                        <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)">
                            <option value="0">Seleccione Presentación</option>
                        </select>
                    </div>

                    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputKardexFar">Kardex</label>
                        </div>
                        <input type="text" class="form-control" id="inputKardexFar" disabled>
                    </div>

                </div>

                <div class="row">

                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputDescrip">Descripcion</label>
                </div>
                <input type="text" class="form-control" id="inputDescrip" disabled="">
            </div>

                </div>

        <div class="row">

            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                <div class="input-group-prepend">

                    <label class="input-group-text" for="selLoteVencimiento">Lote y Vencimiento</label>
                </div>

                <select class="form-control" id="selLoteVencimiento" onchange="cargarFormsVencimiento(this.value)" disabled>
                    <option value="0">Seleccione Lote Y Fecha de Vencimiento</option>
                </select>
            </div>

            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputNoLote">No. Lote</label>
                </div>
                <input type="text" class="form-control" id="inputNoLote"disabled>
            </div>

            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputVechaVenci">Fecha De Vencimiento</label>
                </div>
                <input type="text" class="form-control" id="inputVechaVenci" disabled>
            </div>

        </div>

        <div class="row">

            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputCantExistente">Cantidad Existente</label>
                </div>
                <input type="text" class="form-control" id="inputCantExistente" disabled>
            </div>

            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputCantiSolicit">Cantidad Solicitada</label>
                </div>
                <input type="text" class="form-control" id="inputCantiSolicit">
            </div>

            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputCantiDespachada">Cantidad Despachada</label>
                </div>
                <input type="text" class="form-control" id="inputCantiDespachada">
            </div>

        </div>

        <div class="row">

            <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputMotivTraslado">Motivo De Traslado</label>
                </div>
                <input type="text" class="form-control" id="inputMotivTraslado">
            </div>

            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputPreciUnit">Precio Unitario</label>
                </div>
                <input type="text" class="form-control" id="inputPreciUnit"disabled>
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn btn-success btn-sm" id="btnAñadirDetalleTrasl" onclick="añadirTabla()">Agregar</button>
            <button class="btn btn-info btn-sm" id= "buscarDatos" onclick="buscarInsuTraslado()">Buscar</button>

        </div>


            <table align="center" border="1" style="width:auto; height:20px;" class="table table-condensed table-bordered table-hover" bgcolor="#D3D3D3" id="tblFarmTraslado">
                <thead class="stylish-color-dark text-white">
                <tr align="center" class="active">
                    <td width="100">Código</td>
                    <td width="380">Descripcion del Producto</td>
                    <td width="150">Cantidad Solicitada</td>
                    <td width="150">Cantidad Despachada</td>
                    <td width="150">Motivo</td>
                    <td width="150">Acciones</td>
                </tr>
                </thead>

                <tbody id="tblbodyTraslado">
                </tbody>
            </table>

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputEntregaTras">Entrega</label>
                    </div>
                    <input type="text" class="form-control" id="inputEntregaTras" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCargoTrasl">Cargo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCargoTrasl" disabled>
                </div>
            </div>

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRecibeTras">Recibe</label>
                    </div>
                    <input type="text" class="form-control" id="inputRecibeTras">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCargoTras">Cargo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCargoTras">
                </div>

            </div>

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputJefeDepartamento">Jefe de Farmacia Interna</label>
                    </div>
                    <input type="text" class="form-control" id="inputJefeDepartamento" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCargoJefe">Cargo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCargoJefe" disabled="">
                </div>

            </div>

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputObservaciones">Obervaciones</label>
                    </div>
                    <input type="text" class="form-control" id="inputObservaciones">
                </div>

            </div>

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputLug">Lugar </label>
                    </div>
                    <input type="text" class="form-control" id="inputLug" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFech">Fecha</label>
                    </div>
                    <input type="date" class="form-control" id="inputFech">
                </div>


                <button class="btn btn-success btn-sm"  id="btnGuardarTraslado" disabled>GUARDAR<i class="fas fa-plus-circle"></i></button>

                <button class="btn btn-success btn-sm" onclick="ejecutarRep()"> Formato Traslado 
                        <i class="fas fa-plus-circle"></i>
                    </button>
                <!--Modal buscar-->
                <div class="modal" id="BuscarTraslado" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="overflow-y: scroll">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center text-white green-grad">
                                <h3 class="modal-title w-100 font-weight-bold">Buscar Insumo</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#BuscarTraslado').fadeOut();">
                                    <span aria-hidden="true" class="text-white">x</span>
                                </button>
                            </div>
                            <div class="modal-content">
                                <div class="row">
                                    <div class="col-SM">
                                        <table id="tbBuscar" class="table table-sm table-hover w3-border" width="95%">
                                            <thead class="primary-color text-white">
                                            <tr>
                                                <th class="">Renglón</th>
                                                <th class="">Código</th>
                                                <th class="">Nombre</th>
                                                <th class="">Características</th>
                                                <th class="">Presentación</th>
                                                <th class="">Unidad</th>
                                                <th class="">Kardex</th>
                                                <th class="">Existencia</th>
                                                <th class="">Precio Unitario</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fin Modal buscar-->
            </div>
        </div><!--Termina el row-->
    </div><!--Termi a el carbody del inicio-->
</div>

<script type="text/javascript" src="./js/js_FarmaciaTraslado.js"></script>