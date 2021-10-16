<!-- Inicio Toast -->
<div class="ocultarToast">
    <div class="" aria-live="polite" aria-atomic="true" style="position: relative; min-height: 1px;">
        <div class="toast" data-autohide="false">
            <div class="toast-header" id="headerToast" style="color: #FFFFFF">
                <img src="./img/logo.png" class="rounded mr-2" alt="..." style="width: 20px">
                <strong class="mr-auto">Mensaje</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body" id="idMensaje">
            </div>
        </div>
    </div>
</div>

<!-- FORMULARIO PRINCIPAL -->
<div id="cambioClave" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">CAMBIO CLAVE</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#cambioClave').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>

  <div class="card-body">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="well well-sm">
                      <form class="form-horizontal" >
                          <fieldset>
                              <div class="form-group">
                                  <div class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></div>
                                  <div class="col-md-8" >
                                      <input id="InputUsuario" name="InputUsuario" disabled type="text" placeholder="Usuario" class="form-control" align="center">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-key" ></i></span>
                                  <div class="col-md-8">
                                      <input id="Inputoldpassword" name="Inputoldpassword" type="text" placeholder="Antigua Contraseña" class="form-control">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-key" ></i></span>
                                  <div class="col-md-8">
                                      <input id="InputnewPassword" name="InputnewPassword" type="password" placeholder="Nueva Contraseña" class="form-control">
                                  </div>
                                  <div class="col">
                                      <button class="btn btn-primary" type="button" onclick="mostrarcontrasenanueva()">Mostrar Contraseña</button>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-key" ></i></span>
                                  <div class="col-md-8">
                                      <input id="InputsetnewPassword" name="InputsetnewPassword" type="password" placeholder="Confirmar Contraseña" class="form-control">
                                  </div>
                                  <div class="col">
                                      <button class="btn btn-primary" type="button" onclick="mostrarcontrasenanuevaset()">Mostrar Contraseña</button>
                                  </div>
                              </div>

                              </div>

                              <div class="form-group">
                                  <div class="col-md-12 text-center">
                                      <button type="button" id="btnchangePassword" onclick="change_Password()" class="btn btn-primary btn-lg">Aceptar</button>
                                  </div>
                              </div>
                          </fieldset>
                      </form>
                  </div>
              </div>
          </div>
      </div>

     <!--<div class="row">
         <div class="col col-sm-5 offset-2">
             <div class="flip-card">
                 <div class="flip-card-inner">
                     <div class="flip-card-front">
                         <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                     </div>
                     <div class="flip-card-back">
                         <h1>Modulos</h1>
                         <p class="text-white">Admisión</p>
                         <p class="text-white">Citas</p>
                         <p class="text-white">Archivo</p>
                         <p class="text-white">Laboratorio</p>
                         <p class="text-white">Hospital de día</p>
                         <button onclick="fnOpenForm(event, 'CitFrmMedicoEspecialidad')" class=" btn btn-light-blue">IR</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col col-sm-5">
             <div class="flip-card">
                 <div class="flip-card-inner">
                     <div class="flip-card-front">
                         <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                     </div>
                     <div class="flip-card-back">
                         <h1>Modulos</h1>
                         <p class="text-white">Almacen</p>
                         <p class="text-white">Farmacia</p>
                         <br><br><br><br><br>
                         <button onclick="fnOpenForm(event, 'CitFrmMedicoEspecialidad')" class=" btn btn-light-blue">IR</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <br>
 <div class="row">
     <div class="col col-sm-5 offset-2">
         <div class="flip-card">
             <div class="flip-card-inner">
                 <div class="flip-card-front">
                     <img src="./img/ModMedicos.png" alt="Avatar" style="width:300px;height:300px;">
                 </div>
                 <div class="flip-card-back">
                     <h1>Modulos</h1>
                     <p class="text-white">Admisión</p>
                     <p class="text-white">Citas</p>
                     <p class="text-white">Archivo</p>
                     <p class="text-white">Laboratorio</p>
                     <p class="text-white">Hospital de día</p>
                     <button onclick="fnOpenForm(event, 'CitFrmMedicoEspecialidad')" class=" btn btn-light-blue">IR</button>
                 </div>
             </div>
         </div>
     </div>
     <div class="col col-sm-5">
         <div class="flip-card">
             <div class="flip-card-inner">
                 <div class="flip-card-front">
                     <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                 </div>
                 <div class="flip-card-back">
                     <h1>Modulos</h1>
                     <p class="text-white">Almacen</p>
                     <p class="text-white">Farmacia</p>
                     <br><br><br><br><br>
                     <button onclick="fnOpenForm(event, 'CitFrmMedicoEspecialidad')" class=" btn btn-light-blue">IR</button>
                 </div>
             </div>
         </div>
     </div>
 </div>-->
</div>



<script src="./js/js_CambioClave.js"</script>

