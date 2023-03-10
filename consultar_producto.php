<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletronic</title>
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/inventario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">    

</head>
<body>

<header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a href="index.html"><img src="./images/logo.jpg" width="200"></a>
            <p class="fs-20"><b><i class="bi bi-envelope" style="font-size: 20px; color: rgb(20, 174, 235);"></i> Correo:</b> electronicmilenium@gmail.com | <i class="bi bi-telephone" style="color: rgb(20, 174, 235); font-size: 20px;"></i> <b>Contacto:</b> 3001247698</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="text-end">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav fs-3">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Administrador
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="base_datos.php">Crear base de Datos</a></li>
                    <li><a class="dropdown-item" href="tabla.php">Crear tabla</a></li>
                    <li><a class="dropdown-item" href="reporte.php">Generar reporte PDF</a></li>
                    <li><a class="dropdown-item" href="backup.php">Generar Backup</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Inventario
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="ingresar_producto.php">Registrar Producto</a></li>
                    <li><a class="dropdown-item" href="actualizar_producto.php">Modificar Producto</a></li>
                    <li><a class="dropdown-item" href="eliminar_producto.php">Eliminar Producto</a></li>
                    <li><a class="dropdown-item" href="consultar_producto.php">Consultar Producto</a></li>
                  </ul>
                </li>
                <a class="nav-link" href="utilidades.html">Utilidades</a>
              </div>
            </div>
          </div>
        </div>
      </nav>       
    </header>
<!-- Alerta -->
<div id="mostrar_mensaje"></div>
    <?php      
      if(isset($_SESSION['mensaje'])){
        if ($_SESSION['mensaje'] == 1) {       
    ?>
        <script>
          Swal.fire({
          position: 'top',
          icon: 'success',
          title: 'Producto Eliminado',
          showConfirmButton: false,
          timer: 1500
          })
        </script>
       <?php   unset($_SESSION['mensaje']);
      }
      else {
        ?>
        <script>
          Swal.fire({
          position: 'top',
          icon: 'error',
          title: 'Producto No Encontrato',
          showConfirmButton: false,
          timer: 1500
          })
        </script>
       <?php   unset($_SESSION['mensaje']);
      }
    }
      ?>
    <div class="card">     
        <div class="imagen">                
            <img src="./images/formulario.jpg" alt="Ejemplo" style="width: 100%;">               
        </div>   
        <div class="card-body">            
            <div class="text-center fs-30 fw-bold" style="margin-top: 50px;">
                Consultar Productos
            </div>
            <form style="margin-top: 100px;" action="consulta.php" method="post">
            <!-- Codigo -->
           <div class="row">
             <div class="col form-outline mb-4">
               <input type="text" id="codigo" name="codigo" placeholder="CODIGO PRODUCTO" class="form-control text-center" />
             </div>
            </div>
         <div class="text-center">
          <button type="submit" class="btn btn-dark btn-lg">Consultar Producto</button>
          <button type="reset" class="btn btn-success btn-lg">Borrar</button>
         </div>
         </form>
        </div>
    </div>
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0" style="margin-bottom: 100px;">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="bi bi-facebook"></i>
            </a>
      
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="bi bi-messenger"></i>
            </a>
      
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="bi bi-whatsapp"></i></a>
      
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="bi bi-instagram"></i></a>
      
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="bi bi-linkedin"></i></a>
      
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="bi bi-snapchat"></i></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          ?? 2020 Copyright:
          <a class="text-white" href="#">jhony.com</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>

<!-- Funciones De JS-->
<script type="text/javascript">  
