<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <link rel="stylesheet" href="<?php echo url_base ();?>Presupuesto/public/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="annymous">
	 <title>Sistema Presupuestario</title>
</head>
<body>


    <nav class="navbar navbar-light bg-primary d-flex flex-column flex-md-row align-items-center p-3 px-md-2   border-bottom shadow-sm">
    
        <span class="navbar-brand mb-0 h1 text-white">Sistema Presupuestario Anual  </span>
      
         <ul class="nav justify-content-end">
         
           <li> <span class="text-white"><?php echo $fecha=date('d-m-Y') ; ?></span></li>

      
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Perfil</a>
                 <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Bitacora</a>
                  <a class="dropdown-item" href="#">Configuración</a>
                  <a class="dropdown-item" href="#">Cerrar Sesíon</a>
                </div>
            </li>
          </ul>
    </nav>

<div class="row">
  <div class="col-3 bg-primary" class="accordion" id="barra" style=" height: 700px;">
    <ul class="nav flex-column ">
         <li class="nav-item">
               <a class="nav-link text-white " href="<?php echo url_base ();?>Presupuesto/principal"><i class="fas fa-home"></i> Inicio</a>
             </li>
             <li class="nav-item my-2 mx-2" class="btn btn-link collapsed" data-toggle="collapse" data-target="#libros" aria-expanded="false" aria-controls="libros" >
             <a class="nav-link text-white " href="#">Ejercicio Fiscal <i class="fas fa-angle-down"></i></a>
             <div id="libros" class="collapse" aria-labelledby="libros" data-parent="#barra">
                 <ul class="nav flex-column ">
                    <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo url_base ();?>Presupuesto/ejercicio_fiscal/registrar">Registrar</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link text-white" href="../ejercicio_fiscal/listar">Control</a>
                   </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="#">Reportes</a>
                  </li>
               </ul>
            </div>
            </li>
            
             
               <li class="nav-item my-2 mx-2" class= " btn btn-link collapsed" data-toggle="collapse" data-target="#tesis" aria-expanded="false" aria-controls="tesis">
                 <a class="nav-link text-white" href="#">Partidas Presupuestarias<i class="fas fa-angle-down right"></i> </a>
                </li>
                 <div id="tesis" class="collapse" aria-labelledby="tesis" data-parent="#barra">
                     <ul class="nav flex-column ">
                        <li class="nav-item">
                         <a class="nav-link text-white" href="<?php echo url_base ();?>Presupuesto/Partida/registrar">Registrar</a>
                        </li>
                       <li class="nav-item">
                         <a class="nav-link text-white" href="<?php echo url_base ();?>Presupuesto/Partida/listado">Control</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link text-white" href="../SubPartida/registrar">Sub Partidas</a>
                      </li>
                      </ul>
                  </div>             
         <li class="nav-item my-2 mx-2" class= " btn btn-link collapsed" data-toggle="collapse" data-target="#proyectos" aria-expanded="false" aria-controls="proyectos">
          <a class="nav-link text-white" href="#">Autorización de Gastos <i class="fas fa-angle-down"></i></a>
           <div id="proyectos" class="collapse" aria-labelledby="proyectos" data-parent="#barra">
      <ul class="nav flex-column ">
          <li class="nav-item">
             <a class="nav-link text-white" href="<?php echo url_base ();?>Presupuesto/autorizacion_de_gastos/registrar">Registrar</a>
          </li>
          <li class="nav-item">
             <a class="nav-link text-white" href="#">Control</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="#">Reportes</a>
          </li>
        </ul>
    </div>
          </li>
          
           <li class="nav-item my-2 mx-2" class= " btn btn-link collapsed" data-toggle="collapse" data-target="#prestamo" aria-expanded="false" aria-controls="prestamo">
          <a class="nav-link text-white" href="#">Crédito Adicional<i class="fas fa-angle-down"></i></a>
          <div id="prestamo" class="collapse" aria-labelledby="prestamo" data-parent="#barra">
      <ul class="nav flex-column ">
          <li class="nav-item">
             <a class="nav-link text-white" href="<?php echo url_base ();?>Presupuesto/credito_adicional/registrar">Registrar</a>
          </li>
          <li class="nav-item">
             <a class="nav-link text-white" href="#">Control</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="#">Reportes</a>
          </li>
        </ul>
    </div>
          </li> 
           
         <li class="nav-item my-2 mx-2 " class= " btn btn-link collapsed" data-toggle="collapse" data-target="#usuarios" aria-expanded="false" aria-controls="usuarios">
          <a class="nav-link text-white" href="#"><i class="fas fa-user"></i> Usuarios <i class="fas fa-angle-down"></i></a>
          <div id="usuarios" class="collapse" aria-labelledby="usuarios" data-parent="#barra">
          <ul class="nav flex-column ">
          <li class="nav-item">
             <a class="nav-link text-white " href="<?php echo url_base ();?>Presupuesto/usuario/registrar"><i class="fas fa-user-plus"></i> Registrar</a>
          </li>
          <li class="nav-item">
             <a class="nav-link text-white" href="<?php echo url_base ();?>Presupuesto/usuario/listado">Control</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="#">Reportes</a>
          </li>
        </ul>
    </div>
          </li> 
            

          
               
     </ul>
   </div>

    <div class="col-9 bg-light ">

    
  
