<?php
declare(strict_types=1);

require __DIR__."/data.php";
require __DIR__."/functions.php";
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
  <a class="navBarItem0" href="header.php">Home</a>
  <a class="navBarItem1"  href="authors.php">Authors</a>
  <a class="navBarItem2" href="articles.php">Articles</a>
</div>
</div>

    
    
<?php usort($articles, "sortArticle"); ?>

<?php foreach ($articles as $article): ?>

    <div class="flex-article">
        <article class="article">
            <div class="flex-article2">
                <img class="articleimage" loading="lazy" src="<?php echo $article["contentIMG"] ?>">
            </div>
            <h2><?php echo $article["title"] ?></h2>
            <p><?php echo $article["content"] ?></p>
            <p>Published: <?php echo $article["publishDate"] ?></p>
            <p>Author: <?php echo $article["author"] ?></p>
            <p>Likes: <?php echo $article["likeCounter"] ?></p>
        </article>
    </div>
        

<?php endforeach; ?>

<?php require __DIR__."/footer.php";