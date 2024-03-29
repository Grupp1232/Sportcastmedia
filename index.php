<?php
try {
    $pdo = new PDO('mysql:host=192.168.5.10:3306;dbname=new_schema;charset=utf8mb4', 'sebastian', 'Admin123!');

    $sql = 'SELECT `joketext` FROM `joke`';
    $result = $pdo->query($sql);

    while ($row = $result->fetch()) {
        $jokes[] = $row['joketext'];
    }
} catch (PDOException $e) {
    $error = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../public_html/output.html.php';
