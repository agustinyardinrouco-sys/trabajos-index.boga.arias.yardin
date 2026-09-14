<?php

$cantidad_llantas=4;

if($cantidad_llantas>=5):
    $total = $cantidad_llantas*700;
    echo "El valor a pagar es: $total";
else:
    $total = $cantidad_llantas*800;
    echo "El valor a pagar es: $$total";
endif;