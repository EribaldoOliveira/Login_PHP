<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>Login PHP</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div class="container">
	<section id="content">
		<form method="post" action="liga.php">
			<h1>Login</h1>
			<div>
				<input type="text" placeholder="Digite o seu nome" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Digite a senha" name="password"  />
			</div>
			<div>
				<input type="submit" value="Log in" />
				<a href="registar.php">Registrar novo utilizador</a>
                                <a href="protegido.php">Aceder a conteúdo protegido</a>
			</div>
		</form>
	
	</section>
</div>
</body>
</html