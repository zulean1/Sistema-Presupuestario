<?php
 
 class Partida extends Controller
 {
   
  public function registrar (){
     
      $views = new Layout("partida/registropartida.php" );

     if ($_POST) {
      
      $codigo=$_POST['codigo'];
      $denominacion=$_POST['denominacion'];

      $models = new CoreModels("ModelsPartida");
      $ModelsPartida= new ModelsPartida();
      $partida = $ModelsPartida->registro($codigo, $denominacion);

       

     }
     
      else {
        echo "Registro no realizado";
      }

  }

     public function editar(){

      if ($_GET) {

        $id_partida= $_GET['id'];
        $models = new CoreModels("ModelsPartida");
        $ModelsPartida= new ModelsPartida();
        $partida = $ModelsPartida->lista($id_partida);

     
      }
         
     
         $views = new Layout("partida/editpartida.php" , compact("partida", $partida));
     
    
      print_r($partida);


       }


     public function actualizar (){
     

      if ($_POST) {

      $id_partida = $_POST['id'];
      $codigo=$_POST['codigo'];
      $denominacion=$_POST['denominacion'];

      $models = new CoreModels("ModelsPartida");
      $ModelsPartida= new ModelsPartida();
      $partida = $ModelsPartida->actualizar($id_partida ,$codigo, $denominacion);

       print($partida);

     }
     
      else {
        echo "Registro no realizado";
      }

  }

    public function eliminar(){

      if ($_GET) {

        $id_partida = $_GET['id'];
        $models = new CoreModels("ModelsPartida");
        $ModelsPartida= new ModelsPartida();
        $partida = $ModelsPartida->eliminar($id_partida);

        header('location:../Partida/listado');

     
      }
         
     
     
    
      print_r($partida);


       }




   public function listado(){

        $models = new CoreModels("ModelsPartida");
        $ModelsPartida= new ModelsPartida();
        $partida = $ModelsPartida->listar();

        

  
           foreach ($partida as  $partidas) {
             $partida = $ModelsPartida->listar();
         }
           


        $views = new Layout("partida/listpartida.php" , compact("partida", $partida));
       
                
         }



    }


      
 





?>