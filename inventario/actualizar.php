<?php

include("../coneccion.php");

function actualizar($cantidad, $id) {
    $sql = "update insumo set insumo.CANTIDAD_INSUMOS='" . $cantidad . "' WHERE insumo.ID_INSUMO='" . $id . "';";
    mysql_query($sql, $conexion);
    echo "window.location.reload();";
}
?>



