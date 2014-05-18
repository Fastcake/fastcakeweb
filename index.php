<?php 
        include("header.php");
        include("coneccion.php");
?>

        <section id="contenedor">
            Listado de productos
            <section class="categoria">
                
            <?php    
                $registros=mysql_query("select id_producto, nombre_producto, descripcion_producto, precio_producto, tiempo_elaboracion_producto from producto order by precio_producto asc",$conexion) or
                die("Problemas en el select:".mysql_error());

                while ($reg=mysql_fetch_array($registros))
                {

            ?>
                <div class="cat_contenido" id="<?php echo $reg['id_producto'] ?>">
                    <article class="producto">
                        <img class="foto" src="img/torta.jpg" alt="Foto torta">
                        <h4><?php echo $reg['nombre_producto'] ?></h4>
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
       



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
