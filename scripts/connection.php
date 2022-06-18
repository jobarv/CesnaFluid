<?php
$dsn = 'mysql:dbname=tramex1;host=localhost';
$user = 'root';
$password = '123456';
 
try
{
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>