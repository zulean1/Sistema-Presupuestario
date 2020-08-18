<?php 


class SubPartida extends Controller
{
	
	
    public function registrar (){


    	

    $views = new Layout("Sub-Partida/registrosubpartida.php");

    }


     public function listado(){

     new CoreModels("ModelsSubPartida");
      new CoreModels("ModelsPartida");
        $ModelsSubPartida= new ModelsSubPartida();
        $ModelsPartida= new ModelsPartida();
        $subpartida = $ModelsSubPartida->leer();
        $partida=[];


 
           foreach ($subpartida as  $subpartidas) {
        $partida= $ModelsPartida->listar();
         }
     
        
           


        $views = new Layout("Sub-Partida/listsubpartida.php" , compact("subpartida", "partida", $subpartida ,$partida));
       
              


}

}




 ?>