<?php
try {
  $pdo = new PDO('mysql:host=192.168.5.10:3306;dbname=new_schema;charset=utf8mb4', 'sebastian', 'Admin123!');

  $sql = 'DELETE FROM `joke` WHERE `id` = :id';

  $stmt = $pdo->prepare($sql);

  $stmt->bindValue(':id', $_POST['id']);
  $stmt->execute();

  header('location: news.php');
}
catch (PDOException $e) {
  $title = 'An error has occurred';

  $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../public_html/layout.html.php';
