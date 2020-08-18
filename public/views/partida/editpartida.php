 <div class="card text-center mx-5 my-5 px-3 py-3">
  <div class="card-header bg-primary">
    <h5 class="text-white">Partidas Presupuestarias</h5>
 </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Actualizar Partidas</h5>
       <form class=" " method="post" action="../Partida/actualizar">


               <div class="row">

                 <div class="form-group">
                     <input type="hidden" class="form-control " id="id" placeholder="id"   name="id" value="<?php echo $dato['partida']['id'] ?>" >
                  </div>
                     <div class="form-group col-md-6 px-3 py-3">
                      <label for="codigo" class="text-danger">Código</label>
                      <input type="text" class="form-control " id="codigo" value="<?php echo $dato['partida']['Codigo'] ?>" placeholder="Código" name="codigo">
                  </div>
                  <div class="form-group col-md-6 px-3 py-3">
                     <label for="denominacion" class="text-danger">Denominación</label>
                     <input type="text" class="form-control " id="denomminacion" placeholder="Denominación" name="denominacion" value="<?php echo $dato['partida']['Denominacion'] ?>" >
                  </div>
              </div>
                
              <button type="submit" class="btn btn-danger my-2 ">Editar</button>
          </form>
    </div>
  <div class="card-footer bg-primary">
  
  </div>
</div>