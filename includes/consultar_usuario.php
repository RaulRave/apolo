<?php
session_start();
// Conecta con la BD
    include 'includes/conexion.php';

// Ponemos un sql para consultar una tabla y nos de el resultado y creamos un boton en una pagina para al pulsarlo nos de el resultado
$sql = "SELECT * FROM registro where usuario like 'p%' ";
$resultado = mysqli_query($conexion, $sql);  

if (mysqli_num_rows($resultado) > 0) {
// Añadimos la salida de datos de la tabla
while($row = mysqli_fetch_assoc($resultado)) {
  echo "id: " . $row["id"]. " usuario: " . $row["usuario"]. "clave:" . $row["clave"]."<br>";
  // var_dump($row);
}
} else {
echo "Sin resultados";
}

//cierra la conexión con la BD
mysqli_close($conexion);
?>
