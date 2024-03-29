<?php
if (isset($_POST['joketext'])) {
    try {
        $pdo = new PDO('mysql:host=192.168.5.10:3306;dbname=new_schema;charset=utf8mb4', 'sebastian', 'Admin123!');

        $sql = 'INSERT INTO `joke` SET
      `joketext` = :joketext,
      `jokedate` = CURDATE()';

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':joketext', $_POST['joketext']);

        $stmt->execute();

        header('location: jokes.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';

        $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
    }
} else {
    $title = 'Add News';

    ob_start();

    include  __DIR__ . '/../public_html/addjoke.html.php';

    $output = ob_get_clean();
}
include  __DIR__ . '/../public_html/layout.html.php';
