<!DOCTYPE html>

<html lang = "pt-br">
	<head>
		<meta charset="utf-8">
		<title> TESTE FORM </title>
	</head>
	<body>
		<h1>Digue</h1>
		<form method= "POST" action="processa.php">
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
	</body>
</html>