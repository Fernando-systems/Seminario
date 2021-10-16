<div id="InsumoKardex" class="card" style="margin-top: 50px">
    <div class="modal-header text-center text-white green-grad">
        <h3 class="modal-title w-100 font-weight-bold">Insumo que tienen asignado Kardex</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#InsumoKardex').fadeOut();"
        <span aria-hidden="true" class="text-white">&times;</span>
    </div>

    <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar" id="buscarcodigoInsumo">
        <button class="btn btn-success my-2 my-sm-0" type="button" onclick="controlInventario();">Buscar prueba</button>
    </form>-->

    <div class="row">
        <div class="col-sm-12">
            <table id="tbInsumoKardex" class="table table-sm table-hover w3-border" width="99%">
                <thead class="primary-color text-white">
                <tr>
                    <th class="col-sm-auto">Renglón</th>
                    <th class="col-sm-auto">Codigo de Insumo</th>
                    <th class="">Nombre del Insumo</th>
                    <th class="">Carateristicas</th>
                    <th class=""> Presentación</th>
                    <th class="">Cantidad y Unidad</th>
                    <th class="col-sm-auto">Código de Presentación</th>
                    <th class="col-sm-auto">No. Kardex</th>
                    <th class="col-sm-auto">Tipo Kardex</th>

                </tr>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>
<script src="./js/js_Insumo_Kardex.js"></script>