<!DOCTYPE html>
<html>
<head>
	<title>Sistema Clinica</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
</head>
<body>

	<div class="container">
		<div class="form-login">
			<h1>Sistema de login<br/>clinica</h1>
			<form action="admin/autenticar.php" method="post">
					
				<input type="text" name="login" required="required"
				placeholder="Informe o seu Login"/>

				<input type="password" name="senha" required="required"
				placeholder="Informe a sua senha"/>
				<br/>
				<input type="submit" class="btn-primary" value="Logar"/>
			</form>
		</div>	
	</div>
</body>
</html> 