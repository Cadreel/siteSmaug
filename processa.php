<?php

include("conexao.php");

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$plataforma = filter_input(INPUT_POST,'plataforma', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST,'mensagem', FILTER_SANITIZE_STRING);





$result_usuario = "INSERT INTO teste_tabela (nome, email, plataforma, mensagem, data) VALUES ('$nome', '$email', '$plataforma', '$mensagem', NOW())";

$resultado_usuario = mysqli_query($conn, $result_usuario);

/*echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Plataforma: $plataforma <br>";
echo "Mensagem: $mensagem <br>";*/

header("Location: contato.php");




/*if (mysqli->insert_id($conn)){
		header("Location: lista.php");

}else{
		header("Location: lista.php");

}*/

?>


