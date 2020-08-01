<?php

SESSION_START();

if($_SERVER['REQUEST_METHOD']=='POST'){
  
      if( $_POST["submit"] ){
        foreach($_POST as $campo => $valor) {
            $_SESSION['registroTabla'][$campo] = $valor;
        }
      }

      if( $_POST["submit"] ){
        foreach($_POST as $campo => $valor) {
            $_SESSION['registro'][$campo] = $valor;
        }
      }

      if( $_POST["submit"] ){
      foreach($_POST as $campo => $valor) {
          $_SESSION['registroEstE'][$campo] = $valor;
      }
      }

      if( $_POST["submit"] ){
      foreach($_POST as $campo => $valor) {
          $_SESSION['registroEstG'][$campo] = $valor;
      }
      }
}


 $EG1=$_SESSION['registroEstG']['EstG1'];
 $EG2=$_SESSION['registroEstG']['EstG2'];
 $EG3=$_SESSION['registroEstG']['EstG3'];

 $EE1=$_SESSION['registroEstE']['EstE1'];
 $EE2=$_SESSION['registroEstE']['EstE2'];
 $EE3=$_SESSION['registroEstE']['EstE3'];

 $FE1=($EG1/100)*($EE1/10);
 $FF1=($EG1/100)  *  ((10-$EE1)/10);

 $FE2=($EG2/100)*($EE2/10);
 $FF2=($EG2/100)  *  ((10-$EE2)/10);

 $FE3=($EG3/100)*($EE3/10);
 $FF3=($EG3/100)  *  ((10-$EE3)/10);

 $TotalExito=$FE1+$FE2+$FE3;
 $TotalFracaso=$FF1+$FF2+$FF3;

 $NFE1=ROUND(($FE1/$TotalExito)*100);
 $NFF1=ROUND(($FF1/$TotalFracaso)*100);

 $NFE2=ROUND(($FE2/$TotalExito)*100);
 $NFF2=ROUND(($FF2/$TotalFracaso)*100);

 $NFE3=ROUND(($FE3/$TotalExito)*100);
 $NFF3=ROUND(($FF3/$TotalFracaso)*100);

