<?php


   include("coneccion.php");
        $nombre = $_POST['nombre_producto'];
        $precio = $_POST['precio_producto'];
        $tiempo = $_POST['tiempo_elaboracion_producto'];
        $descripcion = $_POST['descripcion_producto'];
        
        $ejec_insertar=mysql_query("insert into producto ( nombre_producto, descripcion_producto, precio_producto, tiempo_elaboracion_producto) values ( '$nombre', '$descripcion', $precio, $tiempo)",$conexion);

        mysql_close($conexion);
        if(!$ejec_insertar)
        die("Problemas en el insert:". mysql_error());
        header("location:exito.php");
      

?>