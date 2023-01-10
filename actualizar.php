<?php 
  session_start();
  require('conexion.php');

  $resultados= mysqli_query($conexion,"update tablagrupo1 set nombre ='$_POST[nombre]', marca ='$_POST[marca]', precio ='$_POST[precio]', cantidad ='$_POST[cantidad]' where codigo = '$_POST[codigo]' ");   
  if($consul = mysqli_fetch_array($resultados))
  { $_SESSION['mensaje'] = 2;
  }     
?>