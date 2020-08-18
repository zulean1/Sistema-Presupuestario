<div class="mx-5 my-5 px-3 py-3">
              
                 <table class="table  table-bordered  table-primary table-hover">
                        <thead class="bg-warning">
                        <tr  class="table-light text-warning">
                           <th>Nombres</th>
                           <th>Apellidos</th>
                           <th>Cargo</th>
                          <th></th>
                       
                        </tr>
                    </thead>
                       <tbody>
                             


         <?php foreach ($dato["usuario"] as $usuarios): ?>
          <tr>
            <th><?php echo $usuarios['Nombres'] ?></th>
            <th><?php echo $usuarios['Apellidos'] ?></th>
             <th><?php echo $usuarios['Cargo'] ?></th>
            <th><?php echo $usuarios['correo'] ?></th>
            

             <th><a href="" title=""><i class="fas fa-eye"></i></a>
              <?php echo " <a href='../usuario/editar?id={$usuarios['id']}'><i class='fas fa-pen'></i></a> " ; ?>

         <a href='../Partida'><i class="fas fa-trash"></i>
         
         </tr>
         <?php endforeach; ?>

      
     
                           </tbody>
                           </table>
                         </div>