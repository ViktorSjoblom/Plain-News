<?php
declare(strict_types=1);

/**
 * Sort articles by date
 *
 * @param array $a
 * @param array $b
 *
 * @return int
 */

function sortArticle(array $a, array $b): int {
    $date1 = strtotime($a['publishDate']);
    $date2 = strtotime($b['publishDate']);
    return $date2 - $date1;
}

usort($articles,'sortArticle');


/**
* Gets the specific article from its ID
* @param  array $articles
* @param  int $articleID
* @return array
*/
function articleGet(array $articles, int $articleID):array {
    foreach ($articles as $article) {
        if($article['articleID'] === $articleID){
            return $article;
        }
    }
}
