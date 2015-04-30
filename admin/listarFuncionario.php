<?php 
	include 'topo.php';
	include_once 'conexao.php';
	include 'menu.php';
 ?>

 	<h3>Funcionario Cadastrado com Sucesso</h3>
 	<?php 
		$sql = "SELECT u.cod_usuario,u.email,u.login,u.status,f.cd_funcionario,f.nm_funcionario,f.cargo,f.salario FROM tb_usuario AS u INNER JOIN tb_funcionario AS f ON(u.cod_usuario = f.cod_usuario)";

					$resultado = mysql_query($sql);

					while ($r = mysql_fetch_array($resultado)) {
						$codigo = $r['cd_paciente'];
						$nome = $r['nm_paciente'];
						$convenio = $r['nm_convenio'];
						$sexo = $r['sexo'];
						$civil = $r['est_civil'];
						$fone = $r['fone'];

 	 ?>

<?php 
	include 'rodape.php';
 ?>
