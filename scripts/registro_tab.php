<!-- Búsqueda en DASHBOARD y CLIENTES  -->
<?php
session_start();
//variable de conexión
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');

//verificación de conexión

if (mysqli_connect_errno($conectar)) {
    echo "Conexión Fallida" . mysqli_connect_error();

} else {
// Busca al cliente y muestra solo los datos de ese cliente
    if (isset($_SESSION['cliente'])) {

        $resultado_clientes = mysqli_query($conectar, "SELECT clienteId, nombreCliente, contacto, telefono, correo, id_cliente, id_dispositivos, id_vehiculos, id_tickets, id_contenedores, id_usuarios FROM clientes WHERE nombreCliente LIKE '%" . $_SESSION['cliente'] . "%'");

    } else {

        // echo "No hay sesión";

    }
}

?>

<!-- Búsqueda de USUARIOS  -->
<?php
session_start();

//variable de conexión
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');

//verificación de conexión
if (mysqli_connect_errno($conectar)) {
    echo "Conexión Fallida" . mysqli_connect_error();
}
if (isset($_SESSION['cliente'])) {

    $resultado_usuarios = mysqli_query($conectar, "SELECT usuario, usuariopin, nomusuario, locacion, fechareg, usuarios_id FROM usuarios WHERE usuarios_id LIKE '%" . $_SESSION['id_usuarios'] . "%'");

}
?>

<!-- Búsqueda de DISPOSITIVOS  -->
<?php
session_start();

//variable de conexión
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');

//verificación de conexión
if (mysqli_connect_errno($conectar)) {
    echo "Conexión Fallida" . mysqli_connect_error();
}
if (isset($_SESSION['cliente'])) {

    $resultado_dispositivos = mysqli_query($conectar, "SELECT locacion, vacum, cliente_id, dispositivos_id, id_configuracion FROM dispositivos INNER JOIN clientes ON clientes.id_usuarios = usuarios.usuarios_id WHERE usuarios_id LIKE '%" . $_SESSION['id_usuarios'] . "%'");

}
?>


<!-- Búsqueda de Vehículos  -->

<?php
//variable de conexión
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');

//verificación de conexión
if (mysqli_connect_errno($conectar)) {
    echo "Conexión Fallida" . mysqli_connect_error();
}

$resultado_vehiculos = mysqli_query($conectar, "SELECT * FROM vehiculos");
?>

<!-- Búsqueda de Contenedores  -->

<?php
//variable de conexión
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');

//verificación de conexión
if (mysqli_connect_errno($conectar)) {
    echo "Conexión Fallida" . mysqli_connect_error();
}

$resultado_contenedores = mysqli_query($conectar, "SELECT * FROM contenedores");
?>