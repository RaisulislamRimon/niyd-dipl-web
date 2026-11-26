<?php

$conn = mysqli_connect("localhost", "root", "", "project1");

if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
    // } else {
//     echo "Database Connected Successfully";
}

$result = $conn->query("SELECT id, name, email FROM students ORDER BY id DESC");
$students = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];

// echo "<pre>";
var_dump($students);
// echo "</pre>";

echo "<br>";
echo "<br>";

print_r($students);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <hr>
    <hr>
    <hr>

    <a href="create.php">Create New Student Profile</a>

    <?php foreach ($students as $student): ?>
        <ul>
            <li> <?php echo $student["id"]; ?> </li>
            <li><?php echo $student['name']; ?></li>
            <li><?php echo $student['email']; ?></li>
        </ul>
    <?php endforeach ?>

    <hr>

    <a href="create.php">Create New Student Profile</a>
    <?php foreach ($students as $student): ?>
        <ul>
            <li style="list-style-type: none;">
                <?php echo $student['id'] . ' == ' . $student['name'] . ' => ' . $student['email']; ?>
                <a href="edit.php?id=<?php echo $student['id']; ?>"> Edit </a>
                |
                <a href="delete.php?id=<?php echo $student['id']; ?>"> Delete </a>
            </li>
        </ul>
    <?php endforeach ?>
</body>

</html>