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
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCorrelativoCGC">Correlativo CGC</label>
                    </div>
                    <input type="number" class="form-control" id="inputCorrelativoCGC">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="Tipoalm">Almacén</label>
                    </div>

                    <select class="form-control" id="Tipoalm">
                        <option value="0">Seleccione Almacén</option>
                        <option value="AS">Almacén de Suministros</option>
                        <option value="MP">Almacén de Medicamentos</option>
                        <option value="MQ">Almacén MMQ</option>
                        <!--<option value="TIC">Almacén Pruebas</option>-->

                    </select>
                </div>

                <div class="input-group input-group-sm  mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmLugar">Lugar</label>
                    </div>
                    <input type="text" class="form-control" id="inputAlmLugar" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmFecha">Fecha de Despacho</label>
                    </div>
                    <input type="date" class="form-control" id="inputAlmFecha" >
                </div>

                <div class="input-group input-group-sm  mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmFechaDoc">Fecha de Documento</label>
                    </div>
                    <input type="date" class="form-control" id="inputAlmFechaDoc" >
                </div>

            </div>

            <div class="row">
                <div class="input-group input-group-sm  mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputcodigo">Unidad Solicitante</label>
                    </div>
                    <select id="selUniSolicitante" style="height: 5px" class="form-control input-group " >
                    </select>
                    <div>
                        <input type="text" class="form-control" id="Unidad" hidden>
                    </div>
                </div>

                <div class="input-group input-group-sm  mb-sm-3 col-sm-5">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmFecha">Centro Costo</label>
                    </div>
                    <input type="text" class="form-control" id="CentroCosto" placeholder="Centro de Costo" disabled>
                </div>

            </div>



            <div class="row" style="align-content: center">

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmCodigo">Código</label>
                    </div>
                    <input type="text" class="form-control" id="inputAlmCodigo" onchange="buscarInsumoGeneral();">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPresentacionInsumo">Cant. Y Unidad</label>
                    </div>
                    
                    <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)">
                        <option value="0">Seleccione Unidad</option>

                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNombreProducto">Nombre del producto</label>
                    </div>
                    <input type="text" class="form-control" id="inputNombreProducto" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputKardex">Kardex</label>
                    </div>
                    <input type="text" class="form-control" id="inputKardex" disabled>
                </div>

            </div>
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selLoteVencimiento">Lote y Vencimiento</label>
                    </div>
                    <select class="form-control" id="selLoteVencimiento" onchange="cargarFormsVencimiento(this.value)" disabled>
                        <option value="0">Seleccione Lote Y Fecha de Vencimiento</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputLote">Lote</label>
                    </div>
                    <input type="text" class="form-control" id="inputLote" disabled>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputVencimiento">Vencimiento</label>
                    </div>
                    <input type="text" class="form-control" id="inputVencimiento" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPrecio">Precio unitario</label>
                    </div>
                    <input type="number" class="form-control" id="inputPrecio" disabled="">
                </div>

            </div>
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPrecio">Cantidad Existente</label>
                    </div>
                    <input type="number" class="form-control" id="inputCantExis" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputSolicitada">Cantidad solicitada</label>
                    </div>
                    <input type="number" class="form-control" id="inputSolicitada">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantidadAutorizada">Cantidad autorizada</label>
                    </div>
                    <input type="number" class="form-control" id="inputCantidadAutorizada">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantidadDespachada">Cantidad despachada</label>
                    </div>
                    <input type="number" class="form-control" id="inputCantidadDespachada">
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputUnidadMedida">Unidad de Medida</label>
                    </div>
                    <input type="text" class="form-control" id="inputUnidadMedida" disabled="">
                </div>

                <button id= "btnBusIns" class="btn btn-sm btn-primary" onclick="abrModIns();">Buscar</button>

            </div>



            <div class="modal-footer" style="text-align: right">

                <button class="btn btn-success btn-sm"  id="btnGuardarEntrada"> Añadir
                    <i class="fas fa-plus-circle"></i>
                </button>



            </div>

             <div class="row" style="margin-top: 15px; margin-bottom: 15px; margin-right: 5px; margin-left: 5px">
            <table class="table table-striped  table-responsive table-dark">
                <thead>
                <tr>
                    <th width="300">Fecha</th>
                    <th width="300">Codigo</th>
                    <th width="300">Nombre del producto</th>
                    <th width="300">Unidad de Medida</th>
                    <th width="300">Cantidad solicitada</th>
                    <th width="300">Cantidad autorizada</th>
                    <th width="300">Cantidad despachada</th>
                    <th width="300">No. Kardex</th>
                    <th width="300">Precio unitario</th>
                    <th width="300">Eliminar</th>
                </tr>
                </thead>
                <tbody id="tbodyRequisicion">

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

            <div class="col-sm" style="text-align: right">
                <button class="btn btn-success btn-block"  id="btnGuardarRequisicion" disabled>Guardar</button>
            </div>

        </div>
    </div>
</div>



<!-- Modal Nuevo Reg -->
<div class="modal" id="modIns" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text green-grad">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Búsqueda de insumos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modIns').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-content" style="overflow-scrolling: auto" >
                <div class="row">
                    <div class="col-sm">
                        <form class="form-inline active-cyan-3 active-cyan-4">

                            <table id="tbBuscarIns" class="table table-sm table-hover w3-border" width="99%">

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

                            </table>

                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Nueva Partida-->



<!--Modal buscar

<div class="modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="modIns">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-header text-center text-white green-grad">
            <h3 class="modal-title w-100 font-weight-bold">REQUISICIÓN</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#modIns').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="modal-content">
            <div class="row">
                <div class="col-sm">
                    <form class="form-inline active-cyan-3 active-cyan-4">

                        <table id="tbBuscar" class="table table-sm table-hover w3-border" width="99%">

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

                        </table>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

fin Modal buscar-->

<script src="./js/js_AlmRequsicion.js"></script>


