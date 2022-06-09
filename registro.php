<?php
session_start();
include("includes/encabezado.php");
include("includes/menu.php");
?>
<br> <br><br>
<!-- creamos un formulario para que nos muetre los datos que pedimos al registrarnos  -->

    <form action="includes/insertar_usuario.php" method="post">
        <label>Usuario</label>
        
        <input class="input-Usuario" type="text"  name="usuario" required>
        <br><br>
        <label>clave</label>
        
        <input type="text" class="input-A " name="clave" required>
        <br><br>
        <input class="input-btn1" type="submit" name="btn1" value="Enviar">
    </form>
   
    

<?php
        include("includes/pie.php");
?>
