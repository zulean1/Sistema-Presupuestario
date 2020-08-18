 <div class="mx-5 my-5 px-3 py-3">
  <h3 class="text-warning text-center">Ejercicio Fiscal</h3>
  <a class="btn btn-danger" href="../Partida/registrar" role="button">Asignar Partidas</a>
  <table class="table  table-bordered table-success table-hover">
    <thead >
      <tr  class="table-light text-warning">
       <th>Fecha de Inicio</th>
       <th>Fecha de Culminación</th>
       <th>Monto</th>
     </tr>
   </thead>
   <tbody class="bg-light">
    <?php foreach ($dato["partida"] as $partidas): ?>
     <tr>
      <th><?php echo $partidas['fecha_inicio'] ?></th>
      <th><?php echo $partidas['fecha_culminacion'] ?></th>
      <th><?php echo $partidas['monto_a'] ?></th>
      <th><a href="" title=""><i class="fas fa-eye"></i></a>
       <?php echo " <a href='../Partida/editar?id={$partidas['id']}'><i class='fas fa-pen'></i></a> " ; ?>
       <?php echo"<a href=../Partida/eliminar?id={$partidas['id']}><i class='fas fa-trash'></i></a>"; ?> <a href="../SubPartida/registrar" data-toggle="tooltip" data-placement="right" title="Agregar Sub-Partida"><i class="fas fa-plus-square"></i></a></th>
     </tr>
   <?php endforeach; ?>
 </tbody>
</table>
</div>