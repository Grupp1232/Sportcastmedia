<?php
try {
  $pdo = new PDO('mysql:host=192.168.5.10:3306;dbname=new_schema;charset=utf8mb4', 'sebastian', 'Admin123!');

  $sql = 'CREATE TABLE News (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Newstext TEXT,
    Newsdate DATE NOT NULL
  ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

  $pdo->exec($sql);

  $output = 'Joke table successfully created.';
}
catch (PDOException $e) {
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../public_html/output.html.php';
