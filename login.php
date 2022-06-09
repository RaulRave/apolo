<?php
session_start();
include("includes/encabezado.php");
include("includes/menu.php");

?>
<?php


//creamos una array para para que se suba los datos del registro  se guarden y podamos entrar con el mismo usuario
if($_POST){
if (empty($_SESSION["usuario"])){
	   	$_SESSION["usuario"]=[[$_POST["usuario"],$_POST["clave"]]];        
}else{
    array_push($_SESSION["usuario"],[$_POST["usuario"], $_POST["clave"]]);
}

}
?>

<br><br><br>
<!-- cramos el formulario para iniciar secion  -->
<form action="includes/verificar_usuario.php" method="post" >
        <label>Usuario</label>
        
        <input type="text" name="usuario" require>
        <br><br>
        <label>clave</label>
        
        <input type="text" name="clave" require>
        <br><br>
        <input class="input-btn1" type="submit" name="btn1" value="Enviar">
</form>

<?php
include("includes/pie.php");
?>
