<?php

$array1 = array("primero", "segundo", "tercero", "cuarto");

print $array1[0];

$array2 = array(
    "clave1" => "primero",
    "clave2" => "segundo",
    "clave3" => "tercero",
    "clave4" => "cuarto"
);
echo "<br>";
var_dump($array2);
echo "<br>";
print $array2["clave3"];

?>