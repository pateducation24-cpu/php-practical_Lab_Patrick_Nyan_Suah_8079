<?php
$cookieName = 'username';
$cookieExpiry = time() + 30 * 24 * 60 * 60;
$cookieValue = '';
$welcomeMessage = 'Welcome, new user';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['username'])) {
    $cookieValue = trim($_POST['username']);
    if ($cookieValue !== '') {
        setcookie($cookieName, $cookieValue, $cookieExpiry, '/');
        header('Location: p8.php');
        exit;
    }
}

if (!empty($_COOKIE[$cookieName])) {
    $cookieValue = $_COOKIE[$cookieName];
    $welcomeMessage = 'Welcome back';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php if ($cookieValue !== ''): ?>
        <h2><?php echo htmlspecialchars($welcomeMessage); ?> <?php echo htmlspecialchars($cookieValue); ?>!</h2>
        <p>The cookie "<?php echo htmlspecialchars($cookieName); ?>" is active with value "<?php echo htmlspecialchars($cookieValue); ?>".</p>
    <?php else: ?>
        <h2>Welcome, new user!</h2>
        <p>Please enter your username to set the cookie.</p>
        <form method="post" action="p8.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <button type="submit">Submit</button>
        </form>
    <?php endif; ?>
</body>
</html>
