<?php
session_start();
// 1. Conecta con la BD
    include 'conexion.php';

//añadamimoss los campos del formulario 
if(isset($_POST["btn1"])){
$usuario=htmlspecialchars($_POST['usuario']);
$clave=htmlspecialchars($_POST['clave']);

//  sql para insertar del registro para que se guarden en la tabla de la base de datos

 $sql = "INSERT INTO `registro` VALUES (null,'$usuario','$clave');";

// le indicamos que la conexion tiene exito o no 

if (mysqli_query($conexion, $sql)) {
  echo "Usuario insertado con éxtito";
} else {
  echo "Error insertando usuario: " . mysqli_error($conexion);
 
        session_destroy();
}

// le indicamos que cuando insertemos los datos nos envie a donde queramos de la pg
header('Location:../index.php');
//3. cierra la conexión con la BD
mysqli_close($conexion);

}
?>