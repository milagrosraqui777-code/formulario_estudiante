<?php
include 'conexion.php';

$dni=$_GET['dni'];
$apellidos=$_GET['apellidos'];
$nombres=$_GET['nombres'];
$nacimiento=$_GET['nacimiento'];
$carrera=$_GET['carrera'];
$ciclo=$_GET['ciclo'];
$direccion=$_GET['direccion'];
$telefono=$_GET['telefono'];
$sexo=$_GET['sexo'];
$email=$_GET['email'];

//insertando
$query= "INSERT INTO alumno(dni, apellidos, nombres, fecha_nacimiento,
direccion, sexo, email, carrera, ciclo) VALUES('$dni', '$apellidos', '$nombres', 
'$nacimiento', '$direccion', '$sexo', '$email', '$carrera', '$ciclo')";
if (mysqli_query($connection,$query)) {
    echo "Registro exitoso";
}else{
    echo "No se pudo guardar";
}

?>

<a href="registro.php"> VOLVER</a>