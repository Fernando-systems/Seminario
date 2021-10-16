<div class="container-fluid" style="margin-top: 50px">
    <div id="TablaPrueba" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">pruebas</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#TablaPrueba').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Servicio">Servicio</span>
                        </div>
                        <input type="text" class="form-control" id="InputServicio" aria-describedby="Servicio">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Fecha">Fecha</span>
                        </div>
                        <input type="text" class="form-control" id="InputFecha" aria-describedby="Fecha">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Correlativo">Correlativo CGC</span>
                        </div>
                        <input type="text" class="form-control" id="InputCorrelativo" aria-describedby="Correlativo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="codigoInsumo">Código de insumo</span>
                        </div>
                        <input type="text" class="form-control" id="InputCodInsumo" aria-describedby="codigoInsumo">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="nombreInsumo">Nombre del insumo</span>
                        </div>
                        <input type="text" class="form-control" id="InputNombInsumo" aria-describedby="nombreInsumo">
                    </div>
                </div>
            </div>


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
                <th>Devolciones</th>
                <th width="5%">Total</th>
                <th>Acciones</th>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div class="btn-group" style="text-align: right">
                <button type="button" class="btn btn-success" id="btnAgregarFila"><i class="fas fa-plus"></i></button>
            </div>
        </div>
    </div>

</div>

<script src="./js/js_TablaNueva.js" type="text/javascript"></script>