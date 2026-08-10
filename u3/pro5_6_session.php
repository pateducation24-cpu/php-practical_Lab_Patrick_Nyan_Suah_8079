<?php
session_start();
$message = '';
$currentUser = $_SESSION['username'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'create') {
        $username = trim($_POST['username'] ?? '');

        if ($username !== '') {
            $_SESSION['username'] = $username;
            $currentUser = $username;
            $message = "Session created for user: {$username}";
        } else {
            $message = 'Please enter a username to create a session.';
        }
    } elseif ($action === 'destroy') {
        session_unset();
        session_destroy();

        if (ini_get('session.use_cookies')) {
            setcookie(session_name(), '', time() - 42000, '/');
        }

        $currentUser = null;
        $message = 'Session destroyed.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Demo</title>
</head>
<body>
    
    <?php if ($message !== ''): ?>
        <p><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>
    
    <?php if ($currentUser !== null): ?>
        <p>Current session username: <strong><?php echo htmlspecialchars($currentUser, ENT_QUOTES, 'UTF-8'); ?></strong></p>
    <?php else: ?>
        <p>No active session.</p>
    <?php endif; ?>

    <p><a href="sessionForm.html">Back to form</a></p>
</body>
</html>
