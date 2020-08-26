<?php

return [
    'info' => [
        'address' => 'Hanoi, Vietnam',
        'phone' => '(+84) 969988524',
        'email' => 'dinhtiennguyen.1202@gmail.com',
        'short_description' => 'Laravel project 1 Open Education 28 at Sun*',
    ],
    'social' => [
        'instagram' => 'https://www.instagram.com/diinh.tienn/',
        'facebook' => 'https://www.facebook.com/tiennguyen122/',
        'twitter' => 'https://twitter.com/LaxusGod/',
        'pinterest' => 'https://www.pinterest.com/dinhtiennguyen1/',
        'google' => 'https://google.com/',
    ],
    'limit_posts' => [
        'latest_posts_sidebar' => 5,
        'latest_posts_homepage' => 10,
        'latest_posts_footer' => 2,
        'related_posts' => 4,
        'hot_posts' => 6,
        'popular_posts_homepage' => 6,
        'popular_posts_sidebar'  => 5,
        'latest_tags' => 8,
        'category_detail' => 12,
        'tag_detail' => 12,
    ],
    'cache_time' => [
        'latest_posts_layout' => 3600,
        'category_menu' => 3600 * 24,
        'latest_posts_homepage' => 3600,
        'hot_posts' => 3600 * 3,
        'popular_posts_homepage' => 3600 * 12,
        'pagination' => 3600 * 24,
        'popular_posts_sidebar' => 3600,
        'latest_tags' => 3600 * 12,
    ],
    'count_views_cooldown_time' => 60 * 10,
    'hot_posts_views_per' => 1,
    'popular_posts_views_per' => 3,
];