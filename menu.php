<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Unskinny</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #3D566E;">
         <div style=" background-color: #2c3e50;">      
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c3e50; margin-left: 20%; margin-right: 20%; height: 80px;">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="navbar-brand" href="index.php">Unskinny</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link disabled" href="menu.php" tabindex="-1" aria-disabled="true">La Tienda<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      packs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="menu.php?mostrar=1">yavere1</a>
                        <a class="dropdown-item" href="menu.php?mostrar=2">yavere2</a>
                        <a class="dropdown-item" href="menu.php?mostrar=3">yavere3</a>
                    </div>
                  </li>
                </ul>
                      <?php
                session_start();
                
                if(isset($_SESSION['username'])){
                    $usuario = $_SESSION['username'];
                  echo   '<a href="salir.php?pag=2"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">', $_SESSION['username'] ,'</button></a>';
                  
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
         <table width="100%">
            <tr align="center">  
              <td>
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/Blue-The-Great-x-Air-Jordan-1-Mid-Fearless-3-681x451.png" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h5 class="card-title">Air Jordan 1 Mid Fearless "Blue the Great"</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <form action="compra.php?zapatilla=BDG" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
                     </div>
                 </div>
            </td>
        <td>
            <div class="card" style="width: 18rem;">
                <img src="imagenes/NXTS.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Air Jordan 1 High Fearless "Travi$ $cott"</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <form action="compra.php?zapatilla=TS" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
             </div>
            </div>
        </td>
        </tr>
        <tr align="center">
             <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/CDG.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Converse Chuck Taylor All-Star 70s Hi Comme des Garcons PLAY Black</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="compra.php?zapatilla=CDG" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
        </td>
         <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/LeFlame.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">converse x golf le fleur flame</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <form action="compra.php?zapatilla=LF" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
         </td>   
       </tr>
       <tr align="center">
           <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/RXS.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Storm X Revenge</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <form action="compra.php?zapatilla=SXR" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
        </td>
        <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/PBW.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Air Jordan Mid Patent Black and White</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="compra.php?zapatilla=PBW" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
        </td>
        </tr>
        <tr align="center">
           <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/nikeblazer.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nike Blazer High</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <form action="compra.php?zapatilla=nikeblazer" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
        </td>
        <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/conv.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Converse X Off White</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="compra.php?zapatilla=PBW" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
        </td>
        </tr>
       </table>
        
        
        
       
        
        
        
        <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>
