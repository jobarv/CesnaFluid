<?php
session_start();
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');

$client_id =$_GET['client_id'];
if(isset($_POST['confDevice1']) && $_POST['confDevice1'] == "1"){
    $conf1 = 1;
}else{
    $conf1 = 0;
}
if(isset($_POST['confDevice2']) && $_POST['confDevice2'] == "1"){
    $conf2 = 1;
}else{
    $conf2 = 0;
}
if(isset($_POST['confDevice3']) && $_POST['confDevice3'] == "1"){
    $conf3 = 1;
}else{
    $conf3 = 0;
}
if(isset($_POST['confDevice4']) && $_POST['confDevice4'] == "1"){
    $conf4 = 1;
}else{
    $conf4 = 0;
}
if(isset($_POST['confDevice5']) && $_POST['confDevice5'] == "1"){
    $conf5 = 1;
}else{
    $conf5 = 0;
}
if(isset($_POST['confDevice6']) && $_POST['confDevice6'] == "1"){
    $conf6 = 1;
}else{
    $conf6 = 0;
}
if(isset($_POST['confDevice7']) && $_POST['confDevice7'] == "1"){
    $conf7 = 1;
}else{
    $conf7 = 0;
}
if(isset($_POST['confDevice8']) && $_POST['confDevice8'] == "1"){
    $conf8 = 1;
}else{
    $conf8 = 0;
}



/* if ($_POST['usuario'] === 1) {

    $conf_Device = "UPDATE configuracion SET usuario = 0";
} else {
    $conf_Device = "UPDATE configuracion SET usuario = 1";

} */

$conf_Device = "UPDATE configuracion SET usuario = '$conf1', pinUsuario = '$conf2', vehiculo = '$conf3', pinVehiculo = '$conf4', km = '$conf5', ticket = '$conf6', volumen = '$conf7', impresora = '$conf8' WHERE configuracion_id = '$client_id'";

if (mysqli_query($conectar, $conf_Device)) {
    echo "<script> alert ('Configuración actualizada con éxito');
    window.location='../paginas/dispositivos.php'</script>";
} else {
    echo "Error";
    echo "<script> alert ('Ocurrió un error');
        window.location='../paginas/dispositivos.php'</script>";
}

?>