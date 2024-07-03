<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php View</title>
</head>
<body>

      <ul>
        <?php foreach ($fileteredBooks as $book) :?>
            <li>
                <a href="<?= $book['purchase_url']?>">
                    <?= $book['name']?> (<?= $book['release_year'] ?>) by <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach;?>
      </ul>
</body>
</html>