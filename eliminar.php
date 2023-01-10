<?php 
   session_start();
   require('conexion.php');
    
   $_SESSION['mensaje'] = 0;
   $resultados = mysqli_query($conexion,"select *from tablagrupo1 where codigo = '$_POST[codigo]'");
   if($consul = mysqli_fetch_array($resultados))
   { 
     $_SESSION['mensaje'] = 1;
   }

   $resultados = mysqli_query($conexion,"delete FROM tablagrupo1 where codigo = '$_POST[codigo]' ");  
 
?>