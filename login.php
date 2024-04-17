<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Gantilah ini dengan metode autentikasi yang sesuai, seperti cek di database
    if ($username == 'admin' && $password == 'adminpass') {
        $_SESSION['user_level'] = 'admin';
        header('Location: dashboard.php');
    } elseif ($username == 'user' && $password == 'userpass') {
        $_SESSION['user_level'] = 'user';
        header('Location: dashboard.php');
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
