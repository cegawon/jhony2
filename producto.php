<?php 
session_start();
require('conexion.php');

      $dtz = new DateTimeZone("America/Bogota");
      $dt = new DateTime("now", $dtz);
      $fecha= $dt->format("Y-m-d");
      $hora= $dt->format("h:i:s");
      
      $_SESSION['mensaje'] = 1;
      mysqli_query($conexion,"insert into tablagrupo1 (codigo, nombre, marca, precio, cantidad) values  ('$_POST[codigo]', '$_POST[nombre]', '$_POST[marca]', $_POST[precio], $_POST[cantidad])");   	
?>