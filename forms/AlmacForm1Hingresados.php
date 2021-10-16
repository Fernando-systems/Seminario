<div class="container-fluid" style="margin-top: 50px">
    <div id="Farm1HIngresado" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">FORMULARIOS 1H INGRESADO</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#Farm1HIngresado').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha inicio</span>
                                </div>
                                <input type="date" class="form-control" id="inputFecIni">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha fin</span>
                                </div>
                                <input type="date" class="form-control" id="inputFecFin">
                            </div>
                         </div>

                    <div class="col-sm-4">
                        <button class="btn btn-success" id="btnEjecutarRep" onclick="rep1h()">Ejecutar</button>
                    </div>
                    </div>

                            <div class="row">
                                <div class="col-sm-12 margen">
                                    <table class="table" id="tblRep1h">
                                        <thead class="stylish-color white-text">
                                        <tr>
                                            <th scope="col" width="50px">CGC Oficial</th>
                                            <th scope="col" width="10px">Programa</th>
                                            <th scope="col" width="100px">Fecha</th>
                                            <th scope="col" width="50px">Orden de Compra</th>
                                            <th scope="col" width="50px">Solicitud de Pedido</th>
                                            <th scope="col" width="50px">NIT</th>
                                            <th scope="col" width="25px">Nombre del Proveedor</th>
                                            <th scope="col" width="50px">Datos Factura</th>
                                            <th scope="col" width="50px">Serie Factura</th>
                                            <th scope="col" width="50px">Correlativo 1H</th>

                                        </tr>
                                        </thead>
                                        <tbody id="tbodyRep1H">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--Modal dobleClic-->

<!-- Modal Nuevo Reg -->
<div class="modal" id="modalDbl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text green-grad">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Búsqueda de insumos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btnCerrar"
                        >
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-content" style="overflow-scrolling: auto" >
                <div class="row">
                    <div class="col-sm">


                            <table id="tbBuscarIns" class="table table-sm table-hover w3-border" width="98%">

                                <thead class="primary-color text-white text-center">
                                <tr>
                                    <th class="">Código del Insumo</th>
                                    <th class="">Renglon</th>
                                    <th class="">Nombre del insumo</th>
                                    <th class="">Presentacion Insumo</th>
                                    <th class="">Cantidad</th>
                                    <th class="">Lote</th>
                                    <th class="">Fecha de Vencimiento</th>
                                    <th class="">Kardex</th>


                                </tr>
                                </thead>
                                <tbody class="text-center">

                                </tbody>
                            </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fin Modal Nueva Partida-->




<script src="./js/js_AlmaRep1H.js"></script>
<script src="./js/js_EntradaFarmacia.js"></script>
