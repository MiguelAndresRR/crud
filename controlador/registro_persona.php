<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["documento"]) and !empty($_POST["fecha_nc"]) and !empty($_POST["correo"])){  
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $documento = $_POST["documento"];
        $fecha_nc = $_POST["fecha_nc"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("insert into tb_persona(nombre,apellido,documento,fecha_nc,correo)values('$nombre','$apellido','$documento','$fecha_nc','$correo')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrada correctamente</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Uno o más campos están vacíos</div>';
    }
}
?>