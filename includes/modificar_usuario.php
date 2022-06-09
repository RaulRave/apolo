<?php
session_start();
// Conecta con la BD
    include 'includes/conexion.php';

//añadamimoss los campos del formulario 
$usuario=htmlspecialchars($_POST['usuario']);
$clave=htmlspecialchars($_POST['clave']);
// insertamos el campo de la tabla que queremos cambiar con el cambio puesto
$id=12;

//  sql para insertar un registro con el nombre de la tabla y los dattos
$sql = "UPDATE `registro` SET `usuario`='$usuario',`clave`='$clave' WHERE `id`='$id';";

if (mysqli_query($conexion, $sql)) {
  echo "Usuario modificado con éxtito";
} else {
  echo "Error modificando usuario: " . mysqli_error($conexion);
}

// cierra la conexión con la BD
mysqli_close($conexion);
?>
