<?php

// db.php - database connection (PDO)

$host = 'localhost';
$dbname = 'school_db';
$user = 'root';
$pass = ''; // xampp default password is empty 

try {
    $pdo = new PDO('mysql:host=$host;dbname=$dbname;charset=utf8mb3, $user, $pass');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
