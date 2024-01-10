<?php
include('connection.php');

$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Instrucción SQL
$sql = "INSERT INTO users VALUES('$id', '$name', '$lastname', '$username', '$password', '$email')";

$query = mysqli_query($con, $sql);

// Redirecciona a la página index.php
if($query){
    Header("Location: index.php");
}
?>