<?php

	session_start();
	
	if(!isset($_SESSION["autenticar"]) || 
				$_SESSION["autenticar"] != TRUE){
		header("Location:error.php");		
	} else{
				$codigo_user = $_SESSION['cod_usuario'];
		//echo "E-mail ".$_SESSION["email_usuario"]."<br/>";				
		//echo "Codigo: ".$_SESSION["cod_usuario"]."<br/>";
	}			
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Sistema Clinica</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../js/plugins/datatables/jquery.dataTables.css"/>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
	
		<div class="container">
			<a class="brand" href="principal.php">Empresa</a>
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li><a href="#">Usuário</a></li>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="icon-user"></i><?php echo $_SESSION["login_usuario"]."<br/>"; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="alterarSenha.php">Alterar Senha</a></li>
							<li><a href="sair.php"><i class="icon-edit"></i>Sair</a></li>
						</ul>
					</li>
				</ul>	
			</div>			
		</div>		

	</div>
</div><!--Finaliza a topo do sistema -->



<br/>
