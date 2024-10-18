<?php
echo "<pre>";

$conn = mysqli_connect('localhost','GermanOjeda','pipipi','prueba');

if (!$conn) {
    die("Conexión Fallida: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$id = $_POST['id'];

$sql = "UPDATE users SET email='$email',name='$name' where id = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
       echo "Usuario actualizado.";
    } else {
        echo "Error en el update: " . mysqli_error($conn);
    }
    
mysqli_close($conn);
?>