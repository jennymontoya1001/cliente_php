<?php

//creamos una función llamada conectar
   function conectar(){

    //Creamos 3 variables, a la primera le asignamos el localhost que es el nombre del servidor,
    //a la segunda el nombre de usuario
    // y a la tercera la contraseña, la cual no tiene, por eso la dejamos vacía
    //esta información la vemos en phpmyadmin en la pestaña privilegios
    $host = "localhost";
    $user = "root";
    $pass = "";

    //asignamos el nombre de la base de datos a una variable
    $bd="bd_customer";

    //en esta línea enviamos como parámetros las tres variables creadas al inicio ($host,$user y $pass)
    //lo que hace es encontrar las bases de datos en dicho nombre de servidor y usuario
    $con = mysqli_connect($host, $user, $pass);

    //cuando encuentra las bases de datos, le indicamos que ingrese a una puntual, es decir a bd_customer
    mysqli_select_db($con, $bd);

    //reornamos la conexión a la bd especificada
    return $con;
   }

?>
