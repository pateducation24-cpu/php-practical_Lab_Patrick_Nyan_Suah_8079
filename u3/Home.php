<?php
if (!isset($_COOKIE['username'])) {
    header('Location: p1.php');
    exit;
}

$username = $_COOKIE['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($username) ?></h1>
</body>
</html>
