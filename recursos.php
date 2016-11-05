<?php

session_start();
if(!isset($_SESSION['username']) || $_SESSION['categoria'] == 'administrador'){
    header('location:index.php');


}
include "includes/login.php";
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Titanium Recursos</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/recursos.css">

  
</head>

<body>
  	<div class="espacios">

  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>

  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>

	</div>
	<div class="espacios2">

  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>

  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>

	</div>
	<div class="espacios3">

  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>

  			<div class="espaciosindiv"><img src="img/mini/01 (Custom).png"></div>

	</div>
</body>
</html>
