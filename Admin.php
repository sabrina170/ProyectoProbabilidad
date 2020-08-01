<?php
    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: Login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: Login.php');
        }
    }


include_once 'bd/conexion.php';
$objeto = new Database();
$conexion = $objeto->connect();

$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta2 = "SELECT *  FROM roles";
$resultado2 = $conexion->prepare($consulta2);
$resultado2->execute();
$data2=$resultado2->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">       
  </head>
    
  <body> 
<nav class="navbar navbar-warning bg-warning">
        <a class="navbar-brand">ADMINISTRADOR</a>
        <form class="form-inline"> 
            <a class="btn btn-dark" href="Cerrar.php" type="submit">Cerrar Sessión</a>
        </form>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">         
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>     
            </div>    
        </div>    
    </div>    
    <br>  
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Password</th>                                
                                <th>Telefono</th>  
                                <th>Gmail</th>  
                                <th>id_rol</th>  
                                <th>Creación</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['username'] ?></td>
                                <td><?php echo $dat['password'] ?></td>
                                <td><?php echo $dat['telefono'] ?></td>    
                                <td><?php echo $dat['gmail'] ?></td>
                                <td><?php echo $dat['id_rol'] ?></td>
                                <td><?php echo $dat['creacion'] ?></td>
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="username" class="col-form-label">Username:</label>
                <input type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                <label for="password" class="col-form-label">Password:</label>
                <input type="text" class="form-control" id="password">
                </div>                
                <div class="form-group">
                <label for="telefono" class="col-form-label">Telefono:</label>
                <input type="number" class="form-control" id="telefono">
                </div>   <div class="form-group">
                <label for="gmail" class="col-form-label">Gmail:</label>
                <input type="text" class="form-control" id="gmail">
                </div>
                <div class="form-group">
                <label for="id_rol" class="col-form-label">Rol:</label>
                <select name="id_rol" id="id_rol" class="form-control">
                                        <option value="">Rol</option>
                                        <?php
                                            foreach($data2 as $dat)
                                            {
                                        ?>
                                            <option value="<?php echo $dat['idrol'] ?>"><?php echo $dat['rol'] ?></option>
                                        <?php        
                                            }
                                        ?>
                </select> 
                </div>                
                          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>