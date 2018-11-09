<?php

$servidor = "127.0.0.1:50105";
$usuario = "azure";
$senha = "6#vWHD_$";
$dbname = "localdb";

//$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$conn=mysqli_init(); [mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);] 
mysqli_real_connect($conn, $servidor, $usuario, $senha, $dbname, NULL);


?>
