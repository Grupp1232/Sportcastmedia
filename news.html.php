<h2>News:</h2>
<table>
  <tr>
    <th>Date</th>
    <th>Text</th>
    <th>Action</th>
  </tr>
  <?php foreach ($news as $newz): ?>
  <tr>
    <td><?=htmlspecialchars($newz['newsdate'], ENT_QUOTES, 'UTF-8')?></td>
    <td><?=htmlspecialchars($newz['newstext'], ENT_QUOTES, 'UTF-8')?></td>
    <td>
      <form action="deletenews.php" method="post">
        <input type="hidden" name="id" value="<?=$newz['id']?>">
        <input type="submit" value="Delete">
      </form>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
