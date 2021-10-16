<!-- Loading
<div class="d-flex justify-content-center">
    <div class="spinner-border text-success m-10" role="status" style="width: 15rem; height: 15rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>-->

<!-- Contenido-->
<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="Encargados" class="card modal-xl">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">ENCARGADOS ALMACENES</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#EncAlmacenes').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <!-- <div>
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
            </div>-->
            <div class="row" id="AlmacenSuministros">
                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAlmSumi">Suministros</label>
                        </div>
                        <input type="text" class="form-control" id="inputAlmSumi" disabled>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAlmSumiP">Puesto</label>
                        </div>
                        <input type="text" class="form-control" id="inputAlmSumiP" disabled>
                    </div>
                </div>

                <div class="col-sm-2" style="text-align: left">
                    <div style="text-align: center" >
                        <button class="btn btn-success btn-sm"  id="btnAlmacSumi" onclick="ModEncargado()" disabled><i class="fas fa-plus-circle"></i>Guardar</button>
                    </div>
                </div>

            </div>

            <div class="row" id="AlmacenMedicamentos">
                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAlmMedi">Medicamentos</label>
                        </div>
                        <input type="text" class="form-control" id="inputAlmMedi" disabled>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAlmMediP">Puesto</label>
                        </div>
                        <input type="text" class="form-control" id="inputAlmMediP" disabled>
                    </div>
                </div>

                <div class="col-sm-2" style="text-align: left">
                    <div style="text-align: center">
                        <button class="btn btn-success btn-sm"  id="btnAlmacMedi" onclick="ModEncargado()" disabled><i class="fas fa-plus-circle"></i>Guardar</button>
                    </div>
                </div>
            </div>

            <div class="row" id="AlmacenMMQ">
                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAlmMMQ">Material MQ</label>
                        </div>
                        <input type="text" class="form-control" id="inputAlmMMQ" disabled>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAlmMMQP">Puesto</label>
                        </div>
                        <input type="text" class="form-control" id="inputAlmMMQP" disabled>
                    </div>
                </div>

                <div class="col-sm-2" style="text-align: left">
                    <div style="text-align: center">
                        <button class="btn btn-success btn-sm"  id="btnAlmacMMQ" onclick="ModEncargado()" disabled><i class="fas fa-plus-circle"></i>Guardar</button>
                    </div>
                </div>
            </div>

            <div class="row" id="AlmacAutoridad1">
                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAuto1">Gerencia</label>
                        </div>
                        <input type="text" class="form-control" id="inputAuto1" disabled>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAutoP1">Puesto</label>
                        </div>
                        <input type="text" class="form-control" id="inputAutoP1" disabled>
                    </div>
                </div>
            </div>


            <div class="row" id="AlmacAutoridad2" style="margin-top: 13px">
                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAuto2">Activos</label>
                        </div>
                        <input type="text" class="form-control" id="inputAuto2" disabled>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAutoP2">Puesto</label>
                        </div>
                        <input type="text" class="form-control" id="inputAutoP2" disabled>
                    </div>
                </div>


            </div>

            <div class="row" id="AlmacAutoridad3" style="margin-top: 13px">
                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAuto3">Dirección</label>
                        </div>
                        <input type="text" class="form-control" id="inputAuto3" disabled>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="input-group input-group-sm col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputAutoP3">Puesto</label>
                        </div>
                        <input type="text" class="form-control" id="inputAutoP3" disabled>
                    </div>
                </div>


            </div>
                </div>


            </div>


        </div>
    </div>

    <script src="./js/AlmacEncargados.js"></script>