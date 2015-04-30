<?php 
	include_once 'topo.php';
	include_once 'menu.php';
 ?>
 <div class="span9">

 	<?php 
	switch (principal.php) {
		case 'cadastrarPacientes.php':
			include 'principal.php';
			break;
		
		default:
			
			break;
	}

 	 ?>

 </div>
 <?php 
 	include_once 'rodape.php';
  ?>