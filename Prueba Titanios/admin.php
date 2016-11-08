<?php

session_start();
if(!isset($_SESSION['username']) || $_SESSION['categoria'] == 'profesor'){
	header('location:index.php');
}
include "includes/login.php";
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Titanium Admin</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  	<script type="text/javascript">
	function insert_esta(id, nombre, descripcion, estado){

		// alert(id + id_usu);
		window.location = 'admin.php?&rec_id='+id+'&rec_nombre='+nombre+'&rec_descripcion='+descripcion+'&rec_estado='+estado;
		
	}

	
	</script>    

  
</head>

<body>
  
    <div class="estadistica">
 	
 
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

		$sql = "SELECT rec_nombre, rec_descripcion, rec_id, rec_estado FROM tbl_recursos ORDER BY rec_id";

		$recursos = mysqli_query($conexion, $sql);

		//Comprobamos la sentencia sql
		// echo $sql;

		// print_r($recursos);


		if (mysqli_num_rows($recursos)>0) {
			
			echo "Tenemos " .mysqli_num_rows($recursos) . " recursos en la base de datos<br/><br/>";

			while ($recurso = mysqli_fetch_array($recursos)) {
				echo '<div class="espaciosindiv">';
				echo "<div class='titulo'>" .$recurso['rec_nombre'] . "</div>";
				echo "<div class='descripcion'>" .$recurso['rec_descripcion'] . "</div>";
				
				$rec_id = $recurso['rec_id'];
				$rec_nombre = $recurso['rec_nombre'];
				$rec_descripcion = $recurso['rec_descripcion'];
				$rec_estado = $recurso['rec_estado'];
	
				echo '<div class="boton"><button type="button" class="log-btn" name="submit"  onclick="insert_esta(\''.$rec_id. '\',\''.$rec_nombre. '\', \''.$rec_descripcion. '\',\''.$rec_estado. '\' )">Estadística</button></div>';
				

				echo "</div>";

			}
		} else {
			echo "Lo sentimos en estos momentos el colegio no dispone de recursos";
		}

	?>
<br/>
</div>


 <div class="estadistica">
	<?php

	if (isset($_REQUEST['rec_id'])){

	extract($_REQUEST);

	$sql = "SELECT DISTINCT tbl_usuarios.usu_usuario, tbl_reservas.res_finicio, tbl_reservas.res_ffin FROM tbl_reservas, tbl_usuarios where tbl_reservas.rec_id =$rec_id AND tbl_reservas.usu_id = tbl_usuarios.usu_id GROUP BY tbl_reservas.res_id";

	$recursos = mysqli_query($conexion, $sql);


	echo "<h4>".$rec_nombre." - ".$rec_descripcion. "</h4>";
	echo "<h4>".mysqli_num_rows($recursos)." registros encontrados - Estado actual: ".$rec_estado. "</h4>";


	
	echo "<table border = 1 cellspacing = 1 cellpading = 1>

			<tr>
				<th>Usuario</th>
				<th>Fecha inicio</th>
				<th>Fecha fin</th>
			</tr>";
	
	for ($fila=1; $fila<=5; $fila++) {
			echo "<tr>";
		for ($celda=1; $celda<=5; $celda++) {
			while ($recurso = mysqli_fetch_array($recursos)) {

				echo "<td>".$recurso['usu_usuario'] . "</td>";
				echo "<td>".$recurso['res_finicio'] . "</td>";
				echo "<td>".$recurso['res_ffin'] . "</td>";
				echo "</tr>" ;
			}
		
		}

		
	}

	echo "</tabla>";
 	}

 	?>
 </div>
</body>
</html>
