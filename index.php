<?php require __DIR__.'/header.php'; ?>

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


<?php require __DIR__.'/footer.php'; ?>