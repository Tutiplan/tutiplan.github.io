<?php 

require_once('../components/conexion_sql.php');
$conexion=conexion();


$ciudad=$_POST['ciudad'];
$pais=$_POST['pais'];
$descripcion=$_POST['descripcion'];
$categoria=$_POST['categoria'];
$clasificacion=$_POST['clasificacion'];

$sql =  "INSERT Into ciudades (ciudad,pais,descripcion,categoria,clasificacion)
  values ('$ciudad','$pais','$descripcion','$categoria','$clasificacion')";

       echo $result=mysqli_query($conexion,$sql);

?>

