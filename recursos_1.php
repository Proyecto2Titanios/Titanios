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

		$sql = "SELECT rec_nombre, rec_descripcion FROM tbl_recursos ORDER BY rec_id";

		$recursos = mysqli_query($conexion, $sql);

		//Comprobamos la sentencia sql
		// echo $sql;


		if (mysqli_num_rows($recursos)>0) {
			
			echo "Tenemos " .mysqli_num_rows($recursos) . " recursos en la base de datos<br/><br/>";

			while ($recurso = mysqli_fetch_array($recursos)) {
				echo '<div class="espaciosindiv">';
				echo $recurso['rec_nombre'] . "<br/>";
				echo $recurso['rec_descripcion'] . "<br/>";
				echo '<input type="submit" class="log-btn" name="submit" value="Reservar"></input>';
				echo "</div>";
			}
		} else {
			echo "Lo sentimos en estos momentos el colegio no dispone de recursos";
		}

	?>
<br/>



	<?php

	$sql = "SELECT rec_nombre, rec_descripcion, rec_finicio, rec_ffin FROM tbl_recursos ORDER BY rec_id";

	$recursos = mysqli_query($conexion, $sql);
 
	echo "<table border = 1 cellspacing = 1 cellpading = 1>

			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Fecha Inicio</th>
				<th>Fecha fin</th>
			</tr>";
	$dato_tabla = "tengo cerebro de ameba <br/>y no me sale rellenar la tabla";
	for ($fila=1; $fila<=5; $fila++) {
			echo "<tr>";
		for ($celda=1; $celda<=4; $celda++) {
			echo "<td>$dato_tabla</td>" ;
			// $contador++ ;
		}
		echo "</tr>" ;
 	}

 	?>


</body>
</html>
	<!-- NO OLVIDAR CERRAR LA CONEXION	// mysqli_close($conexion); -->