<?php

class ModelsUsuario extends Conexion
{
	 
	function __construct()
	{
		parent::__construct();
	}


   
  public function listar(){
          try {
          
          $leerp=$this->pdo->prepare('SELECT * FROM usuarios');
          $leerp->execute();
          $usuario=$leerp->fetchAll();
          return $usuario;

             }

         catch(PDOException $e) {
            echo $e->getMessage();
         }
    }

     public function registro (string $nombre , string $apellido, string $cargo, string $correo, string $contrasena){

    	
    $agregar= ' INSERT INTO usuarios (Nombres,Apellidos,Cargo,correo, contrasena) VALUES (?,?,?,?,?)';
    $v_agregar=$this->pdo->prepare($agregar);
    return $v_agregar->execute(array($nombre ,$apellido,$cargo, $correo,  $contrasena));
    }



    public  function actualizar (int $id,string $nombre , string $apellido, string $cargo, string $correo, string $contrasena )
    {
    	  $editar= 'UPDATE usuarios SET Nombres=? ,Apellidos=?,Cargo=?,correo=?, contrasena=? WHERE id=?'; 

         $v_editar=$this->pdo->prepare($editar);
        return $v_editar->execute(array($nombre ,$apellido,$cargo, $correo, $contrasena));
        
          
    }

    public  function eliminar( $id){
       $eliminar=' DELETE FROM usuarios WHERE id=? ';
       $eliminar_id= $this->pdo->prepare($eliminar);
       $eliminar_id->execute(array($id));

       header('location:index.php');
     }

     public function lista($id){

        try {
          
      
           $tabla_id ='SELECT * FROM usuarios  WHERE id=?';

      $guardar_id =$this->pdo->prepare($tabla_id);
      $guardar_id->execute(array($id));

      $resultado_id= $guardar_id->fetch();
      return  $resultado_id;

             }

         catch(PDOException $e) {
            echo $e->getMessage();
         }
    }


     }



      

	





?>