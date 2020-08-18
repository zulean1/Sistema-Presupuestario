<?php 

class ModelsEjercicioFiscal extends Conexion
{
  
	function __construct()
	{
		parent::__construct();
	}

  public function leer(){
    $leer ='SELECT * FROM ejercicio_fiscal ';
    $leerp =$this->pdo->prepare($leer);
    $leerp->execute();
    return $resultado= $leerp->fetchAll();
  }

  function registro (date $fechai, date $fechac, double $monto ){
    $agregar= ' INSERT INTO ejercicio_fiscal (fecha_inicio,fecha_culminacion,monto_a) VALUES (?,?,?)';
    $v_agregar=$this->pdo->prepare($agregar);
    $v_agregar->execute(array($fechai,$fechac,$monto));

    header('location:index.php');
  }

  function actualizar ( int $id, date $fechai, date $fechac, double $monto ){
   $editar= 'UPDATE ejercicio_fiscal SET fecha_inico=?,fecha_culminacion=? monto=? WHERE id=?';
   $v_editar=$pdo->prepare($editar);
   $v_editar->execute(array($fechai,$fechac,$monto,$id));

   header('location:index.php');
 }

 function eliminar(int $id){
   $eliminar=' DELETE FROM ejercicio_fiscal WHERE id=? ';
   $eliminar_id= $pdo->prepare($eliminar);
   $eliminar_id->execute(array($id));

   header('location:index.php');
 }
}

?>