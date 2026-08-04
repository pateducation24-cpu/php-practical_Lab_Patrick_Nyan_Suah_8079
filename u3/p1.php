<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $username = trim($_POST['username']);

    if ($username !== '') {
        setcookie('username', $username, time() + (24*60*60), '/');
        header('Location: p2.php');
        exit;
    }
}

include 'cookieForm.html';
