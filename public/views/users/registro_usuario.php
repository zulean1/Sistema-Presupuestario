<div class="card text-center mx-5 my-5 px-3 py-3">
  <div class="card-header bg-primary">
    <h5 class="text-white">Usuarios del Sistema</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Registro de Usuarios</h5>
       <form class=" " method="post" action="../usuario/registrar">
              <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                      <label for="nombre" class="text-danger">Nombres:</label>
                      <input type="text"  placeholder="Nombres" class="form-control " id="nombre" name="nombre">
                  </div>
                   <div class="form-group col-md-6 px-3 py-3">
                     <label for="apellidos" class="text-danger">Apellidos:</label>
                     <input type="text" class="form-control " id="apellidos" placeholder="Apellidos" name="apellido">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                      <label for="cargo" class="text-danger">Cargo:</label>
                      <input type="text"  placeholder="Cargo" class="form-control " id="cargo" name="cargo">
                  </div>
                   <div class="form-group col-md-6 px-3 py-3">
                     <label for="correo" class="text-danger">Correo Electronico:</label>
                     <input type="text" class="form-control " id="correo" placeholder="Correo Electronico" name="correo">
                  </div>
              </div>
               <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                      <label for="password" class="text-danger">Contraseña:</label>
                      <input type="password"  placeholder="Contraseña" class="form-control " id="password" name="contrasena">
                  </div>
               
              </div>
             
              <button type="submit" class="btn btn-danger my-2 ">Registrar</button>
          </form>
    </div>
  <div class="card-footer bg-primary">
  
  </div>
</div>
