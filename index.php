<?php 
        include("header.php");
        include("coneccion.php");
?>

        <section id="contenedor">
            Listado de productos
            <section class="categoria">
                <div class="cat_nombre">
                    nombre de categoria
                </div>
                <div class="cat_contenido">
                    <article class="producto">
                        <img src="imagenes/torta.png" alt="Foto torta">
                        <h4>Torta de milhojas</h4>
                        <p class="descripcion">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <span class="precio">$59.990.-</span>
                        <div class="tiempoElavoracion">1 dia</div>
                        <div class="tiempoEntrega">Lunes 20 de mayo.</div>
                        <input type="button" name="Agregar al carro" value="agregar al carro">
                    </article>
                </div>
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
