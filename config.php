<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisanstatic.netlify.app',
    'site' => [
        'title' => '樱庭雅树',
        'description' => 'www.yingtingyashu.com',
        'image' => 'https://img.alicdn.com/imgextra/i3/2710706468/O1CN01gYwxPj1xeOUy1nkr9_!!2710706468.jpg',
    ],
    'owner' => [
        'name' => 'John Doe',
    ],
    'links' => [
        'twitter' => 'https://twitter.com/johndoe',
        'github' => 'https://github.com/johndoe',
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'artisanstatic',
            'apiKey' => '365895137117119',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
