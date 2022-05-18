<?php 
include ('conexion.php');

$nombre = $_POST['Nombre'];
$email = $_POST['Email'];
$pass = $_POST['Contraseña'];


$insertar = "INSERT INTO usuario VALUES ('$nombre', '$email', '$pass')";

$query = mysqli_query($con,$insertar);

if($query){
    echo "correcto";
}else {
    echo "incorrecto";
}





?>