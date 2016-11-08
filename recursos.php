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

    <link rel="stylesheet" href="css/recursos.css">

</head>

<body>
  <div class="estadistica">

  			<div class="espaciosindiv"><img src="img/01.png"></div>
  			<div class="espaciosindiv"><img src="img/02.png"></div>	
  			<div class="espaciosindiv"><img src="img/03.png"></div>
  			<div class="espaciosindiv"><img src="img/04.png"></div>
        <div class="espaciosindiv"><img src="img/05.png"></div>
        <div class="espaciosindiv"><img src="img/06.png"></div> 
        <div class="espaciosindiv"><img src="img/07.png"></div>
        <div class="espaciosindiv"><img src="img/08.png"></div>
        <div class="espaciosindiv"><img src="img/09.png"></div>
        <div class="espaciosindiv"><img src="img/10.png"></div> 
        <div class="espaciosindiv"><img src="img/11.png"></div>
        <div class="espaciosindiv"><img src="img/12.png"></div>
        <div class="espaciosindiv"><img src="img/13.png"></div>
        <div class="espaciosindiv"><img src="img/14.png"></div> 
        <div class="espaciosindiv"><img src="img/15.png"></div>
        <div class="espaciosindiv"><img src="img/16.png"></div>

  </div>
</body>
</html>
