<?php

$shopping_cart = 151.93;
$tipo = "cables";
$shipping_price = 0;

if ($shopping_cart<20 && $tipo == 'cables'){
    echo "No se puede enviar.";
}
if ($shopping_cart<20 && $tipo == 'perifericos'){
    $shipping_price = 4.99;
    echo "Los gastos de envío son $shipping_price.";
}
if ($shopping_cart>19 && $shopping_cart<51){
    $shipping_price = 4.99;
    echo "Los gastos de envío son $shipping_price.";
}
if ($shopping_cart>50 && $shopping_cart<150){
    $shipping_price = 0;
    echo "Los gastos de envío son $shipping_price.";
}
if ($shopping_cart>150){
    $shipping_price = 0;
    echo "Los gastos de envío son $shipping_price. Para la siguiente compra tienes un código de descuento: GIMBERNAT_20_%.";
}
