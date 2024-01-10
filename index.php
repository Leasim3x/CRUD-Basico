<?php
// Llamar la conexión a la BD
include('connection.php');

$con = connection();
// Instrucción SQL
$sql = "SELECT * FROM users";

$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi-primer-CRUD</title>
</head>
<body>
    <div>
        <!-- Formulario para capturar el registro --> 
        <form action="">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
            <input type="text" name="username" placeholder="Nombre de usuario">
            <input type="text" name="password" placeholder="Contraseña">
            <input type="text" name="email" placeholder="Correo electronico">

            <input type="submit" value="Agregar usuario">
        </form>
    </div>

    <div>
        <!-- Formulario para mostrar el registro --> 
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nombre de usuario</th>
                    <th>Contraseña</th>
                    <th>Correo electronico</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <!-- Ciclo para mostrar los datos en la tabla -->
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?php echo $row['id'] ?> </th>
                    <th> <?php echo $row['nombre'] ?> </th>
                    <th> <?php echo $row['apellido'] ?> </th>
                    <th> <?php echo $row['usuario'] ?> </th>
                    <th> <?php echo $row['correo_e'] ?> </th>
                    <th> <?php echo $row['contrasena'] ?> </th>

                    <th><a href="">Editar</a></th>
                    <th><a href="">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>