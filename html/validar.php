<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost","root","","bd_prueba");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
header("location:registro.php");
}
else{
echo "Error de usuario";
}
mysqli_free_result($resultado);
mysqli_close($conexion);