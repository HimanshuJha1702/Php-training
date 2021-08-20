<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $service;

    public function __construct(UserService $service)
    {
        $this->userService = $service;
    }

    public function createUser(UserService $service)
    {
        $this->userService->createUser(Input::get('firstname'), Input::get('lastname'), Input::get('email'));
    }
}
