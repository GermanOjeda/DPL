
<?php
echo "<pre>";

$conn = mysqli_connect('localhost','GermanOjeda','pipipi','prueba');

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Usuario eliminado.";
} else {
    echo "Error en el delete: " . mysqli_error($conn);
}

mysqli_close($conn);
?>