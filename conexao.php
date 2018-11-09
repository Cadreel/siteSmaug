<?php

$servidor = "127.0.0.1:50105";
$usuario = "azure";
$senha = "6#vWHD_$";
$dbname = "localdb";

//$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$conn=mysqli_init(); [mysqli_ssl_set($conn, NULL, NULL, {ca-cert filename}, NULL, NULL);] 
mysqli_real_connect($con, $servidor, $usuario, $senha, $dbname, 80);


?>
