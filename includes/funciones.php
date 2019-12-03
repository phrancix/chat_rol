<?php


	function nuevo_usuario($file, $linea){	
/* Función para añadir nuevas lineas al registro de usuarios */
	
		if(file_exists($file)){
			$tamaño = filesize($file);
		}else{
			$tamaño = 0;
		}	
		
		$nuevo_usuario = fopen($file, "a"); 
	
		fseek($nuevo_usuario, $tamaño);
	
		fputcsv($nuevo_usuario, $linea); 
	
		fclose($nuevo_usuario);	
	
	}
	
	function leer_aventura($aventura){
/* Función que devuelve el nombre de la aventura que está jugando un jugador */	
		$nombre_aventura = "Phrancix";
		
		$gestor = fopen("files/aventuras.csv", "r");	/* Abrimos el fichero 'FILE' para lectura */
			
		while (($datos = fgetcsv($gestor, 2000, ",")) !== FALSE) {
			
			if(strtoupper($datos[0]) === strtoupper($aventura)){
				$nombre_aventura = $datos[1];
			}
		}
			
		fclose($gestor);
		
		return $nombre_aventura;
		
	}
	
	?>
