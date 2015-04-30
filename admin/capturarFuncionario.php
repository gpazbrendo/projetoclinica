<?php 
	include_once 'conexao.php';

	$dadosUsuario = array('email' => $_POST['email'],
						  'login' => $_POST['login'],
						  'senha' => md5($_POST['senha'])
						  );

	$sql_inserir_usuario = "INSERT INTO tb_usuario 
							VALUES(default,'".$dadosUsuario['email']."',
								'".$dadosUsuario['login']."',
								'".$dadosUsuario['senha']."',
								true,now())";

	//echo $sql_inserir_usuario;

	$result = mysql_query($sql_inserir_usuario);

	$sql_buscar_usuario_db = "SELECT u.cod_usuario FROM tb_usuario as u where u.email = '".$dadosUsuario['email']."'"; 

	$result_busca = mysql_query($sql_buscar_usuario_db);

	while ($busca = mysql_fetch_array($result_busca)) {
		$cod_usuario = $busca['cod_usuario'];
	}

	echo "cod_usuario: ".$cod_usuario;

	$dadosFucionario = array('cod_usuario' => $cod_usuario,
							 'cpf' => $_POST['cpf'],
							 'nm_completo' => $_POST['nm_completo'],
							 'cargo' => $_POST['cargo'],
							 'salario' => $_POST['salario']);

	$sql_inserir_funcionario = "INSERT INTO tb_funcionario VALUES (default,
								'".$dadosFucionario['nm_completo']."',
								'".$dadosFucionario['cargo']."',
								'".$dadosFucionario['cod_usuario']."',
								".$dadosFucionario['salario'].")";  
	$result_funcionario = mysql_query($sql_inserir_funcionario);

	header("Location:listarFuncionario.php");
 ?>