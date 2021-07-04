<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="tuti_plan";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

		if (conexion()) {
			echo "Conectado";
		}else{
			echo "No conectado";		
		}

 ?>