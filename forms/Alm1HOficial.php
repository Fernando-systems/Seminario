<!-- Loading
<div class="d-flex justify-content-center">
    <div class="spinner-border text-success m-10" role="status" style="width: 15rem; height: 15rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>-->

<!-- Contenido-->
<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="CGCOficial" class="card">
        <div class="modal-header text-center white-text green-grad">
                <h3 class="modal-title w-100 font-weight-bold">AGREGAR CGC</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#CGCOficial').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div>
                <table class="table table-hover" id="tblVales">
                    <thead>
                    <tr>
                        <th scope="col">Fecha Ingreso</th>
                        <th scope="col">No. Vale</th>
                        <th scope="col">AlmacStrNitProveedor</th>
                        <th scope="col">AlmacStrOrdCYPNo</th>
                    </tr>
                    </thead>
                    <tbody id="tbodyVales">

                    </tbody>
                </table>
                <br>
                <br>
            </div>
            <div class="row" id="formDatos">
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputMin">Vale No.</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoVale" name="inputNoVale" disabled>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputMax">No. CGC</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoCGC" name="inputNoCGC">
                </div>
            </div>

        <div class="modal-footer" style="text-align: right" id="btnGuardar">
            <button class="btn btn-success btn-block"  id="btnActNoCGC"><i class="fas fa-plus-circle"></i> AGREGAR CGC </button>
        </div>
    </div>
</div>

<script src="./js/js_Alm1HOficial.js"></script>