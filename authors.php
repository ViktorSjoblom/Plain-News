<?php
declare(strict_types=1);

require __DIR__.'/data.php';
require __DIR__.'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>The Poolshaw Herald</title>
        <link rel="shortcut icon" type="image/png" href="https://img.icons8.com/cotton/50/000000/news.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Jomolhari&display=swap" rel="stylesheet">
    </head>
    <body>

    <div class="flex-header">
         <h3 class="header">The Poolshaw Herald</h3>
    </div>

    <div class="flex-navbar">
<div class="topnav">
  <a class="active" href="header.php">Home</a>
  <a class="navBarItem1" href="authors.php">Authors</a>
  <a class="navBarItem2" href="articles.php">Articles</a>
</div>
</div>
    
<?php foreach ($authors as $author): ?>

    <div class="flex-article">
        <article class="article">
            <div class="flex-article2">
                <img class="articleimage" loading="lazy" src="<?php echo $author['imgURL'] ?>">
            </div>
            <p><?php echo $author['fullName'] ?></p>
        </article>
    </div>
        
<?php endforeach; ?>