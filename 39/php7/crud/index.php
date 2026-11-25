<?php

require 'db.php';

$stmt = $pdo->query('select * from students order by id desc');

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <h2> Students List </h2>

    <a href="create.php">
        Add New Student
    </a>
</body>

</html>