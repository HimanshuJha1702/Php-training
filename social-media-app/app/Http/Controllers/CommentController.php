<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController
{
    private $service;

    public function __construct(CommentService $service)
    {
        $this->service = $service;
    }

    public function createComment(Request $request, User $user, Post $post)
    {
        return $this->service->createComment($request, $user, $post);
    }
}
