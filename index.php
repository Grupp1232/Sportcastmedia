<?php
try {
  $pdo = new PDO('mysql:host=192.168.5.10:3306;dbname=new_schema;charset=utf8mb4', 'sebastian', 'Admin123!');

  $sql = 'UPDATE joke SET jokedate="2021-04-01"
      WHERE joketext LIKE "%programmer%"';

  $affectedRows = $pdo->exec($sql);

  $output = 'Updated ' . $affectedRows .' rows.';
}
catch (PDOException $e) {
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../public_html/output.html.php';
