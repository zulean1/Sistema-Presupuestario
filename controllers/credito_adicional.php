<?php
 
 class Credito_Adicional extends Controller
{
   

 	function __construct (){

 		parent::__construct();
   

 	}

   public function registrar(){
    
   	$views= new Layout ("credito_adicional/registro_credito.php");


   }

     public function listado(){

        $models = new CoreModels("ModelsPartida");
        $ModelsPartida= new ModelsPartida();
        $partida = $ModelsPartida->listar();

        

  
           foreach ($partida as  $partidas) {
             $partida = $ModelsPartida->listar();
         }
           


        $views = new Layout("credito_adicional/listcreditoadicional.php" , compact("partida", $partida));
       
                
         }




 	}
?>