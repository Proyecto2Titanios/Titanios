<?php
include "includes/conexion_bd.php";
		//realizamos la conexión
	// 	$conexion = mysqli_connect('localhost', 'root', '', 'bd_titanio');
	// // Cojo la idea de David para lo acentos para que no 	tengamos problemas con la descripción
	// 	$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

	// 	if (!$conexion) {
	// 	    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	// 	    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	// 	    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	// 	    exit;
	// 	}


		extract($_REQUEST);

		// $sql_insert = "INSERT INTO tbl_reservas (usu_id, rec_id) VALUES ($usu_id, $rec_id)";

		$sql_update = "UPDATE tbl_reservas SET res_ffin = current_timestamp WHERE res_id = $res_id";

		$sql_update_reserva = "UPDATE tbl_recursos SET rec_estado = 'Disponible' WHERE rec_id = $rec_id";
		

		 $actualizar_reserva = mysqli_query($conexion, $sql_update_reserva);
		 $actualizar = mysqli_query($conexion, $sql_update);

		 header('location: recursos.php');
		 

?>