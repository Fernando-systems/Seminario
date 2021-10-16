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
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodigo">Código</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodigo" onchange="buscarInsumoGeneral()">
                </div>

              <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                  <div class="input-group-prepend">
                      <label class="input-group-text" for="inputFechaIngreso">Fecha</label>
                  </div>
                  <input type="text" class="form-control" id="inputFechaIngreso" disabled>
              </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomservicio">Nombre del Servicio</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomservicio">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantCamas">Cantidad de Camas</label>
                    </div>
                    <input type="text" class="form-control" id="inputCantCamas" disabled>
                </div>

                  <button class="btn btn-success btn-sm"  id="btnGuardarRequisicion" onclick="buscarServicio()"><i class="far fa-share-square"></i> Buscar</button>
                </button>
              
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

                
            </table>
 <div class="modal-footer" style="text-align: left">

                <button class="btn btn-success btn-sm"  id="btnGuardarEntrada" onclick="InsetEntrada()" disabled> Guardar
                    <i class="fas fa-plus-circle"></i>
                </button>

            </div>

        </div>
    </div>
</div>

<script src="./js/js-consolFarm.js"></script>
