<?php

$numero = array(7,17,25,5,9,23,2,14);

//creamos variablenumfiltr, y con el comando filtramos el numero de indice que nesesite

$numeroFiltrar = array_filter($numero, function ($valor) {
    return $valor > 5;
});

print_r($numeroFiltrar);



?>