<?php 
	include 'topo.php';
	include 'menu.php';
 ?>

 	<fieldset>
 		<legend>Dados Pessoais</legend>

 		<form action="capturarFuncionario.php" method="post">
 			<label>Nome Completo:</label>
 			<input type="text" name="nm_completo"/>
 			<br>
 			<label>CPF:</label>
 			<input type="text" name="cpf" id="cpf"/>
 			<br>

 			<label>Telefone ou Celular:</label>
 			<input type="text" name="fone" id="fone"/>
 			<br>

 			<label>Cargo:</label> 
 			<select name="cargo">
 				<option selected="selected">Selecione o Cargo</option>
 				<option value="Desenvolvedor">Desenvolvedor</option>
 				<option value="Financeiro">Financeiro</option>
 				<option value="Medico">Medico</option>
 				<option value="Atendente">Atendente</option>
 			</select>
 			<br>
 			<label>Salario:</label>
 			<input type="text" name="salario" id="salario">
 			<br>

 			<legend>Dados de Usuario</legend>

 			<label>E-mail</label>
 			<input type="email" name="email">
 			<br>
 			<label>Login:</label>
 			<input type="text" name="login"> 
 			<br>
 			<label>Senha:</label>
 			<input type="password" name="senha">
 			<br>
 			<input type="submit" value="Cadastrar">
 		</form>

 	</fieldset>

 <?php 
	include 'rodape.php';
 ?>