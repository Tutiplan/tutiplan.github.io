<?php
/*-----------------------
Autor: Freelansite
http://freelansite.000webhostapp.com
Fecha: 12-06-2015
Version de PHP: 7.4.15
----------------------------*/

	# conectare la base de datos
$link = 'mysql:host=localhost;dbname=tuti_plan';
$usuario = 'root';
$pass = '';

try{

    $pdo = new PDO($link,$usuario,$pass);

    echo 'Conectado <br>';

}catch (PDOException $e) {
    print "Imposible conectarse a la base de datos! " . $e->getMessage() . "<br/>";
    die();
}

