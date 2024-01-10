<?php
// Llamar la conexión a la BD
include('connection.php');

$con = connection();

$id = $_GET['id'];
// Instrucción SQL
$sql = "SELECT * FROM users WHERE id = '$id'";

$query = mysqli_query($con, $sql);

$query = mysqli_query($con, $sql);
// Fila a encontrar
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar usuario</title>
</head>

<body>
    <div class="users-form">
        <form action="edit_user.php" method="POST">
            <h1>Editar usuario</h1>
            <!-- Campo oculto (hidden) para utilizar de referencia -->
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" placeholder="Nombre" value=" <?= $row['nombre'] ?>">
            <input type="text" name="lastname" placeholder="Apellido" value=" <?= $row['apellido'] ?>">
            <input type="text" name="username" placeholder="Usuario" value=" <?= $row['usuario'] ?>">
            <input type="text" name="password" placeholder="Contraseña" value=" <?= $row['contrasena'] ?>">
            <input type="text" name="email" placeholder="Correo electronico" value=" <?= $row['correo_e'] ?>">

            <input type="submit" value="Actualizar informacion">
        </form>

    </div>    
</body>
</html>