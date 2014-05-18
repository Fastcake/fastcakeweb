<?php 
        include("../header.php");
        include("../coneccion.php");
?>


            
            <table>
                <tr>
                    <td>Cod Producto</td>
                    <td>Nombre</td>                
                    <td>Cantidad</td>
                    <td>Actualizar</td>
                    <td>Eliminar</td>
                </tr>
                <?php
                //conectar("root", "", "localhost");

                $sql = "select ID_INSUMO,  NOMBRE_INSUMO, CANTIDAD_INSUMOS from insumo;";
                $query = mysql_query($sql, $conexion);

                while ($row = mysql_fetch_array($query)) {

                ?>
                <form method="post" id="formInv" name="formInv" action="actualizar.php">
                    <tr>
                    <td><?php echo $row['ID_INSUMO'];  ?> </td>
                    <td><?php echo $row['NOMBRE_INSUMO'];  ?> </td> 
                    <td><?php echo $row['CANTIDAD_INSUMOS'];  ?> </td> 
                    <td> <input type='text' id='txtCantidad' name='txtCantidad'>
                        <input type='hidden'  id="idInsumos" name="idInsumos" value="<?php echo $row['ID_INSUMO'];  ?>">
                    <input type='submit' id='btoActualizar' name='btoActualizar' value='Actualizar'> </td> 
                    
                    </tr>
                     </form>
                
  <?php   
                }
                mysql_close($conexion);

            ?>

            </table>
       

