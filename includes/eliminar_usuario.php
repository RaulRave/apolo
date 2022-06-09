<?php
session_start();
// Conecta con la BD
    include 'includes/conexion.php';

// elegir el id  que queremos eliminar 
 $id=13;  
// sql para insertar un registro
$sql = "  ";
// $sql = "DELETE FROM `registro` WHERE `id`='$id';";

// le indicamos a la conexion que nos avise si el usuario a sido eliminado o no

if (mysqli_query($conexion, $sql)) {
  echo "Usuario eliminado";
} else {
  echo "Error eliminando usuario: " . mysqli_error($conexion);
}

//cierra la conexión con la BD
mysqli_close($conexion);
?>
