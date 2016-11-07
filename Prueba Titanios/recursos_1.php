<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recursos</title>
	<!-- Dejo el style de David pero la idea es meterlo luego en el div de la imagen de fondo -->
	<style>
		div {
			width: 200px;
			border: 2px solid black;
			float: left;
			margin-right: 20px;
			margin-bottom: 20px;
		}
	</style>
	<script type="text/javascript">
	function insert_res(id){
		alert(id);

	}

	</script>





</head>
<body>

	<!-- OJO este link hay que cambiarlo porque lo tengo en otra carpeta y hago retroceder -->
	<!-- <a href="../Titanios/index.php">Volver al Login</a><br/><br/> -->
	<?php

		//realizamos la conexión
		$conexion = mysqli_connect('localhost', 'root', '', 'bd_titanio');
	// Cojo la idea de David para lo acentos para que no 	tengamos problemas con la descripción
		$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

		if (!$conexion) {
		    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}


		extract($_REQUEST);

		$sql = "SELECT rec_nombre, rec_descripcion, rec_id FROM tbl_recursos ORDER BY rec_id";

		$recursos = mysqli_query($conexion, $sql);

		//Comprobamos la sentencia sql
		// echo $sql;

		print_r($recursos);


		if (mysqli_num_rows($recursos)>0) {
			
			echo "Tenemos " .mysqli_num_rows($recursos) . " recursos en la base de datos<br/><br/>";

			while ($recurso = mysqli_fetch_array($recursos)) {
				echo '<div class="espaciosindiv">';
				echo $recurso['rec_nombre'] . "<br/>";
				echo $recurso['rec_descripcion'] . "<br/>";
				// echo '<button type="button" class="log-btn" name="submit" value="Reservar" onclick="insert_res($recurso['rec_id'])"></button>';
				$id = $recurso['rec_id'];
				echo $id;

				echo '<button type="button" class="log-btn" name="submit" value="Reservar" onclick="insert_res(\''.$id.'\')">Reservar</button>';
				echo "</div>";
			}
		} else {
			echo "Lo sentimos en estos momentos el colegio no dispone de recursos";
		}

	?>
<br/>



	<?php

	$sql = "SELECT tbl_recursos.rec_nombre, tbl_recursos.rec_descripcion, tbl_reservas.res_finicio, tbl_reservas.res_ffin FROM tbl_reservas, tbl_recursos WHERE tbl_recursos.rec_id = tbl_reservas.rec_id";

	$recursos = mysqli_query($conexion, $sql);

	
	echo "<table border = 1 cellspacing = 1 cellpading = 1>

			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Fecha Inicio</th>
				<th>Fecha fin</th>
				<th>Botón devolución</th>
			</tr>";
	
	for ($fila=1; $fila<=5; $fila++) {
			echo "<tr>";
		for ($celda=1; $celda<=5; $celda++) {
			while ($recurso = mysqli_fetch_array($recursos)) {

				echo "<td>".$recurso['rec_nombre'] . "</td>";
				echo "<td>".$recurso['rec_descripcion'] . "</td>";
				echo "<td>".$recurso['res_finicio'] . "</td>";
				echo "<td>".$recurso['res_ffin'] . "</td>";
				echo "<td> <input type='submit' class='log-btn' name='submit' value='Devolver'></input> </td>";


			}
		


			}
		echo "</tr>" ;
 	}

 	?>


</body>
</html>
	<!-- NO OLVIDAR CERRAR LA CONEXION	// mysqli_close($conexion); -->