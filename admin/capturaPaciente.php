<meta charset="UTF-8"/>
<?php
	
	include_once 'conexao.php';

	$nomeCompleto = $_POST['nomeCompleto'];
	$sexo = $_POST['sexo'];
	$data_nasc = $_POST['dataNascimento'];
	$rg = $_POST['rg'];
	$orgao = $_POST['orgao'];
	$uf = $_POST['uf'];
	$estado_civil = $_POST['estadoCivil'];
	$fone = $_POST['fone'];
	$convenio = $_POST['convenio'];

	$sql = "INSERT INTO tb_paciente(cd_convenio,nm_paciente,sexo,dt_nascimento,rg,org_emissor,est_civil,fone) VALUES (".$convenio.",'".$nomeCompleto."','".$sexo."','".$data_nasc."','".$rg."','".$orgao."','".$estado_civil."','".$fone."')";

	$result = mysql_query($sql);

	if(!$result){
		echo "Error ao inserir os dados";
		die('Error: '.mysql_error());
	}else{
		echo "Operação realizada com sucesso !";
	}


?>

<a href="listarPacientes.php">Clique aqui</a> para visualizar os pacientes.