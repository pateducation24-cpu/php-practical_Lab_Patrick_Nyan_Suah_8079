<?php
session_start();

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = ''; // update if your MySQL root password is not empty
$dbName = 'logindb';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: p7_1login.html');
    exit;
}

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($username === '' || $password === '') {
    echo 'Username and password are required.<br><a href="p7_1login.html">Go back</a>'; 
    exit;
}

$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($mysqli->connect_errno) {
    echo 'Database connection failed: ' . htmlspecialchars($mysqli->connect_error);
    exit;
}

$stmt = $mysqli->prepare('SELECT username FROM user WHERE username = ? AND password = ?');
if (!$stmt) {
    echo 'Database error: ' . htmlspecialchars($mysqli->error);
    exit;
}

$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    session_regenerate_id(true);
    $_SESSION['username'] = $username;
    $stmt->close();
    $mysqli->close();
    header('Location: p7_3_home.php');
    exit;
}

$stmt->close();
$mysqli->close();

echo 'Invalid username or password.<br><a href="p7_1login.html">Try again</a>';
