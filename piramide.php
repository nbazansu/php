<?php

$spaces = 0;
$symbol = 0;
$size = 10;

function print_spaces($value){
    for ($j = 0; $j < $value; $j++){
        print "&nbsp;&nbsp;";
    }
}
function print_symbol($value){
    for ($j = 0; $j < $value; $j++){
        print '*';
    }
}

$spaces=$size;
for ($i = 0; $i <= $size; $i+=2) {
    print print_spaces($spaces/2).print_symbol($symbol).print_spaces($spaces/2)."<br>";
    $symbol+=2;
    $spaces-=2;
}

?>