<?php 
        include("header.php");
        include("coneccion.php");
?>
<section id="contenedor">
            Listado de productos
            <section class="categoria">
                
            <?php    

            		$id=$_GET['id'];
		            $registros=mysql_query("select p.id_producto, 
		            					p.nombre_producto, 
						            	p.descripcion_producto, 
						            	p.precio_producto, 
						            	p.tiempo_elaboracion_producto,
										s.NOMBRE_INSUMO
										FROM
										producto p,
										receta r,
										insumo s
										WHERE
										p.id_producto = $id
										and p.ID_PRODUCTO=r.ID_PRODUCTO
										and r.ID_INSUMO = s.ID_INSUMO",$conexion) or
                die("Problemas en el select:".mysql_error());

                while ($reg=mysql_fetch_array($registros))
                {

            ?>
                <div class="cat_contenido" id="<?php echo $reg['id_producto'] ?>">
                    <article class="producto">
                        <img class="foto" src="img/torta.jpg" alt="Foto torta">
                        <h4><a href="detalle.php?id=<?php echo $reg['id_producto'] ?>" title=""><?php echo $reg['nombre_producto'] ?></a></h4>
                        <p class="descripcion">
                           <?php echo $reg['descripcion_producto'] ?>
                        </p>
                        <span class="precio">$<?php echo $reg['precio_producto'] ?></span>
                        <div class="tiempoElavoracion"><?php echo $reg['tiempo_elaboracion_producto'] ?> dias</div>
                        <input type="button" name="Agregar al carro" value="agregar al carro">
                    </article>
                </div>
            <?php   
                }
                mysql_close($conexion);

            ?> 
            </section>

        </section>