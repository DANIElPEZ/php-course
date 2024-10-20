<?php
// Crear la conexión
$conn = new mysqli('localhost', 'root', '');

// Verificar si la conexión es exitosa
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    echo 'Connection ok<br>';

    // Crear la base de datos si no existe
    $db = 'CREATE DATABASE IF NOT EXISTS db';
    if ($conn->query($db) === TRUE) {
        echo 'Database created successfully<br>';
    } else {
        die('Error creating database: ' . $conn->error);
    }

    // Seleccionar la base de datos
    $conn->select_db('db');

    // Crear la tabla si no existe
    $table = 'CREATE TABLE IF NOT EXISTS MyGuests (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL
    )';

    if ($conn->query($table) === TRUE) {
        echo 'Table MyGuests created successfully<br>';
    } else {
        die('Error creating table: ' . $conn->error);
    }

    // Insertar datos de ejemplo usando una declaración preparada
    $insert = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)";
    $preparedSql = $conn->prepare($insert);

    if ($preparedSql) {
        // Asignar los valores a variables
        $firstname = 'John';
        $lastname = 'Doe';
        $email = 'john@example.com';

        // Enlazar los parámetros con las variables
        $preparedSql->bind_param("sss", $firstname, $lastname, $email);

        // Ejecutar la declaración
        if ($preparedSql->execute()) {
            echo 'Insert data successfully<br>';
        } else {
            echo 'Error inserting data: ' . $preparedSql->error;
        }
        $preparedSql->close();
    } else {
        die('Error preparing statement: ' . $conn->error);
    }
}

// Cerrar la conexión
$conn->close();
?>