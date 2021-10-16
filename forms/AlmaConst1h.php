<div id="vcontent" class="container container-fluid" style="margin-top: 50px">
    <div id="ConsDetalle1h" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">INFORME CONSTANCIA DE INGRESO A ALMACÉN Y A INVENTARIO</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#ConsDetalle1h').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">
            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNombAlmac">Nombre del Almacén</label>
                    </div>
                    <input type="text" class="form-control" id="inputNombAlmac">
                </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNomEncAlmac">Encargado Almacén</label>
                            </div>
                            <input type="text" class="form-control" id="inputNomEncAlmac">
                        </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFecEnInforme">Fecha Entrega de Informe</label>
                    </div>
                    <input type="date" class="form-control" id="inputFecEnInforme">
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFecEnInforme">Fecha Inicio</label>
                    </div>
                    <input type="date" class="form-control" id="inputFecEnInforme">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFecEnInforme">Fecha Final</label>
                    </div>
                    <input type="date" class="form-control" id="inputFecEnInforme">
                </div>
                <button class="btn btn-success btn-sm"  id="btnAñadirDetalleTrasl">Validar
                    <i class="fas fa-share-square"></i>
                </button>
            </div>


                    <table align="center" border="1" style="width:auto; height:20px;" class="table table-condensed table-bordered table-hover" bgcolor="#D3D3D3" id="tblDetConst1h">
                        <thead class="stylish-color-dark text-white">
                        <tr align="center" class="active">
                            <td width="100">Formulario No</td>
                            <td width="380">Nombre del Fromulario</td>
                            <td width="100">utilizados Del</td>
                            <td width="100">Utilizados  Al</td>
                            <td width="100">Total Utilizados</td>
                            <td width="100">Existencia Del</td>
                            <td width="100">Existencia Al </td>
                            <td width="100">Total Existencia</td>

                        </tr>
                        </thead>
                        <tbody id="tblbodyConst1h">
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNumCorrAnulados">Numero de Correlativos Anulados</label>
                            </div>
                            <input type="text" class="form-control" id="inputNumCorrAnulados">
                        </div>



                        <button class="btn btn-success btn-sm"  id="btnGuardarTraslado" onclick="guardarCons()">Guardar
                            <i class="fas fa-share-square"></i>
                        </button>

                        <button class="btn btn-success btn-sm" onclick="ejecutarRep()"> Imprimir
                            <i class="fas fa-plus-circle"></i>
                        </button>




                    </div>


                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript" src="./js/js_AlmacConst1h.js"></script>
