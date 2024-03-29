<?php foreach ($news as $newz): ?>
<blockquote>
  <p>
  <?=htmlspecialchars($newz['newstext'], ENT_QUOTES, 'UTF-8')?>
  <form action="deletejoke.php" method="post">
    <input type="hidden" name="id" value="<?=$newz['id']?>">
    <input type="submit" value="Delete">
  </form>
  </p>
</blockquote>
<?php endforeach; ?>
