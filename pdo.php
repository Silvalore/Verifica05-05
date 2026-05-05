<?php
    $host = "localhost"
    $dbname = 'silva.gym';
    $user = "lorenzo"
    $password = "verifica"

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
    ?>
    
