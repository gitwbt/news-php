<?php 

    // Devlopment
    $host = 'localhost';
    $db   = 'news_php';
    $user = 'root';
    $pass = '';

    // Producton
    // $host = 'localhost';
    // $db   = 'aaja_newsdb';
    // $user = 'aaja_newsuser';
    // $pass = 'newsdbpassword';
    
    $dsn = "mysql:host=$host;dbname=$db;";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>