<?php
 
 class Principal extends Controller
{
   

 	function __construct (){

 		parent::__construct();
   

 	}

   public function index(){
    
   	$views= new Layout ("principal.php", compact("principal"));
  

  


   }




 	}
?>