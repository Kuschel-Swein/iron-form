<?php

require_once 'config.inc.php';

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $db->prepare(
        "SELECT id, password_hash FROM users 
         WHERE username =      ?");
    $result->execute([$username]);
    $u = $result->fetch();

    if ($user && password_verify($password, $u['password_hash'])) {
        echo 'Login successful!';

    } else {
        echo 'Invalid Credentials';
        exit;
    }
}

?>

<form method="post" action="login.php">
    <label>
        Username:
        <input type="text" name="username" required>
    </label>
    <br>
    <label>
        Password:
        <input type="password" name="password" required>
    </label>
    <br>
    <button type="submit">Login</button>
</form>