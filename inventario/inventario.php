<?php
include("../coneccion.php");
include ("../inventario/actualizar.php");
?>

<html>
    <head>


    </head>
    <body>
        <form id="formInv" name="formInv">
            <input type="button" id="btoComprar" name="btoComprar" value="Comprar">     
            <input type="button" id="btoMerma" name="btoMerma" value="Merma">
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
                    echo"<tr>";
                    echo "<td> $row[ID_INSUMO] </td> ";
                    echo "<td> $row[NOMBRE_INSUMO] </td> ";
                    echo "<td> $row[CANTIDAD_INSUMOS] </td> ";
                    echo "<td> <input type='text' id='txtCantidad' name='txtCantidad'>"
                    . "     <input type='button' id='btoActualizar' name='btoActualizar' Value='Actualizar' onclick='sActualizar(," . $row[ID_INSUMO] . ")'> </td> ";
                    echo "<td> <input type='button' id='btoEliminar' name='btoEliminar'> </td>   ";
                    echo "</tr>";
                }
                ?>


            </table>
        </form>

        <script>
            function  sActualizar(numero)
            {
                var actuaizar = document.formInv.

            }
        </script>

    </body>

</html>