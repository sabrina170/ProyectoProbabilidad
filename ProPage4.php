<?php

SESSION_START();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if( $_POST["submit"] ){
        foreach($_POST as $campo => $valor) {
            $_SESSION['registro'][$campo] = $valor;
        }
      }
    
       if( $_POST["submit"] ){
        foreach($_POST as $campo => $valor) {
            $_SESSION['registroEstG'][$campo] = $valor;
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nostros</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-primary bg-primary">
        <a class="navbar-brand">COLABORADOR</a>
        <form class="form-inline"> 
            <a class="btn btn-dark" href="Cerrar.php" type="submit">Cerrar Sessión</a>
        </form>
</nav>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/user.png" class="card-img" width="50px;" height="100px;">
              </div>
              <div class="col-md-8">
                  <div class="card-body">
                      <div class="text-left"><strong>NOMBRE:</strong>
                        <?php  echo $_SESSION['registro']['Apellidos'];?>
                        <?php  echo $_SESSION['registro']['Nombres'];?>
                      </div>
                      <div class="text-left"><strong>EDAD:</strong> 
                      <?php  echo $_SESSION['registro']['Edad'];?> Años
                      </div> 
                  </div>
              </div>
        </div>
    </div>
      <h3 style="margin-left: 450px;">Tu Posibilidades de Exito</h3>
      <p style="margin-left: 350px;">Ahora que ya tienes tus estrategias, debes asignarle valores de acuerdo al sistema.</p>
      <h5 style="margin-left: 300px;">Pregunta guia: ¿Qué posibilidades de exito entre 0-10 le asignarias a cada estrategia?</h5>


<div class="container" style="margin-top: 50px; margin-left: 200px;  ">
        <table >
        <tr>
        <td style="padding:40px; background-color:#ccc; border-radius:5px; margin:50px;">
        <table >
        <tr>
                <td><strong>Estrategia 1<strong> : </td>
                <td>  <?php  echo $_SESSION['registroEstG']['EstG1'];?>%</td>
            </tr>
            
            <tr>
                <td><strong>Estrategia 2<strong> : </td>
                <td><?php  echo $_SESSION['registroEstG']['EstG2'];?>%</td>
            </tr>
            <tr>
                <td><strong>Estrategia 3<strong> : </td>
                <td><?php  echo $_SESSION['registroEstG']['EstG3'];?>%</td>
            </tr>   
        </table>
</div>
</td>
<td>
<div class="container" style="margin-top: 50px; margin-left:200px;">
    <form method="post" action="ProPage5.php" >
        <table>
            <tr>
                <td>Estrategia</td>
                <td>%</td>
            </tr>
            
            <tr>
                <td>Estrategia 1</td>
                <td><input type='number' name="EstE1" max="10" />%</td>
            </tr>
            
            <tr>
                <td>Estrategia 2</td>
                <td><input type='number' name="EstE2" max="10" />%</td>
            </tr>
            <tr>
                <td>Estrategia 3</td>
                <td><input type='number' name="EstE3" max="10" />%</td>
            </tr>
            
        </table>
        <div >
            <div >
                <div style=" margin-top: 20px; margin-left:350px;">
                    <input name="submit" type="submit" value="Siguiente" href="ProPage5.php" class="btn btn-outline-primary">         
                </div>
            </div>
        <div>
    </form>    
</div>
</td>
</tr>
</table>
</body>
</html>