<?php

class ModelsSubPartida extends Conexion
{
	 
	function __construct()
	{
		parent::__construct();
	}

   public function leer() {
    try {
        $query = $this->pdo->prepare('SELECT * FROM sub_partida  ');
         $query->execute();
        return $query->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
     function registro ( $id ,string $codigo , string $denominacion){

    	
    $agregar= ' INSERT INTO sub_partida (id_Partida ,Codigo,Denominacion) VALUES (?,?,?)';
    $v_agregar=$this->pdo->prepare($agregar);
     $v_agregar->execute(array($id,$codigo,$denominacion));

      header('location:index.php');

    }

   function actualizar ( $id, string $codigo , string $denominacion ){
    	  $editar= 'UPDATE sub_partida SET Codigo=?,Denominacion=? WHERE id=?'; 

         $v_editar=$pdo->prepare($editar);
         $v_editar->execute(array($id));

          header('location:index.php');
    }


      function eliminar(int $id){
       $eliminar=' DELETE FROM sub_partida WHERE id=? ';
       $eliminar_id= $pdo->prepare($eliminar);
       $eliminar_id->execute(array($id));

       header('location:index.php');
     }

      public function lista($id_partida){

         try {
          
      
           $tabla_id ='SELECT * FROM sub_partida  WHERE id_Partida=?';

      $guardar_id =$this->pdo->prepare($tabla_id);
      $guardar_id->execute(array($id_partida));

      $resultado_id= $guardar_id->fetch();
      return  $resultado_id;

             }

         catch(PDOException $e) {
            echo $e->getMessage();
    }

	
}

}


?>