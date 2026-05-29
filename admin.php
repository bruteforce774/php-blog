<?php
require 'db.php';

$title  = $_POST['title'];
$body   = $_POST['body'];
$author = $_POST['author'];
$status = $_POST['status'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // form was submitted, handle it here
    $stmt = $pdo->prepare("INSERT INTO posts (title, body, author, status) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $body, $author, $status]);
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add post</title>
</head>

<body>
    <h1>Add post</h1>
    <form method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="body">Body:</label><br>
        <textarea id="body" name="body"></textarea><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <label for="status">Status:</label><br>
        <select id="status" name="status">
            <option value="draft">Draft</option>
            <option value="published">Published</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>