//la hora en tiempo real
  $time =  time();
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
<div id="content">
        <img src="img/logo.PNG" alt="">

        <hr style="height:5px; background-color:darkred;"></hr>

          <div class="container">
              <p class="text-center"><strong>RESULTADOS OBTENIDOS A PARTIR DE SUS ESTRATEGIAS </strong></p>
              <p class="text-center"><strong>VOCACIONALES Y VALORES ASIGNADOS</strong></p>

                        <div class="text-left"><strong>NOMBRE:</strong> <?php  echo $_SESSION['registro']['Apellidos'];?> <?php  echo $_SESSION['registro']['Nombres'];?></div>
                        <div class="text-left"><strong>EDAD:</strong> <?php  echo $_SESSION['registro']['Edad'];?> Años</div>
                        <div class="text-left"><strong>GRADO DE INSTRUCCIÓN:</strong> <?php  echo $_SESSION['registro']['Grado'];?> </div>
                        <div class="text-left"><strong>FECHA DE EVALUCIÓN:</strong> <?php echo date("d", $time)?> de <?php echo date("M", $time)?> del <?php echo date("Y", $time)?></div>

              <p class="text-center"><strong>CONSOLIDADOS</strong></p>
              <!-- <p class="text-center">Habiéndose realizado las fases evaluativa y de información correspondiente, la familia y la evaluada desarrollaron las siguientes 3 estrategias.</p> -->
              <div class="text-left"><strong> I.- SUS ESTRATEGIAS:</strong></div>
              <br> 
            

            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ITEMS ANALIZADOS</th>
                    <th scope="col">Estrategia A</th>
                    <th scope="col">Estrategia B</th>
                    <th scope="col">Estrategia C</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">¿Qué carrera desea estudiar mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A1'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B1'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C1'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿He hablado con mi hijo de esta carrera?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A2'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B2'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C2'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Qué nivel de estudios tomará mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A3'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B3'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C3'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿En dónde desea estudiar mi hijo esta carrera?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A4'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B4'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C4'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Mi hijo ha hecho OV para esta carrera?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A5'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B5'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C5'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Lo veo como para estudiar esta carrera?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A6'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B6'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C6'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Con qué ayuda cuento para la educación de mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A7'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B7'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C7'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿En qué ciudad podría vivir mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A8'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B8'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C8'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Cuánto invertiría al mes en sus estudios?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A9'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B9'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C9'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿En qué sector laboral se ubicaría mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A10'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B10'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C10'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿A qué cargo o puesto podría aspirar mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A11'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B11'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C11'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Veo a mi hijo trabajando en esto?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A12'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B12'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C12'];?></td>
                  </tr>
                </tbody>
              </table>
                <br>
                <BR>
                <div class="text-left"><strong> II.- ASIGNACIONES DE CRITERIOS ELECTIVOS :</strong>
                La evaluada y su familia asignan los siguientes valores para cada estrategia.</div>
                <BR>
                <BR>
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">ESTRATEGIAS</th>
                    <th scope="col" class="text-center">ASIGNACIÓN ELECTIVA</th>
                    <th scope="col" class="text-center">ESTIMADO EXITO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-center">A</th>
                      <td class="text-center"><?php  echo $_SESSION['registroEstG']['EstG1'];?></td>
                      <td class="text-center"><?php  echo $_SESSION['registroEstE']['EstE1'];?></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">B</th>
                      <td class="text-center"><?php  echo $_SESSION['registroEstG']['EstG2'];?></td>
                      <td class="text-center"><?php  echo $_SESSION['registroEstE']['EstE2'];?></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">C</th>
                      <td class="text-center"><?php  echo $_SESSION['registroEstG']['EstG3'];?></td>
                      <td class="text-center"><?php  echo $_SESSION['registroEstE']['EstE3'];?></td>
                  </tr>
                  
                </tbody>
              </table>

              <br>
                <BR>
                <div class="text-left"><strong> III.- INDICADORES DE ÉXITO Y FRACASO POR ESTRATEGIA :</strong>
                De acuerdo a las asignaciones establecidas, el aplicativo “Decide” determinó los 
                  siguientes indicadores para cada estrategia.</div>
                <BR>
                <BR>
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">ESTRATEGIAS</th>
                    <th scope="col" class="text-center">INDICADOR POSITIVO</th>
                    <th scope="col" class="text-center">INDICADOR DESFAVORABLE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-center">A</th>
                      <td class="text-center"><?php echo $NFE1?></td>
                      <td class="text-center"><?php echo $NFF1?></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">B</th>
                      <td class="text-center"><?php echo $NFE2?></td>
                      <td class="text-center"><?php echo $NFF2?></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">C</th>
                      <td class="text-center"><?php echo $NFE3?></td>
                      <td class="text-center"><?php echo $NFF3?></td>
                  </tr>
                  
                </tbody>
              </table>
            
              <br>
                <BR>
                <div class="text-left"><strong> IV.- CONCLUSIONES :</strong></div>
                <BR>
                <P class="text-justify">Los indicadores obtenidos se refieren a los estimados actuales del evaluado y
                su familia, son referenciales y no deben considerarse como determinantes ni absolutos
                  y pueden estar sujetos a sucesos  inesperados o cambios en los ítems establecidos
                  y analizados así como la falta de coherencia o veracidad en la información tomada en cuenta.</P>
                <BR>
                <?php echo date("d", $time)?> de <?php echo date("M", $time)?> del <?php echo date("Y", $time)?>
                <BR>
                
            </div>
          </div>
        </div>
</div>    
            <div class="button-next" style="margin:60px;">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                          <button class="ExportToWord" style="text-decoration: none; padding: 10px; font-weight: 600;
    font-size: 20px; color: #ffffff; background-color: #1883ba; border-radius: 6px; border: 2px solid #0016b0;">Descargar</button> 
                          
                          </div>
                        </div>
                </div>    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="FileSaver.js"></script> 
<script src="jquery.wordexport.js"></script> 
<script type="text/javascript">
    $(function() {   
        $(".ExportToWord").click(function(event) {
            $("#content").wordExport();
        });
    });
    </script>
</body>
</html>