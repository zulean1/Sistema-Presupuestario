<div class="card text-center mx-5 my-5 px-3 py-3">
  <div class="card-header bg-primary">
    <h5 class="text-white">Autorizacion de Gasto</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Registro de Autorizacion de Gasto</h5>
       <form class=" ">
              <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                      <label for="beneficiario" class="text-danger">Beneficiario</label>
                      <input type="text" class="form-control " id="beneficiario" placeholder="Beneficiario" name="beneficiario">
                  </div>
                  <div class="form-group col-md-6 px-3 py-3">
                     <label for="rif-ci" class="text-danger">Rif/C.I</label>
                     <input type="text" class="form-control " id="rif-ci" placeholder="Rif o Cédula" name="rif-ci">
                  </div>
                </div>
                 <div class="form-group">
                     <label for="concepto" class="text-danger float-left">Concepto</label>
                      <input type="text" class="form-control" id="concepto" placeholder="Concepto" name="concepto">
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
                <div class="form-row">
              
                  <div class="form-group col-md-6 px-3 py-3">
                     <label for="monto" class="text-danger">Monto</label>
                     <input type="text" class="form-control " id="monto" placeholder="Monto" name="monto">
                  </div>
                </div>
              <button type="submit" class="btn btn-danger my-2 ">Registrar</button>
          </form>
    </div>
  <div class="card-footer bg-primary">
  
  </div>
</div>
