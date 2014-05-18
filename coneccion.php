<?php
	$conexion=mysql_connect("localhost","root","");
	if(!$conexion){
		die("Error en la Conexión al Motor de BD");
	}

	$seleccion_bd=mysql_select_db("fastcake",$conexion);
	if(!$seleccion_bd){
		die("Error en la selección de la Base de Datos");
	}
 ?>
