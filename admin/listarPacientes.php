<?php
	include_once 'topo.php';
	include_once 'menu.php';
?>

	<div class="span9">

		<a href="cadastrarPacientes.php" title="Novo Paciente">
			<img src="../img/people.png" style="width:80px; height:80px; " />
		</a>

		<h3>Lista de pacientes</h3>

		<table id="exemplo">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nome do paciente</th>
					<th>Convênio</th>
					<th>Sexo</th>
					<th>Estado Civil</th>
					<th>Fone</th>
					<th>Opções</th>
				</tr>
			</thead>

			<tbody>

				<?php
					include 'conexao.php';
					$sql = "SELECT p.cd_paciente,p.nm_paciente,c.nm_convenio,p.sexo,p.est_civil,p.fone 
							FROM tb_paciente AS p INNER JOIN tb_convenio AS c 
							ON(c.cd_convenio = p.cd_convenio)";

					$resultado = mysql_query($sql);

					while ($r = mysql_fetch_array($resultado)) {
						$codigo = $r['cd_paciente'];
						$nome = $r['nm_paciente'];
						$convenio = $r['nm_convenio'];
						$sexo = $r['sexo'];
						$civil = $r['est_civil'];
						$fone = $r['fone'];

						echo "<tr>";
						echo "<td>$codigo</td>";
						echo "<td>$nome</td>";
						echo "<td>$convenio</td>";
						echo "<td>$sexo</td>";
						echo "<td>$civil</td>";
						echo "<td>$fone</td>";
						echo "<td>Editar | Excluir</td>";
						echo "</tr>";
					}
				?>		
			</tbody>

			<tfoot>
				<tr>
					<td colspan="7">Sistema de clinicas</td>
				</tr>
			</tfoot>
		</table>
	</div>
<?php
	include "rodape.php";
?>