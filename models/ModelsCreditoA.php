<?php

class ModelsCreditoA extends Conexion
{
	 
	function __construct()
	{
		parent::__construct();
	}

    public function leer(){

          $leer ='SELECT * FROM credito_adicional ';

          $leerp =$this->pdo->prepare($leer);
          $leerp->execute();
         return $resultado= $leerp->fetchAll();
    }

     function registro (date $fecha_entrega , double $monto_agregado){

    	
    $agregar= ' INSERT INTO credito_adicional (fecha_entrega ,monto_agregado) VALUES (?,?,?)';
    $v_agregar=$this->pdo->prepare($agregar);
     $v_agregar->execute(array());

      header('location:index.php');

    }

   function actualizar ( int $id, date $fecha_entrega , double $monto_agregado ){
    	  $editar= 'UPDATE credito_adicional SET fecha_entrega=?,monto_agregado=? WHERE id=?'; 

         $v_editar=$pdo->prepare($editar);
         $v_editar->execute(array($id));

          header('location:index.php');
    }


      function eliminar(int $id){
       $eliminar=' DELETE FROM credito_adicional WHERE id=? ';
       $eliminar_id= $pdo->prepare($eliminar);
       $eliminar_id->execute(array($id));

       header('location:index.php');
     }
	
}


?>