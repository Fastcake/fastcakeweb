<?php

include("../coneccion.php");

		
		$id = $_POST['idInsumos'];
        $cantidad = $_POST['txtCantidad'];

        $registros=mysql_query("delete insumo  WHERE ID_INSUMO=$id",$conexion) or
          die("Problemas en el update:".mysql_error());
          header("location:inventario.php");

    

?>
