 <!-- Registro de Cliente Nuevo  -->

<?php
$host_sql="localhost";
$user_sql="root";
$pass_sql="123456";
$db_sql="tramex1";

$nombreCliente=$_POST['nombreCliente'];
$clienteId=$_POST['clienteId'];
$contacto=$_POST['contacto'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$id_dispositivos=$_POST['id_dispositivos'];
$id_vehiculos=$_POST['id_vehiculos'];
$id_contenedores=$_POST['id_contenedores'];
$id_tickets=$_POST['id_tickets'];
$id_usuarios=$_POST['id_usuarios'];

$conexion=mysqli_connect($host_sql,$user_sql,$pass_sql);
if(mysqli_connect_errno()){
    //echo "Fallo en la conexión";
    exit();
}

mysqli_select_db($conexion,$db_sql);
        //or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");


if(isset($_POST["ingresarCliente"]))
{
   
    $registroClientes="INSERT INTO clientes (nombreCliente, clienteId, contacto, telefono, correo, id_dispositivos, id_vehiculos, id_contenedores, id_tickets, id_usuarios)"
    ."VALUES('".$nombreCliente."','".$clienteId."','".$contacto."','".$telefono."','".$correo."','".$id_dispositivos."','".$id_vehiculos."','".$id_contenedores."','".$id_tickets."','".$id_usuarios."')";  
    
    
    if (mysqli_query($conexion, $registroClientes)) {
        echo "<script> alert ('Cliente registrado con éxito');window.location='../paginas/clientes.php'</script>";
        } else {
        echo "Error";
        }
        echo "<script> alert ('Error de registro');window.location='../paginas/clientes.php'</script>";

}

//$querty=mysqli_query($conexion,$querty);
?>
<!-- Registro de Usuario nuevo  -->

<?php
$host_sql="localhost";
$user_sql="root";
$pass_sql="123456";
$db_sql="tramex1";

$usuario=$_POST['usuario'];
$usuariopin=$_POST['usuariopin'];
$nomusuario=$_POST['nomusuario'];
$locacion=$_POST['locacion'];
$usuarios_id=$_POST['usuarios_id'];


$conexion=mysqli_connect($host_sql,$user_sql,$pass_sql);
if(mysqli_connect_errno()){
    //echo "Fallo en la conexión";
    exit();
}

mysqli_select_db($conexion,$db_sql);
        //or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");


if(isset($_POST["ingresarUsuario"]))
{
   
    $registroUsuarios="INSERT INTO usuarios (usuario, usuariopin, nomusuario, locacion, usuarios_id)"
    ."VALUES('".$usuario."','".$usuariopin."', '".$nomusuario."','".$locacion."','".$usuarios_id."')";  
    
    
    if (mysqli_query($conexion, $registroUsuarios)) {
        echo "<script> alert ('Usuario registrado con éxito');window.location='../paginas/usuarios.php'</script>";
        } else {
        echo "Error";
        }
        echo "<script> alert ('Error de registro');window.location='../paginas/usuarios.php'</script>";

}

//$querty=mysqli_query($conexion,$querty);

?>
<!-- Registro de Vehículo Nuevo  -->
<?php
$host_sql="localhost";
$user_sql="root";
$pass_sql="123456";
$db_sql="tramex1";

$vehiculo=$_POST['vehiculo'];
$vehiculopin=$_POST['vehiculopin'];
$locacion=$_POST['locacion'];
$km=$_POST['km'];
$volumen=$_POST['volumen'];
$vacum=$_POST['vacum'];
$vehiculos_id=$_POST['vehiculos_id'];

$conexion=mysqli_connect($host_sql,$user_sql,$pass_sql);
if(mysqli_connect_errno()){
    //echo "Fallo en la conexión";
    exit();
}

mysqli_select_db($conexion,$db_sql);
        //or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");


if(isset($_POST["ingresarVehiculo"]))
{
   
    $registroVehiculos="INSERT INTO vehiculos (vehiculo, vehiculopin, locacion, km, volumen, vacum, vehiculos_id)"
    ."VALUES('".$vehiculo."','".$vehiculopin."','".$locacion."','".$km."','".$volumen."','".$vacum."','".$vehiculos_id."')";  
    
    
    if (mysqli_query($conexion, $registroVehiculos)) {
        echo "<script> alert ('Vehículo registrado con éxito');window.location='../paginas/vehiculos.php'</script>";
        } else {
        echo "Error";
        }
        echo "<script> alert ('Error de registro');window.location='../paginas/vehiculos.php'</script>";

}


//$querty=mysqli_query($conexion,$querty);
?>

<!-- Registro de nuevo Dispositivo  -->

<?php
$host_sql="localhost";
$user_sql="root";
$pass_sql="123456";
$db_sql="tramex1";

$locacion=$_POST['locacion'];
$vacum=$_POST['vacum'];
$id_configuracion=$_POST['id_configuracion'];

$conexion=mysqli_connect($host_sql,$user_sql,$pass_sql);
if(mysqli_connect_errno()){
    //echo "Fallo en la conexión";
    exit();
}

mysqli_select_db($conexion,$db_sql);
        //or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");


if(isset($_POST["ingresarVehiculo"]))
{
   
    $registroVehiculos="INSERT INTO dispositivos (locacion, vacum, id_configuracion)"
    ."VALUES('".$locacion."','".$vacum."','".$id_configuracion."')";  
    
    
    if (mysqli_query($conexion, $registroVehiculos)) {
        echo "<script> alert ('Dispositivo registrado con éxito');window.location='../paginas/dispositivos.php'</script>";
        } else {
        echo "Error";
        }
        echo "<script> alert ('Error de registro');window.location='../paginas/dispositivos.php'</script>";

}


//$querty=mysqli_query($conexion,$querty);

?>
