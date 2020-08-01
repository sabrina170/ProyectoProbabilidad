<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: Login.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: Login.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mide tu probabilidad</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-primary bg-primary">
        <a class="navbar-brand">COLABORADOR</a>
        <form class="form-inline"> 
            <a class="btn btn-dark" href="Cerrar.php" type="submit">Cerrar Sessión</a>
        </form>
</nav>
      <div class="container">
        <div style="text-align:center;padding:1em 0;">
          <div style="text-align:center;padding:1em 0;">
             <h4>
               <a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3936456">
                <span style="color:gray;">Hora actual en</span><br />Lima, Perú</a>
             </h4>
              <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FLima" width="100%" height="90" frameborder="0" seamless></iframe>
          </div>   
        </div>
      </div>

      <div class="forms-dates">
        <form method="post" action="ProPage2.php">
          <div class="form-group row">
          </div>
          <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">Nombres</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="Nombres" placeholder="Nombres" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-4">
              <input type="text" class="form-control"  name="Apellidos" placeholder="Apellidos" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">Edad</label>
            <div class="col-sm-2">
              <input type="number" class="form-control"  name="Edad" placeholder="Edad" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">Grado</label>
            <div class="col-sm-4">
              <select  name="Grado" class="form-control" required>
                  <option value=""></option>
                <option value="Estudiante 3º Secundaria">Estudiante 3º Secundaria</option>
                <option value="Estudiante 4º Secundaria">Estudiante 4º Secundaria</option>
                <option value="Estudiante 5º Secundaria">Estudiante 5º Secundaria</option>
                <option value="Secundaria Completa">Secundaria Completa</option>
                <option value="Universitario">Universitario</option>
              </select>
            </div>
          </div>
          <!-- <input name="submit" type="submit" value="Siguiente" href="pagina2.php" /> -->
          <div class="button-next">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-2" role="group" aria-label="First group">
                <input name="submit" type="submit" value="Siguiente" href="ProPage2.php" class="btn btn-outline-primary">
              </div>
            </div>
          </div>
        </form>
      </div>

      

</body>
</html>