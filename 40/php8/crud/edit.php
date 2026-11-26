<?php
require "db.php";
$id = $_GET["id"] ?? 0;

// 1) Load the existing student
$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$student) {
    die("Student not found!");
}

// 2) Save the changes when the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    $sql = "UPDATE students SET name = ?, email = ?, phone = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $phone, $id]);
    header("Location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit Student</title>
</head>

<body>
    <h2>Edit Student #
        <?= $student["id"] ?>
    </h2>
    <form method="POST">
        Name: <input type="text" name="name" value="<?= htmlspecialchars($student["name"]) ?>"><br><br>
        Email: <input type="email" name="email" value="<?= htmlspecialchars($student["email"]) ?>"><br><br>
        Phone: <input type="text" name="phone" value="<?= htmlspecialchars($student["phone"]) ?>"><br><br>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Back to list</a>
</body>

</html>