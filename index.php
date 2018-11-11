<html>
	<head>
		<Title> Contatos </Title>
		<style type="text/css">
		body { background-color: #fff; border-top: solid 10px #000;
				color: #333; font-size: .85em; margin: 20; padding: 20;
				font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
		}
		h1, h2, h3, {color: #000; margin-bottom: 0; padding-bottom: 0; }
		h1 {font-size: 2em; }
		h2 {font-size: 1.75em; }
		h3 {font-size: 1.2em; }
		table {margin-top: 0.75em; }
		th {font-size: 1.2em; text-align: left; border: none; padding-left: 0; }
		td {padding: 0.25em 2em 0.25em 0em; border: 0 none; }
		</style>
	</head>
	<body>
		<h1>Digue</h1>
		<form method="post" action="index.php" enctype="multipart/form-data">
			Nome <input type="text" name="nome" id="nome"/><br><br>
			Email <input type="email" name="email" id="email"/><br><br>
			Plataforma <input type="text" name="plataforma" id="plataforma"/><br><br>
			Mensagem <input type="textarea" name="mensagem" id="mensagem"/><br><br>
			<input type="submit" name="assinar" value="Assinar"/>
			<!--<label>Nome:</label>
			<input type="text" name="nome" placeholder="Richard Belmont"><br><br>
			
			<label>Email:</label>
			<input type="Email" name="email" placeholder="run_fast@now.com"><br><br>
			
			<label>Plataforma:</label>
			<input type="text" name="plataforma" placeholder="Your PC"><br><br>
			
			<label>Mensagem</label>
			<input type="text" name="mensagem" placeholder="I will find..."><br><br>
			
			<input type="submit" value="Enviar">-->
		</form>
		<?php
		require_once("conexao.php");
		header('Content-Type: text/html; charset=utf-8');
        date_default_timezone_set('America/Sao_Paulo');
        try{
            $conn = new PDO("mysql:host=$DB_HOST; dbname=$DB_DATABASE", $DB_USER, $DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            die(var_dump($e));
        }
        if(!empty($_POST)){
            try{
                $nome = $_POST['nome'];
				$email = $_POST['email'];
				$plataforma = $_POST['plataforma'];
				$mensagem = $_POST['mensagem'];
				$data = date("Y-m-d");

				$sql_insert = "INSERT INTO contatos (nome, email, plataforma, mensagem, data) VALUES (:nome, :email, :plataforma, :mensagem, :data)";
				$stmt = $conn->prepare($sql_insert);
				$stmt->execute(array(':nome' => $nome, ':email' => $email, ':plataforma' => $plataforma, ':mensagem' => $mensagem, ':data' => $data));
			}catch(Exception $e){
				die(var_dump ($e));
			}
			echo "<h3> OBIRGADO! Você inseriu o contato</h3>";
		}

		/*$stmt = $conn->query('SELECT * FROM contatos');
		$contatos = $stmt->fetchAll();

		if(count($contatos)){
			echo "<h2> Pessoas que colocaram o contato:</h2>";
			echo "<table>";
			echo "<tr><th>Nome</th>";
			echo "<th>Email</th>";
			echo "<th>Plataforma</th>";
			echo "<th>Mensagem</th>";
			echo "<th>Data</th></tr>";

			foreach ($contatos as $contato) {
				echo "<tr><td>".$contato['nome']."</td>";
				echo "<td>".$contato['email']."</td>";
				echo "<td>".$contato['plataforma']."</td>";
				echo "<td>".$contato['mensagem']."</td>";
				echo "<td>".$contato['data']."</td></tr>";
			}
			echo "</table>";
		}else{
			echo "<h3>Não tem nenhum contato</h3>";
		}*/
		?>
			
	</body>
</html>