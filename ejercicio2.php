<form action="" method="post">
    Introduce kilometros <br><input type="text" name="km" id="km"><br>
    <input type="submit" value="Aceptar"><br>
</form>


<?php

function calculo_km_to_m($km){
    return $km*1000;
}
if (isset($_POST['km']))
    if (is_numeric($_POST['km'])){
        print calculo_km_to_m($_POST['km']);
    }
    else {
        print "No es un numero";
    }
    
?>