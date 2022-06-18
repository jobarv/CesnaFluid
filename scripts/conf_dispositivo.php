<?php
session_start();
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');


/* if ($_POST['usuario'] === 1) {

    $conf_Device = "UPDATE configuracion SET usuario = 0";
} else {
    $conf_Device = "UPDATE configuracion SET usuario = 1";

} */

if (mysqli_query($conectar, $conf_Device)) {
    echo "<script> alert ('Configuración actualizada con éxito');
    window.location='../paginas/dispositivos.php'</script>";
} else {
    echo "Error";
    echo "<script> alert ('Ocurrió un error');
        window.location='../paginas/dispositivos.php'</script>";
}

?>