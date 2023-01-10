<?php 
session_start();
require('conexion.php');

        $_SESSION['mensaje'] = 0;
        $resultados = mysqli_query($conexion,"select *from tablagrupo1 where codigo = '$_POST[codigo]'");
        if($consul = mysqli_fetch_array($resultados))
        { 
            $_SESSION['codigo'] = $consul['codigo'];
            $_SESSION['nombre'] = $consul['nombre'];
            $_SESSION['marca'] = $consul['marca'];
            $_SESSION['precio'] = $consul['precio'];
            $_SESSION['cantidad'] = $consul['cantidad'];
            $_SESSION['mensaje'] = 1;
        }
?>