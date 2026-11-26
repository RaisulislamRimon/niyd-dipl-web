<?php

$db = mysqli_connect("127.0.0.1", "root", "", "project1");

if (!$db) {
    echo "Database connection failed";
}

$id = $_GET["id"];

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($db, "UPDATE students SET name = '$name', email = '$email' WHERE id = $id");

    header("Location: index.php");
    exit;
}

$result = mysqli_query($db, "SELECT * FROM students WHERE id = $id");
$student = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Type your name" value="<?php echo $student['name']; ?>">
        <br>
        <br>
        <input type="email" name="email" placeholder="Type your email" value="<?php echo $student['email']; ?>">
        <br>
        <br>
        <input type="submit" value="Update Info">
    </form>
</body>

</html>