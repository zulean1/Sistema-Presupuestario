<?php 

class Controller
{

	function __construct()
	{
		if ($_GET && isset($_GET["action"])) 
		{
		    
			$action = $_GET["action"]; 
		     if (method_exists($this, $action))
		      {
                   $this->$action();
		      }
		      else 
		      {
                  die("Metodo no encontrado ");
		      }       
		    
		 }
		     
		else {

		    if (method_exists($this, "index")) 
		    {
		    	
		    	    $this->index();

		       }
		   
		      else
		      {
                    die("Metodo no encontrado");
               }
		}



	}
}





 ?>