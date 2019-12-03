<?php 

	include "includes/header.php";
	include "includes/funciones.php";

	$aventura = $_POST["aventura"];
	$usuario = $_POST["usuario"];
	$password = $_POST["password"];
	
	$tipo = $_POST["entrar"];
	
	$valido = 0;
	
	switch($tipo){
		
		case "1" :
			
			$valido = 2;
			$usuario_valido = [$usuario, $password, $aventura];
		
			$gestor = fopen("files/usuarios.csv", "r");	/* Abrimos el fichero 'FILE' para lectura */
			
				while (($datos = fgetcsv($gestor, 2000, ",")) !== FALSE) {
					
					echo $usuario."<br>".$datos[0];
					
					if(strtoupper($datos[0]) === strtoupper($usuario)){
						$valido = 3;
						break;
					}
				}
				
			fclose($gestor);
			
			if($valido == 2){
				nuevo_usuario("files/usuarios.csv", $usuario_valido);
				header("Location: index.php?usuario=$usuario&valido=2");
			}else{
				header("Location: index.php?usuario=$usuario&valido=3");
			}
		
		break;
		
		case "2" :
		
			$gestor = fopen("files/usuarios.csv", "r");	/* Abrimos el fichero 'FILE' para lectura */
				
				while (($datos = fgetcsv($gestor, 2000, ",")) !== FALSE) {
					
					if(strtoupper($datos[0]) === strtoupper($usuario) and strtoupper($datos[1]) === strtoupper($password)){
						header("Location: chat.php?usuario=$usuario&password=$password&aventura=$aventura");
						break;
					}else{
						$valido = 1;
						header("Location: index.php?valido=$valido");
					}
				}
				
			fclose($gestor);
		
		break;
	}

	
	include "includes/footer.php"
	
?>