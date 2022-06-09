<?php   
session_start();
// Conecta con la BD
include 'conexion.php';

//añadamimoss los campos del formulario 
if(isset($_POST["btn1"])){

    $usuario=htmlspecialchars($_POST['usuario']);
    $clave=htmlspecialchars($_POST['clave']);


    // sql para consultar una tabla (según tu BD)
      $sql = "SELECT usuario, clave FROM registro where usuario='$usuario' and clave='$clave' ";
      $resultado = mysqli_query($conexion, $sql);  
    
    if (mysqli_num_rows($resultado) > 0) {
      // Salida de datos para cada fila
      $_SESSION["usuario"]=$usuario;
      $_SESSION["password"]=$clave;
      echo "<br><h1>Bienvenido: $usuario</h1>";
      header('Location:../cita.php');
    } else {
        echo "<br><h1>Usuario o contraseña incorrecta</h1>";
        header('Location:../cita.php');  // le indicamos que cuando insertemos los datos nos envie a donde queramos de la pg
        session_destroy();
    } 
    
    mysqli_close($conexion);
 
 }

?>