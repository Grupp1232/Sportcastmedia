<style>
  /* Style for News Section */
  h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
  }
  .news-container {
    max-width: 600px;
    margin: 0 auto;
  }
  .news-item {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  .news-item p {
    margin: 0;
    font-size: 16px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 10px;
  }
  .news-date {
    font-weight: bold;
    color: #007bff;
  }
  .delete-btn {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .delete-btn:hover {
    background-color: #c82333;
  }
</style>

<!-- News Section -->
<div class="news-container">
  <h2>News:</h2>
  <?php foreach ($news as $newz): ?>
    <div class="news-item">
      <p>
        <span class="news-date"><?= htmlspecialchars($newz['newsdate'], ENT_QUOTES, 'UTF-8') ?></span> - 
        <?= htmlspecialchars($newz['newstext'], ENT_QUOTES, 'UTF-8') ?>
      </p>
      <form action="deletenews.php" method="post">
        <input type="hidden" name="id" value="<?= $newz['id'] ?>">
        <input type="submit" class="delete-btn" value="Delete">
      </form>
    </div>
  <?php endforeach; ?>
</div>
