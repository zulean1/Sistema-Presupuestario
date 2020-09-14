<div class="mx-5 my-5 px-3 py-3">
 <h3 class="text-warning text-center">Listado de Partidas</h3>
 <table class="table  table-bordered table-success table-hover">
  <thead >
    <tr  class="table-light text-warning">
     <th>Código</th>
     <th>Partida</th>
     <th></th>
   </tr>
 </thead>
 <tbody class="bg-light">
   <?php foreach ($dato['partida'] as $partidas): ?>
    <tr>
      <th><?php echo $partidas['Codigo'] ?></th>
      <th><?php echo $partidas['Denominacion'] ?></th>
      <th><a href="" title=""><i class="fas fa-eye"></i></a>
        <?php echo " <a href='../Partida/editar?id={$partidas['id']}'><i class='fas fa-pen'></i></a> " ; ?>
        <?php echo"<a href=../Partida/eliminar?id={$partidas['id']}><i class='fas fa-trash'></i></a>"; ?> <a href="../SubPartida/registrar" data-toggle="tooltip" data-placement="right" title="Agregar Sub-Partida"><i class="fas fa-plus-square"></i></a></th>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>