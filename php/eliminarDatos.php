<?php 


 //Leer datos

	include('../components/conexion.php');
	$id=$_POST['id_ciudad'];
	sql="DELETE from ciudades where id='$id'";
	echo $result=mysql_query($conexion,$sql);
?>