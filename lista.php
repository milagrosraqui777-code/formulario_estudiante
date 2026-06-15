<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>

    <div class="logo">
        <img src="img/logo.png" alt="Logo">
    </div>

    <h1>
        <a href="#">MARIA RAQUI</a>
    </h1>

    <nav>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php">Registro</a></li>
            <li><a href="lista.php">Listado</a></li>
        </ul>
    </nav>

</header>

<section>

<div class="titulo">
    <h3>LISTA DE ESTUDIANTES</h3>
</div>

<div class="tabla-alumnos">

<table>

    <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>APELLIDOS</th>
        <th>NOMBRES</th>
        <th>CARRERA</th>
        <th>CICLO</th>
        <th>ACCION</th>
    </tr>

<?php 
$query1 = mysqli_query($connection, "SELECT * FROM alumno");

while($listaAlumno = mysqli_fetch_array($query1)){
?>

<tr>
    <td><?php echo $listaAlumno['alumno_id']; ?></td>
    <td><?php echo $listaAlumno['dni']; ?></td>
    <td><?php echo $listaAlumno['apellidos']; ?></td>
    <td><?php echo $listaAlumno['nombres']; ?></td>
    <td><?php echo $listaAlumno['carrera']; ?></td>
    <td><?php echo $listaAlumno['ciclo']; ?></td>

    <!-- ACCION CORRECTA -->
    <td>
        <?php echo $listaAlumno['alumno_id']; ?>

        <a href="editar.php?id=<?php echo $listaAlumno['alumno_id']; ?>" class="btn-up">Up</a>

        <a href="eliminar.php?id=<?php echo $listaAlumno['alumno_id']; ?>" 
           class="btn-x" 
           onclick="return confirm('¿Seguro que quieres eliminar?')">
           X
        </a>
    </td>
</tr>

<?php } ?>

</table>

</div>

</section>

</body>
</html>