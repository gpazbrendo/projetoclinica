</body>
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/plugins/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="../js/plugins/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="../js/plugins/jquery.maskMoney.js"></script>
	<script type="text/javascript">
		$(function($){
			$("#cpf").mask("999.999.999-99");
			$("#fone").mask("(999) 9999.9999");
			$("#salario").maskMoney({
				symbol:'R$ ',
				showSymbol:false, 
				thousands:'.',
				decimal:',',
				presicion:2
			});
		});		


	</script>
	</html>