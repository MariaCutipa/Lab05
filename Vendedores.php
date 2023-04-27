<?php
    $numhijos = $_POST['valor1'];
    $ventasm = $_POST['valor2'];
    $sueldoba = 600;
    $bonificacion = 50 * $numhijos;
    $comision = 0.075 * $ventasm;
    $sueldobru = $sueldoba + $comision + $bonificacion;
    $descuento= 0.11 * $sueldobru;
    $sueldonet = $sueldobru - $descuento;
    echo "<pre>Su bonificacion es de: ".$bonificacion." soles </pre>";
    echo "<pre>Su comision es de : ".$comision." soles </pre>";
    echo "<pre>Su sueldo bruto  es de: ".$sueldobru." soles </pre>";
    echo "<pre>Se descontara de su sueldo : ".$descuento." soles </pre>";
    echo "<pre>Su sueldo neto es de: ".$sueldonet." soles </pre>";

?>

