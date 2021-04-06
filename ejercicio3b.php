<form action="" method="post">
    Introduce tabla <br><input type="text" name="num" id="num"><br>
    <input type="submit" value="Aceptar"><br>
</form>


<?php

function calcular_tabla($num){
    for ($value=0;$value<=10;$value++){
        print $num."*".$value."=".($num*$value)."<br>";
    }
}
if (isset($_POST['num']))
    if (is_numeric($_POST['num'])){
        calcular_tabla($_POST['num']);
    }
    else {
        print "No es un numero";
    }
    
?>