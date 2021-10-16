<div id="InventarioFarmacia" class="card" style="margin-top: 50px">
   <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">INVENTARIO FARMACIA</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#InventarioFarmacia').fadeOut();">
        <span aria-hidden="true" class="text-white">&times;</span>
    </button>
    </div>




      


    <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar" id="buscarcodigoInsumo">
        <button class="btn btn-success my-2 my-sm-0" type="button" onclick="controlInventario();">Buscar prueba</button>
    </form>-->

    <button class="btn btn-success btn-sm" onclick="requestgenerarExcel()"> Descargar 
        <i class="fas fa-plus-circle"></i>
    </button>

    <div class="row">
        <div class="col-sm-12">
            <table id="tbInventarioMostrar" class="table table-sm table-hover w3-border" width="99%">
                <thead class="primary-color text-white">
                    <tr>
                        <th class="">Renglón</th>
                        <th class="">Código</th>
                        <th class="">Insumo</th>
                        <th class="">Características</th>
                        <th class="">Kardex</th>
                        <th class="">No. de Lote</th>
                        <th class="">Fecha de Vencimiento</th>
                        <th class="">Precio</th>
                        <th class="">Cantidad Existente</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script src="./js/js_FarmInventario.js"></script>

<scrip src = "http://code.jquery.com/jquery-1.12.0.min"></scrip>
<scrip src="js/boostrap.min.js"></scrip>
<scrip src="js/jquery.datatimepicker.full.min.js"></scrip>
<script type="text/javascript" src="./js/js_FarmaciaRequsicion.js"></script>
<script type="text/javascript" src="./js/js_TableToExcel.js"></script>
<scrip src="js/app.js"></scrip>