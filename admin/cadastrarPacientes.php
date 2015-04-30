<?php
	include 'conexao.php';	
	include_once 'topo.php';	
	include_once 'menu.php';	

	$sql = "SELECT * FROM tb_convenio";	
?>
	<div class="span9">
		<form action="capturaPaciente.php" class="form" method="POST" id="formPaciente">
			
			<label class="label">Nome Completo:</label>
			<input type="text"name="nomeCompleto"/>

			<br/>

			<label class="label">Sexo:</label>
			<input type="radio" name="sexo" value="M"/> Masculino
			<input type="radio" name="sexo" value="F"/> Feminino
			
			<br/>

			<label class="label">Data de Nascimento:</label>
			<input type="date" name="dataNascimento"/>
			
			<br/>

			<label class="label">RG:</label>
			<input type="text" name="rg"/>
			
			<br/>

			<label class="label">Orgão Emissor:</label>
			<input type="text" name="orgao"/>
		
			<br/>

			<label class="label">UF/Orgão:</label>
			<input type="text" name="uf"/>
			
			<br/>

			<label class="label">Estado Civil:</label>
			<select name="estadoCivil">
					<option selected="selected">Selecione os estado civil</option>
					<option value="Solteiro">Solterio</option>
					<option value="Casado">Casado</option>
					<option value="Divociado">Divociado</option>
					<option value="Viuvo(a)">Viuvo(a)</option>
				</select>
			
			<br/>

			<label class="label">Fone:</label>
			<input type="text" name="fone"/>
			
			<br/>

			<label class="label">Convenio</label>
			<select name="convenio">
					<option selected="selected">Selecione o convenio</option>

					<?php
						$resultado = mysql_query($sql);

						while ($r = mysql_fetch_array($resultado)) {
							$codigo = $r['cd_convenio'];
							$nome = $r['nm_convenio'];

							echo "<option value = '$codigo'>$nome</option>";
							
						}
					?>
				</select>	
			<br/>
			<input type="submit" value="Cadastrar paciente">
		</form>
	</div>
<?php
	include 'rodape.php';	
?>

<script type="text/javascript">
	$('#formPaciente').validate({
		rules:{
			"nomeCompleto":{required:true,minlength:5,},
			"rg":{required:true,minlength:5,},
			"uf":{required:true,minlength:1,},
			"orgao":{required:true,minlength:2,}

		},
		messages:{
		"nomeCompleto":"Campo Nome Completo é Obrigatorio e Não pode possuir menos que 3 Caracteres.",
		"rg":"Este Campo Não pode ser Menor que 5 Números.",
		"orgao":"Insira o tipo de Orgão Emissor.",
		"uf":"Insira Somente as Duas primeiras Letras de sua Unidade federetiva."
		
	}
});
</script>