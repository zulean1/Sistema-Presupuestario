<?php
 
 class Usuario extends Controller
{
  
 	function __construct (){

 		parent::__construct();
   
 	}

   public function registrar(){
    
   	$views= new Layout ("users/registro_usuario.php");
     
      if ($_POST) {

       $nombre =$_POST['nombre'];
       $apellido=$_POST['apellido'];
       $cargo=$_POST['cargo'];
       $correo=$_POST['correo'];
       $contrasena=$_POST['contrasena'];
      

      $models = new CoreModels("ModelsUsuario");
      $ModelsUsuario= new ModelsUsuario();
      $usuario = $ModelsUsuario->registro($nombre ,$apellido,$cargo, $correo,  $contrasena);


     }
     
      else {
        echo "Registro no realizado";
      }

   }

     public function editar(){

       
      if ($id = isset($_GET['id']) ? $_GET['id'] : '')

      {

        $id= $_GET['id'];
        $models = new CoreModels("ModelsUsuario");
        $ModelsUsuario= new ModelsUsuario();
        $usuario = $ModelsUsuario->lista($id);

     

         $views = new Layout("partida" , compact("usuario", $usuario));
     
     }

       }

     public function actualizar (){
     

      if ($_POST) {

       $nombre =$_POST['nombre'];
       $apellido=$_POST['apellido'];
       $cargo=$_POST['cargo'];
       $correo=$_POST['correo'];
       $contrasena=$_POST['contrasena'];
      

      $models = new CoreModels("ModelsUsuario");
      $ModelsUsuario= new ModelsUsuario();
      $usuario = $ModelsUsuario->actualizar($nombres ,$apellidos,$cargo, $correo,  $contrasena);

     }
     
      else {
        echo "actualizacion no realizada";
      }

  }

   public function listado(){

        $models = new CoreModels("ModelsUsuario");
        $ModelsUsuario= new ModelsUsuario();
        $usuario = $ModelsUsuario->listar();

  
           foreach ($usuario as  $Usuarios) {
             $usuario = $ModelsUsuario->listar();
         }

        $views = new Layout("users/listusuario.php" , compact("usuario", $usuario));


       
                
         }



    }


      
 








 	
?>