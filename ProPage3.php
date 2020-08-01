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
          $_SESSION['registroTabla'][$campo] = $valor;
      }
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nostros</title>
    
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>

<body>
<nav class="navbar navbar-primary bg-primary">
<a class="navbar-brand" href="#">
          <img src="img/logo4.PNG" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
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
      <h3 style="margin-left: 450px;">Tu Posibilidades de Elección</h3>
      <p style="margin-left: 350px;">Puedes escoger una o mas estrategias de tal manera que la suma debe ser 100.</p>
      <h5 style="margin-left: 300px;">Pregunta guia: ¿Que posibilidad hay que elijas la estrategia "x".?</h5>


  <div class="container" style="margin-top: 50px; margin-left: 450px;"> 
    <form method="post" action="ProPage4.php" onsubmit="return validar();">
        <table>
            <tr>
                <td>Estrategia</td>
                <td>%</td>
            </tr> 
            <tr>
                <td>Estrategia 1</td>
                <td><input type='number' name="EstG1" class='price'  />%</td>
            </tr>
            <tr>
                <td>Estrategia 2</td>
                <td><input type='number' name="EstG2" class='price' />%</td>
            </tr>
            <tr>
                <td>Estrategia 3</td>
                <td><input type='number' name="EstG3" class='price' />%</td>
            </tr>
            <tr>
                <td></td>
              <td><input type='number' name="EstGT" id='totalPrice' disabled ></td>
            </tr>
        </table>
        <div class="button-next" style="margin-left: 500px;">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <input name="submit" type="submit" value="Siguiente" class="btn btn-outline-primary">    
                  </div>
              </div>
        <div>
    </form>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
 
<script>
  $('.price').keyup(function () 
  {
        var sum = 0;
        $('.price').each(function() 
          {
              sum += Number($(this).val());
          }
        );
        $('#totalPrice').val(sum);
      
  });

function validar()
{
  var ok = true;
  if( document.getElementById("totalPrice").value == 100 )
  {
  }
  else 
    {
    alert("EL TOTAL DEBE SER 100");
    ok = false;
    }
  return ok;               
}

</script>
</body>
</html>