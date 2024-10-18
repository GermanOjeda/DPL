<?php

$conn = mysqli_connect('localhost', 'GermanOjeda', 'pipipi', 'prueba');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "
        <div style='border: 1px solid black; padding: 15px; margin: 5px; width: 190px;'>
            <p><strong>ID:</strong> {$row['id']}</p>
            <p><strong>Nombre:</strong> {$row['name']}</p>
            <p><strong>Email:</strong> {$row['email']}</p>
            <p><strong>Fecha de creación:</strong> {$row['created']}</p>
        </div>";
    }
} else {
    echo "No hay resultados.";
}

mysqli_close($conn);
?>
