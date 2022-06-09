<?php
session_start();
include("includes/encabezado.php");
include("includes/menu.php");

?>
<br>


<h4>Regístrate e Inicia Sesión para poder pedir cita</h4>


<!-- creamos el formulario y le añadimos los patrones para que solo se pueda validar con los datos que pongamos -->
<form action="includes/insertar_cita.php" method="post" name="form1" >
    
        <legend>Datos Personales</legend>

        <label>Nombre </label>
        <input type="text" name="nombre" id="nombre"  minlength="2"    maxlength="20" pattern="[A-Za-z àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]{2,20}" title="Introduce entre 2 y 20 letras" required >
        
        <br><br>
        
        <label>Apellidos </label>
        <input type="text" name="apellidos" id="apellidos" minlength="2"    maxlength="40" pattern="[A-Za-z àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,40}" title="Introduce entre 2 y 40 letras" required >
        
        <br><br>
        
        <label>DNI </label>
        <input type="text" name="dni" id="dni"  pattern="[0-9]{8}[A-Z]" title="Introduce entre 8 digitos y una letra"  required >
        
        <br><br>
        
        <label>Direccion </label>
        <input type="text" name="direccion" id="direccion" minlength="2"    maxlength="40" pattern="[A-Za-z àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-º]{2,40}" title="Introduce entre 2 y 40 letras"  required > 
        
        <br><br>

        <label>Email </label>
        <input type="text" name="email" id="email"  pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Obligatorio @ " required>
        
        <br><br>

        <label>Telefono </label>
        <input type="text" name="telefono" id="telefono" pattern="[0-9]{9}" title="9 cifras" title="Introduce entre 9 digitos" required >
        
        <br><br>

        <legend>Fecha </legend>
        <input type="date" name="fecha"  required />

        <input type="time" name="hora"  required />

        <br><br>
        
        <input type="submit" name="btn2" value="Registro" >
    
    </form>


    <?php



// creamos la validacion del formulario y  el registro de objeto  para que todos los datos que queremos enviar al pulsar el boton se muestren
if(isset($_POST["btn1"])){
    
    function validar($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
$nombre=validar($_POST["nombre"]);
$apellidos=validar($_POST["apellidos"]);
$dni=validar($_POST["dni"]);
$direccion=validar($_POST["direccion"]);
$email=validar($_POST["email"]);
$telefono=validar( $_POST["telefono"]);
$fecha=validar($_POST["fecha"]);
$hora=validar($_POST["hora"]);

// creamos una tabla para mostrar los datos asignados en el cuerpo de la pagina.
echo "<table  class='table'>";

echo "<tr><th >Nombre</th><th>Apellidos</th><th>DNI</th><th>Direccion</th><th>Email</th><th>Telefono</th><th>Fecha</th><th>Hora</th></tr>";
    echo "<tr>";
    echo "<td>$nombre </td> ";
    echo "<td>$apellidos </td> ";
    echo "<td>$dni </td> ";
    echo "<td>$direccion </td> ";
    echo "<td>$email </td> ";
    echo "<td>$telefono </td> ";
    echo "<td>$fecha </td> ";
    echo "<td>$hora </td> ";
    echo "</tr>";
    echo "</table>";
  
}

?>

<?php
include("includes/pie.php");
?>
       
      
    



    
 
