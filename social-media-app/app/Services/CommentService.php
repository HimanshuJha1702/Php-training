<?php
namespace App\Services;

use App\Models\Comment;
use App\Models\Post;


class CommentService
{

    public function createComment($request,$user,$post)
    {
        if($request->input('body') == "") {
            return response()->json([
                "message" => "Please provide the comment!"
            ], 400);
        }
        else {
            $comment_passed = new Comment;
            $comment_passed->body = $request->input('body');
            $comment_passed->user_id = $user->id;
            $post->comments()->save($comment_passed);
            return response()->json([
                "message" => "Comment succsessfully posted!"
            ], 200);
        }
    }

}
