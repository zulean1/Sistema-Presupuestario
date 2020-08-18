<div class="card text-center mx-5 my-5 px-3 py-3">
  <div class="card-header bg-primary">
    <h5 class="text-white">Crédito Adicional</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Registro de Crédito Adicional</h5>
       <form class=" ">
              <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                      <label for="fechae" class="text-danger">Fecha de Entrega:</label>
                      <input type="date" class="form-control " id="fechae" name="fechae">
                  </div>
                   <div class="form-group col-md-6 px-3 py-3">
                     <label for="monto" class="text-danger">Monto Asignado</label>
                     <input type="text" class="form-control " id="monto" placeholder="Monto" name="monto">
                  </div>
              </div>
               <div>
                 <button class="btn btn-warning mx-1 my-1  float-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Agregar partida
                </button>
                 <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                    <select class="form-control">
                     <option>Elija una partida</option>
                    </select>
                    </div>
                </div>
               </div>
              <button type="submit" class="btn btn-danger my-2 ">Registrar</button>
          </form>
    </div>
  <div class="card-footer bg-primary">
  
  </div>
</div>
