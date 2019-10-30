<?php

require __DIR__."/header.php";

if (isset($_GET["id"])){

    $article = articleGet($articles, $_GET["id"]);
}
$date = $article["publishDate"];

?>

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
