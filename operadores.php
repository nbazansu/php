<?php

define("NAME","Julio");
$notas = array("A", "B", "C");
$nota = 98;
if ($nota < 0 || $nota > 100){
    print "Nota de ".NAME." no valida";
}
else if ($nota < 50) {
    print "La nota es $notas[2]";
}
else if ($nota < 75){
    print "La nota es $notas[1]";
}
else {
    print "La nota es $notas[0]";
}

?>