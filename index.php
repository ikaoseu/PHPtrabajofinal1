<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #3D566E;">
        <div style="background-color: #2c3e50;">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c3e50; margin-left: 20%; margin-right: 20%; height: 80px;">
             <a class="navbar-brand" href="#">Unskinny</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
                   <a class="nav-link" href="menu.php">La Tienda</a>
                 </li>
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Packs
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Something else here</a>
                   </div>
                 </li>
               </ul>
                <?php
                session_start();
                
                if(isset($_SESSION['username'])){
                    $usuario = $_SESSION['username'];
                  echo   '<a href="salir.php?pag=1"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">', $_SESSION['username'] ,'</button></a>';
                  
                }else{
               echo  '<a href="iniciar.php?funcion=1"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in</button></a>';
               echo   '<a href="iniciar.php?funcion=2"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign in</button></a>';
                }
                  ?>
             </div>
            </nav>
        </div>     
        <br/>
        <br/>
       
        <div  align="center">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="width: 50%; height: 50%;">
               <a href="menu.php">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="imagenes/portada1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="imagenes/portada2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="imagenes/portada3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
         </div>
                    </a>     
        </div>
        
        <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>



