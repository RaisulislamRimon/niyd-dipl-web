<?php

$db = mysqli_connect("localhost", "root", "", "project1");
// $db = mysqli_connect("127.0.0.1", "root", " ", "project12");
// $db = mysqli_connect("127.0.0.1", "root", "", "project12");

if (!$db) {
    echo "Database connection failed";
} else {
    echo 'Database connected successfully';
}

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($db, "INSERT INTO students (name, email) VALUES ('$name', '$email')");

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <br>
    <br>

    <form action="" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        <br>
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <br>
        <br>
        <input type="submit" value="Save">
    </form>
</body>

</html>