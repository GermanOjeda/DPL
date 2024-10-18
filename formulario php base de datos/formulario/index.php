<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<h1>Interfaz de control de la base de datos</h1>
<h2>Insertar Usuario</h2>
    <form action="insert.php" method="POST">
        Nombre: <input type="text" name="name" required>
        <br>
        Email: <input type="email" name="email" required>
        <br>
        <input type="submit" value="Insertar">
    </form>

    <h2>Actualizar informacion</h2>
    <form action="update.php" method="POST">
        id: <input type="text" name="id" required>
        <br>
        Nombre: <input type="text" name="name" required>
        <br>
        Email: <input type="email" name="email" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
    
    <h2>Eliminar</h2>
    <form action="delete.php" method="POST">
        id: <input type="text" name="id" required>
        <br>
        <input type="submit" value="Eliminar Usuario">
    </form>
    <form action="showtable.php">
        <h4>Mostrar Tabla</h4>
        <input type="submit" value="Mostrar tabla">
    </form>
</body>
</html>