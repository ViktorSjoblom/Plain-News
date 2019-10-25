<?php
declare(strict_types=1);

$authors = [
    [   
        'fullName' => 'Melinda Saphire',
		'imgURL' => 'authors/melinda.jpeg',
		'authorId' => '1'
    ],
    [
        'fullName' => 'Hugh Fliptop',
		'imgURL' => 'authors/hugh.jpeg',
		'authorId' => '2'
    ],
    [
        'fullName' => 'Veronica Himmelton',
		'imgURL' => 'authors/veronica.jpeg',
		'authorId' => '3'
    ],
    [
        'fullName' => 'Samuel Thorne',
		'imgURL' => 'authors/samuel.jpeg',
		'authorId' => '4'
    ],
    [
        'fullName' => 'Milton Grimstool',
		'imgURL' => 'authors/milton.jpeg',
		'auhtorId' => '5'
    ],
];

$articles = [
	[
		'title' => 'Alert!',
		'author' => $authors[0]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article1.txt'),
		'publishDate' => '2019-10-27',
		'likeCounter' => 6,
		'contentIMG' => ('articles/picture1.jpeg'),
		'articleID' => 1
	],
	[
		'title' => 'Important!',
		'author' => $authors[0]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article2.txt'),
		'publishDate' => '2019-11-04',
		'likeCounter' => 23,
		'contentIMG' => ('/articles/picture2.jpeg'),
		'articleID' => 2
	],
	[
		'title' => 'Read here!',
		'author' => $authors[1]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article3.txt'),
		'publishDate' => '2019-10-14',
		'likeCounter' => 74,
		'contentIMG' => ('/articles/picture3.jpeg'),
		'articleID' => 3
	],
	[
		'title' => 'Must see!',
		'author' => $authors[1]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article4.txt'),
		'publishDate' => '2019-10-29',
		'likeCounter' => 56,
		'contentIMG' => ('/articles/picture4.jpeg'),
		'articleID' => 4
	],
	[
		'title' => 'Attention!',
		'author' => $authors[2]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article5.txt'),
		'publishDate' => '2019-11-11',
		'likeCounter' => 12,
		'contentIMG' => ('/articles/picture5.jpeg'),
		'articleID' => 5
	],
	[
		'title' => 'Over here!',
		'author' => $authors[2]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article6.txt'),
		'publishDate' => '2019-12-20',
		'likeCounter' => 2,
		'contentIMG' => ('/articles/picture6.jpeg'),
		'articleID' => 6
	],
	[
		'title' => 'Alarm!',
		'author' => $authors[3]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article7.txt'),
		'publishDate' => '2019-10-09',
		'likeCounter' => 14,
		'contentIMG' => ('/articles/picture7.jpeg'),
		'articleID' => 7
	],
	[
		'title' => 'Oy!',
		'author' => $authors[3]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article8.txt'),
		'publishDate' => '2019-11-16',
		'likeCounter' => 26,
		'contentIMG' => ('/articles/picture8.jpeg'),
		'articleID' => 8
	],
	[
		'title' => 'Look!',
		'author' => $authors[4]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article9.txt'),
		'publishDate' => '2019-10-19',
		'likeCounter' => 29,
		'contentIMG' => ('/articles/picture9.jpeg'),
		'articleID' => 9
	],
	[
		'title' => 'Davai davai!',
		'author' => $authors[4]['fullName'],
		'content' => file_get_contents(__DIR__.'/articles/article10.txt'),
		'publishDate' => '2019-11-02',
		'likeCounter' => 10,
		'contentIMG' => ('/articles/picture10.jpeg'),
		'articleID' => 10
	],
	
];
