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
          <style>
             .jumbotron.jumbotron-fluid{
                background-color: #3D566E;
                pading-left:9%;
                margin-top: 7%;
            }           
            
            .container{
                background-color: #3D566E;
                pading-left:9%;
            }           
            </style>
    </head>
    <body style="background-color: #2c3e50;">
        
        <?php
            $funcion = $_GET['funcion'];
        ?>
        
        
         <div class="container col-5">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-1"> Bienvenido a Unskinny.</h1>  
                    <p class="lead">
                        Por favor, antes de continuar, inicia sesión
                    </p>
                    <form id="formulario" action="funcion.php?$funcion" onsubmit="return validate()" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Introduzca usuario">
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary col-3">Acceder</button>
                    </form>
                    
                    
                </div>
            </div>
        </div>
        <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>
