<div id="vcontent" class="container-fluid" style="margin-top: 50px">
    <div id="InsumoEnt" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">CONSTANCIA DE INGRESO A ALMACEN E INVENTARIO</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">



                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="SelNomeclatura">Tipo de Ingreso</label>
                    </div>
                    <select id="TipoIngreso" class="form-control " onchange="TipoIngreso()">
                        <option value="0"> Seleccione</option>
                        <option value="1">Orden de Compra</option>
                        <option value="2">Solicitud de Pedido</option>
                        <option value="3">Donativo</option>
                        <option value="4">Solicitud Antiguas</option>
                    </select>

                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-4" id="OrdenCP" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputOrdencyp">Orden de C Y P No.</label>
                    </div>
                    <input type="text" class="form-control" id="inputOrdencyp">
                </div>



                <div class="input-group input-group-sm mb-sm-3 col-sm-4" id="SolicitudPedido" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputSolPedido">No. Solicitud Pedido</label>
                    </div>
                    <input type="text" class="form-control" id="inputSolPedido" placeholder="Número-Año" >
                </div>

            </div>
            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputAlmCGC">Número CGC</label>
                    </div>
                    <input type="number" class="form-control" id="inputAlmCGC">
                    <button class="btn btn-warning btn-sm" id="abrirVale">Vale</button>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNumero">Número</label>
                    </div>
                    <input type="text" class="form-control" id="inputNumero" placeholder="Acta Adtva No." disabled="">
                </div>
               
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputProveedor">Nombre Proveedor</label>
                    </div>
                    <input type="text" class="form-control" id="inputProveedor">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputDependecia">Dependencia</label>
                    </div>
                    <input type="text" class="form-control" id="inputDependecia" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFecha">Fecha De Ingreso</label>
                    </div>
                    <input type="date" class="form-control" id="inputFecha">
                </div>
            
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNitProveedor">NIT Proveedor</label>
                    </div>
                    <input type="text" class="form-control" id="inputNitProveedor">
                </div>
            </div>






            <div class="row">

                 <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPrograma">Programa</label>
                    </div>
                    <select id="inputPrograma" class="form-control">
                        <option value="0"> Seleccione Programa</option>
                        <option value="1">01 Administración Institucional</option>
                        <option value="11">11 Servicio de Formacion del Recurso Humano</option>
                        <option value="12">12 Fomento de la Salud y Medicina Preventiva</option>
                        <option value="13">13 Recuperación de la Salud</option>
                        <option value="14">14 Prevención de la Mortalidad de la Niñez y de la Desnutrición Crónica</option>
                        <option value="15">15 Prevención de la Mortalidad Materna y Neonatal</option>
                        <option value="16">16 Prevención y Control de ITS, VIH/Sida</option>
                        <option value="17">17 Prevención y Control de la Tuberculosis</option>
                        <option value="18">18 Prevención y Control de las Enfermedades Vectoriales y Zoonóticas</option>
                        <option value="94">94 ATENCIÓN POR DESASTRES NATURALES Y CALAMIDADES PÚBLICAS</option>
                        <option value="19">NO APLICA</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoFactura">No. Factura</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoFactura">
                </div>


                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputSerieFactura">Serie De Factura</label>
                    </div>
                    <input type="text" class="form-control" id="inputSerieFactura">
                </div>


            </div> <!--Termina el Row donde esta el select de programa-->
            <br>
            <br>
            <div class="row">
                 <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="contenedorSel">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selCodInsumo">Código</label>
                    </div>
                     <!--<select class="form-control" id="selCodInsumo" onchange="buscarInsumoGeneral(this.value)">
                        <option value="0">Seleccione Unidad</option>
                    </select>-->



                </div>
                
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPresentacionInsumo">Cant. Y Unidad</label>
                    </div>
                    
                    <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)" >
                        <option value="0">Seleccione Unidad</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNombreInsumo">Nombre de insumo</label>
                    </div>
                    <input type="text" class="form-control" id="inputNombreInsumo" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCant">Presentación</label>
                    </div>
                    <input type="text" class="form-control" id="inputPresent" disabled="">
                </div>  
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCaracteristicasInsumo">Caracteristicas de insumo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCaracteristicasInsumo" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGastoRenglon">Código del Gasto de Renglon</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodreng" disabled>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="">Kardex</label>
                    </div>
                    <input type="text" class="form-control" id="inputKardexAlm" disabled="">
                </div>
            </div>

            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFolAlm">Folio Almacen</label>
                    </div>
                    <input type="text" class="form-control" id="inputFolAlm">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPrecioUnit">Precio por Unidad</label>
                    </div>
                    <input type="number" class="form-control" id="inputPrecioUnit" onchange="valorTotal1()">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCant">Cantidad Total</label>
                    </div>
                    <input type="number" min="1" class="form-control" id="inputCant" onchange="valorTotal2()">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputValorTotal">ValorTotal</label>
                    </div>
                    <input type="text" class="form-control" id="inputValorTotal" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFolInvent">Folio Inventario</label>
                    </div>
                    <input type="text" class="form-control" id="inputFolInvent">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="SelNomeclatura">Nomenclatura</label>
                    </div>
                    <select id="SelNomeclatura" class="form-control "  onchange="Nomenclatura()">
                        <option value="0"> Seleccione Nomenclatura</option>
                        <option value="7">NO APLICA</option>
                        <option value="1">De Oficina Y Muebles (renglón 322,328)</option>
                        <option value="2">Medico Sanitario y de Laboratorio(renglon 323)</option>
                        <option value="3">Educacional Cultural (renglón 324, 325)</option>
                        <option value="4">De Transporte, Tracción, y Elevación (renglón 325, 326)</option>
                        <option value="5">De Comunicaciones (renglón 324, 326)</option>
                        <option value="6">Otros Activos Fijos (renglón 327,329)</option>
                    </select>
                </div>


                <div class="input-group input-group-sm mb-sm-3 col-sm-3" hidden="">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputIdNomenclatura">Id Nomenclatura</label>
                    </div>
                    <input type="text" class="form-control" id="inputIdNomenclatura" disabled="">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3" hidden="">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNumNomen">Numero Nomenclatura</label>
                    </div>
                    <input type="text" class="form-control" id="inputNumNomen" disabled="">
                </div>



            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputcantlote">Cantidad Parcial</label>
                    </div>
                    <input type="text" class="form-control" id="inputcantlote">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputLote">No. de Lote</label>
                    </div>
                    <input type="text" class="form-control" id="inputLote">
                </div>


                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFecVencimiento">Fecha de Vencimiento</label>
                    </div>
                    <input type="date" class="form-control" id="inputFecVencimiento">
                </div>

                <div class="col-sm" style="text-align: left">
                    <button class="btn btn-warning btn-sm" id="btnLotes" hidden onclick="añadirlotes()"><i style = "margin: 0px" class="fas fa-plus-circle"></i> Agregar Lote </button>
                </div>

            </div>


            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="textObservacionesInsumo">Observaciones</label>
                    </div>
                    <textarea class="form-control" rows="4" name="textObservaciones" id="textObservacionesInsumo">
                    </textarea>
                </div>

                <div class="col-sm" style="text-align: left">
                    <button class="btn btn-success btn-sm mb-sm-3" id="btnGuardar1h" onclick="añadirTabla1h()"><i style = "margin-left: 0px" class="fas fa-plus-circle"></i>AGREGAR INSUMO</button>
                </div>
            </div>


            <div class="row" style="margin-top: 15px; margin-bottom: 15px; margin-right: 5px; margin-left: 5px">
                <table class="table table-striped table-dark" id="tbl1H tr">
                    <thead>
                    <tr style="text-align: center;">
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">DESCRIPCÍON DEL ARTICULO</th>
                        <th scope="col">CÓDIGO DEL GASTO RENGLÓN</th>
                        <th scope="col">FOLIO LIBRO ALMACÉN</th>
                        <th scope="col">PRECIO POR UNIDAD</th>
                        <th scope="col">VALOR TOTAL</th>
                        <th scope="col">FOLIO LIBRO INVENTARIO</th>
                        <!--<th scope="col">Numero de Nomenclatura</th>-->
                        <th scope="col">NOMENCLATURA DE CUENTAS</th>
                        <th scope="col">ELIMINAR</th>
                    </tr>
                    </thead>

                    <tbody id="tbody1h" style="text-align: center;">
                    </tbody>

                    <thead>
                    <tr style="text-align: center;">
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">MONTO TOTAL</th>
                        <th scope="col"></th>
                        <th scope="col" id="montototal1h"></th>
                        <th scope="col"></th>
                        <!--<th scope="col">Numero de Nomenclatura</th>-->
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody id="tbody1htotal">
                    </tbody>
                </table>
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="txttotalletras">Total en Letras</label>
                    </div>
                    <textarea type="text" class="form-control" rows="2" name="texttotalletras" id="txttotalletras">
                    </textarea>
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="Inputstrresponsable">Guardalmacén</label>
                    </div>
                    <input type="text" class="form-control" id="Inputstrresponsable" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="InputstrTipAlm">Almacén</label>
                    </div>
                    <input type="text" class="form-control" id="InputstrTipAlm" disabled>
                </div>

                <!-- Default switch -->
                <li class="input-group input-group-sm mb-sm-3 col-sm-3" >
                    Inventario
                    <label class="switch ">
                        <input type="checkbox" class="success" id="Inputaddinventario" onclick="mostrarInventario()" >
                        <span class="slider round"></span>
                    </label>

                </li>
                <!-- Termina el toggle switch -->
            </div>

            <!-- Empieza los campos de inventario -->
            <div class="row" id="AbrirInventario" hidden="">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="Inputstrresponsableinven">Encargado De Inventarios</label>
                    </div>
                    <input type="text" class="form-control" id="Inputstrresponsableinven">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="Inputstrinven">Inventario </label>
                    </div>
                    <input type="text" class="form-control" id="Inputstrinven" disabled="">
                </div>
            </div>
            <!-- Termina campos de inventario  -->

            <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputObservaciones">Observaciones</label>
                </div>
                <input type="text" class="form-control" id="inputObservaciones">
            </div>




            <div class="col-sm" style="text-align: right">
                <button class="btn btn-success btn-sm mb-sm-3" id="btnGuardarEncabezado" onclick="guradarEncamezado1h()"><i  class="fas fa-plus-circle"></i> GUARADAR </button>
            </div>


            
            <div class="modal-footer" style="text-align: right">
                <button id="btnImprimir" class="btn btn-sm btn-success" onclick="ejecutarRep()" style = "margin-left:1620px"><i style = "margin-right: 10px" class="fas fa-print"></i> Imprimir Formulario 1H
                </button>
            </div>

            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                <table class="table table-striped table-dark" id="tbllotes tr" hidden>
                    <thead>
                    <tr style="text-align: center;">
                        <th scope="col">Insumo</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Lote</th>
                        <th scope="col">Vencimiento</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                    </thead>

                    <tbody id="tbodylotes" style="text-align: center;">
                    </tbody>

                    <thead>
                    <tr style="text-align: center;">
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

<!-- Modal Vale -->
    <div class="modal" id="modalVale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center white-text bg-warning">
                    <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Agregar Vale</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalVale').fadeOut();">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputRegistro">Tipo Formato</label>
                            </div>
                            <input type="tex" class="form-control" name="inputTipoFormato" id="inputTipoFormato" readonly>
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputRegistro">Fecha</label>
                            </div>
                            <input type="date" class="form-control" name="inputFechaVale" id="inputFechaVale">
                        </div>


                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="textObservaciones">Observaciones</label>
                            </div>
                            <textarea class="form-control" rows="4" name="textObservaciones" id="textObservaciones">

                            </textarea>
                        </div>
                    </div>
                    <div class="col col-sm-12">
                        <button class="btn btn-info btn-block" id="btnAgVale">Agregar Vale</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="./js/js_Alm1h.js"></script>