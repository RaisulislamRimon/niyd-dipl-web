<?php
require "db.php";
$stmt = $pdo->query("SELECT * FROM students ORDER BY id DESC");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Student List</title>
</head>

<body>
    <h2>Student List</h2>
    <a href="create.php">+ Add New Student</a><br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php foreach ($students as $s): ?>
            <tr>
                <td>
                    <?= $s["id"] ?>
                </td>
                <td>
                    <?= htmlspecialchars($s["name"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($s["email"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($s["phone"]) ?>
                </td>
                <td>
                    <a href="edit.php?id=<?= $s["id"] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $s["id"] ?>" onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>