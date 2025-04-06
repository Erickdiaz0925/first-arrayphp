<?php

$cola =array();

array_push($cola,"Persona 1");
array_push($cola,"Persona 2");
array_push($cola,"Persona 3");
array_push($cola,"Persona 4");
array_push($cola,"Persona 5");
array_push($cola,"Persona 6");
array_push($cola,"Persona 7");
array_push($cola,"Persona 8");
array_push($cola,"Persona 9");

$peronaeliminado = array_shift($cola);

echo "La primera persona que llego fue: ".$peronaeliminado;


?>