<?php
if (isset($_POST['newstext'])) {
    try {
        $pdo = new PDO('mysql:host=192.168.5.10:3306;dbname=new_schema;charset=utf8mb4', 'sebastian', 'Admin123!');

 $sql = 'INSERT INTO `news` SET
      `newstext` = :newstext,
      `newsdate` = CURDATE()';

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':newstext', $_POST['newstext']);
        $stmt->bindValue(':newsdate', $_POST['newsdate']);

        $stmt->execute();

        header('location: news.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';

        $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
    }
} else {
    $title = 'Add News';

    ob_start();

    include  __DIR__ . '/../public_html/addnews.html.php';

    $output = ob_get_clean();
}
include  __DIR__ . '/../public_html/layout.html.php';
