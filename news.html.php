<?php foreach ($news as $newz): ?>
<blockquote>
  <p>
  <?=htmlspecialchars($newz['newsdate'], ENT_QUOTES, 'UTF-8')?>
  <?=htmlspecialchars($newz['newstext'], ENT_QUOTES, 'UTF-8')?>
  <form action="deletenews.php" method="post">
    <input type="submit" value="Delete">
  </form>
  </p>
</blockquote>
<?php endforeach; ?>
