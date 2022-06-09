<?php
session_start();
include("includes/encabezado.php");
include("includes/menu.php");

?>
<br>
<h4>Presupuesto total de Placas y Temos</h4>

<!-- creamos el formulario y le añadimos los patrones para que solo se pueda validar con los datos que pongamos -->

<form action="presupuesto.php" method="post" name="form1" >
                  
        <legend>Placa Solar</legend>

        <select name="placa">
            <option value="0"> </option>
            <option value="4290"> Kit de 6 placas 8kWH </option>
            <option value="5585"> Kit de 8 placas 9kWH</option>
            <option value="7150"> Kit de 12 placas 14kWH</option>
            
        </select> 
        
        <br><br>

        <legend>Termo Solar</legend>

        <select name="termo">
            <option value="0"> </option>
            <option value="2140.49"> Kit de 4 placas 1kWH </option>
            <option value="2660.79"> Kit de 6 placas 1.5kWH </option>
            <option value="3181.09"> Kit de 8 placas 2kWH </option>
            
        </select> 

        <br><br>

        <legend>Cantidad</legend>

        <label>Cantidad Placa </label>
        <input type="number" name="cantidad"  >  

        <br><br>

        <label>Cantidad Termo </label>
        <input type="number" name="cantidad1"  >  
    
        <br><br>
        
        <input type="submit" name="btn1" value="Registro" >
    
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

$placa=validar($_POST["placa"]);
$termo=validar($_POST["termo"]);
$cantidad=(int)validar($_POST["cantidad"]);
$cantidad1=(int)validar($_POST["cantidad1"]);

//creamos la variable y le añadimos el valor matematico que queremos para que nos multplique los datos y nos de el total
$total=$placa*$cantidad;
$total=$total+$termo*$cantidad1;
$subtotal=$total;
$servicio=$subtotal*0.1;
$igic=($subtotal+$servicio)*0.07;
$pago=$subtotal+$servicio+$igic;

// creamos una tabla para mostrar los datos asignados en el cuerpo de la pagina.
echo "<table  class='table'>";

echo "<tr><th>Cantidad Placa</th><th>Cantidad Termo</th><th>Servicio</th><th>Igic</th><th>Total</th></tr>";
    echo "<tr>"; 
    echo "<td>$cantidad </td> ";
    echo "<td>$cantidad1 </td> ";
    echo "<td>$servicio </td> ";
    echo "<td>$igic </td> ";
    echo "<td>$pago </td> ";
    echo "</tr>";
    echo "</table>";
   }
    
?> 

    
   
<?php
include("includes/pie.php");
?>
 
