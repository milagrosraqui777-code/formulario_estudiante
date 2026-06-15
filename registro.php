<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARIA</title>
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
            <li><a href="lista.php">Listado</a></li>
        </ul>
    </nav>

</header>
<section>
    <form action="ingresar.php" method="get">
            <div class="caja-titulo">
                <h2>REGISTRO DE ESTUDIANTE</h2>
                <p>Complete todos los campor para actualizar su registro</p>
            </div>
            
            <div  class="contenedor-campos">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" class="campo" placeholder="Ingrese sus apellidos">
            </div>
             
            <div class="contenedor-campos">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" class="campo" placeholder="Ingrese sus nombres">
            </div>
            <div class="contenedor-campos">
                <label for="dni">DNI</label>
                <input type="texto" name="dni" class="campo" placeholder="Ingrese sus nombres">
            </div>
            <div class="contenedor-campos">
                <label for="nacimiento">Fecha de nacimiento</label>
                <input type="date" name="nacimiento" class="campo" placeholder="Ingrese sus nombres">
            </div>
            <div class="contenedor-campos">
                <label for="carrera">Carrera que estudia q:</label>
                <select name="carrera" id="" class="campo">
                    <option value="">CONTABILIDAD</option>
                    <option value="">ADMINISTRACION</option>
                    <option value="">APSTI</option>

                </select>
            </div>
            <div class="contenedor-campos">
                <label for="ciclo">Ciclo</label>
                <select name="ciclo" id="" class="campo">
                    <option value="1">I</option>
                    <option value="2">II</option>
                    <option value="3">III</option>
                    <option value="4">IV</option>
                    <option value="5">V</option>
                    <option value="6">VI</option>
                </select>
            </div>
            <div class="contenedor-campos">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="campo" placeholder="Ingrese sus nombres">
            </div>
            <div class="contenedor-campos">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" pattern="[0-9]+" class="campo" placeholder="Ingrese sus nombres">
            </div>
            <div class="contenedor-campos">
                <label for="sexo">Sexo</label>
                <select name="sexo" id="" class="campo">
                    <option value="F">M</option>
                    <option value="F">F</option>
                </select>
            </div>
            <div class="contenedor-campos">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" class="campo" placeholder="Ingrese sus nombres">
            </div>
             <div class="contenedor-campos">
              
                <input type="submit" value="GUARDAR">
            </div>
        </form>
    </section>