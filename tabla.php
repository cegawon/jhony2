<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Milenium SAS.</title>

    <!--style css -->
    <link rel="stylesheet" type="text/css" href="css/util.css">
	  <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
     <!-- Data Table -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

  <!-- alerta sweetalert2 -->
<script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css"> 

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

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "BdunadGrupo1";
//Crear Conexion con MYSQL
$conn = new mysqli($servername, $username, $password, $bd);
//Comprobar la Conexión
if ($conn->connect_error) {
    die("Fallo de Conexión: " . $conn->connect_error);
} 

// La variable que creara la tabla en la base de datos.
$mi_tabla= "CREATE TABLE tablagrupo1(
id BIGINT UNIQUE AUTO_INCREMENT,
codigo VARCHAR(40),
nombre VARCHAR(40),
marca VARCHAR(40),
precio FLOAT,
cantidad INT
)";
// Condicional PHP que creará la tabla
if (mysqli_query($conn, $mi_tabla)) {
// Mostramos mensaje si la tabla ha sido creado correctamente!
 //   echo "La tabla Fue creada con exito";
} else {
    // Mostramos mensaje si hubo algún error en el proceso de creación
    echo "Error al crear la tabla: " . mysqli_error($conn);
}
// Cerramos la conexión
mysqli_close($conn);
?>

        <script>
          Swal.fire({
          position: 'top',
          icon: 'success',
          title: 'La Tabla fue Creada con Exito',
          showConfirmButton: false,
          timer: 1500
          })
        </script>
    <div style="margin-top:0px margin-right:-300px">    
      <img src="./images/base_datos.jpg" height="745px" width="2132px">
    </div>



 <footer class="bg-dark text-center text-white" >
        <!-- Grid container -->    
        <div style="margin: 0px">   
        <div class="container p-4 pb-4">
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
          © 2023 Copyright:
          <a class="text-white" href="#">jhony.com</a>
        </div>
        <!-- Copyright -->  
        </div>      
 </footer>
 </body>
</html>

