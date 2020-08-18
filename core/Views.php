<?php


class Views
{
	
	function __construct( $views, $dato =null )
	{

	  
	 
		if (file_exists("public/views/$views")) {
			require "public/views/$views";
		}
		else{

			die("Sitio no encontrado");
			}	
	}
}
?>