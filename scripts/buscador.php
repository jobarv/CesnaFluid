<?php
session_start();
$conectar = mysqli_connect('localhost', 'root', '123456', 'tramex1');
$buscar = $_POST['buscar'];

if (isset($_SESSION['cliente'])) {
    // echo $_SESSION['cliente'];
    $SQL_READ = "SELECT * FROM clientes WHERE nombreCliente LIKE '%".$_SESSION['cliente']."%'";
    $sql_query = mysqli_query($conectar,$SQL_READ);
    
} else {
    // echo 'no hay sesion';
    // echo "Por favor, introduce el nombre de la empresa";
            unset($_SESSION['cliente']);
        
        } if(!isset($_POST['buscar'])) {
            // echo "Por favor, introduce el nombre de la empresa";
            // echo $_SESSION['cliente'];
        } else {
            $buscar = $_POST['buscar'];
            if(($buscar == null)) {
                $_SESSION['cliente'] = $_POST['buscar'];
                unset($_SESSION['cliente']);
                // echo $_SESSION['cliente'];
                echo "Por favor, introduce el nombre de la empresa";
                
            } else {
                $buscar = $_POST['buscar'];
                
                $SQL_READ = "SELECT * FROM clientes WHERE nombreCliente LIKE '%".$buscar."%'";
                $sql_query = mysqli_query($conectar,$SQL_READ);
                
                $_SESSION['cliente'] = $_POST['buscar'];
            }
        }
        
        
        
