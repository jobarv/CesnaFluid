<?php
session_start();
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');

    $id = $_POST["id"];

    $eliminar = "DELETE 'id' FROM usuarios WHERE id = '$id'";

    // $resultado = mysqli_query($conectar, $eliminar);

    // if(!$resultado){

    //     echo 'Error al eliminar el producto';

    // } else{

    //     echo 'Producto eliminado con éxito';

    // }

mysqli_close($conectar);