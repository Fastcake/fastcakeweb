<?php 
        include("header.php");
        include("coneccion.php");
?>
<section id="contenedor">
            Listado de productos
            <section class="categoria">
                
            <?php    

            		$id=$_GET['id'];
                $registros=mysql_query("select id_producto, nombre_producto, descripcion_producto, precio_producto, tiempo_elaboracion_producto from producto where id_producto = $id",$conexion) or
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