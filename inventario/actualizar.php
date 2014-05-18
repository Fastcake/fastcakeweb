<?php

include("../coneccion.php");

		
		$id = $_POST['idInsumos'];
        $cantidad = $_POST['txtCantidad'];

        $sql = "select NOMBRE_INSUMO, CANTIDAD_INSUMOS from insumo WHERE ID_INSUMO=$id;";
                $query = mysql_query($sql, $conexion);

          	$row = mysql_fetch_array($query);

          	$cantidadFinal = $row['CANTIDAD_INSUMOS'] + $_POST['txtCantidad'];

        $registros=mysql_query("update insumo set CANTIDAD_INSUMOS=$cantidadFinal WHERE ID_INSUMO=$id",$conexion) or
          die("Problemas en el update:".mysql_error());
          header("location:inventario.php");

    

?>



