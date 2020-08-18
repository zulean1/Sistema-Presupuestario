<div class="card text-center mx-5 my-5 px-3 py-3">
  <div class="card-header bg-primary">
    <h5 class="text-white">Ejercicio Fiscal Anual</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Registro del Ejercicio Fiscal</h5>
       <form class=" " method="POST" action="../ejercicio_fiscal/registrar">
              <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                      <label for="fechai" class="text-danger">Fecha de Inicio:</label>
                      <input type="date" class="form-control " id="fechai" name="fechai">
                  </div>
                  <div class="form-group col-md-6 px-3 py-3">
                     <label for="fechac" class="text-danger">Fecha de Culminación</label>
                     <input type="date" class="form-control " id="fechac" name="fechac">
                  </div>
              </div>
                <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                     <label for="monto" class="text-danger">Monto Asignado</label>
                     <input type="text" class="form-control " id="monto" placeholder="Monto" name="monto">
                  </div>
                </div>
              <button type="submit" class="btn btn-danger my-2 ">Registrar</button>
          </form>
    </div>
  <div class="card-footer bg-primary">
   </div>
</div>
