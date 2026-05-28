<?php
require 'db.php';
$stmt = $pdo->query("SELECT * FROM posts WHERE status = 'published' ORDER BY created_at DESC");
$posts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
</head>

<body>
    <?php foreach ($posts as $post): ?>
        <h2><?= htmlspecialchars($post['title']) ?></h2>
        <p><?= htmlspecialchars($post['body']) ?></p>
    <?php endforeach; ?>
</body>

</html>