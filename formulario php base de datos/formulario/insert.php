<?php
echo "<pre>";

$conn = mysqli_connect('localhost', 'GermanOjeda', 'pipipi', 'prueba');

if (!$conn) {
    die("Conexión Fallida: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Usuario registrado.";
} else {
    echo "Error en el insert: " . mysqli_error($conn);
}

mysqli_close($conn);
?>