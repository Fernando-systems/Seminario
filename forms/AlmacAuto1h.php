<!-- Loading
<div class="d-flex justify-content-center">
    <div class="spinner-border text-success m-10" role="status" style="width: 15rem; height: 15rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>-->

<!-- Contenido-->
<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="Alm-1h-Anulados" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">INFORME DE CONSTANCIA DE INGRESO A ALMACÉN Y A INVENTARIO</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#Alm-1h-Anulados').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFecha">Fecha</label>
                    </div>
                    <input type="date" class="form-control" id="inputFecha">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputIniCorrelativo">Inicio Correlativo</label>
                    </div>
                    <input type="text" class="form-control" id="inputIniCorrelativo" onchange="Contar1H1()">
                </div>
            </div>
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFinCorrelativo">Fin Correlativo</label>
                    </div>
                    <input type="text" class="form-control" id="inputFinCorrelativo" onchange="Contar1H2()">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputtotformularios">Total Formularios</label>
                    </div>
                    <input type="text" class="form-control" id="inputtotformularios" disabled>
                </div>
        </div>
        <div class="modal-footer" style="text-align: right" id="btnGuardarEnc">
            <button class="btn btn-success btn-sm"  id="btnGuardarEnc" onclick="GuardarCons1h();"><i class="fas fa-plus-circle"></i> Guardar </button>
        </div>

            <table align="center" border="1" style="width:auto; height:20px;" class="table table-condensed table-bordered table-hover" bgcolor="#D3D3D3" id="tblAlmacAnul">
                <thead class="stylish-color-dark text-white">
                <tr align="center" class="active">
                    <td width="200">Fecha</td>
                    <td width="200">Del</td>
                    <td width="200">Al</td>
                    <td width="200">Total</td>
                    <th width="250">Estado</th>
                </tr>
                </thead>
                <tbody id="tbodyAlmacAnul">
                </tbody>
                <tfoot>
                </tfoot>
            </table>
    </div>
</div>



    <script src="./js/js_AlmacAuto1h.js"></script>



