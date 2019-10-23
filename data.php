<?php
declare(strict_types=1);


$authors = [
    [   
        'firstname' => 'Melinda',
        'lastname' => 'Saphire',
        'imgURL' => 'URL'
    ],
    [
        'firstname' => 'Hugh',
        'lastname' => 'Fliptop',
        'imgURL' => 'URL'
    ],
    [
        'firstname' => 'Veronica',
        'lastname' => 'Himmelton',
        'imgURL' => 'URL'
    ],
    [
        'firstname' => 'Samuel',
        'lastname' => 'Thorne',
        'imgURL' => 'URL'
    ],
    [
        'firstname' => 'Milton',
        'lastname' => 'Grimstool',
        'imgURL' => 'URL'
    ],
];


$articles = [
	[
		'title' => 'Article 1',
		'author' => 'Melinda Saphire',
		'content' => file_get_contents(__DIR__.'/articles/article1.txt'),
		'publishDate' => '2019-10-17',
		'likeCounter' => 6,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 1
	],
	[
		'title' => 'Article 2',
		'author' => 'Melinda Saphire',
		'content' => file_get_contents(__DIR__.'/articles/article2.txt'),
		'publishDate' => '2019-10-18',
		'likeCounter' => 10,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 2
	],
	[
		'title' => 'Article 3',
		'author' => 'Hugh Fliptop',
		'content' => file_get_contents(__DIR__.'/articles/article3.txt'),
		'publishDate' => '2019-10-19',
		'likeCounter' => 24,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 3
	],
	[
		'title' => 'Article 4',
		'author' => 'Hugh Fliptop',
		'content' => file_get_contents(__DIR__.'/articles/article4.txt'),
		'publishDate' => '2019-10-20',
		'likeCounter' => 16,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 4
	],
	[
		'title' => 'Article 5',
		'author' => 'Veronica Himmelton',
		'content' => file_get_contents(__DIR__.'/articles/article5.txt'),
		'publishDate' => '2019-10-21',
		'likeCounter' => 2,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 5
	],
	[
		'title' => 'Article 6',
		'author' => 'Veronica Himmelton',
		'content' => file_get_contents(__DIR__.'/articles/article6.txt'),
		'publishDate' => '2019-10-22',
		'likeCounter' => 9,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 6
	],
	[
		'title' => 'Article 7',
		'author' => 'Samuel Thorne',
		'content' => file_get_contents(__DIR__.'/articles/article7.txt'),
		'publishDate' => '2019-10-22',
		'likeCounter' => 9,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 7
	],
	[
		'title' => 'Article 8',
		'author' => 'Samuel Thorne',
		'content' => file_get_contents(__DIR__.'/articles/article8.txt'),
		'publishDate' => '2019-10-23',
		'likeCounter' => 14,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 8
	],
	[
		'title' => 'Article 9',
		'author' => 'Milton Grimstool',
		'content' => file_get_contents(__DIR__.'/articles/article9.txt'),
		'publishDate' => '2019-10-24',
		'likeCounter' => 49,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 9
	],
	[
		'title' => 'Article 10',
		'author' => 'Milton Grimstool',
		'content' => file_get_contents(__DIR__.'/articles/article10.txt'),
		'publishDate' => '2019-10-25',
		'likeCounter' => 53,
		'contentIMG' => '<URL ADRESS>',
		'articleID' => 10
	],
];
