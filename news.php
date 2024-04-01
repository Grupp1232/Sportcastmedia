<?php
try {
  $pdo = new PDO('mysql:host=192.168.5.10:3306;dbname=new_schema;charset=utf8mb4', 'sebastian', 'Admin123!');

  $sql = 'SELECT `newstext`, `id` FROM news';

  $news = $pdo->query($sql);

  $title = 'News';

  ob_start();

  include  __DIR__ . '/../public_html/news.html.php';

  $output = ob_get_clean();
}
catch (PDOException $e) {
  $title = 'An error has occurred';

  $output = 'Database error: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../public_html/layout.html.php';
