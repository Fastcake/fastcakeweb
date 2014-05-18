<?php 
	include("coneccion.php");
	

		$te=mysql_query("select DISTINCT producto.TIEMPO_ELABORACION_PRODUCTO p1
						from orden_de_trabajo ot inner join producto on producto.ID_PRODUCTO = ot.ID_PRODUCTO
				where producto.ID_PRODUCTO ='1';",$conexion) or
                die("Problemas en el select:".mysql_error());
					while ($reg=mysql_fetch_array($te))
                {
         			echo $reg['p1'];
         			echo "<br/>";

     			}

     	$fmp=mysql_query("select orden_de_trabajo.FECHA_ENTREGA_ORDENTRABAJO as ola FROM orden_de_trabajo 
where orden_de_trabajo.FECHA_ENTREGA_ORDENTRABAJO >= now() 
ORDER BY FECHA_ENTREGA_ORDENTRABAJO asc
limit 1;", $conexion) or die("Problemas en el select:".mysql_error());

     	while ($reg=mysql_fetch_array($fmp))
                {
         			echo $reg['ola'];

     			}


     		$suma = $te + $fmp;

     		echo "<br/>";
     		echo $suma;
 ?>