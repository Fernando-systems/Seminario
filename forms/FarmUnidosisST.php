<div id="Unidosis" class="card" style="margin-top: 50px">
    <div class="modal-header text-center text-white green-grad">
        <h3 class="modal-title w-100 font-weight-bold">Unidosis</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#Unidosis').fadeOut();"
        <span aria-hidden="true" class="text-white">&times;</span>
    </div>
    <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar" id="buscarcodigoInsumo">
        <button class="btn btn-success my-2 my-sm-0" type="button" onclick="controlInventario();">Buscar prueba</button>
    </form>-->

<br>
    <div class="row">
        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputServicio">Servicio</label>
            </div>
            <select class="form-control" id="selServicio">
                <option value="0">Seleccione un Servicio</option>
            </select>
        </div>
        <button type="button" id="btnMostrarEnc" class="btn btn-outline-blue btn-circle waves-effect; btn btn-secondary btn-default" style="margin-left: 25px" onclick="MostrarDatos()">
            <i class="fas fa-play"></i>
        </button>
    </div>

    <div id="contenedorUnidosis">

    </div>

</div>
</div>
<script src="./js/js_UnidosisST.js"></script>