<?php
      include("header.php");
      include("coneccion.php");
?>



<section>

    <form action="agregarProducto.php" method="post" name="form_agregar_producto">
      <label>Nombre:</label>
      <input  type="text" placeholder="Torta de lucuma" name="nombre_producto">
      <label>Precio:</label>
      <input  type="text" placeholder="$5.990" name="precio_producto">
      <label>Tiempo de elaboracion: (dias)</label>
      <input  type="text" placeholder="1" name="tiempo_elaboracion_producto">
      <label>Descripcion:</label>
      <textarea name="descripcion_producto" rows="3" ></textarea>
      <button type="submit" class="btn">Agregar el lindo producto</button>



    </form>

</section>

