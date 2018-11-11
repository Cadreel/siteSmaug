<?php

/*$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "testebd";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);*/

$CONNECTION_STRING = getenv("MYSQLCONNSTR__MINHACONEXAO");

if(!$CONNECTION_STRING){
    $CONNECTION_STRING = "Data Source=oultimoseloserver.mysql.database.azure.com;Database=form_contato;User Id=exodia@oultimoseloserver;Password=mi18wa31@ ";
}

function get_parameter($parameter_name, $connection_string){
    preg_match_all("/$parameter_name=(.*?)(;|$)/s", $connection_string, $matches);
    return $matches[1][0];
}

$DB_USER = get_parameter("User Id", $CONNECTION_STRING);
$DB_HOST = get_parameter("Data Source", $CONNECTION_STRING);
$DB_PASSWORD = get_parameter("Password", $CONNECTION_STRING);
$DB_DATABASE = get_parameter("Database", $CONNECTION_STRING);
?>
