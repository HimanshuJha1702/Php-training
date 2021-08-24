<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController
{

    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function createUser(Request $request)
    {
        return $this->service->createUser($request);
    }

    public function fetchPosts(User $user)
    {
        return $this->service->fetchPost($user);
    }
}
