<?php
	
	include 'conexao.php';

	$dados = array('login'=>$_POST["login"],
		'senha'=>$_POST["senha"]);

	$sql ="SELECT * FROM tb_usuario WHERE
	 login = '".$dados['login']."' AND status = 1";

	//BUSCA O RESULTADO NO BANCO  
	$resultado = mysql_query($sql);

	//BUSCA O USUÁRIO NO BANCO
	if($busca = mysql_fetch_array($resultado)){
		if($dados['login'] == $busca['login'] &&
				$dados['senha'] == $busca['senha']){

			session_start();
			$_SESSION["cod_usuario"] = $busca['cd_usuario'];
			$_SESSION["email_usuario"] = $busca['email'];
			$_SESSION["login_usuario"] = $busca['login'];
			$_SESSION["autenticar"] = TRUE;
			header("Location:principal.php");
		}else{
		header("Location:error.php");
		}

	}else{
		header("Location:error.php");
	}

	  

?>