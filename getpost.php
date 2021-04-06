

<form action="" method="post">
    Introduce nombre <br><input type="text" name="nombre" id="nombre"><br>
    Introduce apellido <br><input type="text" name="apellido" id="apellido"><br>
    <input type="submit" value="Aceptar"><br>
</form>

<?php
if (isset($_POST['nombre']) && isset($_POST['apellido'])){
    print $_POST["nombre"];
    print $_POST["apellido"];
}


?>