<?php

class Ejercicio_Fiscal extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
    

    public function registrar(){

      $views = new Layout("ejercicio_fiscal/registroejercicio.php" );

     if ($_POST) {
      
     $fechai=$_POST['fechai'];
     $fechac=$_POST['fechac'];
     $monto=$_POST['monto'];
        $models = new CoreModels("ModelsEjercicioFiscal");
      $ModelsEjercicioFiscal= new ModelsEjercicioFiscal();
      $ModelsEjercicioFiscal = $ModelsEjercicioFiscal->registro($fechai,$fechac,$monto);
       

     }
     
      else {
        echo "Registro no realizado";
      }

    }

   
      public function listar(){

    	$models = new CoreModels("ModelsEjercicioFiscal");
    	$ModelsEjercicioFiscal= new ModelsEjercicioFiscal();
    	$partida = $ModelsEjercicioFiscal->leer();


       foreach ($partida as  $partidas) {
             $partida = $ModelsEjercicioFiscal->leer();
         }
    	$views = new Layout("ejercicio_fiscal/listado.php", compact("partida", $partida)  );


    }

     public function actualizar(){

    	$models = new CoreModels("ModelsEjercicioFiscal");
    	$ModelsEjercicioFiscal= new ModelsEjercicioFiscal();
    	$ModelsEjercicioFiscal = $ModelsEjercicioFiscal->actualizar();
       
    }

       public function editar(){

      $views= new Layout ("partida/editpartida.php");

  
     if ($_GET) {
        
         
         $id = $_GET['id'];
         $models = new CoreModels("ModelsPartida");
         $ModelsPartida= new ModelsPartida();
         $par = $ModelsPartida->actualizar($id);
         


       }
       else{
        die("Datos no actualizado");
       }



   }


    public function listado(){

        $models = new CoreModels("ModelsPartida");
        $ModelsPartida= new ModelsPartida();
        $partida = $ModelsPartida->listar();
  
           foreach ($partida as  $partidas) {
        $partida = $ModelsPartida->listar($partidas);
         }
           


        $views = new Layout("partida/listpartida.php" , compact("partida", $partida));
       
                
         }

          

}




?>