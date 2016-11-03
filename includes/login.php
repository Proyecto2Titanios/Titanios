<?php

include_once "includes/conexion.php";
   //CÓDIGO DE LOGIN:

        //1.- Si existe la variable submit hacer:
    if(isset($_POST['submit'])){
        
        //2.- Asignación de variables recibidas:
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        //3.- Si no es administrador:
        if(!isset($_POST['admin'])){
        
        //4.- Realización de consulta en la base de datos para los NO administradores:
        
            $records = $databaseConnection->prepare('SELECT username, password FROM  tbl_admgrups WHERE username = :username and password = :password');
            $records->bindParam(':username', $username);
            $records->bindParam(':password', $password);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);


       } else {

        //5.- Realización de consulta en la base de datos para los ADMINISTRADORES:
        
            $records = $databaseConnection->prepare('SELECT admin,password FROM  tbl_administradors WHERE admin = :username and password = :password');
            $records->bindParam(':username', $username);
            $records->bindParam(':password', $password);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);

       }
    }

?>