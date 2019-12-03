<?php 

	include "includes/header.php";
	
	if(isset($_GET["valido"])){
		$vale = $_GET["valido"];
	}else{
		$vale = 0;
	}
	
	if(isset($_GET["usuario"])){
		$usuario = $_GET["usuario"];
	}else{
		$usuario = "";
	}
?>

	<div id='container'>
	
		<h1>Chat Rol</h1>
	
		<form action="validar_form.php" method="post">
			  
			<div class="form-group">
				<label for="usuInput">Usuario</label>
				<input type="text" name="usuario" class="form-control" id="usuInput" required>
			</div>
			  
			<div class="form-group">
				<label for="pasInput">Password</label>
				<input type="password" name="password" class="form-control" id="pasInput" required>
			</div>
			 
			<div class="form-group">
				<label for="avenSelect">Aventura</label>
				<select class="form-control" name="aventura" id="avenSelect" placeholder="Selecciona la aventura..." required>
					<option value="">Selecciona la aventura...</option>
					<option value="caliz">El Cáliz de Sheren'Moor</option>
					<option value="viaje">Viaje por Tierras de Aldehor</option>
				</select>
			</div>
			
			<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="entrar" id="regRadio" value="1">
				  <label class="form-check-label" for="regRadio">Registrar</label>
			</div>
			<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="entrar" id="entRadio" value="2" checked>
				  <label class="form-check-label" for="entRadio">Entrar</label>
			</div>
			  
			<hr>
			<button type="submit" class="btn btn-info col-12">Entrar</button>
			
			<hr>
			
			<?php
	
				switch ($vale){
					
					case "1" :
						echo "<p class='error'>Autentificación errónea</p>";
					break;
					
					case "2" :
						echo "<p class='error'>Ususario: $usuario<br> Registro correcto.</p>";
					break;
					
					case "3" :
						echo "<p class='error'>El usuario $usuario ya existe.</p>";
					break;
				}
				
			?>
		  
		</form>
	
	</div>
	
<?php include "includes/footer.php"?>