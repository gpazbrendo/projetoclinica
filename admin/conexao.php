<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "clinica";

	$link = mysql_connect($servidor,$usuario,$senha) or 
			die("Não foi possivel acessar o banco".mysql_error());

	$select = mysql_select_db($database);
?>