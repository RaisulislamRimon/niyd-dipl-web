<?php
require "db.php";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    if ($name === "" || $email === "") {
        $error = "Name and Email are required!";
    } else {
        $sql = "INSERT INTO students (name, email, phone) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $phone]);
        header("Location: index.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Student</title>
</head>

<body>
    <h2>Add New Student</h2>
    <p style="color:red">
        <?= $error ?>
    </p>
    <form method="POST">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Phone: <input type="text" name="phone"><br><br>
        <button type="submit">Save</button>
    </form>
    <a href="index.php">Back to list</a>
</body>

</html>