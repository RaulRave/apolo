<?php
// creamos el servidor con y la base de datos
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "apolo";
 
  // Crea la Conexión
  $conexion = mysqli_connect($servername, $username, $password, $dbname);

  // Verifica la Conexión y le indicamos si hay exito o no
  if (!$conexion) {
    die("La Conexión ha fallado: " . mysqli_connect_errno());
  }else{
  echo "Conexión exitosa <br>";
}
  //La conexión se cerrará automáticamente cuando finalice el script. 
  //Para cerrar la conexión antes, usa: mysqli_close($conexion);
  
?>