<?php
  
 
  class Conexion
  {

  	
  	private $usuario ="root";
    private $contrasena ="";
    public  $pdo =null;
   

  	
  	function __construct()
  	{
  		try {
        
          	$this->pdo = new PDO('mysql:host=localhost;dbname=presupuesto', $this->usuario, $this->contrasena);
  
 
         } catch (PDOException $e) {
          echo 'Falló la conexión: ' . $e->getMessage();
}

  
  	}
  }

?>