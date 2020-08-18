<?php
require 'core/Controller.php';
require 'core/Config.php';
require 'core/Views.php';
require 'core/Models.php';
require 'core/Layout.php';
require 'core/Url.php';
require 'core/CoreModels.php';


 
 if ( $_GET && isset($_GET["controller"]) ) 
 {
  
    $default_controller=$_GET["controller"];
    

    if (file_exists("controllers/".$default_controller.".php")) {
        require("controllers/".$default_controller.".php");
    }
    else{
    	die("Controlador no encontrado");
    }

 }
   else{
           if (file_exists("controllers/".$default_controller.".php")) {
        require("controllers/".$default_controller.".php");
    }
    else{
    	die("Controlador no encontrado aja");
    }
   }    

  $mira = new $default_controller();
?>