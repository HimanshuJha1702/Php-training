<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController
{
    private $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    public function createPost(Request $request, User $user)
    {
        return $this->service->createPost($request, $user);
    }

    public function getComment(Post $post)
    {
        return $this->service->getComment($post);
    }

}
