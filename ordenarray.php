<?php

$marca = array("cheverolet"=>2000,"mazda"=>2024, "renault"=>2011, "wolksvagen"=>1999, "Ferrari"=>1981);
//ordebar de menor a mayor
asort($marca);

print_r($marca);

$marcaFiltrar = array_filter($marca, function ($valore){
    return $valore >= 2000;
});
print_r($marcaFiltrar);
?>