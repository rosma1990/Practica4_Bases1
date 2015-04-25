<?php
		include "coneccion.php";
		$nombre = $_POST["usr_nombre"];
		$apellido = $_POST["usr_apellido"];
		$nit = $_POST["usr_nit"];
		$telefono = $_POST["usr_telefono"];
		$usuario = $_POST["usr"];
		$pass = $_POST["usr_pass"];
		$pass2 = $_POST["usr_pass2"];
		
		if(!empty($nombre)&& !empty($apellido) && !empty($usuario) && !empty($pass) && !empty($pass2)){
			if($pass!=$pass2){
			echo "<script>alert(\"La contrasena no coincide\");</script>";	
			echo "<script>window.history.back()</script>";
			}
		
		}else{
			echo "<script>alert(\"Debe llenar todos los campos\");</script>";	
			echo "<script>window.history.back()</script>";
		}
		
		
		
		
?>
