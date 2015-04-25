<?php
		include "coneccion.php";
		$nombre = $_POST["nombreS1"];
		$empresa = $_POST["empresasS1"];
		$usuario = $_POST["usuariosS1"];
		$dominio = $_POST["dominiosS1"];
		$contra = $_POST["contrasenasS1"];
		$contra2 = $_POST["contrasenasS2"];
		
		if(!empty($nombre)&& !empty($empresa) && !empty($usuario) && !empty($dominio) && !empty($contra) && !empty($contra2) ){
			if($contra!=$contra2){
			echo "<script>alert(\"La contrasena no coincide\");</script>";	
			echo "<script>window.history.back()</script>";
			}
		
		}else{
			echo "<script>alert(\"Debe llenar todos los campos\");</script>";	
			echo "<script>window.history.back()</script>";
		}
		
		
		$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
		//echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";
		$query = "select id from usuario where identificador like '".$usuario."' and dominio like '".$dominio."'";
		$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
			$numReg = pg_num_rows($resultado);
			
			if($numReg!=0){
			//echo "<script>alert(\"b\");</script>";
				pg_close($conexion);	
				echo "<script>alert(\"EL usuario o dominio ya existe ingrese uno nuevo\");</script>";	
				echo "<script>window.history.back()</script>";
			}else{
				pg_close($conexion);
				$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
				//echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";
				$query = "insert into usuario(nombre, empresa, identificador, dominio, contrasenia,estado) values('".$nombre."','".$empresa."','".$usuario."','".$dominio."','".$contra."',1)";
				$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
				$estructura = "carpetas/".$usuario."@".$dominio;

				if(!mkdir($estructura, 0777, true)) {
					die('Fallo al crear las carpetas...');
				}	
				
				$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
						//echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";
						$query = "select max(id) as id from usuario where identificador like '".$usuario."' and dominio like '".$dominio."'";
						$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
							$numReg = pg_num_rows($resultado);
							if($numReg!=0){
								$fila=pg_fetch_array($resultado);
								$IDENT=$fila['id'];
								
							}else{}
				pg_close($conexion);
				$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
						//echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";
						$query = "insert into carpeta(nombre,descripcion,publica,usuario_id) values('".$estructura."','Carpeta creada junto a la creacion de usuario',1,".$IDENT.")";
						echo "insert into carpeta(nombre,descripcion,publica,usuario_id) values('".$estructura."','Carpeta creada junto a la creacion de usuario',1,".$IDENT;
						$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
							pg_close($conexion);
				
				

				echo "<script>alert(\"Usuario creado correctamente\");</script>";
				header('location:index.php');
			
			
			}


				pg_close($conexion);
		
		
?>