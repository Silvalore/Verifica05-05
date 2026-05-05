<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $password = $_POST['password'];
    
    
    if ($user === 'lorenzo' && $password === 'verifica') {
        $_SESSION['username'] = $user;
        $_SESSION['logged_in'] = true;
        header("Location: pdo.php");
        exit();
    } else {
        $error = "Username o password errati!";
    }
}


if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: pdo.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang ="en">

    <head>

        <title>Palestra Silva</title>
    
    </head>

    <body>
    <div class="login-container">
        <h1>Palestra Silva</h1>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <input type="submit" value="Accedi">
        </form>
        <div class="demo-creds">
        </div>
</body>

    </html>

   
