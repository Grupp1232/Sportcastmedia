<style>
  /* Style for News Section */
  h2 {
    font-size: 24px;
    color: #333;
    text-align: center;
    margin-bottom: 30px;
  }
  .news-container {
    max-width: 800px;
    margin: 0 auto;
  }
  .news-item {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
  }
  .news-date {
    font-size: 14px;
    color: #888;
    margin-bottom: 10px;
    display: block;
  }
  .news-text {
    font-size: 18px;
    color: #444;
    line-height: 1.6;
    margin-bottom: 10px;
  }
  .delete-btn {
    background-color: #ff6666;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    float: right;
  }
  .delete-btn:hover {
    background-color: #ff4d4d;
  }
</style>

<!-- News Section -->
<div class="news-container">
  <h2>Recent News</h2>
  <?php foreach ($news as $newz): ?>
    <div class="news-item">
      <span class="news-date"><?= htmlspecialchars($newz['newsdate'], ENT_QUOTES, 'UTF-8') ?></span>
      <div class="news-text"><?= htmlspecialchars($newz['newstext'], ENT_QUOTES, 'UTF-8') ?></div>
      <form action="deletenews.php" method="post">
        <input type="hidden" name="id" value="<?= $newz['id'] ?>">
        <input type="submit" class="delete-btn" value="Delete">
      </form>
    </div>
  <?php endforeach; ?>
</div>

