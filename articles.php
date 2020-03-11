<?php

require __DIR__.'/data.php';
require __DIR__.'/header.php';

?>

<div class="articles-container">
    <?php foreach ($articles as $article) { ?>

    
    <a class="container-style" href="articles-content.php?id=<?php echo $article['articleID'] ?>">
    <img class="images-style" loading="lazy" src="<?php echo $article['contentIMG'] ?>">
    <h2 class ="articles-style"><?php echo $article['title'] ?></h2>
    </a>
    <?php } ?>
</div>
        
<?php require __DIR__.'/footer.php';
