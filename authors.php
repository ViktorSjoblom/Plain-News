<?php

require __DIR__.'/data.php';
require __DIR__.'/header.php';
?>

<div class="authors-container">
    <?php foreach ($authors as $author) { ?>

    <div class="authors-specific">
        <p class ="authors"><?php echo $author['fullName'] ?></p>
        <img class="authors-images" loading="lazy" src="<?php echo $author['imgURL'] ?>">
    </div>
    <?php } ?>
 </div>

<?php require __DIR__.'/footer.php';
