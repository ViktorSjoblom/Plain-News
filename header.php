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
        
<?php usort($articles, "sortArticle"); ?>

<?php foreach ($articles as $article): ?>

    <div class="flex-article">
        <article class="article">
            <h2><?php echo $article['title'] ?></h2>
            <img class="articleimage" src="<?php echo $article['contentIMG'] ?>">
            <p><?php echo $article['content'] ?></p>
            <p>Published: <?php echo $article['publishDate'] ?></p>
            <p>Author: <?php echo $article['author'] ?></p>
        </article>
    </div>
        

<?php endforeach; ?>
