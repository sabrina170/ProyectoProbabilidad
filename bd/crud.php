<?php
include_once '../bd/conexion.php';
$objeto = new Database();
$conexion = $objeto->connect();

// Recepción de los datos enviados mediante POST desde el JS   

$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$gmail = (isset($_POST['gmail'])) ? $_POST['gmail'] : '';
$id_rol = (isset($_POST['id_rol'])) ? $_POST['id_rol'] : '';
$creacion = (isset($_POST['creacion'])) ? $_POST['creacion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO usuarios (`username`, `password`, `telefono`, `gmail`, `id_rol`, `creacion`)
         VALUES ('$username', '$password', '$telefono', '$gmail', '$id_rol', current_timestamp()); ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT * FROM usuarios ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE usuarios SET username='$username', password='$password', telefono='$telefono',
         gmail='$gmail', id_rol='$id_rol' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM usuarios WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM usuarios WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
