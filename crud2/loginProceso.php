<?php
session_start();
include_once 'model/conexion.php';
$usuario= $POST['usuario'];
$contrasena= $POST['contrasena'];
$sentencia= $bd->prepare('select * from ingresar where 
                                usuario=? and contrasena =?;');
$sentencia->execute([$usuario, $contrasena]);
$datos = $sentencia->fetch(PDO:FETCH_OBJ);
print_r($datos);
?>