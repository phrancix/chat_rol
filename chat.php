<?php 

	include "includes/header.php";
	include "includes/funciones.php";
	
	$aventura = $_GET["aventura"];
	$usuario = $_GET["usuario"];
	$password = $_GET["password"];
	
?>

	<div id='container'>
	
		<h1>
		<?php
			echo leer_aventura($aventura)
		?>
		</h1>
			
		
		
		
	
	</div>
	
<?php include "includes/footer.php"?>