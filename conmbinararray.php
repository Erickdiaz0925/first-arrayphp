<?php

$info1 = array("Nombre"=>"Nicolas","Edad"=>"18","Correo"=>"nicodiaz@gmail.com");
$info2 = array("Ciudad"=>"Bogota D.C","Profesion"=>"No tiene");
print_r($info2);
//merge para relacionar,conbinar
$infojunta = array_merge($info1,$info2);

print_r($infojunta);



?>