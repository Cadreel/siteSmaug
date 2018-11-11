<!DOCTYPE html>

<html lang = "pt-br">
	<head>
		<meta charset="utf-8">
		<title> TESTE FORM </title>
	</head>
	<body>
		<h1>Digue</h1>
		<form method= "POST" action="index.php">
			<label>Nome:</label>
			<input type="text" name="nome" placeholder="Richard Belmont"><br><br>
			
			<label>Email:</label>
			<input type="Email" name="email" placeholder="run_fast@now.com"><br><br>
			
			<label>Plataforma:</label>
			<input type="text" name="plataforma" placeholder="Your PC"><br><br>
			
			<label>Mensagem</label>
			<input type="text" name="mensagem" placeholder="I will find..."><br><br>
			
			<input type="submit" value="Enviar">
		</form>
		<?php
		header('Content-Type: text/html; charset=utf-8');
        date_default_timezone_set('America/Sao_Paulo');
        try{
            $conn = new PDO("mysql:host=$DB_HOST; dbname=$DB_DATABASE", $DB_USER, $DB_PASSWORD);
            $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            die(var_dump($e));
        }
        if(!empty($_POST)){
            try{
                $name = $_POST['nome'];
				$email = $_POST['email'];
				$plataforma = $_POST['plataforma'];
				$mensagem = $_POST['mensagem'];
				$data = date("Y-m-d");

				$sql_insert = "INSERT INTO testebd (nome, email, plataforma, mensagem, data) VALUES (:nome, :email, :plataforma, :mensagem, :data)";
				$stmt = $conn->prepare($sql_insert);
				$stmt->execute(array(':nome' => $nome, ':email' => $email, ':plataforma' => $plataforma, ':mensagem' => $mensagem, ':data' => $data));
			}catch(Exception $e){
				die(var_dump $e);
			}
			echo "<h3> Você inseriu o contato</h3>";
		}

		$stmt = $conn->query('SELECT * FROM testebd');
		$testebd = $stmt->fetchAll();

		if(count($testebd)){
			echo "<h2> Pessoas que colocaram o contato:</h2>";
			echo "<table>";
			echo "<tr><th>Nome</th>";
			echo "<tr><th>Email</th>";
			echo "<tr><th>Plataforma</th>";
			echo "<tr><th>Mensagem</th>";
			echo "<tr><th>Data</th></tr>";

			foreach ($testebd as $testebd1) {
				echo "<tr><td>".$testebd1['nome']."</td>";
				echo "<td>".$testebd1['email']."</td>";
				echo "<td>".$testebd1['plataforma']."</td>";
				echo "<td>".$testebd1['mensagem']."</td>";
				echo "<td>".$testebd1['data']."</td></tr>";
			}
			echo "</table>";
		}else{
			echo "<h3>Não tem nenhum contato</h3>"
		}
		?>
			
	</body>
</html>