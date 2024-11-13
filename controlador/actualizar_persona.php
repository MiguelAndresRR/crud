<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["documento"]) and !empty($_POST["fecha_nc"]) and !empty($_POST["correo"])){  
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $documento = $_POST["documento"];
        $fecha_nc = $_POST["fecha_nc"];
        $correo = $_POST["correo"];
        $sql = $conexion->query("update tb_persona set nombre='$nombre', apellido='$apellido',documento='$documento',fecha_nc='$fecha_nc',correo='$correo' where id=$id");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar Usurio</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>campos vacíos</div>";
    }
}
?>