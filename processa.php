<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$plataforma = filter_input(INPUT_POST,'plataforma', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST,'mensagem', FILTER_SANITIZE_STRING);


/*echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Plataforma: $plataforma <br>";
echo "Mensagem: $mensagem <br>";*/


$result_usuario = "INSERT INTO teste_table (nome, email, plataforma, mensagem, created) VALUES ('$nome', '$email', '$plataforma', '$mensagem', NOW())";

$resultado_usuario = mysqli_query($conn, $result_usuario);

echo "Facadinhas: $resultado_usuario <br>";

if (mysqli_insert_id($conn)){
		header("Location: index.php");

}else{
		header("Location: index.php");

}


