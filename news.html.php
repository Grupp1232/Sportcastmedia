<style>
  /* Style for News Section */
  h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
  }
  blockquote {
    border-left: 5px solid #007bff;
    background-color: #f9f9f9;
    padding: 10px 20px;
    margin-bottom: 20px;
  }
  blockquote p {
    margin: 0;
    font-size: 16px;
    line-height: 1.6;
    color: #333;
  }
  blockquote p span {
    font-weight: bold;
  }
  blockquote form {
    display: inline-block;
    margin-left: 10px;
  }
  blockquote form input[type="submit"] {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 6px 10px;
    border-radius: 4px;
    cursor: pointer;
  }
  blockquote form input[type="submit"]:hover {
    background-color: #c82333;
  }
</style>

<!-- News Section -->
<h2>News:</h2>
<?php foreach ($news as $newz): ?>
<blockquote>
  <p>
    <span><?=htmlspecialchars($newz['newsdate'], ENT_QUOTES, 'UTF-8')?></span> --
    <?=htmlspecialchars($newz['newstext'], ENT_QUOTES, 'UTF-8')?>
    <form action="deletenews.php" method="post">
      <input type="hidden" name="id" value="<?=$newz['id']?>">
      <input type="submit" value="Delete">
    </form>
  </p>
</blockquote>
<?php endforeach; ?>
