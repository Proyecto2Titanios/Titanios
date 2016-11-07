<?php

session_start();
include "includes/login.php";

if(isset($login)){

    if(mysqli_num_rows($login)>0){
     // echo "Dentro";
      $_SESSION['username'] = $usu_usuario;
      $_SESSION['categoria'] = $usu_categoria;


      if($usu_categoria == 'profesor'){
        header('location:recursos.php');
      } else {
        header('location:admin.php');
        }
    }
  }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Titanium Login</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-form">
     <h1>Titanios</h1>
     <form action="" method="get" accept-charset="utf-8">
     
     <div class="form-group ">
       <input type="text" class="form-control" name="username" placeholder="Usuario" id="username">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" name="password" placeholder="Contraseña" id="password">
       <i class="fa fa-lock"></i>
     </div>
     <div class="checkbox-admin">
        <input type="checkbox" name="admin">Administrador
     </div>
     <?php
     if(isset($login)){
      if(mysqli_num_rows($login)>0){

      } else {
        echo '<span class="alert">Datos incorrectos</span>';
        }
      }
        ?>
        <br/>
     <input type="submit" class="log-btn" name="submit" value="ENTRAR"></input>
     </form>
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

</body>
</html>
