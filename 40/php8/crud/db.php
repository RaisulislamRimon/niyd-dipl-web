<?php

// db.php - database connection (PDO)

$host = 'localhost';
$dbname = 'school_db';
$user = 'root';
$pass = ''; // XAMPP default password is empty

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Database Connected successfully';

} catch (PDOException $e) {

    die('Database connection failed: ' . $e->getMessage());

}
