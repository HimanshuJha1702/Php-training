<?php
namespace App\Services;

use App\Models\Post;
use App\Models\User;

class PostService
{

    public function createPost($request, $user)
    {
        $body = $request->input('body');
        $location = $request->input('location');
        $mood = $request->input('mood');
        if($body == "" || $location == "" || $mood == "") {
            return response()->json([
                "message" => "Please provide the the inputs!"
            ], 400);
        }
        $post = new Post();
        $post->body = $body;
        $post->location = $location;
        $post->mood = $mood;
        $user->post()->save($post);
        return response()->json([
            "message" => "Post successfully created!"
        ], 200);
    }

    public function getComment($post)
    {
        $comment = $post->comments;
        return $comment;
    }

}
