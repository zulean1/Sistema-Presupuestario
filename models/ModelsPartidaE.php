S<?php

class ModelsPartidaE extends Conexion
{
	 
	function __construct()
	{
    
		parent::__construct();

	}

    public function leer(){

          $leer ='SELECT * FROM partida_especifica ';

          $leerp =$this->pdo->prepare($leer);
          $leerp->execute();
         return $resultado= $leerp->fetchAll();
    }

    public function registro (string $codigo , string $denominacion){

    	
    $agregar= ' INSERT INTO partida_especifica (Codigo,Denominacion) VALUES (?,?,?)';
    $v_agregar=$this->pdo->prepare($agregar);
     $v_agregar->execute(array());

      header('location:index.php');

    }

    public  function actualizar ( int $id, string $codigo , string $denominacion ){
    	  $editar= 'UPDATE partida_especifica SET Codigo=?,Denominacion=? WHERE id=?'; 

         $v_editar=$pdo->prepare($editar);
         $v_editar->execute(array($id));

          header('location:index.php');
    }


    public  function eliminar(int $id){
       $eliminar=' DELETE FROM partida_especifica WHERE id=? ';
       $eliminar_id= $pdo->prepare($eliminar);
       $eliminar_id->execute(array($id));

       header('location:index.php');
     }
	
}


?>