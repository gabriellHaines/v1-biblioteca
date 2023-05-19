<?php 
    $con = mysqli_connect("127.0.0.1","root","","biblioteca");
    if (!$con) {
        echo "erro ao conectar com a base de dados: " . mysqli_connect_error();
    }
?>