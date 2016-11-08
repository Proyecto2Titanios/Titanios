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

  			<div class="espaciosindiv"><img src="img/mini/01.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/02.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/03.png"></div>

  			<div class="espaciosindiv"><img src="img/mini/04.png"></div>

	</div>
	<div class="espacios2">

  			<div class="espaciosindiv"><img src="img/mini/05.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/06.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/07.png"></div>

  			<div class="espaciosindiv"><img src="img/mini/08.png"></div>

	</div>
	<div class="espacios3">

  			<div class="espaciosindiv"><img src="img/mini/09.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/no.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/mini/no.png"></div>

  			<div class="espaciosindiv"><img src="img/mini/no.png"></div>

	</div>
  <div class="material">

        <div class="materialindiv"><img src="img/mini/10.png"></div>
        
        <div class="materialindiv"><img src="img/mini/11.png"></div>
        
        <div class="materialindiv"><img src="img/mini/12.png"></div>

        <div class="materialindiv"><img src="img/mini/13.png"></div>

  </div>
  <div class="material2">

        <div class="materialindiv"><img src="img/mini/14.png"></div>
        
        <div class="materialindiv"><img src="img/mini/15.png"></div>
        
        <div class="materialindiv"><img src="img/mini/16.png"></div>

        <div class="materialindiv"><img src="img/mini/no.png"></div>

  </div>
  <div class="material3">

        <div class="materialindiv"><img src="img/mini/no.png"></div>
        
        <div class="materialindiv"><img src="img/mini/no.png"></div>
        
        <div class="materialindiv"><img src="img/mini/no.png"></div>

        <div class="materialindiv"><img src="img/mini/no.png"></div>

  </div>
</body>
</html>
