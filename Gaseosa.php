<?php
    $precioac = $_POST['valor1'];
    $cantidad = $_POST['valor2'];
    $descuento= 0.05 * $precioac;
    $precionuevo = $precioac - $descuento;
    $imcompra = $cantidad * $precionuevo;
    $descompra = 0.07 * $imcompra;
    $impagar = $imcompra - $descompra;
    $obsequio = 2 * $cantidad;
    echo "<pre>El nuevo precio de la gaseosa es de: ".$precionuevo." soles </pre>";
    echo "<pre>El importe de la compra es de: ".$imcompra." soles </pre>";
    echo "<pre>El descuento de la compra es de: ".$descompra." soles </pre>";
    echo "<pre>El importe a pagar es de: ".$impagar." soles </pre>";
    echo "<pre>El obsequio es de: ".$obsequio." caramelos </pre>";

?>

