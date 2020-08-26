<?php

namespace App\Repositories\Post;

use App\Repositories\BaseRepositoryInterface;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function getLatestPost($limit);

    public function getPaginationPosts($skip, $limit);
}