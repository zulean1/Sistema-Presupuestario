<?php
 
 

class autorizacion_de_gastos extends Controller
{
   

 	function __construct (){

 		parent::__construct();
   

 	}

   public function registrar(){
          
   	$views= new Layout("autorizaciones/registrar_autorizacion.php");


   }

   public function listado(){

   		$views= new Layout("autorizaciones/Listado.php");
   }


 	}
?>