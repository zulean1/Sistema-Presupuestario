<?php

class ModelsPartida extends Conexion
{
	 
	function __construct()
	{
		parent::__construct();
	}

   
     public function listar(){
          try {
          
          $leerp=$this->pdo->prepare('SELECT * FROM partida');
          $leerp->execute();
          $partida=$leerp->fetchAll();
          return $partida;

             }

         catch(PDOException $e) {
            echo $e->getMessage();
         }
    }
      
   
    public function registro (string $codigo , string $denominacion){

    	
    $agregar= ' INSERT INTO partida (Codigo,Denominacion) VALUES (?,?)';
    $v_agregar=$this->pdo->prepare($agregar);
   return $v_agregar->execute(array( $codigo, $denominacion));



    }

    public  function actualizar ( $id_partida, string $codigo , string $denominacion )

    {
     
    	  $editar= 'UPDATE partida SET Codigo= ?,Denominacion=? WHERE id=?'; 

         $v_editar=$this->pdo->prepare($editar);
       $v_editar->execute(array($id, $codigo, $denominacion ));

       


    }


    public  function eliminar($id_partida){
       $eliminar=' DELETE FROM partida WHERE id=? ';
       $eliminar_id= $this->pdo->prepare($eliminar);
       $eliminar_id->execute(array($id));

      
     }

     public function lista($id_partida){

         try {
          
      
           $tabla_id ='SELECT * FROM partida  WHERE id=?';

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