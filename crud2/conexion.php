<?php
//function conectar(){
  //  $host="localhost";
    //$user="root";
    //$pass="";

   // $bd="asup";

 //   $conexion=mysqli_connect($host,$user,$pass);

   // mysqli_select_db($conexion,$bd);

   // return $conexion;
//}


$dbname = "asup";
$dbuser="root";
$dbhost= "localhost";
$dbpass = "";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)

?>