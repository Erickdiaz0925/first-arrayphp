<?php
    echo "MEJORES EQUIPOS DEL MUNDO!\n";
	//$ eso se usa para declarar 
	
	$equipos = array("atl nacional","millos","flamengo"); //se le asigna valores al array
	$equipos[] = "PSG"; //[] es la funcion para agregar un valor al array (si esta vacio el[] es porque es para agregar )
print_r($equipos); //imprime el array con sus respectivas posiciones

$equiposEliminar = "millos"; //
$llave = array_search($equiposEliminar,$equipos);
if($llave!==false){
  unset($equipos[$llave]); // UNSET ELIMINA 
}

print_r($equipos);

//modificar un elemento especifico
$equipos[1]= "Juventus";// con este cambiamos el elemento que contiene un indice del array 
$equipos[2]="Arsenal";
print_r($equipos);

// mostrar un indice especifico
$equiposeleccionado = array_slice(array: $equipos, offset: 1, length: 2);
print_r(value: $equiposeleccionado); //extraer el inice que le poga por ejemplo 1,2




?>