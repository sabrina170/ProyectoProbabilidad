<?php

SESSION_START();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if( $_POST["submit"] ){
      foreach($_POST as $campo => $valor) {
          $_SESSION['registro'][$campo] = $valor;
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
<a class="navbar-brand" href="#">
          <img src="img/logo4.PNG" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <a class="navbar-brand">COLABORADOR</a>
        <form class="form-inline"> 
            <a class="btn btn-dark" href="Cerrar.php" type="submit">Cerrar Sessión</a>
        </form>
</nav>

 <div class="card" style="background-color:#ccc">
        
            <!-- <img src="img/user.png" width="150px;" height="100px;"> -->
         
           
              <h2 class="text-center"><strong>CUADRO  GENERADOR DE ESTRATEGIAS</strong></h2>
      </div>
     
<div style="margin:30px;">   
<form method="post" action="ProPage3.php">
 <div class="table-responsive" >
      <table class="table" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">Estr</th>
            <th scope="col">¿Qué carrera desea <BR>estudiar mi hijo?</th>
            <th scope="col">¿He hablado con mi<br> hijo de esta carrera?</th>
            <th scope="col">¿Qué nivel de estudio tomará mi hijo?</th>
            <th scope="col">¿En donde desea <br>estudiar mi hijo<br> esta carrera?</th>
            <th scope="col"> ¿Mi hijo ha hecho <br>OV para esta carrera?</th>
            <th scope="col">¿Lo veo como para<br> estudiar esta carrera?</th>
            <th scope="col">¿Con qué ayuda cuento<br> para la educación de mi hijo?</th>
            <th scope="col">¿En qué ciudad <br>podría estudiar mi hijo?</th>
            <th scope="col">¿Cuánto invertiría <br>al mes en sus estudios?</th>
            <th scope="col">¿En que sector<br> laboral se ubicaría mi  hijo?</th>
            <th scope="col">¿A que cargo o <br> puesto aspiraría mi hijo?</th>
            <th scope="col">¿Veo a mi hijo <br>trabajando en esto?</th>


          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">A</th>
            <td><input name="A1" class="form-control" placeholder="Ej. Ing. de Sistemas" style="width:170px" type="text" required/></td>
            <td>
              <select  name="A2" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="Un Poco">Un Poco</option>
              </select>
            </td>
            <td>
            <select  name="A3" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Superior Universitario">Superior Universitario</option>
                <option value="Superior Técnica">Superior Técnica</option>
                <option value="Carrera Corta">Carrera Corta</option>
                <option value="Curso">Curso</option>
              </select>
            </td>
            <td><input name="A4" type="text" class="form-control" placeholder="Ej. San Marcos" style="width:170px" required/></td>
            <td>
            <select  name="A5" class="form-control" style="width:170px"  required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="Un Poco">Un Poco</option>
              </select>
            </td>
            <td>
            <select  name="A6" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="No estoy seguro">No estoy seguro</option>
              </select>
            </td>
            <td>
            <select  name="A7" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="La familia">La familia</option>
                <option value="Un prestamo">Un prestamo</option>
                <option value="Una beca">Una beca</option>
                <option value="Una empresa">Una empresa</option>
                <option value="Otro">Otro</option>
              </select>
            </td>
            <td>
              <input name="A8" type="text" class="form-control" placeholder="Ej. Lima"  style="width:170px" required/>
            </td>
            <td>
              <input name="A9" type="number" class="form-control" placeholder="Ej. S/350"   style="width:170px" required/>
            </td>
            <td>
              <select  name="A10" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Sector Agropecuario">Sector Agropecuario</option>
                <option value="Sector de Servicios">Sector de Servicios</option>
                <option value="Sector Industrial">Sector Industrial</option>
                <option value="Sector de Transporte">Sector de Transporte</option>
                <option value="Sector de Comercio">Sector de Comercio</option>
                <option value="Sector Financiero">Sector Financiero</option>
                <option value="Sector de la Construcción">Sector de la Construcción</option>
                <option value="Sector Minero y Energético">Sector Minero y Energético</option>
                <option value="Sector Solidario">Sector Solidario</option>
                <option value="Sector de Comunicaciones">Sector de Comunicaciones</option>
              </select>
            </td>
            <td>
            <select  name="A11" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Director / gerentes">Director / Gerente</option>
                <option value="Profesional / Científico /Intelectual">Profesional / Científico /Intelectual</option>
                <option value="Profesional Técnico">Profesional Técnico</option>
                <option value="Personal de Apoyo / Auxiliar">Personal de Apoyo / Auxiliar</option>
                <option value="Trabajador / Comerciante">Trabajador / Comerciante</option>
                <option value="Agricultor / Pescador">Agricultor / Pescador</option>
                <option value="Oficial / Operario / Artesano">Oficial / Operario / Artesano</option>
                <option value="Operador / Conductor de máquinas y motores">Operador / Conductor de máquinas y motores</option>
                <option value="Obrero / Peón">Obrero / Peón</option>
                <option value="FFAA /Ocupaciones Militares/Policiales">FFAA /Ocupaciones Militares/Policiales</option>
            </select>
            </td>
            <td>
            <select  name="A12" class="form-control" style="width:170px" required>
              <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="Mas o Menos">Mas o Menos</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row">B</th>
            <td><input name="B1" class="form-control" placeholder="Ej. Ing. de Sistemas" style="width:170px" type="text" required/></td>
            <td>
              <select  name="B2" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="Un Poco">Un Poco</option>
              </select>
            </td>
            <td>
            <select  name="B3" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Superior Universitario">Superior Universitario</option>
                <option value="Superior Técnica">Superior Técnica</option>
                <option value="Carrera Corta">Carrera Corta</option>
                <option value="Curso">Curso</option>
              </select>
            </td>
            <td><input name="B4" type="text" class="form-control" placeholder="Ej. San Marcos" style="width:170px" required/></td>
            <td>
            <select  name="B5" class="form-control" style="width:170px"  required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="Un Poco">Un Poco</option>
              </select>
            </td>
            <td>
            <select  name="B6" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="No estoy seguro">No estoy seguro</option>
              </select>
            </td>
            <td>
            <select  name="B7" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="La familia">La familia</option>
                <option value="Un prestamo">Un prestamo</option>
                <option value="Una beca">Una beca</option>
                <option value="Una empresa">Una empresa</option>
                <option value="Otro">Otro</option>
              </select>
            </td>
            <td>
              <input name="B8" type="text" class="form-control" placeholder="Ej. Lima" 
               style="width:170px" required/>
            </td>
            <td>
              <input name="B9" type="number" class="form-control" placeholder="Ej. S/350"   style="width:170px" required/>
            </td>
            <td>
              <select  name="B10" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Sector Agropecuario">Sector Agropecuario</option>
                <option value="Sector de Servicios">Sector de Servicios</option>
                <option value="Sector Industrial">Sector Industrial</option>
                <option value="Sector de Transporte">Sector de Transporte</option>
                <option value="Sector de Comercio">Sector de Comercio</option>
                <option value="Sector Financiero">Sector Financiero</option>
                <option value="Sector de la Construcción">Sector de la Construcción</option>
                <option value="Sector Minero y Energético">Sector Minero y Energético</option>
                <option value="Sector Solidario">Sector Solidario</option>
                <option value="Sector de Comunicaciones">Sector de Comunicaciones</option>
              </select>
            </td>
            <td>
            <select  name="B11" class="form-control" style="width:170px" required>
            <option value=""></option>
                <option value="Director / gerentes">Director / Gerente</option>
                <option value="Profesional / Científico /Intelectual">Profesional / Científico /Intelectual</option>
                <option value="Profesional Técnico">Profesional Técnico</option>
                <option value="Personal de Apoyo / Auxiliar">Personal de Apoyo / Auxiliar</option>
                <option value="Trabajador / Comerciante">Trabajador / Comerciante</option>
                <option value="Agricultor / Pescador">Agricultor / Pescador</option>
                <option value="Oficial / Operario / Artesano">Oficial / Operario / Artesano</option>
                <option value="Operador / Conductor de máquinas y motores">Operador / Conductor de máquinas y motores</option>
                <option value="Obrero / Peón">Obrero / Peón</option>
                <option value="FFAA /Ocupaciones Militares/Policiales">FFAA /Ocupaciones Militares/Policiales</option>
              </select>
            </td>
            <td>
            <select  name="B12" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="Mas o Menos">Mas o Menos</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row">C</th>
            <td><input name="C1" class="form-control" placeholder="Ej. Ing. de Sistemas" style="width:170px" type="text" required/></td>
            <td>
              <select  name="C2" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="Un Poco">Un Poco</option>
              </select>
            </td>
            <td>
            <select  name="C3" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Superior Universitario">Superior Universitario</option>
                <option value="Superior Técnica">Superior Técnica</option>
                <option value="Carrera Corta">Carrera Corta</option>
                <option value="Curso">Curso</option>
              </select>
            </td>
            <td><input name="C4" type="text" class="form-control" placeholder="Ej. San Marcos" style="width:170px" required/></td>
            <td>
            <select  name="C5" class="form-control" style="width:170px"  required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="Un Poco">Un Poco</option>
              </select>
            </td>
            <td>
            <select  name="C6" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="No estoy seguro">No estoy seguro</option>
              </select>
            </td>
            <td>
            <select  name="C7" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="La familia">La familia</option>
                <option value="Un prestamo">Un prestamo</option>
                <option value="Una beca">Una beca</option>
                <option value="Una empresa">Una empresa</option>
                <option value="Otro">Otro</option>
              </select>
            </td>
            <td>
              <input name="C8" type="text" class="form-control" placeholder="Ej. Lima"  
              style="width:170px" required/>
            </td>
            <td>
              <input name="C9" type="number" class="form-control" placeholder="Ej. S/350"   style="width:170px" required/>
            </td>
            <td>
              <select  name="C10" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Sector Agropecuario">Sector Agropecuario</option>
                <option value="Sector de Servicios">Sector de Servicios</option>
                <option value="Sector Industrial">Sector Industrial</option>
                <option value="Sector de Transporte">Sector de Transporte</option>
                <option value="Sector de Comercio">Sector de Comercio</option>
                <option value="Sector Financiero">Sector Financiero</option>
                <option value="Sector de la Construcción">Sector de la Construcción</option>
                <option value="Sector Minero y Energético">Sector Minero y Energético</option>
                <option value="Sector Solidario">Sector Solidario</option>
                <option value="Sector de Comunicaciones">Sector de Comunicaciones</option>
              </select>
            </td>
            <td>
            <select  name="C11" class="form-control" style="width:170px" required>
            <option value=""></option>
                <option value="Director / gerentes">Director / Gerente</option>
                <option value="Profesional / Científico /Intelectual">Profesional / Científico /Intelectual</option>
                <option value="Profesional Técnico">Profesional Técnico</option>
                <option value="Personal de Apoyo / Auxiliar">Personal de Apoyo / Auxiliar</option>
                <option value="Trabajador / Comerciante">Trabajador / Comerciante</option>
                <option value="Agricultor / Pescador">Agricultor / Pescador</option>
                <option value="Oficial / Operario / Artesano">Oficial / Operario / Artesano</option>
                <option value="Operador / Conductor de máquinas y motores">Operador / Conductor de máquinas y motores</option>
                <option value="Obrero / Peón">Obrero / Peón</option>
                <option value="FFAA /Ocupaciones Militares/Policiales">FFAA /Ocupaciones Militares/Policiales</option>
              </select>
            </td>
            <td>
            <select  name="C12" class="form-control" style="width:170px" required>
                <option value=""></option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                <option value="Mas o Menos">Mas o Menos</option>
              </select>
            </td>
          </tr>
         
        </tbody>
      </table>
  </div>
  <div class="button-next" style="margin-left: 1100px; margin-top:40px;">

            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-2" role="group" aria-label="First group">
                <a href="ProPage1.php"  type="button" class="btn btn-outline-primary">Atras</a>
                <input name="submit" type="submit" value="Siguiente" href="ProPage3.php" class="btn btn-outline-primary">
              </div>
            </div>
         
  </div>
</form>
 </div>   
 
</div>



</body>
</html>