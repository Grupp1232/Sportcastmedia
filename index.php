<?php
try {
    $pdo = new PDO('mysql:host=192.168.3.5;dbname=ijdb;charset=utf8mb4', 'root', 'Admin123!');
    $output = 'Database connection established.';
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' . $e->getMessage();
}

include  __DIR__ . '/../templates/output.html.php';
