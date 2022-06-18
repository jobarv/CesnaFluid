<?php
/* session_start();
//variable de conexión
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');

//verificación de conexión
if (mysqli_connect_errno($conectar)) {
  echo "Conexión Fallida" . mysqli_connect_error();

} else {
  if (isset($_SESSION['cliente'])) {
   if($_SESSION['cliente'] = $_POST['buscar']) { 

     $resultado = mysqli_query($conectar, "SELECT nombreCliente, id_usuarios, id_dispositivos, id_vehiculos, id_tickets
                                           FROM clientes Cli
                                           INNER JOIN usuarios Usu ON Cli.id_usuarios = Usu.usuarios_id
                                           INNER JOIN dispositivos Dis ON Cli.id_dispositivos = Dis.dispositivos_id
                                           INNER JOIN vehiculos Veh ON Cli.id_vehiculos = Veh.vehiculos_id
                                           INNER JOIN tickets Tic ON Cli.id_tickets = Tic.tickets_id");
     $sql_query = mysqli_query($conectar,$SQL_READ);

   }
  }
} 
 */
