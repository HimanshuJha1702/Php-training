<?php
namespace App\Services;

use App\Models\Post;
use App\Models\User;

class UserService {

    public function createUser($request)
    {
        $email = $request->input('email');
        $username = $request->input('username');
        $name = $request->input('name');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $email == "") {
            return response()->json([
                "message" => "Invalid email format!"
            ], 400);
        } else if (!preg_match("/^[a-zA-Z']*$/",$username) || $username == "") {
            return response()->json([
                "message" => "Invalid format for username!"
            ], 400);
        } else if ($name == "") {
            return response()->json([
                "message" => "Name is empty!"
            ], 400);
        } else {
            $user = new User;
            $user->username = $username;
            $user->name = $request->input('name');
            $user->email = $email;
            $user->save();
            return response()->json([
                "message" => "User succsessfully created!"
            ], 200);
        }

//        $check = $user->save();

//        if($check != 1) {
//            echo response()->json([
//                "message" => "Username already exist!"
//            ], 500);
//        }
//        else {
//            return response()->json([
//                "message" => "User succsessfully created!"
//            ], 200);
//        }

    }

    public function fetchPost($user)
    {
        $post = $user->post;
        return $post;
    }

}
