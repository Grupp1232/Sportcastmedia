<?php
try {
    $pdo = new PDO('mysql:host=192.168.5.10;dbname=ijdb;charset=utf8mb4', 'ijdbuser', 'mypassword');
    $output = 'Database connection established.';
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' . $e->getMessage();
}

include  __DIR__ . '/../public_html/output.html.php';
