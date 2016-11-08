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

  			<div class="espaciosindiv"><img src="img/01.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/02.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/03.png"></div>

  			<div class="espaciosindiv"><img src="img/04.png"></div>

	</div>
	<div class="espacios2">

  			<div class="espaciosindiv"><img src="img/05.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/06.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/07.png"></div>

  			<div class="espaciosindiv"><img src="img/08.png"></div>

	</div>
	<div class="espacios3">

  			<div class="espaciosindiv"><img src="img/09.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/no.png"></div>
  			
  			<div class="espaciosindiv"><img src="img/no.png"></div>

  			<div class="espaciosindiv"><img src="img/no.png"></div>

	</div>
  <div class="material">

        <div class="materialindiv"><img src="img/10.png"></div>
        
        <div class="materialindiv"><img src="img/11.png"></div>
        
        <div class="materialindiv"><img src="img/12.png"></div>

        <div class="materialindiv"><img src="img/13.png"></div>

  </div>
  <div class="material2">

        <div class="materialindiv"><img src="img/14.png"></div>
        
        <div class="materialindiv"><img src="img/15.png"></div>
        
        <div class="materialindiv"><img src="img/16.png"></div>

        <div class="materialindiv"><img src="img/no.png"></div>

  </div>
  <div class="material3">

        <div class="materialindiv"><img src="img/no.png"></div>
        
        <div class="materialindiv"><img src="img/no.png"></div>
        
        <div class="materialindiv"><img src="img/no.png"></div>

        <div class="materialindiv"><img src="img/no.png"></div>

  </div>
</body>
</html>
