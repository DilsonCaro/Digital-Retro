<?php 

$conn= new mysqli("localhost","admin","123456","ecommerce");

if($conn->connect_error){
    die('Error de conexion' . $conn->connect_error);
}

?>