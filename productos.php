

<html>
<head>
  <title>Fastcake</title>
<meta charset="utf-8">
   <!-- Le styles -->
    <link href="/PlataformaI/css/bootstrap.css" rel="stylesheet">
    <link href="/PlataformaI/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/PlataformaI/css/estilos.css" rel="stylesheet">

   
   <!--  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" /> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php

  include("cabecera.php");
?>
  <div class="container">

    <h1>Panel de administración</h1>
          <div class="row-fluid">
        <?php

        include("izq.php");
        ?>
        <div class="span9">
        <?php 


          include("abrirconeccion.php"); 

			$registros=mysql_query("select cod_terreno, cod_avaluo, cod_plan_regulador, direccion, largo, ancho, descripcion, t.com_codigo, c.com_nombre from terreno t, comuna c where t.com_codigo = c.com_codigo",$conexion) or
			die("Problemas en el select:".mysql_error());

			while ($reg=mysql_fetch_array($registros))
			{
			echo "Codigo Terreno: ".$reg['cod_terreno']."<br>";
			echo "Codigo de avaluo: ".$reg['cod_avaluo']."<br>";
			echo "Dirección: ".$reg['direccion']."<br>";
            echo "Comuna: ".$reg['com_nombre']."<br>";
            echo "Largo: ".$reg['largo']."<br>";
            echo "Ancho: ".$reg['ancho']."<br>";
            echo "Codigo plan regulador: ".$reg['cod_plan_regulador']."<br>";
            echo "Descripción terreno: ".$reg['descripcion']."<br>";
			
            echo "<hr>";
        



			}
          
          
            mysql_close($conexion);

        ?>

        </div>  
        </div>

  
    <footer>
          <p>&copy; Company 2012</p>
        </footer>
  </div>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/PlataformaI/js/jquery.js"></script>
    <script src="/PlataformaI/js/bootstrap-transition.js"></script>
    <script src="/PlataformaI/js/bootstrap-alert.js"></script>
    <script src="/PlataformaI/js/bootstrap-modal.js"></script>
    <script src="/PlataformaI/js/bootstrap-dropdown.js"></script>
    <script src="/PlataformaI/js/bootstrap-scrollspy.js"></script>
    <script src="/PlataformaI/js/bootstrap-tab.js"></script>
    <script src="/PlataformaI/js/bootstrap-tooltip.js"></script>
    <script src="/PlataformaI/js/bootstrap-popover.js"></script>
    <script src="/PlataformaI/js/bootstrap-button.js"></script>
    <script src="/PlataformaI/js/bootstrap-collapse.js"></script>
    <script src="/PlataformaI/js/bootstrap-carousel.js"></script>
    <script src="/PlataformaI/js/bootstrap-typeahead.js"></script>
  

   

</body>
</html>




