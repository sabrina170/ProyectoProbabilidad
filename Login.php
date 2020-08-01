<?php
    include_once 'bd/conexion.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: Admin.php');
            break;

            case 2:
            header('location: Cliente.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[5];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: Admin.php');
                break;

                case 2:
                header('location: Cliente.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }
        

    }

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
 integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <style>
.containerOwnApp {
   box-shadow: 0 0 27px 0 rgba(84, 84, 84, 0.62);
   padding-top: 15px;
}
 
.login-page {
    margin-top:80px;
}
 
.login-form {
   box-shadow: 0 0 27px 0 rgba(84, 84, 84, 0.62);
}
 
.login-form-header {
   padding-top: 10px;
}
 
.login-from-row {
   padding-top: 16px;
   padding-bottom: 16px;
}
 
.login-form-font-header {
   font-size:30px; 
   font-weight: bold;
}
 
.login-form-font-header span {
   color: #007C9B;
}

      </style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <img src="img/logo4.PNG" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="nosotros.html">Nostros <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="tutoriales.html">Tutoriales</a>
            </li>
          </ul>
          
        </div>
</nav>
        <div class="container">
            <div class="row text-center login-page">
            <div class="col-md-12 login-form">
                <form action="#" method="POST" > 			
                        <div class="row">
                            <div class="col-md-12 login-form-header">
                            <p class="login-form-font-header">Orientación<span>Vocacional</span><p>
                            <p class="login-form-font-header"><span>Opta</span>Perú<p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row">
                                <input name="username" type="text" placeholder="Usuario" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row">
                                <input name="password" type="password" placeholder="Contraseña" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row">
                                <button class="btn btn-info" type="submit" >Inicia Sesisón</button>
                            </div>
                        </div>
                </form>
            </div>
            </div>
        </div>
 

<div style="margin-left:40px;" class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <a href="VistaPago.php"  type="button" class="btn btn-outline-primary">Atras</a>
   
  </div>

</div>
</body>
</html>
