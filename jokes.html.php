<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>JOKES</title>
</head>
<body>

  <p><a href="?addjoke">Adding your own joke</a></p>
    <p>Here is a full list of jokes:</p>

  <p>
    <?php foreach ($jokes as $joke): ?>
      <form action="?deletejoke" method="post">
      <blockquote>
        <p>
          <?php echo htmlspecialchars($joke['text'], ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </blockquote>
      <input type="hidden" name="id" value="<?php echo $joke['id']; ?>" />
      <input type="submit" value="Edit" />
      <input type="submit" value="Delete" />
    </form>
      <?php endforeach; ?>
  </p>


</body>
</html>
