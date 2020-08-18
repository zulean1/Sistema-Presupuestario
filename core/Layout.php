<?php


class Layout
{
	
	function __construct($views , $dato=null)

	{
    
	    require 'Config.php';
          if (file_exists("public/views/$views"))
           {
              if (file_exists("public/views/layout/$header")) 
                   require 'public/views/layout/'.$header;
               else die("Sitio no encontrado.en header");

           require "public/views/$views";

              if (file_exists("public/views/layout/$footer")) 
              require 'public/views/layout/'.$footer;
               else
               die("Sitio no encontrado.. footer");
          
          }
          else{
          	die("Sitio no encontrado, ya no funciona");
          }


	}
}





?>