<div class="container-fluid" style="margin-top: 50px">
    <div id="TablaPrueba" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">CONSOLIDADO DIARIO POR SERVICIO DE MEDICAMENTOS Y PRODUCTOS AFINES</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#TablaPrueba').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">

                <div class="col-md-2">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Correlativo">Correlativo CGC</span>
                        </div>
                        <input type="number" class="form-control" id="InputCorrelativo" aria-describedby="Correlativo">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Servicio">Servicio</span>
                        </div>
                        <input type="text" class="form-control" id="InputServicio" aria-describedby="Servicio">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" for="InputFechaC">Fecha</span>
                        </div>
                        <input type="date" class="form-control" id="InputFechaC" aria-describedby="Fecha" >
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodigo">Código</label>
                    </div>
                    <input type="number" class="form-control" id="inputCodigo" onchange="buscarInsumoGeneral()">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPresentacón">Presentación</label>
                    </div>

                    <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)">
                        <option value="0">Seleccione Presentación</option>

                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="">Nombre insumo</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomInsumo" readonly>
                </div>


                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="">Kárdex</label>
                    </div>
                    <input type="text" class="form-control" id="inputKardex" readonly>
                </div>

            </div>

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFarmDescrip">Descripción</label>
                    </div>
                    <input type="text" class="form-control" id="inputFarmDescrip" readonly>
                </div>
            </div>

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selLoteVencimiento">Lote y Vencimiento</label>
                    </div>
                    <select class="form-control" id="selLoteVencimiento" onchange="cargarFormsVencimiento(this.value)">
                        <option value="0">Seleccione Lote y Vencimiento</option>
                    </select>
                </div>


                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoLote">No. Lote</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoLote" readonly>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFechaVencimiento">Fecha De Vencimiento</label>
                    </div>
                    <input type="text" class="form-control" id="inputFechaVencimiento" readonly>
                </div>


                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="">Cantidad existente</label>
                    </div>
                    <input type="text" class="form-control" id="InputCantidadExistente" readonly>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="">Precio Unitario</label>
                    </div>
                    <input type="text" class="form-control" id="InputPrecioUnitario" readonly>
                </div>
            </div>

            <div class="row" id="contCuadros">
            </div>

            <div class="row" >

                    <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Devoluciones</span>
                        </div>
                        <input type="number" class="form-control" id="InputDevInsumo" value="0">
                    </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Lote</span>
                    </div>
                    <input type="text" class="form-control" id="InputDevInsumoLote">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Vencimiento</span>
                    </div>
                    <input type="date" class="form-control" id="InputDevInsumoVenci">
                </div>
                <!--
                <div class="col-sm">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success" id="btnAgregar" onclick="AgregarFila()"><i class="fas fa-plus" style="margin-right: 10px"></i>Agregar
                        </button>
                    </div>
                    <button type="button" id= "buscarDatos"class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Buscar
                    </button>
                </div>-->

                    <button class="btn btn-success btn-sm"  id="btnAgregar" onclick="AgregarFila()"> Agegar
                        <i class="fas fa-plus-circle"></i>
                    </button>

                    <button class="btn btn-info btn-sm" id="buscarDatos" onclick="BuscarConsol()">Buscar</button>

            </div>

            <div class="row">
                <table class="table table-bordered table-responsive" id="TablaConsolidado">
                    <thead>
                    <th width="27%">Insumo</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                    <th>28</th>
                    <th>29</th>
                    <th>30</th>
                    <th>31</th>
                    <th>32</th>
                    <th>33</th>
                    <th>Subotal</th>
                    <th>Devoluciones</th>
                    <th width="5%">Total</th>
                    <th>Acciones</th>
                    </thead>
                    <tbody id="tbodyConsolidadoFarm">

                    </tbody>
                </table>
            </div>
            <div class="row">

            <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="InputRecibeConsol">Nombre Recibe</label>
                </div>
                <input type="text" class="form-control" id="InputRecibeConsol">           
            </div>

            <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="InputCargoConsolReb">Cargo Recibe</label>
                </div>
                <input type="text" class="form-control" id="InputCargoConsolReb">
            </div>


        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="InputEntregaConsol">Nombre Entrega</label>
            </div>
            <input type="text" class="form-control" id="InputEntregaConsol" disabled>
        </div>

        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="InputCargoConsolEnt">Cargo Entrega</label>
            </div>
            <input type="text" class="form-control" id="InputCargoConsolEnt" disabled>
        </div>
    </div>  


    </div>
        <div class="modal-footer">
            <div class="row btn-group" style="margin-right: 25px">
                <button type="button" class="btn btn-success" id="btnGuardarConsolidado" disabled ><i class="far fa-share-square" style="margin-right: 10px"></i>GUARDAR</button>
            </div>

            <button class="btn btn-group btn-success" onclick="ejecutarRep()"><i style = "margin-right: 10px" class="fas fa-plus-circle"></i> Formato Consolidado   
            </button>
        </div>
    </div>

            <!--Modal buscar-->
    <div class="modal" id="ModalBuscarConsol" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="overflow-y: scroll">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header text-center text-white green-grad">
                    <h3 class="modal-title w-100 font-weight-bold">Buscar Insumo</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#ModalBuscarConsol').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

            <div class="modal-content">
                <div class="row">
                    <div class="col-sm">
                        <table id="tbBuscar" class="table table-sm table-hover w3-border" width="99%">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--fin Modal buscar-->



</div>

<script src="./js/js_FarmConsolidado.js" type="text/javascript"></script>