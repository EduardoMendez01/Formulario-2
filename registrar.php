<?php
include("conexion.php");

if(isset($_POST['register'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contraseña']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['telefono']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $correo = trim($_POST['correo']);
        $contraseña = trim($_POST['contraseña']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $fecha = date("d/m/y");

        $_consulta = "INSERT INTO datos(nombre, apellido, correo, contraseña, direccion, telefono, fecha)
            VALUES('$nombre', '$apellido', '$correo', '$contraseña', '$direccion', '$telefono', '$fecha');";
        $resultado = mysqli_query($conexion, $_consulta);

        if($resultado){
            header('Location: exito.php');
            exit();
        } else {
            echo '<h3 class="error">TU REGISTRO NO SE HA COMPLETADO</h3>';
        }
    } else {
        echo '<h3 class="error2">LLENA TODOS LOS CAMPOS</h3>';
    }
}
?>
