<?php foreach ($news as $news): ?>
<blockquote>
  <p>
  <?=htmlspecialchars($news['newstext'], ENT_QUOTES, 'UTF-8')?>
  <form action="deletenews.php" method="post">
    <input type="hidden" name="id" value="<?=$news['id']?>">
    <input type="submit" value="Delete">
  </form>
  </p>
</blockquote>
<?php endforeach; ?>
