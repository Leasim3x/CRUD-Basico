<?php
include('connection.php');

$con = connection();

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Instrucción SQL
$sql = "UPDATE users SET nombre='$name', apellido='$lastname', usuario='$username', contrasena='$password', correo_e='$email' WHERE id='$id'";

$query = mysqli_query($con, $sql);

// Redirecciona a la página index.php
if($query){
    Header("Location: index.php");
}
?>