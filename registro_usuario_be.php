<?php
include 'conexion_be.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$query = "INSERT INTO usuarios (nombre, correo, usuario, contrasena)
          VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";

// Ejecutar la consulta
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location = "../inicio.php"; 
    </script>
    ';
} else {
    echo 'Error al insertar el registro: ' . mysqli_error($conexion);
}
?>
