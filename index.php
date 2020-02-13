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
             <a class="navbar-brand" href="#">Navbar</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                   <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                 </li>
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
                 <li class="nav-item">
                   <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                 </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                 <button class="btn btn-outline-success dropdown-toggle my-2 my-sm-0" type="submit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Log in</button>
                 <div class="dropdown-menu" height="20">
                    <form class="dropdown-item p-4">
                        <div class="form-group">
                          <label for="exampleDropdownFormEmail2">Email address</label>
                          <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                          <label for="exampleDropdownFormPassword2">Password</label>
                          <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                            <label class="form-check-label" for="dropdownCheck2">
                              Remember me
                            </label>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                  </div>
               </form>
             </div>
            </nav>
        </div> 
        <div  align="center">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="width: 50%; height: 50%;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="imagenes/CDG.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="imagenes/Blue-The-Great-x-Air-Jordan-1-Mid-Fearless-3-681x451.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="imagenes/PBW.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
         </div>
        
        
        </div>
        
        <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>



