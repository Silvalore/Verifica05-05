<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $password = $_POST['password'];
    
    
    if ($user === 'lorenzo' && $password === 'verifica') {
        $_SESSION['username'] = $user;
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Username o password errati!";
    }
}


if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: index.php");
    exit();
}
?>

?>

<!DOCTYPE html>
<html lang ="en">

    <head>

        <title>Palestra Silva</title>
    
    </head>

    <body>

    </body>

    </html>

   
