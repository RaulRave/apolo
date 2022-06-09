<?php
session_start();
//  Conecta con la BD
    include 'conexion.php';
    
//añadamimoss los campos del formulario 
if(isset($_POST["btn2"])){
$nombre=htmlspecialchars($_POST['nombre']);
$apellidos=htmlspecialchars($_POST['apellidos']);
$dni=htmlspecialchars($_POST['dni']);
$direccion=htmlspecialchars($_POST['direccion']);
$email=htmlspecialchars($_POST['email']);
$telefono=htmlspecialchars($_POST['telefono']);
$fecha=htmlspecialchars($_POST['fecha']);
$hora=htmlspecialchars($_POST['hora']);

//  sql para insertar del registro para que se guarden en la tabla de la base de datos

 $sql = "INSERT INTO `cita` VALUES (null,'$nombre','$apellidos','$dni','$direccion','$email','$telefono','$fecha','$hora');";

// le indicamos que la conexion tiene exito o no 
if (mysqli_query($conexion, $sql)) {
  echo "Usuario insertado con éxito";
} else {
  echo "Error insertando usuario: " . mysqli_error($conexion);
 
        session_destroy();
}
// le indicamos que cuando insertemos los datos nos envie a donde queramos de la pg
header('Location:../cita.php');
//3. cierra la conexión con la BD
mysqli_close($conexion);

}
?>